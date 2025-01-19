<?php

namespace Dragonfly\NovaposhtaBasic\Api\Data;

interface ApiUserListInterface
{
    /**
     * String constants for property names
     */
    public const API_USER_LIST_ID = "api_user_list_id";
    public const NAME = "name";
    public const API_KEY = "api_key";
    public const API_URL = "api_url";
    public const MAIN_ACCOUNT = "main_account";
    public const STATUS = "status";
    public const COMMENT = "comment";

    /**
     * Getter for ApiUserListId.
     *
     * @return int|null
     */
    public function getApiUserListId(): ?int;

    /**
     * Setter for ApiUserListId.
     *
     * @param int|null $apiUserListId
     *
     * @return void
     */
    public function setApiUserListId(?int $apiUserListId): void;

    /**
     * Getter for Name.
     *
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * Setter for Name.
     *
     * @param string|null $name
     *
     * @return void
     */
    public function setName(?string $name): void;

    /**
     * Getter for ApiKey.
     *
     * @return string|null
     */
    public function getApiKey(): ?string;

    /**
     * Setter for ApiKey.
     *
     * @param string|null $apiKey
     *
     * @return void
     */
    public function setApiKey(?string $apiKey): void;

    /**
     * Getter for ApiUrl.
     *
     * @return string|null
     */
    public function getApiUrl(): ?string;

    /**
     * Setter for ApiUrl.
     *
     * @param string|null $apiUrl
     *
     * @return void
     */
    public function setApiUrl(?string $apiUrl): void;

    /**
     * Getter for MainAccount.
     *
     * @return bool|null
     */
    public function getMainAccount(): ?bool;

    /**
     * Setter for MainAccount.
     *
     * @param bool|null $mainAccount
     *
     * @return void
     */
    public function setMainAccount(?bool $mainAccount): void;

    /**
     * Getter for Status.
     *
     * @return bool|null
     */
    public function getStatus(): ?bool;

    /**
     * Setter for Status.
     *
     * @param bool|null $status
     *
     * @return void
     */
    public function setStatus(?bool $status): void;

    /**
     * Getter for Comment.
     *
     * @return string|null
     */
    public function getComment(): ?string;

    /**
     * Setter for Comment.
     *
     * @param string|null $comment
     *
     * @return void
     */
    public function setComment(?string $comment): void;
}
