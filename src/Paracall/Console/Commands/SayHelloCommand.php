<?php


namespace Paracall\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class SayHelloCommand extends Command {

    public function configure()
    {
        $this->setName('sayHelloTo')
            ->setDescription('Offer a greeting to the given person')
            ->addArgument('name', InputArgument::OPTIONAL, 'Your Name');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $message = 'Hello ' . $input->getArgument('name');

        $output->writeln("<info>{$message}</info>");
    }
}