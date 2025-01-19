<?php

namespace Dragonfly\NovaposhtaBasic\Model\Data;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiDepotsInterface;
use Magento\Framework\DataObject;

class ApiDepotsData extends DataObject implements ApiDepotsInterface
{
    /**
     * Getter for ApiDepotsId.
     *
     * @return int|null
     */
    public function getApiDepotsId(): ?int
    {
        return $this->getData(self::API_DEPOTS_ID) === null ? null
            : (int)$this->getData(self::API_DEPOTS_ID);
    }

    /**
     * Setter for ApiDepotsId.
     *
     * @param int|null $apiDepotsId
     *
     * @return void
     */
    public function setApiDepotsId(?int $apiDepotsId): void
    {
        $this->setData(self::API_DEPOTS_ID, $apiDepotsId);
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
     * Getter for Phone.
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->getData(self::PHONE);
    }

    /**
     * Setter for Phone.
     *
     * @param string|null $phone
     *
     * @return void
     */
    public function setPhone(?string $phone): void
    {
        $this->setData(self::PHONE, $phone);
    }

    /**
     * Getter for TypeOfWarehouse.
     *
     * @return string|null
     */
    public function getTypeOfWarehouse(): ?string
    {
        return $this->getData(self::TYPE_OF_WAREHOUSE);
    }

    /**
     * Setter for TypeOfWarehouse.
     *
     * @param string|null $typeOfWarehouse
     *
     * @return void
     */
    public function setTypeOfWarehouse(?string $typeOfWarehouse): void
    {
        $this->setData(self::TYPE_OF_WAREHOUSE, $typeOfWarehouse);
    }

    /**
     * Getter for Number.
     *
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->getData(self::NUMBER);
    }

    /**
     * Setter for Number.
     *
     * @param string|null $number
     *
     * @return void
     */
    public function setNumber(?string $number): void
    {
        $this->setData(self::NUMBER, $number);
    }

    /**
     * Getter for CityRef.
     *
     * @return string|null
     */
    public function getCityRef(): ?string
    {
        return $this->getData(self::CITY_REF);
    }

    /**
     * Setter for CityRef.
     *
     * @param string|null $cityRef
     *
     * @return void
     */
    public function setCityRef(?string $cityRef): void
    {
        $this->setData(self::CITY_REF, $cityRef);
    }

    /**
     * Getter for CityDescriptionUk.
     *
     * @return string|null
     */
    public function getCityDescriptionUk(): ?string
    {
        return $this->getData(self::CITY_DESCRIPTION_UK);
    }

    /**
     * Setter for CityDescriptionUk.
     *
     * @param string|null $cityDescriptionUk
     *
     * @return void
     */
    public function setCityDescriptionUk(?string $cityDescriptionUk): void
    {
        $this->setData(self::CITY_DESCRIPTION_UK, $cityDescriptionUk);
    }

    /**
     * Getter for CityDescriptionRu.
     *
     * @return string|null
     */
    public function getCityDescriptionRu(): ?string
    {
        return $this->getData(self::CITY_DESCRIPTION_RU);
    }

    /**
     * Setter for CityDescriptionRu.
     *
     * @param string|null $cityDescriptionRu
     *
     * @return void
     */
    public function setCityDescriptionRu(?string $cityDescriptionRu): void
    {
        $this->setData(self::CITY_DESCRIPTION_RU, $cityDescriptionRu);
    }

    /**
     * Getter for MaxWeightAllowed.
     *
     * @return string|null
     */
    public function getMaxWeightAllowed(): ?string
    {
        return $this->getData(self::MAX_WEIGHT_ALLOWED);
    }

    /**
     * Setter for MaxWeightAllowed.
     *
     * @param string|null $maxWeightAllowed
     *
     * @return void
     */
    public function setMaxWeightAllowed(?string $maxWeightAllowed): void
    {
        $this->setData(self::MAX_WEIGHT_ALLOWED, $maxWeightAllowed);
    }

    /**
     * Getter for Longitude.
     *
     * @return string|null
     */
    public function getLongitude(): ?string
    {
        return $this->getData(self::LONGITUDE);
    }

    /**
     * Setter for Longitude.
     *
     * @param string|null $longitude
     *
     * @return void
     */
    public function setLongitude(?string $longitude): void
    {
        $this->setData(self::LONGITUDE, $longitude);
    }

    /**
     * Getter for Latitude.
     *
     * @return string|null
     */
    public function getLatitude(): ?string
    {
        return $this->getData(self::LATITUDE);
    }

    /**
     * Setter for Latitude.
     *
     * @param string|null $latitude
     *
     * @return void
     */
    public function setLatitude(?string $latitude): void
    {
        $this->setData(self::LATITUDE, $latitude);
    }
}
