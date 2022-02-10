<?php

class Form
{
    private $formCode;

    public function create()
    {
        return $this->formCode;
    }

    public function validate(array $form, array $fields):bool
    {
        foreach ($fields as $field) {
            
            if(!isset($field) || empty($field))
            {
                return false;
            }

        }

        return true;
    }

    public function addAttributes(array $attributes):string
    {
        $str = '';

        $attList = ['checked', 'disabled', 'readonly', 'multiple', 'required','autofocus', 'novalidate', 'formvalidate'];

        foreach ($attributes as $attribute => $value) {
            # code...
            if(in_array($attribute,$attList) && $value == true)
            {
                $str.= " $attribute";
            }else{
                $str .=" $attribute='$value'";
            }
        }

        return $str;
    }

    public function startForm(string $method = 'post', string $action = '#', array $attributes = []):self
    {
        //<form action="" method="post">
        $this->formCode = '<form action="'.$action.'" method="'.$method.'"';

        $this->formCode .= $attributes? $this->addAttributes($attributes).'>' : '>';
        
        return $this;
    }

    public function endForm():self
    {
        $this->formCode .= '</form>';
        return $this;
    }
}