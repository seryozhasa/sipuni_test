<?php

declare(strict_types=1);

namespace App\Command;

use App\Sort\Sort;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

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
        $helper = $this->getHelper('question');
        $string = $helper->ask($input, $output, new Question('String: '));

        $result = (new Sort())->sort($string);

        $output->writeln($result);
    }
}
