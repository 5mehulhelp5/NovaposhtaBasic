<?php

namespace Dragonfly\NovaposhtaBasic\Service;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiCityInterface;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiCityModel\ApiCityCollectionFactory;

class UpdateCity
{
    private Api $api;
    private ApiCityCollectionFactory $apiCityCollectionFactory;
    private Report $report;

    /**
     * @param Api $api
     * @param ApiCityCollectionFactory $apiCityCollectionFactory
     * @param Report $report
     */
    public function __construct(Api $api, ApiCityCollectionFactory $apiCityCollectionFactory, Report $report)
    {
        $this->api = $api;
        $this->apiCityCollectionFactory = $apiCityCollectionFactory;
        $this->report = $report;
    }

    /**
     *
     */
    public function execute()
    {
        $apiCitiesRequest = $this->api->getCities();

        $data = [];
        foreach ($apiCitiesRequest as $city) {
            $data[] = $this->api->prepareData($city, Api::API_DATA_CITY_ASSOCIATION);
        }

        $collection = $this->apiCityCollectionFactory->create();
        $collection->setDataToAll(['deleted' => true,]);
        $collection->save();

        foreach ($data as $d) {
            $collection = $this->apiCityCollectionFactory->create();
            $collection->addFieldToFilter('ref', $d[ApiCityInterface::REF]);
            $record = $collection->fetchItem();

            if (!$record) {
                $record = $collection->getNewEmptyItem();
                $record->setData($d);
                $collection->addItem($record);
                $collection->save();
            } else {
                $collection = $this->apiCityCollectionFactory->create();
                $collection->addFieldToFilter('ref', $d[ApiCityInterface::REF]);
                $collection->setDataToAll($d);
                $collection->save();
            }
        }
    }

    /**
     * @return string|null
     */
    public function getErrorReportCli(): ?string
    {
        $error = $this->report->getError();
        if (!empty($error)) {
            return implode('; ', $error);
        }

        return null;
    }
}
