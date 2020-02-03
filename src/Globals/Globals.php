<?php
namespace Nora\Utility\Globals;

class Globals
{
    public $server;
    public $get;
    public $post;
    public $env;

    public function __construct($server = null, $get = null, $post = null, $env = null)
    {
        $this->server = $server ?? $_SERVER ?? [];
        $this->get    = $get ?? $_GET ?? [];
        $this->post   = $post ?? $_POST ?? [];
        $this->env    = $env ?? getenv();
    }
}
