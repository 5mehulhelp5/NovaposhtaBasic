<?php

namespace Dragonfly\NovaposhtaBasic\Model;

use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiCityResource;
use Magento\Framework\Model\AbstractModel;

class ApiCityModel extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'api_novaposhta_city_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ApiCityResource::class);
    }
}
