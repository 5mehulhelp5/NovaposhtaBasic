<?php

namespace Dragonfly\NovaposhtaBasic\Model\Data;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiCityInterface;
use Magento\Framework\DataObject;

class ApiCityData extends DataObject implements ApiCityInterface
{
    /**
     * Getter for ApiCityId.
     *
     * @return int|null
     */
    public function getApiCityId(): ?int
    {
        return $this->getData(self::API_CITY_ID) === null ? null
            : (int)$this->getData(self::API_CITY_ID);
    }

    /**
     * Setter for ApiCityId.
     *
     * @param int|null $apiCityId
     *
     * @return void
     */
    public function setApiCityId(?int $apiCityId): void
    {
        $this->setData(self::API_CITY_ID, $apiCityId);
    }

    /**
     * Getter for DescriptionUk.
     *
     * @return string|null
     */
    public function getDescriptionUk(): ?string
    {
        return $this->getData(self::DESCRIPTION_UK);
    }

    /**
     * Setter for DescriptionUk.
     *
     * @param string|null $descriptionUk
     *
     * @return void
     */
    public function setDescriptionUk(?string $descriptionUk): void
    {
        $this->setData(self::DESCRIPTION_UK, $descriptionUk);
    }

    /**
     * Getter for DescriptionRu.
     *
     * @return string|null
     */
    public function getDescriptionRu(): ?string
    {
        return $this->getData(self::DESCRIPTION_RU);
    }

    /**
     * Setter for DescriptionRu.
     *
     * @param string|null $descriptionRu
     *
     * @return void
     */
    public function setDescriptionRu(?string $descriptionRu): void
    {
        $this->setData(self::DESCRIPTION_RU, $descriptionRu);
    }

    /**
     * Getter for Delivery1.
     *
     * @return string|null
     */
    public function getDelivery1(): ?string
    {
        return $this->getData(self::DELIVERY1);
    }

    /**
     * Setter for Delivery1.
     *
     * @param string|null $delivery1
     *
     * @return void
     */
    public function setDelivery1(?string $delivery1): void
    {
        $this->setData(self::DELIVERY1, $delivery1);
    }

    /**
     * Getter for Delivery2.
     *
     * @return string|null
     */
    public function getDelivery2(): ?string
    {
        return $this->getData(self::DELIVERY2);
    }

    /**
     * Setter for Delivery2.
     *
     * @param string|null $delivery2
     *
     * @return void
     */
    public function setDelivery2(?string $delivery2): void
    {
        $this->setData(self::DELIVERY2, $delivery2);
    }

    /**
     * Getter for Delivery3.
     *
     * @return string|null
     */
    public function getDelivery3(): ?string
    {
        return $this->getData(self::DELIVERY3);
    }

    /**
     * Setter for Delivery3.
     *
     * @param string|null $delivery3
     *
     * @return void
     */
    public function setDelivery3(?string $delivery3): void
    {
        $this->setData(self::DELIVERY3, $delivery3);
    }

    /**
     * Getter for Delivery4.
     *
     * @return string|null
     */
    public function getDelivery4(): ?string
    {
        return $this->getData(self::DELIVERY4);
    }

    /**
     * Setter for Delivery4.
     *
     * @param string|null $delivery4
     *
     * @return void
     */
    public function setDelivery4(?string $delivery4): void
    {
        $this->setData(self::DELIVERY4, $delivery4);
    }

    /**
     * Getter for Delivery5.
     *
     * @return string|null
     */
    public function getDelivery5(): ?string
    {
        return $this->getData(self::DELIVERY5);
    }

    /**
     * Setter for Delivery5.
     *
     * @param string|null $delivery5
     *
     * @return void
     */
    public function setDelivery5(?string $delivery5): void
    {
        $this->setData(self::DELIVERY5, $delivery5);
    }

    /**
     * Getter for Delivery6.
     *
     * @return string|null
     */
    public function getDelivery6(): ?string
    {
        return $this->getData(self::DELIVERY6);
    }

    /**
     * Setter for Delivery6.
     *
     * @param string|null $delivery6
     *
     * @return void
     */
    public function setDelivery6(?string $delivery6): void
    {
        $this->setData(self::DELIVERY6, $delivery6);
    }

    /**
     * Getter for Delivery7.
     *
     * @return string|null
     */
    public function getDelivery7(): ?string
    {
        return $this->getData(self::DELIVERY7);
    }

    /**
     * Setter for Delivery7.
     *
     * @param string|null $delivery7
     *
     * @return void
     */
    public function setDelivery7(?string $delivery7): void
    {
        $this->setData(self::DELIVERY7, $delivery7);
    }

    /**
     * Getter for Area.
     *
     * @return string|null
     */
    public function getArea(): ?string
    {
        return $this->getData(self::AREA);
    }

    /**
     * Setter for Area.
     *
     * @param string|null $area
     *
     * @return void
     */
    public function setArea(?string $area): void
    {
        $this->setData(self::AREA, $area);
    }

    /**
     * Getter for AreaRegionDescriptionUk.
     *
     * @return string|null
     */
    public function getAreaRegionDescriptionUk(): ?string
    {
        return $this->getData(self::AREA_REGION_DESCRIPTION_UK);
    }

    /**
     * Setter for AreaRegionDescriptionUk.
     *
     * @param string|null $areaRegionDescriptionUk
     *
     * @return void
     */
    public function setAreaRegionDescriptionUk(?string $areaRegionDescriptionUk): void
    {
        $this->setData(self::AREA_REGION_DESCRIPTION_UK, $areaRegionDescriptionUk);
    }

    /**
     * Getter for AreaRegionDescriptionRu.
     *
     * @return string|null
     */
    public function getAreaRegionDescriptionRu(): ?string
    {
        return $this->getData(self::AREA_REGION_DESCRIPTION_RU);
    }

    /**
     * Setter for AreaRegionDescriptionRu.
     *
     * @param string|null $areaRegionDescriptionRu
     *
     * @return void
     */
    public function setAreaRegionDescriptionRu(?string $areaRegionDescriptionRu): void
    {
        $this->setData(self::AREA_REGION_DESCRIPTION_RU, $areaRegionDescriptionRu);
    }

    /**
     * Getter for SettlementTypeDescriptionUk.
     *
     * @return string|null
     */
    public function getSettlementTypeDescriptionUk(): ?string
    {
        return $this->getData(self::SETTLEMENT_TYPE_DESCRIPTION_UK);
    }

    /**
     * Setter for SettlementTypeDescriptionUk.
     *
     * @param string|null $settlementTypeDescriptionUk
     *
     * @return void
     */
    public function setSettlementTypeDescriptionUk(?string $settlementTypeDescriptionUk): void
    {
        $this->setData(self::SETTLEMENT_TYPE_DESCRIPTION_UK, $settlementTypeDescriptionUk);
    }

    /**
     * Getter for SettlementTypeDescriptionRu.
     *
     * @return string|null
     */
    public function getSettlementTypeDescriptionRu(): ?string
    {
        return $this->getData(self::SETTLEMENT_TYPE_DESCRIPTION_RU);
    }

    /**
     * Setter for SettlementTypeDescriptionRu.
     *
     * @param string|null $settlementTypeDescriptionRu
     *
     * @return void
     */
    public function setSettlementTypeDescriptionRu(?string $settlementTypeDescriptionRu): void
    {
        $this->setData(self::SETTLEMENT_TYPE_DESCRIPTION_RU, $settlementTypeDescriptionRu);
    }

    /**
     * Getter for Conglomerates.
     *
     * @return string|null
     */
    public function getConglomerates(): ?string
    {
        return $this->getData(self::CONGLOMERATES);
    }

    /**
     * Setter for Conglomerates.
     *
     * @param string|null $conglomerates
     *
     * @return void
     */
    public function setConglomerates(?string $conglomerates): void
    {
        $this->setData(self::CONGLOMERATES, $conglomerates);
    }

    /**
     * Getter for CityId.
     *
     * @return string|null
     */
    public function getCityId(): ?string
    {
        return $this->getData(self::CITY_ID);
    }

    /**
     * Setter for CityId.
     *
     * @param string|null $cityId
     *
     * @return void
     */
    public function setCityId(?string $cityId): void
    {
        $this->setData(self::CITY_ID, $cityId);
    }

    /**
     * Getter for Ref.
     *
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->getData(self::REF);
    }

    /**
     * Setter for Ref.
     *
     * @param string|null $ref
     *
     * @return void
     */
    public function setRef(?string $ref): void
    {
        $this->setData(self::REF, $ref);
    }
}
