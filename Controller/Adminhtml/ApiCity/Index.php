<?php

namespace Dragonfly\NovaposhtaBasic\Controller\Adminhtml\ApiCity;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * ApiCity backend index (list) controller.
 */
class Index extends Action implements HttpGetActionInterface
{
    /**
     * Authorization level of a basic admin session.
     */
    public const ADMIN_RESOURCE = 'Dragonfly_NovaposhtaBasic::city';

    /**
     * Execute action based on request and return result.
     *
     * @return ResultInterface|ResponseInterface
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $resultPage->setActiveMenu('Dragonfly_NovaposhtaBasic::city');
        $resultPage->addBreadcrumb(__('ApiCity'), __('ApiCity'));
        $resultPage->addBreadcrumb(__('Manage ApiCitys'), __('Manage ApiCitys'));
        $resultPage->getConfig()->getTitle()->prepend(__('Nova Poshta Api City List'));

        return $resultPage;
    }
}
