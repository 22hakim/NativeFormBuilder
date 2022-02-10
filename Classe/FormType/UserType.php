<?php 



class UserType 
{
    public function login()
    {
        $form = new Form;

        $form->startForm(attributes:['class'=>'form'])
              ->endForm();

        var_dump($form);

    }
}