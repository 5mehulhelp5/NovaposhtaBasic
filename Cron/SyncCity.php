<?php
/**
 * @author magefast@gmail.com www.magefast.com
 */

namespace Dragonfly\NovaposhtaBasic\Cron;

use Dragonfly\NovaposhtaBasic\Service\UpdateCity;

class SyncCity
{
    /**
     * @var UpdateCity
     */
    private UpdateCity $updateCity;

    /**
     * @param UpdateCity $updateCity
     */
    public function __construct(UpdateCity $updateCity)
    {
        $this->updateCity = $updateCity;
    }

    /**
     * @return void
     */
    public function execute(): void
    {
        $this->updateCity->execute();
    }
}
