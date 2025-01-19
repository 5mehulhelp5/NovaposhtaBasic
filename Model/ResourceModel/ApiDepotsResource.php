<?php

namespace Dragonfly\NovaposhtaBasic\Model\ResourceModel;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiDepotsInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ApiDepotsResource extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'api_novaposhta_depots_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('api_novaposhta_depots', ApiDepotsInterface::API_DEPOTS_ID);
        $this->_useIsObjectNew = true;
    }
}
