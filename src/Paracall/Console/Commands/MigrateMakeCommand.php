<?php


namespace Paracall\Console\Commands;


use Paracall\Console\FileSystem\FileSystem;
use Paracall\Console\Generator;
use Paracall\Console\Parsers\MigrationParser;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MigrateMakeCommand extends Command {

    public function configure()
    {
        $this->setName('migrate:make')
            ->setDescription('Create a Migration file for the specified Table')
            ->addArgument('table', InputArgument::REQUIRED, 'The Table you want migrate');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $data = MigrationParser::parse($input->getArgument('table'));

        $generator = new Generator(new FileSystem);

        $generator->make('src/Templates/CreateTableTemplate.txt', $data,  'app/Database/Migrations/' . $data['MIGRATION']);

        $output->writeln("<info>Migration File " . $data['MIGRATION'] . " Created</info>");
    }
}