<?php

namespace Dragonfly\NovaposhtaBasic\Controller\Adminhtml\ApiUserList;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * New action ApiUserList controller.
 */
class NewAction extends Action implements HttpGetActionInterface
{
    /**
     * Authorization level of a basic admin session.
     *
     * @see _isAllowed()
     */
    public const ADMIN_RESOURCE = 'Dragonfly_NovaposhtaBasic::management';

    /**
     * Create new ApiUserList action.
     *
     * @return Page|ResultInterface
     */
    public function execute()
    {
        /** @var Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Dragonfly_NovaposhtaBasic::management');
        $resultPage->getConfig()->getTitle()->prepend(__('New Nova Poshta Api User'));

        return $resultPage;
    }
}
