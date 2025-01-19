<?php

namespace Dragonfly\NovaposhtaBasic\Controller\Adminhtml\ApiUserList;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiUserListInterface;
use Dragonfly\NovaposhtaBasic\Api\Data\ApiUserListInterfaceFactory;
use Dragonfly\NovaposhtaBasic\Command\ApiUserList\SaveCommand;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\DataObject;
use Magento\Framework\Exception\CouldNotSaveException;

/**
 * Save ApiUserList controller action.
 */
class Save extends Action implements HttpPostActionInterface
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    public const ADMIN_RESOURCE = 'Dragonfly_NovaposhtaBasic::management';

    /**
     * @var DataPersistorInterface
     */
    private DataPersistorInterface $dataPersistor;

    /**
     * @var SaveCommand
     */
    private SaveCommand $saveCommand;

    /**
     * @var ApiUserListInterfaceFactory
     */
    private ApiUserListInterfaceFactory $entityDataFactory;

    /**
     * @param Context $context
     * @param DataPersistorInterface $dataPersistor
     * @param SaveCommand $saveCommand
     * @param ApiUserListInterfaceFactory $entityDataFactory
     */
    public function __construct(
        Context                     $context,
        DataPersistorInterface      $dataPersistor,
        SaveCommand                 $saveCommand,
        ApiUserListInterfaceFactory $entityDataFactory
    )
    {
        parent::__construct($context);
        $this->dataPersistor = $dataPersistor;
        $this->saveCommand = $saveCommand;
        $this->entityDataFactory = $entityDataFactory;
    }

    /**
     * Save ApiUserList Action.
     *
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $params = $this->getRequest()->getParams();

        try {
            /** @var ApiUserListInterface|DataObject $entityModel */
            $entityModel = $this->entityDataFactory->create();
            $entityModel->addData($params['general']);
            $this->saveCommand->execute($entityModel);
            $this->messageManager->addSuccessMessage(
                __('The Nova Poshta Api User data was saved successfully')
            );
            $this->dataPersistor->clear('entity');
        } catch (CouldNotSaveException $exception) {
            $this->messageManager->addErrorMessage($exception->getMessage());
            $this->dataPersistor->set('entity', $params);

            return $resultRedirect->setPath('*/*/edit', [
                ApiUserListInterface::API_USER_LIST_ID => $this->getRequest()->getParam(ApiUserListInterface::API_USER_LIST_ID)
            ]);
        }

        return $resultRedirect->setPath('*/*/');
    }
}
