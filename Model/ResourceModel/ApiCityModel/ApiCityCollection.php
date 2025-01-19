<?php

namespace Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiCityModel;

use Dragonfly\NovaposhtaBasic\Model\ApiCityModel;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiCityResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class ApiCityCollection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'api_novaposhta_city_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(ApiCityModel::class, ApiCityResource::class);
    }
}
