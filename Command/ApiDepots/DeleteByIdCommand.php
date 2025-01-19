<?php

namespace Dragonfly\NovaposhtaBasic\Command\ApiDepots;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiDepotsInterface;
use Dragonfly\NovaposhtaBasic\Model\ApiDepotsModel;
use Dragonfly\NovaposhtaBasic\Model\ApiDepotsModelFactory;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiDepotsResource;
use Exception;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Psr\Log\LoggerInterface;

/**
 * Delete ApiDepots by id Command.
 */
class DeleteByIdCommand
{
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * @var ApiDepotsModelFactory
     */
    private ApiDepotsModelFactory $modelFactory;

    /**
     * @var ApiDepotsResource
     */
    private ApiDepotsResource $resource;

    /**
     * @param LoggerInterface $logger
     * @param ApiDepotsModelFactory $modelFactory
     * @param ApiDepotsResource $resource
     */
    public function __construct(
        LoggerInterface       $logger,
        ApiDepotsModelFactory $modelFactory,
        ApiDepotsResource     $resource
    )
    {
        $this->logger = $logger;
        $this->modelFactory = $modelFactory;
        $this->resource = $resource;
    }

    /**
     * Delete ApiDepots.
     *
     * @param int $entityId
     *
     * @return void
     * @throws CouldNotDeleteException
     */
    public function execute(int $entityId): void
    {
        try {
            /** @var ApiDepotsModel $model */
            $model = $this->modelFactory->create();
            $this->resource->load($model, $entityId, ApiDepotsInterface::API_DEPOTS_ID);

            if (!$model->getData(ApiDepotsInterface::API_DEPOTS_ID)) {
                throw new NoSuchEntityException(
                    __('Could not find ApiDepots with id: `%id`',
                        [
                            'id' => $entityId
                        ]
                    )
                );
            }

            $this->resource->delete($model);
        } catch (Exception $exception) {
            $this->logger->error(
                __('Could not delete ApiDepots. Original message: {message}'),
                [
                    'message' => $exception->getMessage(),
                    'exception' => $exception
                ]
            );
            throw new CouldNotDeleteException(__('Could not delete ApiDepots.'));
        }
    }
}
