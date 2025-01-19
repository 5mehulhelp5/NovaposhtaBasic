<?php

namespace Dragonfly\NovaposhtaBasic\Command\ApiCity;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiCityInterface;
use Dragonfly\NovaposhtaBasic\Model\ApiCityModel;
use Dragonfly\NovaposhtaBasic\Model\ApiCityModelFactory;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiCityResource;
use Exception;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Psr\Log\LoggerInterface;

/**
 * Delete ApiCity by id Command.
 */
class DeleteByIdCommand
{
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * @var ApiCityModelFactory
     */
    private ApiCityModelFactory $modelFactory;

    /**
     * @var ApiCityResource
     */
    private ApiCityResource $resource;

    /**
     * @param LoggerInterface $logger
     * @param ApiCityModelFactory $modelFactory
     * @param ApiCityResource $resource
     */
    public function __construct(
        LoggerInterface     $logger,
        ApiCityModelFactory $modelFactory,
        ApiCityResource     $resource
    )
    {
        $this->logger = $logger;
        $this->modelFactory = $modelFactory;
        $this->resource = $resource;
    }

    /**
     * Delete ApiCity.
     *
     * @param int $entityId
     *
     * @return void
     * @throws CouldNotDeleteException
     */
    public function execute(int $entityId): void
    {
        try {
            /** @var ApiCityModel $model */
            $model = $this->modelFactory->create();
            $this->resource->load($model, $entityId, ApiCityInterface::API_CITY_ID);

            if (!$model->getData(ApiCityInterface::API_CITY_ID)) {
                throw new NoSuchEntityException(
                    __('Could not find ApiCity with id: `%id`',
                        [
                            'id' => $entityId
                        ]
                    )
                );
            }

            $this->resource->delete($model);
        } catch (Exception $exception) {
            $this->logger->error(
                __('Could not delete ApiCity. Original message: {message}'),
                [
                    'message' => $exception->getMessage(),
                    'exception' => $exception
                ]
            );
            throw new CouldNotDeleteException(__('Could not delete ApiCity.'));
        }
    }
}
