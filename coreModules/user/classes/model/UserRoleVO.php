<?php


Cogumelo::load('coreModel/VO.php');
user::load('model/RoleVO.php');


class UserRoleVO extends VO
{
  static $tableName = 'user_userRole';
  static $cols = array(
    'id' => array(
      'type' => 'INT',
      'primarykey' => true,
      'autoincrement' => true
    ),
    'user'=> array(
      'name' => 'User',
      'type'=>'FOREIGN',
      'vo' => 'UserVO',
      'key' => 'id'
    ),
    'role'=> array(
      'name' => 'Role',
      'type'=>'FOREIGN',
      'vo' => 'RoleVO',
      'key' => 'id'
    )
  );

  function __construct($datarray = array(),  $otherRelObj= false )
  {
    parent::__construct($datarray, $otherRelObj );
  }

}