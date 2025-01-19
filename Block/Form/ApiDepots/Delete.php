<?php

namespace Dragonfly\NovaposhtaBasic\Block\Form\ApiDepots;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiDepotsInterface;
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
        if (!$this->getApiDepotsId()) {
            return [];
        }

        return $this->wrapButtonSettings(
            __('Delete')->getText(),
            'delete',
            sprintf("deleteConfirm('%s', '%s')",
                __('Are you sure you want to delete this apidepots?'),
                $this->getUrl(
                    '*/*/delete',
                    [ApiDepotsInterface::API_DEPOTS_ID => $this->getApiDepotsId()]
                )
            ),
            [],
            20
        );
    }
}
