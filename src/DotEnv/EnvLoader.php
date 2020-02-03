<?php
namespace Nora\Utility\DotEnv;

class EnvLoader
{
    private $dotenv;

    public function __construct($root)
    {
        $this->dotenv = new DotEnv($root, ".env");
    }

    public function override()
    {
        $this->dotenv->override();
        return $this;
    }

    public function __invoke()
    {
        return getenv();
    }
}
