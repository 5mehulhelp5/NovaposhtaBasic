<?php

namespace Dragonfly\NovaposhtaBasic\Block\Form\ApiUserList;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiUserListInterface;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Delete entity button.
 */
class Delete extends GenericButton implements ButtonProviderInterface
{
    /**
     * Retrieve Delete button settings.
     *
     * @return array
     */
    public function getButtonData(): array
    {
        if (!$this->getApiUserListId()) {
            return [];
        }

        return $this->wrapButtonSettings(
            __('Delete')->getText(),
            'delete',
            sprintf("deleteConfirm('%s', '%s')",
                __('Are you sure you want to delete this apiuserlist?'),
                $this->getUrl(
                    '*/*/delete',
                    [ApiUserListInterface::API_USER_LIST_ID => $this->getApiUserListId()]
                )
            ),
            [],
            20
        );
    }
}
