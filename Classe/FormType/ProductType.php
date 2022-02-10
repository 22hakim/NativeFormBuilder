<?php 



class ProductType 
{
    public function build()
    { 
        $form = new Form;

        $form->startForm(attributes:['class'=>'form'])
              ->addLabel('productName','Nom du produit')
              ->addInput('text', 'productName')
              ->addLabel('productPrice', 'Prix en €')
              ->addInput('quantity', 'Quantité')
              ->addButton('Ajouter')
              ->endForm();

        return $form->create();

    }
}