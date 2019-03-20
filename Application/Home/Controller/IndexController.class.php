<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends BaseController {
    /**
     * 系统首页
     */
    public function index() {
        $user = session('user');
        $my =  $user['phone'];
        $this->assign('my',$my);
        $this->assign('name',$user['realname']);
        $this->display();
    }
    public function tree()
    {
        # code...
         $user = session('user');
       $phone =  $user['phone'];
        $map['phone']  = array('neq', $phone);
        $tree = M('ggUser')->field('realname as text,phone as id')->where($map)->limit(200)->select();

        $this->ajaxreturn($tree);
    }
    public function connect($value='')
    {
        # code...
        $id = I('id');
        $this->assign('id',$id);
        $this->display();
    }
}