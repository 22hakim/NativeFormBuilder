<?php 



class UserType 
{
    public function build()
    { 
        $form = new Form;

        $form->startForm(attributes:['class'=>'form'])
              ->addLabel('firstName','Prénom')
              ->addInput('text', 'firstname',['class'=>'form'])
              ->addLabel('password', 'mot de passe')
              ->addInput('password', 'password')
              ->addButton('connexion')
              ->endForm();

        return $form->create();
        // dans un projet avec un controller qui retourne une vue nous aurions 
        /**
         * $this->render( View, ['loginForm'=> $form->create()])
         */
    }
}