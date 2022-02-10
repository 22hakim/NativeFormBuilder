<?php 



class UserType 
{
    public function login()
    { 
        $form = new Form;

        $form->startForm(attributes:['class'=>'form'])
              ->addLabel('firstName','Prénom')
              ->addInput('text', 'firstname',['class'=>'form'])
              ->addLabel('password', 'mot de passe')
              ->addInput('pa ssword', 'password')
              ->addButton('connexion')
              ->endForm();

        echo $form->create();

        // dans un projet avec un controller qui retourne une vue nous aurions 
        /**
         * $this->render( View, ['loginForm'=> $form->create()])
         */

    }
}