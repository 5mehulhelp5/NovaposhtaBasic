<?php
/**
 * @author magefast@gmail.com www.magefast.com
 */

namespace Dragonfly\NovaposhtaBasic\Cron;

use Dragonfly\NovaposhtaBasic\Service\UpdateDepots;

class SyncDepots
{
    /**
     * @var UpdateDepots
     */
    private UpdateDepots $updateDepots;

    /**
     * @param UpdateDepots $updateDepots
     */
    public function __construct(UpdateDepots $updateDepots)
    {
        $this->updateDepots = $updateDepots;
    }

    /**
     * @return void
     */
    public function execute(): void
    {
        $this->updateDepots->execute();
    }
}
