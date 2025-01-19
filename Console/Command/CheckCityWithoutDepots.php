<?php

namespace Dragonfly\NovaposhtaBasic\Console\Command;

use Dragonfly\NovaposhtaBasic\Service\CheckCityDepots;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckCityWithoutDepots extends Command
{
    private CheckCityDepots $checkCityDepots;

    public function __construct(CheckCityDepots $checkCityDepots, string $name = null)
    {
        parent::__construct($name);
        $this->checkCityDepots = $checkCityDepots;
    }

    /**
     * Initialization of the command.
     */
    protected function configure()
    {
        $this->setName('np:city:check');
        $this->setDescription('Check City without Depots');
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
        $this->checkCityDepots->execute();
        $output->writeln('Updated City List');
    }
}
