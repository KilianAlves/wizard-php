<?php

class Incantation {

    private string $name;
    private string $action;
    private string $method;
    private string $enctype;
    private array $glyphs;

    public function __construct(string $name, string $action = "/", string $method = "POST", string $enctype = "text/plain") {
        $this->name = $name;
        $this->action = $action;
        $this->method = $method;
        $this->enctype = $enctype;
    }
}

?>