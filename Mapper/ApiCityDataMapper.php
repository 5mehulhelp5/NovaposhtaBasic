<?php

namespace Dragonfly\NovaposhtaBasic\Mapper;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiCityInterface;
use Dragonfly\NovaposhtaBasic\Api\Data\ApiCityInterfaceFactory;
use Dragonfly\NovaposhtaBasic\Model\ApiCityModel;
use Magento\Framework\DataObject;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Converts a collection of ApiCity entities to an array of data transfer objects.
 */
class ApiCityDataMapper
{
    /**
     * @var ApiCityInterfaceFactory
     */
    private ApiCityInterfaceFactory $entityDtoFactory;

    /**
     * @param ApiCityInterfaceFactory $entityDtoFactory
     */
    public function __construct(
        ApiCityInterfaceFactory $entityDtoFactory
    )
    {
        $this->entityDtoFactory = $entityDtoFactory;
    }

    /**
     * Map magento models to DTO array.
     *
     * @param AbstractCollection $collection
     *
     * @return array|ApiCityInterface[]
     */
    public function map(AbstractCollection $collection): array
    {
        $results = [];
        /** @var ApiCityModel $item */
        foreach ($collection->getItems() as $item) {
            /** @var ApiCityInterface|DataObject $entityDto */
            $entityDto = $this->entityDtoFactory->create();
            $entityDto->addData($item->getData());

            $results[] = $entityDto;
        }

        return $results;
    }
}
