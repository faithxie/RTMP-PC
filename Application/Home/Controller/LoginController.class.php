<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 登录类
 */
class LoginController extends Controller {
    /**
     * 显示登录页
     */
    public function index(){
        $this->display();
    }

    /**
     * 登录验证
     */
    public function check_login() {
        // 账号
        $username = I('username');
        // 密码
        $password = I('password');

        // 检查必填项是否为空
        check_empty(['username', 'password']);

        // 验证登录信息
        

        //$user_info =M('smUserid')->where(array('UserName'=>$username))->select();

        $condition['phone'] =  $username;
        // $user_info = M('')->db(1,C('DB_JX'))->table($tablename)
        //     ->where($condition)
        //     ->select();
          $user_info = M('ggUser')->where($condition)->select();
       

        if ($user_info && ($password == $user_info[0]['password'])) {
            // 保存登录信息到session
            // $user['name'] = $user_info[0]['userinfo'];
            // $user['manager'] = $user_info[0]['manager'];

            $user = $user_info[0];

            session('email', $username);
            session('password', $password);
            session('phone', $user_info[0]['phone']);

            session('user', $user); 
            Rs();
        } else {
            Fs('账号或密码不正确！');
        }
    }
    public function logout($value='')
    {
        # code...
         session(null);
        $this->redirect("Login/index");
    }
}