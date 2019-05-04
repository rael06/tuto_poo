<?php

namespace Tutoriel\HTML;

class BootstrapForm extends Form {
    /**
     * Undocumented function
     *
     * @param string $name Nom du champ
     * @return void
     */
    public function input($name) {
        return $this->surround(
            $this->surround, $this->htmlText,'<label>' . $name . '</label>' . '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '" class="form-control">'
        );
    }
}
?>