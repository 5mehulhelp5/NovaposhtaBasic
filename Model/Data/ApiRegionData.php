<?php

namespace Dragonfly\NovaposhtaBasic\Model\Data;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiRegionInterface;
use Magento\Framework\DataObject;
use Magento\Framework\Translate;

class ApiRegionData extends DataObject implements ApiRegionInterface
{
    /**
     * @var Translate
     */
    private Translate $translate;

    /**
     * @param Translate $translate
     * @param array $data
     */
    public function __construct(Translate $translate, array $data = [])
    {
        parent::__construct($data);
        $this->translate = $translate;
    }

    /**
     * @param string $locale
     * @return array
     */
    public function getRegionList(string $locale): array
    {
        $this->translate->setLocale($locale);

        $data = ApiRegionInterface::REGION_LIST;
        foreach ($data as $key => $value) {
            $data[$key]['name'] = __($value['name']);
        }

        return $data;
    }
}
