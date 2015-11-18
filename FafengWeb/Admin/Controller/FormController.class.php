<?php
namespace Admin\Controller;
use Think\Controller;
class FormController extends Controller{
    public function form(){
        echo "__URL__";
    }
    //添加数据（增）
    public function insert(){
        $Form=D('Form');
        if($Form->create()){
            $result=$Form->add();
            if($result){
                $this->success("数据添加成功");
            }else{
                $this->error("数据添加失败");
            }
        }else{
            $this->error($Form->getError());
        }
    }
    //读取数据（查）
    public function read($id=1){
        $Form=M('form');
        $data=$Form->find($id);
        if($data){
            $this->assign('data',$data);
        }else{
            $this->error('数据错误');
        }
        $this->display();
    }
    //修改数据（改）
    public function edit($id=0){
        $Form=M('form');
        $this->assign('vo',$Form->find($id));
        $this->display();
    }
    public function update(){
        $Form=D('Form');
        if($Form->create()){
            $result=$Form->save();
            if($result){
                $this->success("更新成功！");
            }else{
                $this->error("更新失败！");
            }
        }else{
            $this->error($Form->getError());
        }
    }
    //删除数据（删）
    public function delete($id=1){
        $Form=M('form');
        $this->assign('del',$Form->find($id));
        $this->display();
    }
    public function realDelete(){
        $Form=D('Form');
        if($Form->create()){
            $result=$Form->delete();
            if($result){
                $this->success("删除成功！");
            }else{
                $this->error("删除失败！");
            }
        }else{
            $this->error($Form->getError());
        }
    }
}

