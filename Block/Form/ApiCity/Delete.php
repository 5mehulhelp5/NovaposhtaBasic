<?php

namespace Dragonfly\NovaposhtaBasic\Block\Form\ApiCity;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiCityInterface;
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
        if (!$this->getApiCityId()) {
            return [];
        }

        return $this->wrapButtonSettings(
            __('Delete')->getText(),
            'delete',
            sprintf("deleteConfirm('%s', '%s')",
                __('Are you sure you want to delete this apicity?'),
                $this->getUrl(
                    '*/*/delete',
                    [ApiCityInterface::API_CITY_ID => $this->getApiCityId()]
                )
            ),
            [],
            20
        );
    }
}
