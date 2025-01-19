<?php

namespace Dragonfly\NovaposhtaBasic\Api\Data;

interface ApiCityInterface
{
    /**
     * String constants for property names
     */
    public const API_CITY_ID = "api_city_id";
    public const DESCRIPTION_UK = "description_uk";
    public const DESCRIPTION_RU = "description_ru";
    public const DELIVERY1 = "delivery1";
    public const DELIVERY2 = "delivery2";
    public const DELIVERY3 = "delivery3";
    public const DELIVERY4 = "delivery4";
    public const DELIVERY5 = "delivery5";
    public const DELIVERY6 = "delivery6";
    public const DELIVERY7 = "delivery7";
    public const AREA = "area";
    public const AREA_REGION_DESCRIPTION_UK = "area_region_description_uk";
    public const AREA_REGION_DESCRIPTION_RU = "area_region_description_ru";
    public const SETTLEMENT_TYPE_DESCRIPTION_UK = "settlement_type_description_uk";
    public const SETTLEMENT_TYPE_DESCRIPTION_RU = "settlement_type_description_ru";
    public const CONGLOMERATES = "conglomerates";
    public const CITY_ID = "city_id";
    public const REF = "ref";

    public const NAME_LANG_ASSOCIATION = ['uk_UA' => self::DESCRIPTION_UK, 'ru_RU' => self::DESCRIPTION_RU];
    public const TYPE_LANG_ASSOCIATION = ['uk_UA' => self::SETTLEMENT_TYPE_DESCRIPTION_UK, 'ru_RU' => self::SETTLEMENT_TYPE_DESCRIPTION_RU];

    /**
     * Getter for ApiCityId.
     *
     * @return int|null
     */
    public function getApiCityId(): ?int;

    /**
     * Setter for ApiCityId.
     *
     * @param int|null $apiCityId
     *
     * @return void
     */
    public function setApiCityId(?int $apiCityId): void;

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
     * Getter for Delivery1.
     *
     * @return string|null
     */
    public function getDelivery1(): ?string;

    /**
     * Setter for Delivery1.
     *
     * @param string|null $delivery1
     *
     * @return void
     */
    public function setDelivery1(?string $delivery1): void;

    /**
     * Getter for Delivery2.
     *
     * @return string|null
     */
    public function getDelivery2(): ?string;

    /**
     * Setter for Delivery2.
     *
     * @param string|null $delivery2
     *
     * @return void
     */
    public function setDelivery2(?string $delivery2): void;

    /**
     * Getter for Delivery3.
     *
     * @return string|null
     */
    public function getDelivery3(): ?string;

    /**
     * Setter for Delivery3.
     *
     * @param string|null $delivery3
     *
     * @return void
     */
    public function setDelivery3(?string $delivery3): void;

    /**
     * Getter for Delivery4.
     *
     * @return string|null
     */
    public function getDelivery4(): ?string;

    /**
     * Setter for Delivery4.
     *
     * @param string|null $delivery4
     *
     * @return void
     */
    public function setDelivery4(?string $delivery4): void;

    /**
     * Getter for Delivery5.
     *
     * @return string|null
     */
    public function getDelivery5(): ?string;

    /**
     * Setter for Delivery5.
     *
     * @param string|null $delivery5
     *
     * @return void
     */
    public function setDelivery5(?string $delivery5): void;

    /**
     * Getter for Delivery6.
     *
     * @return string|null
     */
    public function getDelivery6(): ?string;

    /**
     * Setter for Delivery6.
     *
     * @param string|null $delivery6
     *
     * @return void
     */
    public function setDelivery6(?string $delivery6): void;

    /**
     * Getter for Delivery7.
     *
     * @return string|null
     */
    public function getDelivery7(): ?string;

    /**
     * Setter for Delivery7.
     *
     * @param string|null $delivery7
     *
     * @return void
     */
    public function setDelivery7(?string $delivery7): void;

    /**
     * Getter for Area.
     *
     * @return string|null
     */
    public function getArea(): ?string;

    /**
     * Setter for Area.
     *
     * @param string|null $area
     *
     * @return void
     */
    public function setArea(?string $area): void;

    /**
     * Getter for AreaRegionDescriptionUk.
     *
     * @return string|null
     */
    public function getAreaRegionDescriptionUk(): ?string;

    /**
     * Setter for AreaRegionDescriptionUk.
     *
     * @param string|null $areaRegionDescriptionUk
     *
     * @return void
     */
    public function setAreaRegionDescriptionUk(?string $areaRegionDescriptionUk): void;

    /**
     * Getter for AreaRegionDescriptionRu.
     *
     * @return string|null
     */
    public function getAreaRegionDescriptionRu(): ?string;

    /**
     * Setter for AreaRegionDescriptionRu.
     *
     * @param string|null $areaRegionDescriptionRu
     *
     * @return void
     */
    public function setAreaRegionDescriptionRu(?string $areaRegionDescriptionRu): void;

    /**
     * Getter for SettlementTypeDescriptionUk.
     *
     * @return string|null
     */
    public function getSettlementTypeDescriptionUk(): ?string;

    /**
     * Setter for SettlementTypeDescriptionUk.
     *
     * @param string|null $settlementTypeDescriptionUk
     *
     * @return void
     */
    public function setSettlementTypeDescriptionUk(?string $settlementTypeDescriptionUk): void;

    /**
     * Getter for SettlementTypeDescriptionRu.
     *
     * @return string|null
     */
    public function getSettlementTypeDescriptionRu(): ?string;

    /**
     * Setter for SettlementTypeDescriptionRu.
     *
     * @param string|null $settlementTypeDescriptionRu
     *
     * @return void
     */
    public function setSettlementTypeDescriptionRu(?string $settlementTypeDescriptionRu): void;

    /**
     * Getter for Conglomerates.
     *
     * @return string|null
     */
    public function getConglomerates(): ?string;

    /**
     * Setter for Conglomerates.
     *
     * @param string|null $conglomerates
     *
     * @return void
     */
    public function setConglomerates(?string $conglomerates): void;

    /**
     * Getter for CityId.
     *
     * @return string|null
     */
    public function getCityId(): ?string;

    /**
     * Setter for CityId.
     *
     * @param string|null $cityId
     *
     * @return void
     */
    public function setCityId(?string $cityId): void;

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
}
