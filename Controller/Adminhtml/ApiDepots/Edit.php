<?php

namespace Dragonfly\NovaposhtaBasic\Controller\Adminhtml\ApiDepots;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * Edit ApiDepots entity backend controller.
 */
class Edit extends Action implements HttpGetActionInterface
{
    /**
     * Authorization level of a basic admin session.
     *
     * @see _isAllowed()
     */
    public const ADMIN_RESOURCE = 'Dragonfly_NovaposhtaBasic::depots';

    /**
     * Edit ApiDepots action.
     *
     * @return Page|ResultInterface
     */
    public function execute()
    {
        /** @var Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Dragonfly_NovaposhtaBasic::depots');
        $resultPage->getConfig()->getTitle()->prepend(__('Edit ApiDepots'));

        return $resultPage;
    }
}
