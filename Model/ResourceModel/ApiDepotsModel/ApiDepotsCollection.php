<?php

namespace Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiDepotsModel;

use Dragonfly\NovaposhtaBasic\Model\ApiDepotsModel;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiDepotsResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class ApiDepotsCollection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'api_novaposhta_depots_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(ApiDepotsModel::class, ApiDepotsResource::class);
    }
}
