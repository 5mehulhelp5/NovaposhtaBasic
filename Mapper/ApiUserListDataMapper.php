<?php

namespace Dragonfly\NovaposhtaBasic\Mapper;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiUserListInterface;
use Dragonfly\NovaposhtaBasic\Api\Data\ApiUserListInterfaceFactory;
use Dragonfly\NovaposhtaBasic\Model\ApiUserListModel;
use Magento\Framework\DataObject;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Converts a collection of ApiUserList entities to an array of data transfer objects.
 */
class ApiUserListDataMapper
{
    /**
     * @var ApiUserListInterfaceFactory
     */
    private ApiUserListInterfaceFactory $entityDtoFactory;

    /**
     * @param ApiUserListInterfaceFactory $entityDtoFactory
     */
    public function __construct(
        ApiUserListInterfaceFactory $entityDtoFactory
    )
    {
        $this->entityDtoFactory = $entityDtoFactory;
    }

    /**
     * Map magento models to DTO array.
     *
     * @param AbstractCollection $collection
     *
     * @return array|ApiUserListInterface[]
     */
    public function map(AbstractCollection $collection): array
    {
        $results = [];
        /** @var ApiUserListModel $item */
        foreach ($collection->getItems() as $item) {
            /** @var ApiUserListInterface|DataObject $entityDto */
            $entityDto = $this->entityDtoFactory->create();
            $entityDto->addData($item->getData());

            $results[] = $entityDto;
        }

        return $results;
    }
}
