<?php
namespace Home\Model;

use Think\Model;
class UserSjModel extends Model{
	
	protected $_validate = array(
			
			array('username','require','Username can not be empty!'),
			array('password','require','Password can not be empty!'),
			array('email','require','Email can not be empty!'),
			array('repassword','require','Please input password again!'),
			array('username', '', 'The username was used!', 0, 'unique', 1), // 在新增的时候验证name字段是否唯一
			array('email', '', 'The email was used!', 0, 'unique', 1), // 新增的时候email字段是否唯一
			array('mobile', '', '该手机号码已被占用', 0, 'unique', 1), // 新增的时候mobile字段是否唯一
			// 正则验证密码 [需包含字母数字以及@*#中的一种,长度为6-22位]
			array('password', '/^([a-zA-Z0-9@*#]{6,22})$/', 'The password format is wrong, please re-input!', 0),
			array('repassword', 'password', 'The confirmed password is wrong', 0, 'confirm'), // 验证确认密码是否和密码一致
			array('email', 'email', 'The email format is wrong, please re-input!'), // 内置正则验证邮箱格式
			array('verify', 'verify_check', '验证码错误', 0, 'function'), // 判断验证码是否正确
	);
	
	protected $_auto = array(
			array('password','md5', 3, 'function'),
			
	);
}