<?php

namespace Dragonfly\NovaposhtaBasic\Console\Command;

use Dragonfly\NovaposhtaBasic\Service\UpdateCity;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SyncCity extends Command
{
    /**
     * @var UpdateCity
     */
    private UpdateCity $updateCity;

    /**
     * @param UpdateCity $updateCity
     * @param string|null $name
     */
    public function __construct(UpdateCity $updateCity, string $name = null)
    {
        parent::__construct($name);
        $this->updateCity = $updateCity;
    }

    /**
     * Initialization of the command.
     */
    protected function configure()
    {
        $this->setName('np:sync:city');
        $this->setDescription('Sync Cities');
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
        $this->updateCity->execute();

        $error = $this->updateCity->getErrorReportCli();
        if ($error) {
            $output->writeln('<error>' . $error . '</error>');
        }
        $output->writeln('Updated Cities List');
    }
}
