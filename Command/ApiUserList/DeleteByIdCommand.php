<?php

namespace Dragonfly\NovaposhtaBasic\Command\ApiUserList;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiUserListInterface;
use Dragonfly\NovaposhtaBasic\Model\ApiUserListModel;
use Dragonfly\NovaposhtaBasic\Model\ApiUserListModelFactory;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiUserListResource;
use Exception;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Psr\Log\LoggerInterface;

/**
 * Delete ApiUserList by id Command.
 */
class DeleteByIdCommand
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
     * Delete ApiUserList.
     *
     * @param int $entityId
     *
     * @return void
     * @throws CouldNotDeleteException
     */
    public function execute(int $entityId): void
    {
        try {
            /** @var ApiUserListModel $model */
            $model = $this->modelFactory->create();
            $this->resource->load($model, $entityId, ApiUserListInterface::API_USER_LIST_ID);

            if (!$model->getData(ApiUserListInterface::API_USER_LIST_ID)) {
                throw new NoSuchEntityException(
                    __('Could not find Nova Poshta Api User with id: `%id`',
                        [
                            'id' => $entityId
                        ]
                    )
                );
            }

            $this->resource->delete($model);
        } catch (Exception $exception) {
            $this->logger->error(
                __('Could not delete ApiUserList. Original message: {message}'),
                [
                    'message' => $exception->getMessage(),
                    'exception' => $exception
                ]
            );
            throw new CouldNotDeleteException(__('Could not delete Nova Poshta Api User.'));
        }
    }
}
