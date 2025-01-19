<?php

namespace Dragonfly\NovaposhtaBasic\Mapper;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiDepotsInterface;
use Dragonfly\NovaposhtaBasic\Api\Data\ApiDepotsInterfaceFactory;
use Dragonfly\NovaposhtaBasic\Model\ApiDepotsModel;
use Magento\Framework\DataObject;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Converts a collection of ApiDepots entities to an array of data transfer objects.
 */
class ApiDepotsDataMapper
{
    /**
     * @var ApiDepotsInterfaceFactory
     */
    private ApiDepotsInterfaceFactory $entityDtoFactory;

    /**
     * @param ApiDepotsInterfaceFactory $entityDtoFactory
     */
    public function __construct(
        ApiDepotsInterfaceFactory $entityDtoFactory
    )
    {
        $this->entityDtoFactory = $entityDtoFactory;
    }

    /**
     * Map magento models to DTO array.
     *
     * @param AbstractCollection $collection
     *
     * @return array|ApiDepotsInterface[]
     */
    public function map(AbstractCollection $collection): array
    {
        $results = [];
        /** @var ApiDepotsModel $item */
        foreach ($collection->getItems() as $item) {
            /** @var ApiDepotsInterface|DataObject $entityDto */
            $entityDto = $this->entityDtoFactory->create();
            $entityDto->addData($item->getData());

            $results[] = $entityDto;
        }

        return $results;
    }
}
