<?php

namespace Dragonfly\NovaposhtaBasic\Controller\Adminhtml\ApiDepots;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * ApiDepots backend index (list) controller.
 */
class Index extends Action implements HttpGetActionInterface
{
    /**
     * Authorization level of a basic admin session.
     */
    public const ADMIN_RESOURCE = 'Dragonfly_NovaposhtaBasic::depots';

    /**
     * Execute action based on request and return result.
     *
     * @return ResultInterface|ResponseInterface
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $resultPage->setActiveMenu('Dragonfly_NovaposhtaBasic::depots');
        $resultPage->addBreadcrumb(__('ApiDepots'), __('ApiDepots'));
        $resultPage->addBreadcrumb(__('Manage ApiDepotss'), __('Manage ApiDepotss'));
        $resultPage->getConfig()->getTitle()->prepend(__('Nova Poshta Api Depots List'));

        return $resultPage;
    }
}
