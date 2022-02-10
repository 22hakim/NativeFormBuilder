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
             
                return false;

        }

        return true;
    }

    public function addAttributes(array $attributes):string
    {
        $str = '';

        $attList = ['checked', 'disabled', 'readonly', 'multiple', 'required','autofocus', 'novalidate', 'formvalidate'];

        foreach ($attributes as $attribute => $value) {

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
        // opening form
        $this->formCode = '<form action="'.$action.'" method="'.$method.'"';

        // adding attributes
        $this->formCode .= $attributes? $this->addAttributes($attributes).'>' : '>';
        
        return $this;
    }

    public function endForm():self
    {
        // closing form 
        $this->formCode .= '</form>';
        return $this;
    }

    public function addLabel(string $for, string $texte, array $attributes = []):self
    {
        // opening label 
        $this->formCode.= '<label for="'.$for.'"';

        // adding attributes
        $this->formCode .= $attributes? $this->addAttributes($attributes) : '';

        // adding content and closing label 
        $this->formCode.= '>'.$texte.'</label>';

        return $this;
    }

    public function addInput(string $type, string $name, array $attributes = []):self
    {
        // opening input 
        $this->formCode.= '<input type="'.$type.'" name="'.$name.'" id="'.$name.'"';

        // adding attributes
        $this->formCode .= $attributes? $this->addAttributes($attributes).'>' : '>';

        return $this;
    }

    public function addTextArea(string $name, string $content ='', array $attributes = []):self
    {
        // opening textarea 
        $this->formCode.= '<textarea name="'.$name.'"';

        // adding attributes
        $this->formCode .= $attributes? $this->addAttributes($attributes) : '';

        // adding content and closing textarea 
        $this->formCode.= '>'.$content.'</textarea>';

        return $this;
    }

    public function AddSelect(string $name, array $options, array $attributes = [] ):self
    {
        // opening select
        $this->formCode .= '<select name="'.$name.'"';

        // adding attributes
        $this->formCode .= $attributes? $this->addAttributes($attributes).'>' : '>';

        // adding option fields
        foreach ($options as $value => $content) {
            $this->formCode.= '<option value="'.$value.'">'.$content.'</option>';
        }

        // closing select 
        $this->formCode .= '</select>';

        return $this;
    }

    public function addButton(string $content, array $attributes = []):self
    {
        // opening button 
        $this->formCode.= '<button ';

        // adding attributes
        $this->formCode .= $attributes? $this->addAttributes($attributes) : '';

        // adding content and closing button 
        $this->formCode.= '>'.$content.'</button>';

        return $this;
    }
}  