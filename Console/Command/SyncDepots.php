<?php

namespace Dragonfly\NovaposhtaBasic\Console\Command;

use Dragonfly\NovaposhtaBasic\Service\UpdateDepots;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SyncDepots extends Command
{
    private UpdateDepots $updateDepots;

    public function __construct(UpdateDepots $updateDepots, string $name = null)
    {
        parent::__construct($name);
        $this->updateDepots = $updateDepots;
    }

    /**
     * Initialization of the command.
     */
    protected function configure()
    {
        $this->setName('np:sync:depots');
        $this->setDescription('Sync Depots');
        parent::configure();
    }

    /**
     * CLI command description.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $this->updateDepots->execute();

        $error = $this->updateDepots->getErrorReportCli();
        if ($error) {
            $output->writeln('<error>' . $error . '</error>');
        }
        $output->writeln('Updated Depots List');
    }
}
