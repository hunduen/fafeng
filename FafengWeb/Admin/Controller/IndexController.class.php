<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index($name="thinkphp"){
        $Data=M('user_router');
        $result= $Data->find(1);
//        var_dump($result);
        $this->assign('result',$result);
        $this->display();
    }
}