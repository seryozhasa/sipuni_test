<?php

declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SortCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('sort:letters')
            ->setDescription('Sorting letters');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}
