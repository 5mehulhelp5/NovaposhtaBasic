<?php
/**
 * @author magefast@gmail.com www.magefast.com
 */

namespace Dragonfly\NovaposhtaBasic\Cron;

use Dragonfly\NovaposhtaBasic\Service\CheckCityDepots;

class CheckCityWithoutDepots
{
    /**
     * @var CheckCityDepots
     */
    private CheckCityDepots $checkCityDepots;

    /**
     * @param CheckCityDepots $checkCityDepots
     */
    public function __construct(CheckCityDepots $checkCityDepots)
    {
        $this->checkCityDepots = $checkCityDepots;
    }

    /**
     * @return void
     */
    public function execute(): void
    {
        $this->checkCityDepots->execute();
    }
}
