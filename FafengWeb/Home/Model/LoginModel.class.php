<?php
namespace Home\Model;

use Think\Model;
class LoginModel extends Model{
	protected $tableName = 'user_sj';
	
	protected $_validate = array(
			array('username','require','用户名不能为空'),
			array('password','require','密码不能为空'),
	);
	
	protected $_auto = array(
			//array('password','md5', 3, 'function'),
			array('lastLogin','time', 1, 'function'),
			
	);
}