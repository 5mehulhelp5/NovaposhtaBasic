<?php

namespace Dragonfly\NovaposhtaBasic\Controller\Adminhtml\ApiUserList;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * ApiUserList backend index (list) controller.
 */
class Index extends Action implements HttpGetActionInterface
{
    /**
     * Authorization level of a basic admin session.
     */
    public const ADMIN_RESOURCE = 'Dragonfly_NovaposhtaBasic::management';

    /**
     * Execute action based on request and return result.
     *
     * @return ResultInterface|ResponseInterface
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $resultPage->setActiveMenu('Dragonfly_NovaposhtaBasic::management');
        $resultPage->addBreadcrumb(__('Nova Poshta Api User'), __('Nova Poshta Api User'));
        $resultPage->addBreadcrumb(__('Manage Lists'), __('Manage Lists'));
        $resultPage->getConfig()->getTitle()->prepend(__('Nova Poshta Api User List'));

        return $resultPage;
    }
}
