<?php

namespace Wizard\FormMaker;
class Glyph {

    private string $type;
    private string $name;
    private string|bool $label;
    private array $constraints = [];
    public function __construct(string $type, string $name, string|bool $label = false, array $constraints = []) {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->constraints = $constraints;
    }

    public function generateGlyph(): string {
        $input = "";
        // generate label if user need
        if ($this->label !== false) {
            $input .= "<label for='$this->name'>$this->label</label>";
        }
        // Input base
        $input .= "<input type='$this->type' name='$this->name'";
        // generate constraints
        foreach ($this->constraints as $constraint => $value) {
            // add constraint to input
            $input .= " ".$constraint.'= "'.$value.'"';
            // TODO: make constraint without value
            // example "required" don't need a value
        }
        $input .= ">";
        return $input;
    }
}
