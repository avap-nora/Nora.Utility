<?php
namespace Nora\Utility\DotEnv;

class LoadDotEnvFile
{
    public function __invoke($path)
    {
        (new EnvLoader($path))->override();
    }
}
