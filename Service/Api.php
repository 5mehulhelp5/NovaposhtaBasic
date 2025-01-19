<?php

namespace Dragonfly\NovaposhtaBasic\Service;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiCityInterface;
use Dragonfly\NovaposhtaBasic\Api\Data\ApiDepotsInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Api
{
    public const API_URL = 'https://api.novaposhta.ua/v2.0/json/';

    public const API_DATA_CITY_ASSOCIATION = [
        'Description' => ApiCityInterface::DESCRIPTION_UK,
        'DescriptionRu' => ApiCityInterface::DESCRIPTION_RU,
        'Ref' => ApiCityInterface::REF,
        'Delivery1' => ApiCityInterface::DELIVERY1,
        'Delivery2' => ApiCityInterface::DELIVERY2,
        'Delivery3' => ApiCityInterface::DELIVERY3,
        'Delivery4' => ApiCityInterface::DELIVERY4,
        'Delivery5' => ApiCityInterface::DELIVERY5,
        'Delivery6' => ApiCityInterface::DELIVERY6,
        'Delivery7' => ApiCityInterface::DELIVERY7,
        'Area' => ApiCityInterface::AREA,
        'AreaRegionDescription' => ApiCityInterface::AREA_REGION_DESCRIPTION_UK,
        'AreaRegionDescriptionRu' => ApiCityInterface::AREA_REGION_DESCRIPTION_RU,
        'SettlementTypeDescription' => ApiCityInterface::SETTLEMENT_TYPE_DESCRIPTION_UK,
        'SettlementTypeDescriptionRu' => ApiCityInterface::SETTLEMENT_TYPE_DESCRIPTION_RU,
        'Conglomerates' => ApiCityInterface::CONGLOMERATES,
        'CityID' => ApiCityInterface::CITY_ID
    ];

    public const API_DATA_DEPOTS_ASSOCIATION = array(
        'Description' => ApiDepotsInterface::DESCRIPTION_UK,
        'DescriptionRu' => ApiDepotsInterface::DESCRIPTION_RU,
        'Phone' => ApiDepotsInterface::PHONE,
        'TypeOfWarehouse' => ApiDepotsInterface::TYPE_OF_WAREHOUSE,
        'Ref' => ApiDepotsInterface::REF,
        'Number' => ApiDepotsInterface::NUMBER,
        'CityRef' => ApiDepotsInterface::CITY_REF,
        'CityDescription' => ApiDepotsInterface::CITY_DESCRIPTION_UK,
        'CityDescriptionRu' => ApiDepotsInterface::CITY_DESCRIPTION_RU,
        'MaxWeightAllowed' => ApiDepotsInterface::MAX_WEIGHT_ALLOWED,
        'Longitude' => ApiDepotsInterface::LONGITUDE,
        'Latitude' => ApiDepotsInterface::LATITUDE,
//        'PostFinance' => 'PostFinance',
//        'TotalMaxWeightAllowed' => 'total_max_weight_allowed',
//        'PlaceMaxWeightAllowed' => 'place_max_weight_allowed',
//        'Reception' => 'reception',
//        'Delivery' => 'Delivery',
//        'Schedule' => 'Schedule'
    );

    private ScopeConfigInterface $scopeConfig;
    private Report $report;

    /**
     * @param ScopeConfigInterface $scopeConfig
     * @param Report $report
     */
    public function __construct(ScopeConfigInterface $scopeConfig, Report $report)
    {
        $this->scopeConfig = $scopeConfig;
        $this->report = $report;
    }

    /**
     * @return mixed
     */
    public function getCities()
    {
        $data = [
            'apiKey' => $this->getApiToken(),
            'modelName' => 'Address',
            'calledMethod' => 'getCities',
            'methodProperties' => null
        ];

        return $this->requestApi($data);
    }

    /**
     * @return mixed
     */
    public function getDepots()
    {
        $data = [
            'apiKey' => $this->getApiToken(),
            'modelName' => 'Address',
            'calledMethod' => 'getWarehouses',
            'methodProperties' => null
        ];

        return $this->requestApi($data);
    }

    /**
     * @return mixed
     */
    public function getApiToken()
    {
        return $this->scopeConfig->getValue('carriers/novaposhta_basic/api_key');
    }

    /**
     * @return string
     */
    public function getApiUrl(): string
    {
        return self::API_URL;
    }

    /**
     * @param array $data
     * @param array $association
     * @return array
     */
    public function prepareData(array $data = [], array $association = []): array
    {
        $newData = array();
        foreach ($data as $key => $value) {
            if (isset($association[$key])) {
                if (is_array($value)) {
                    $value = implode(',', $value);
                }
                $newData[$association[$key]] = $value;
            }
        }

        return $newData;
    }

    /**
     * @param $data
     * @return mixed
     */
    private function requestApi($data)
    {
        $post = json_encode($data);

        $result = file_get_contents($this->getApiUrl(), false, stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-type: application/x-www-form-urlencoded;\r\n",
                'content' => $post,
            ],
        ]));

        $result = json_decode($result, 1);

        if (is_array($result['errors']) && count($result['errors']) > 0) {
            $this->report->addError($result['errors']);
        }

        if (is_array($result['warnings']) && count($result['warnings']) > 0) {
            $this->report->addNotice($result['warnings']);
        }

        if (isset($result['success']) && $result['success'] != true) {
            $this->report->addError('Error with API request.');
            if (isset($result['errors'])) {
                $this->report->addError($result['errors']);
            }
        }

        return $result['data'];
    }
}



