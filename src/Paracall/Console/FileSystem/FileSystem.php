<?php

namespace Paracall\Console\FileSystem;

class FileSystem {

    public function get($file)
    {
        return file_get_contents($file);
    }

    public function put($file, $content)
    {
        return file_put_contents($file, $content);
    }

}