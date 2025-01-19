<?php

namespace Dragonfly\NovaposhtaBasic\Service;

use Dragonfly\NovaposhtaBasic\Command\ApiCity\DeleteByIdCommand;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiCityModel\ApiCityCollectionFactory;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiDepotsModel\ApiDepotsCollectionFactory;

class CheckCityDepots
{
    /**
     * @var ApiDepotsCollectionFactory
     */
    private ApiDepotsCollectionFactory $apiDepotsCollectionFactory;

    /**
     * @var ApiCityCollectionFactory
     */
    private ApiCityCollectionFactory $apiCityCollectionFactory;

    /**
     * @var DeleteByIdCommand
     */
    private DeleteByIdCommand $deleteByIdCommand;

    /**
     * @param ApiDepotsCollectionFactory $apiDepotsCollectionFactory
     * @param ApiCityCollectionFactory $apiCityCollectionFactory
     * @param DeleteByIdCommand $deleteByIdCommand
     */
    public function __construct(
        ApiDepotsCollectionFactory $apiDepotsCollectionFactory,
        ApiCityCollectionFactory   $apiCityCollectionFactory,
        DeleteByIdCommand          $deleteByIdCommand
    )
    {
        $this->apiDepotsCollectionFactory = $apiDepotsCollectionFactory;
        $this->apiCityCollectionFactory = $apiCityCollectionFactory;
        $this->deleteByIdCommand = $deleteByIdCommand;
    }

    /**
     *
     */
    public function execute()
    {
        $collectionDepots = $this->apiDepotsCollectionFactory->create();
        $itemsDepots = $collectionDepots->getItems();

        $citiesDepots = [];
        foreach ($itemsDepots as $l) {
            $citiesDepots[$l->getData('city_ref')] = $l->getData('city_ref');
        }
        unset($itemsDepots, $collectionDepots);

        $collectionCity = $this->apiCityCollectionFactory->create();
        $itemsCity = $collectionCity->getItems();
        $dataCityAll = [];
        foreach ($itemsCity as $c) {
            $dataCityAll[$c->getData('ref')] = $c->getData('api_city_id');
        }
        unset($collectionCity, $itemsCity);

        foreach ($dataCityAll as $c => $k) {
            if (!isset($citiesDepots[$c])) {
                $this->deleteByIdCommand->execute($k);
            }
        }
    }
}
