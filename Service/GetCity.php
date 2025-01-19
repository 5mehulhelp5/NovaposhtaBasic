<?php

namespace Dragonfly\NovaposhtaBasic\Service;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiCityInterface;
use Dragonfly\NovaposhtaBasic\Model\ApiCityModel;
use Dragonfly\NovaposhtaBasic\Model\ApiCityModelFactory;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiCityResource;
use Exception;

class GetCity
{
    /**
     * @var ApiCityModelFactory
     */
    private ApiCityModelFactory $modelFactory;

    /**
     * @var ApiCityResource
     */
    private ApiCityResource $resource;

    /**
     * @param ApiCityModelFactory $modelFactory
     * @param ApiCityResource $resource
     */
    public function __construct(
        ApiCityModelFactory $modelFactory,
        ApiCityResource     $resource
    )
    {
        $this->modelFactory = $modelFactory;
        $this->resource = $resource;
    }

    /**
     * @throws Exception
     */
    public function execute(string $ref): ?ApiCityModel
    {
        $model = $this->modelFactory->create();
        $this->resource->load($model, $ref, ApiCityInterface::REF);

        if (!$model->getData(ApiCityInterface::API_CITY_ID)) {
            return null;
        }

        return $model;
    }
}
