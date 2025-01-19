<?php

namespace Dragonfly\NovaposhtaBasic\Api\Data;

interface ApiDepotsInterface
{
    /**
     * String constants for property names
     */
    public const API_DEPOTS_ID = "api_depots_id";
    public const REF = "ref";
    public const DESCRIPTION_UK = "description_uk";
    public const DESCRIPTION_RU = "description_ru";
    public const PHONE = "phone";
    public const TYPE_OF_WAREHOUSE = "type_of_warehouse";
    public const NUMBER = "number";
    public const CITY_REF = "city_ref";
    public const CITY_DESCRIPTION_UK = "city_description_uk";
    public const CITY_DESCRIPTION_RU = "city_description_ru";
    public const MAX_WEIGHT_ALLOWED = "max_weight_allowed";
    public const LONGITUDE = "longitude";
    public const LATITUDE = "latitude";

    public const NAME_LANG_ASSOCIATION = ['uk_UA' => self::DESCRIPTION_UK, 'ru_RU' => self::DESCRIPTION_RU];

    /**
     * Getter for ApiDepotsId.
     *
     * @return int|null
     */
    public function getApiDepotsId(): ?int;

    /**
     * Setter for ApiDepotsId.
     *
     * @param int|null $apiDepotsId
     *
     * @return void
     */
    public function setApiDepotsId(?int $apiDepotsId): void;

    /**
     * Getter for Ref.
     *
     * @return string|null
     */
    public function getRef(): ?string;

    /**
     * Setter for Ref.
     *
     * @param string|null $ref
     *
     * @return void
     */
    public function setRef(?string $ref): void;

    /**
     * Getter for DescriptionUk.
     *
     * @return string|null
     */
    public function getDescriptionUk(): ?string;

    /**
     * Setter for DescriptionUk.
     *
     * @param string|null $descriptionUk
     *
     * @return void
     */
    public function setDescriptionUk(?string $descriptionUk): void;

    /**
     * Getter for DescriptionRu.
     *
     * @return string|null
     */
    public function getDescriptionRu(): ?string;

    /**
     * Setter for DescriptionRu.
     *
     * @param string|null $descriptionRu
     *
     * @return void
     */
    public function setDescriptionRu(?string $descriptionRu): void;

    /**
     * Getter for Phone.
     *
     * @return string|null
     */
    public function getPhone(): ?string;

    /**
     * Setter for Phone.
     *
     * @param string|null $phone
     *
     * @return void
     */
    public function setPhone(?string $phone): void;

    /**
     * Getter for TypeOfWarehouse.
     *
     * @return string|null
     */
    public function getTypeOfWarehouse(): ?string;

    /**
     * Setter for TypeOfWarehouse.
     *
     * @param string|null $typeOfWarehouse
     *
     * @return void
     */
    public function setTypeOfWarehouse(?string $typeOfWarehouse): void;

    /**
     * Getter for Number.
     *
     * @return string|null
     */
    public function getNumber(): ?string;

    /**
     * Setter for Number.
     *
     * @param string|null $number
     *
     * @return void
     */
    public function setNumber(?string $number): void;

    /**
     * Getter for CityRef.
     *
     * @return string|null
     */
    public function getCityRef(): ?string;

    /**
     * Setter for CityRef.
     *
     * @param string|null $cityRef
     *
     * @return void
     */
    public function setCityRef(?string $cityRef): void;

    /**
     * Getter for CityDescriptionUk.
     *
     * @return string|null
     */
    public function getCityDescriptionUk(): ?string;

    /**
     * Setter for CityDescriptionUk.
     *
     * @param string|null $cityDescriptionUk
     *
     * @return void
     */
    public function setCityDescriptionUk(?string $cityDescriptionUk): void;

    /**
     * Getter for CityDescriptionRu.
     *
     * @return string|null
     */
    public function getCityDescriptionRu(): ?string;

    /**
     * Setter for CityDescriptionRu.
     *
     * @param string|null $cityDescriptionRu
     *
     * @return void
     */
    public function setCityDescriptionRu(?string $cityDescriptionRu): void;

    /**
     * Getter for MaxWeightAllowed.
     *
     * @return string|null
     */
    public function getMaxWeightAllowed(): ?string;

    /**
     * Setter for MaxWeightAllowed.
     *
     * @param string|null $maxWeightAllowed
     *
     * @return void
     */
    public function setMaxWeightAllowed(?string $maxWeightAllowed): void;

    /**
     * Getter for Longitude.
     *
     * @return string|null
     */
    public function getLongitude(): ?string;

    /**
     * Setter for Longitude.
     *
     * @param string|null $longitude
     *
     * @return void
     */
    public function setLongitude(?string $longitude): void;

    /**
     * Getter for Latitude.
     *
     * @return string|null
     */
    public function getLatitude(): ?string;

    /**
     * Setter for Latitude.
     *
     * @param string|null $latitude
     *
     * @return void
     */
    public function setLatitude(?string $latitude): void;
}
