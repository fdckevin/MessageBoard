<?php

class Roles extends AppModel {

	public $useTable = "mb_roles";

	public $primaryKey = 'id';

	public $hasOne = array(

        'Users' => array(
            'className' => 'Users',
            'foreignKey' => 'id'
        )
    );
}