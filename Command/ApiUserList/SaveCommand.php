<?php

namespace Dragonfly\NovaposhtaBasic\Command\ApiUserList;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiUserListInterface;
use Dragonfly\NovaposhtaBasic\Model\ApiUserListModel;
use Dragonfly\NovaposhtaBasic\Model\ApiUserListModelFactory;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiUserListResource;
use Exception;
use Magento\Framework\Exception\CouldNotSaveException;
use Psr\Log\LoggerInterface;

/**
 * Save ApiUserList Command.
 */
class SaveCommand
{
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * @var ApiUserListModelFactory
     */
    private ApiUserListModelFactory $modelFactory;

    /**
     * @var ApiUserListResource
     */
    private ApiUserListResource $resource;

    /**
     * @param LoggerInterface $logger
     * @param ApiUserListModelFactory $modelFactory
     * @param ApiUserListResource $resource
     */
    public function __construct(
        LoggerInterface         $logger,
        ApiUserListModelFactory $modelFactory,
        ApiUserListResource     $resource
    )
    {
        $this->logger = $logger;
        $this->modelFactory = $modelFactory;
        $this->resource = $resource;
    }

    /**
     * Save ApiUserList.
     *
     * @param ApiUserListInterface $apiUserList
     *
     * @return int
     * @throws CouldNotSaveException
     */
    public function execute(ApiUserListInterface $apiUserList): int
    {
        try {
            /** @var ApiUserListModel $model */
            $model = $this->modelFactory->create();
            $model->addData($apiUserList->getData());
            $model->setHasDataChanges(true);

            if (!$model->getData(ApiUserListInterface::API_USER_LIST_ID)) {
                $model->isObjectNew(true);
            }
            $this->resource->save($model);
        } catch (Exception $exception) {
            $this->logger->error(
                __('Could not save ApiUserList. Original message: {message}'),
                [
                    'message' => $exception->getMessage(),
                    'exception' => $exception
                ]
            );
            throw new CouldNotSaveException(__('Could not save Nova Poshta Api User.'));
        }

        return (int)$model->getData(ApiUserListInterface::API_USER_LIST_ID);
    }
}
