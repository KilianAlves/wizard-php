<?php

class Glyph {

    public string $type;
    public string $name;
    public string|bool $label;
    public array $constraints = [];
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
        }
        $input .= ">";
        return $input;
    }
}

?>