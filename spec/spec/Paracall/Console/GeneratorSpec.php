<?php

namespace spec\Paracall\Console;

use Paracall\Console\FileSystem\FileSystem;
use Paracall\Console\Templating\TemplateCompiler;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GeneratorSpec extends ObjectBehavior {

    function let(FileSystem $file) {
        $this->beConstructedWith($file);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Paracall\Console\Generator');
    }

    function it_compile_a_template(FileSystem $file,TemplateCompiler $compiler)
    {
        $template = 'class Create$NAME$Table {} Manager::schema->create(\'$NAME$\'';
        $data = ['NAME' => 'User'];
        $output = 'class CreateUserTable {} Manager::schema->create(\'User\'';

        $file->get('template.txt')->shouldBeCalled()->willReturn($template);

        $compiler->compile($template, $data)->shouldBeCalled()->willReturn($output);

        $this->compile('template.txt', $data, $compiler)->shouldBe($output);

    }
}
