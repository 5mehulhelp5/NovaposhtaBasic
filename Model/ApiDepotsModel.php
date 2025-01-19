<?php

namespace Dragonfly\NovaposhtaBasic\Model;

use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiDepotsResource;
use Magento\Framework\Model\AbstractModel;

class ApiDepotsModel extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'api_novaposhta_depots_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ApiDepotsResource::class);
    }
}
