<?php
namespace Home\Controller;

use Think\Controller;
class CommonController extends Controller{
	public static $username;
	
	public function _initialize (){
		if(session('username')){
			$this->username =session('username');
		}else{
			$this->error('请先登录...',U('User/login'));
		}
	}
}