<?php
//ma3a enne msh moQtane3 tamaman b model_base class .. ya snap !!
// ----------------------------------------------------------------------
// Class Name: 				[demo]Users
// Filename:   				users_model.php
// Original Author(s):		<gamal>El-Sayed G. Abdul-Azem [CAT-Hackers MyAdressBook Project] <mail.gamal@gmail.com>
// Purpose:   				Basic CRUD functions Authentication and last user method
// ----------------------------------------------------------------------


Load::FromClasses('model_base');
class Users extends Model
{
		public $tableName = "users";
 /**
    * @return  mixed [resource] valid userdata or [bool] false
    * @param   String $username  valedated input username
               String $passwd  valedated input password
    *        
    * @desc    Authenticated single user from the `users` table
    * @Author  El-Sayed G. Abdul-Azem
    **/
		function auth($username,$passwd)
		{
				//$queryArray["selections"]=array();
				$queryUserArray['tables']=array($this->tableName);
				$queryUserArray["whereCondition"]="`username`='$username' AND `password` = '$password'  AND  `Disabled` <> 1";
				$user=$this->registry['db']->BuildSqlSelect($queryUserArray);
				if ($userData=$this->Query($user))
				{
						return $userData;
				}
				return false;
		}
}
?>
