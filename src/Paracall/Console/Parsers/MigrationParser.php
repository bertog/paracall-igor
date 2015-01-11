<?php


namespace Paracall\Console\Parsers;


class MigrationParser {

    public static function parse($input)
    {
        $class = 'Create' . ucfirst($input) . 'Table';
        $table = strtolower($input);
        $migrationFile =  $class . '.php';

        return ['CLASS' => $class, 'TABLE' => $table, 'MIGRATION' => $migrationFile];
    }

}