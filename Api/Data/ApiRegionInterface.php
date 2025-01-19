<?php

namespace Dragonfly\NovaposhtaBasic\Api\Data;

interface ApiRegionInterface
{
    public const REGION_LIST = [
        ['id' => '71508129-9b87-11de-822f-000c2965ae0e', 'name' => 'Vinnitsa region'],
        ['id' => '7150812a-9b87-11de-822f-000c2965ae0e', 'name' => 'Volyn region'],
        ['id' => '7150812e-9b87-11de-822f-000c2965ae0e', 'name' => 'Zakarpattia region'],
        ['id' => '7150813e-9b87-11de-822f-000c2965ae0e', 'name' => 'Cherkassy region'],
        ['id' => '71508140-9b87-11de-822f-000c2965ae0e', 'name' => 'Chernigov region'],
        ['id' => '7150813f-9b87-11de-822f-000c2965ae0e', 'name' => 'Chernovtsy region'],
        ['id' => '7150812b-9b87-11de-822f-000c2965ae0e', 'name' => 'Dnepropetrovsk region'],
        ['id' => '7150812c-9b87-11de-822f-000c2965ae0e', 'name' => 'Donetsk region'],
        ['id' => '71508130-9b87-11de-822f-000c2965ae0e', 'name' => 'Ivano-Frankivsk region'],
        ['id' => '7150813b-9b87-11de-822f-000c2965ae0e', 'name' => 'Kharkov region'],
        ['id' => '7150813c-9b87-11de-822f-000c2965ae0e', 'name' => 'Kherson region'],
        ['id' => '7150813d-9b87-11de-822f-000c2965ae0e', 'name' => 'Khmelnitsky region'],
        ['id' => '71508131-9b87-11de-822f-000c2965ae0e', 'name' => 'Kiev region'],
        ['id' => '71508132-9b87-11de-822f-000c2965ae0e', 'name' => 'Kirovograd region'],
        ['id' => '71508134-9b87-11de-822f-000c2965ae0e', 'name' => 'Lviv region'],
        ['id' => '71508135-9b87-11de-822f-000c2965ae0e', 'name' => 'Nikolaev region'],
        ['id' => '71508136-9b87-11de-822f-000c2965ae0e', 'name' => 'Odessa region'],
        ['id' => '71508137-9b87-11de-822f-000c2965ae0e', 'name' => 'Poltava region'],
        ['id' => '71508138-9b87-11de-822f-000c2965ae0e', 'name' => 'Rivne region'],
        ['id' => '71508139-9b87-11de-822f-000c2965ae0e', 'name' => 'Sumy region'],
        ['id' => '7150813a-9b87-11de-822f-000c2965ae0e', 'name' => 'Ternopil region'],
        ['id' => '7150812f-9b87-11de-822f-000c2965ae0e', 'name' => 'Zaporozhye region'],
        ['id' => '7150812d-9b87-11de-822f-000c2965ae0e', 'name' => 'Zhitomir region'],
        ['id' => '71508133-9b87-11de-822f-000c2965ae0e', 'name' => 'Lugansk region', 'disabled' => true],
        ['id' => 1, 'name' => 'Crimea region', 'disabled' => true],
    ];

    /**
     * Get Region List
     *
     * @param string $locale
     * @return array
     */
    public function getRegionList(string $locale): array;
}
