<?php

namespace Dragonfly\NovaposhtaBasic\Model\ResourceModel;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiUserListInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ApiUserListResource extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'api_user_list_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('api_novaposhta_user_list', ApiUserListInterface::API_USER_LIST_ID);
        $this->_useIsObjectNew = true;
    }
}
