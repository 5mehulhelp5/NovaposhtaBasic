<?php

namespace Dragonfly\NovaposhtaBasic\Ui\Component\Listing\Column;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiUserListInterface;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Ui\Component\Listing\Columns\Column;

/**
 * Class to build edit and delete link for each item.
 */
class ApiUserListBlockActions extends Column
{
    /**
     * Entity name.
     */
    private const ENTITY_NAME = 'ApiUserList';

    /**
     * Url paths.
     */
    private const EDIT_URL_PATH = 'api_user_list/apiuserlist/edit';
    private const DELETE_URL_PATH = 'api_user_list/apiuserlist/delete';

    /**
     * @var UrlInterface
     */
    private UrlInterface $urlBuilder;

    /**
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param UrlInterface $urlBuilder
     * @param array $components
     * @param array $data
     */
    public function __construct(
        ContextInterface   $context,
        UiComponentFactory $uiComponentFactory,
        UrlInterface       $urlBuilder,
        array              $components = [],
        array              $data = []
    )
    {
        parent::__construct(
            $context,
            $uiComponentFactory,
            $components,
            $data
        );
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * Prepare data source.
     *
     * @param array $dataSource
     *
     * @return array
     */
    public function prepareDataSource(array $dataSource): array
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                if (isset($item[ApiUserListInterface::API_USER_LIST_ID])) {
                    $entityName = static::ENTITY_NAME;
                    $urlData = [ApiUserListInterface::API_USER_LIST_ID => $item[ApiUserListInterface::API_USER_LIST_ID]];

                    $editUrl = $this->urlBuilder->getUrl(static::EDIT_URL_PATH, $urlData);
                    $deleteUrl = $this->urlBuilder->getUrl(static::DELETE_URL_PATH, $urlData);

                    $item[$this->getData('name')] = [
                        'edit' => $this->getActionData($editUrl, (string)__('Edit')),
                        'delete' => $this->getActionData(
                            $deleteUrl,
                            (string)__('Delete'),
                            (string)__('Delete %1', $entityName),
                            (string)__('Are you sure you want to delete a %1 record?', $entityName)
                        )
                    ];
                }
            }
        }

        return $dataSource;
    }

    /**
     * Get action link data array.
     *
     * @param string $url
     * @param string $label
     * @param string|null $dialogTitle
     * @param string|null $dialogMessage
     *
     * @return array
     */
    private function getActionData(
        string  $url,
        string  $label,
        ?string $dialogTitle = null,
        ?string $dialogMessage = null
    ): array
    {
        $data = [
            'href' => $url,
            'label' => $label,
            'post' => true,
            '__disableTmpl' => true
        ];

        if ($dialogTitle && $dialogMessage) {
            $data['confirm'] = [
                'title' => $dialogTitle,
                'message' => $dialogMessage
            ];
        }

        return $data;
    }
}
