<?php

namespace Magein\view\library\render\form;

use Magein\view\library\constant\FormItemConstant;
use Magein\view\library\render\FormRenderClass;

class SelectRender extends FormRenderClass
{

    public function __construct()
    {
        $this->setType(FormItemConstant::TYPE_SELECT);
    }

    protected function render()
    {
        $value = $this->value;

        $this->value = null;

        $attr = $this->attr();

        $input = '';

        if ($this->options) {

            foreach ($this->options as $key => $option) {

                $selected = false;
                if ($value !== null && $value == $key) {
                    $selected = true;
                }

                $input .= '<option value="' . $key . '" ' . ($selected ? 'selected' : '') . '>' . $option . '</option>';
            }

            $input = '<select ' . $attr . '>' . $input . '</select>';

        }

        return $input;
    }

}