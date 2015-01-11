<?php

namespace Paracall\Console;

use Paracall\Console\Compiler\TemplateCompiler;
use Paracall\Console\FileSystem\FileSystem;


class Generator {

    protected $file;

    public function __construct(FileSystem $file)
    {
        $this->file = $file;
    }

    public function make($template, $data, $outputFile)
    {
        $renderedTemplate = $this->compile($template, $data, new TemplateCompiler);

        $this->file->put($outputFile, $renderedTemplate);
    }

    public function compile($template, $data, TemplateCompiler $compiler)
    {
        return $compiler->compile($this->file->get($template), $data);
    }

}
