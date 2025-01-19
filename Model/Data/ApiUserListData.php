<?php

namespace Dragonfly\NovaposhtaBasic\Model\Data;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiUserListInterface;
use Magento\Framework\DataObject;

class ApiUserListData extends DataObject implements ApiUserListInterface
{
    /**
     * Getter for ApiUserListId.
     *
     * @return int|null
     */
    public function getApiUserListId(): ?int
    {
        return $this->getData(self::API_USER_LIST_ID) === null ? null
            : (int)$this->getData(self::API_USER_LIST_ID);
    }

    /**
     * Setter for ApiUserListId.
     *
     * @param int|null $apiUserListId
     *
     * @return void
     */
    public function setApiUserListId(?int $apiUserListId): void
    {
        $this->setData(self::API_USER_LIST_ID, $apiUserListId);
    }

    /**
     * Getter for Name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->getData(self::NAME);
    }

    /**
     * Setter for Name.
     *
     * @param string|null $name
     *
     * @return void
     */
    public function setName(?string $name): void
    {
        $this->setData(self::NAME, $name);
    }

    /**
     * Getter for ApiKey.
     *
     * @return string|null
     */
    public function getApiKey(): ?string
    {
        return $this->getData(self::API_KEY);
    }

    /**
     * Setter for ApiKey.
     *
     * @param string|null $apiKey
     *
     * @return void
     */
    public function setApiKey(?string $apiKey): void
    {
        $this->setData(self::API_KEY, $apiKey);
    }

    /**
     * Getter for ApiUrl.
     *
     * @return string|null
     */
    public function getApiUrl(): ?string
    {
        return $this->getData(self::API_URL);
    }

    /**
     * Setter for ApiUrl.
     *
     * @param string|null $apiUrl
     *
     * @return void
     */
    public function setApiUrl(?string $apiUrl): void
    {
        $this->setData(self::API_URL, $apiUrl);
    }

    /**
     * Getter for MainAccount.
     *
     * @return bool|null
     */
    public function getMainAccount(): ?bool
    {
        return $this->getData(self::MAIN_ACCOUNT) === null ? null
            : (bool)$this->getData(self::MAIN_ACCOUNT);
    }

    /**
     * Setter for MainAccount.
     *
     * @param bool|null $mainAccount
     *
     * @return void
     */
    public function setMainAccount(?bool $mainAccount): void
    {
        $this->setData(self::MAIN_ACCOUNT, $mainAccount);
    }

    /**
     * Getter for Status.
     *
     * @return bool|null
     */
    public function getStatus(): ?bool
    {
        return $this->getData(self::STATUS) === null ? null
            : (bool)$this->getData(self::STATUS);
    }

    /**
     * Setter for Status.
     *
     * @param bool|null $status
     *
     * @return void
     */
    public function setStatus(?bool $status): void
    {
        $this->setData(self::STATUS, $status);
    }

    /**
     * Getter for Comment.
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->getData(self::COMMENT);
    }

    /**
     * Setter for Comment.
     *
     * @param string|null $comment
     *
     * @return void
     */
    public function setComment(?string $comment): void
    {
        $this->setData(self::COMMENT, $comment);
    }
}
