<?php
namespace Home\Model;

use Think\Model;
class UserRouterModel extends Model{
	
	protected  $_validate = array(
			array('username','require','Please input username!'),
			array('username','','the username was used! Please re-input!', 2 ,'unique',1),
	);

}