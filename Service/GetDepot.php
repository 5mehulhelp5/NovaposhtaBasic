<?php

namespace Dragonfly\NovaposhtaBasic\Service;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiDepotsInterface;
use Dragonfly\NovaposhtaBasic\Model\ApiDepotsModel;
use Dragonfly\NovaposhtaBasic\Model\ApiDepotsModelFactory;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiDepotsResource;
use Exception;

class GetDepot
{
    /**
     * @var ApiDepotsModelFactory
     */
    private ApiDepotsModelFactory $modelFactory;

    /**
     * @var ApiDepotsResource
     */
    private ApiDepotsResource $resource;

    /**
     * @param ApiDepotsModelFactory $modelFactory
     * @param ApiDepotsResource $resource
     */
    public function __construct(
        ApiDepotsModelFactory $modelFactory,
        ApiDepotsResource     $resource
    )
    {
        $this->modelFactory = $modelFactory;
        $this->resource = $resource;
    }

    /**
     * @throws Exception
     */
    public function execute(string $ref): ?ApiDepotsModel
    {
        $model = $this->modelFactory->create();
        $this->resource->load($model, $ref, ApiDepotsInterface::REF);

        if (!$model->getData(ApiDepotsInterface::API_DEPOTS_ID)) {
            return null;
        }

        return $model;
    }
}
