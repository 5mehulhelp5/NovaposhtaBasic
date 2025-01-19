<?php

namespace Dragonfly\NovaposhtaBasic\Model\ResourceModel;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiCityInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ApiCityResource extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'api_novaposhta_city_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('api_novaposhta_city', ApiCityInterface::API_CITY_ID);
        $this->_useIsObjectNew = true;
    }
}
