<?php


namespace Paracall\Console\Parsers;


class MigrationParser {

    public static function parse($input, $namespace)
    {
        $class = 'Create' . ucfirst($input) . 'Table';
        $table = strtolower($input);
        $migrationFile =  $class . '.php';

        return ['NAMESPACE' => $namespace,'CLASS' => $class, 'TABLE' => $table, 'MIGRATION' => $migrationFile];
    }

}