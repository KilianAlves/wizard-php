<?php

namespace Wizard\FormMaker;

use Wizard\FormMaker\Glyph;

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

    /**
     * Generate a glyph (input) for the incantation
     * @param string $type
     * @param string $name
     * @param bool|string $label
     * @param array $constraints
     * @return Incantation
     */
    public function addGlyph(string $type, string $name, bool|string $label, array $constraints): self {
        $this->glyphs[] = new Glyph($type, $name, $label, $constraints);
        return $this;
    }

    /**
     * Render the string of the incantation (HTML form)
     * @return string
     */
    public function renderHTML(): string {
        $form = "<form name='$this->name' action='$this->action' method='$this->method' enctype='$this->enctype'>";

        // generate glyphs (inputs) of the incantation (form)
        foreach ($this->glyphs as $glyph) {
            $form .= $glyph->generateGlyph();
        }

        $form .= "</form>";
        return $form;
    }
}
