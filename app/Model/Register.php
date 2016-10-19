<?php
class Register extends AppModel{

	public $name = 'Register';

    public $validate = array(
        'nombre'=>array(
            'rule'=>'alphaNumeric'
            ,'allowEmpty'=>false
        )
        ,'telefono'=>array(
            'rule'=>'numeric'
            ,'allowEmpty'=>false
        )
        ,'celular'=>array(
            'rule'=>'numeric'
            ,'allowEmpty'=>false
        )
        ,'email'=>array(
            'rule'=>'email'
            ,'allowEmpty'=>false
        )
    );
}