<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {
	public function index(){
		$user = D('user_sj');
		var_dump($user->select());
	}
	public function register(){
		if(IS_POST){
			$data['username'] = $_POST['username'];
			$data['password'] = $_POST['password'];
			$data['repassword'] = $_POST['repassword'];
			$data['email'] = $_POST['email'];
			$data['verify'] = $_POST['verify'];
			
			 /* if($data['password'] != $data['repassword']){
				$this->error('密码和重复密码不一致！'); 
			} */ 
			$user_sj = D('user_sj');
			if($user_sj->create($data)){
			
	 			$user_router = D('user_router');
				if($user_router->create()){
					$user_router->add();
					$uid = $user_router->getLastInsID();
		
					$data['uid'] = $uid;			
						
						if($user_sj->add($data)){
							session('username', $data['username']);
							$this->success("注册成功，正跳转至首页...", U('Index/index'));
						}else{
							$this->error("注册失败");
						}
				}else{
					var_dump($user_router->getError());
				}
			}else{
				var_dump($user_sj->getError());
			}
						
		}else{
			$this->display();
		}
		
	}
	
	public function login(){
		if(IS_POST){
			$login = D('login');
			
			if(!$data = $login->create()){
				header("Content-type: text/html; charset = utf-8");
			}
			
			$where = array();
			$where['username'] = $data['username'];
			$where['password'] = $data['password'];
			$result = $login->where($where)->find();
			//var_dump($result);
			if($result){
				session('username', $result['username']);
				$login->where($where)->save($data);
				$this->success("成功登录，正跳转...", U('Index/index'));
			}else{
				$this->error('登录失败,用户名或密码不正确!');
			} 
		}else{
			$this->display();
		}
	}
	
	public function verify()
	{
		// 实例化Verify对象
		$verify = new \Think\Verify();
	
		// 配置验证码参数
		$verify->fontSize = 14;     // 验证码字体大小
		$verify->length = 4;        // 验证码位数
		$verify->imageH = 34;       // 验证码高度
		$verify->useImgBg = true;   // 开启验证码背景
		$verify->useNoise = false;  // 关闭验证码干扰杂点
		$verify->entry();
	}
	
}