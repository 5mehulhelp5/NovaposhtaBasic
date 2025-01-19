<?php

namespace Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiUserListModel;

use Dragonfly\NovaposhtaBasic\Model\ApiUserListModel;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiUserListResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class ApiUserListCollection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'api_user_list_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(ApiUserListModel::class, ApiUserListResource::class);
    }
}
