<?php

namespace Dragonfly\NovaposhtaBasic\Model;

use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiUserListResource;
use Magento\Framework\Model\AbstractModel;

class ApiUserListModel extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'api_user_list_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ApiUserListResource::class);
    }
}
