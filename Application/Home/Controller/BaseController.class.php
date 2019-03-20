<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 公共类
 */
class BaseController extends Controller {
    /**
     * 登录验证
     */
    public function _initialize() {
        // 判断登录状态
        $user = session('user');

        // 排除不需要登录判断的页面
        $except = [];
        if (!in_array(CONTROLLER_NAME, $except)) {
            if (empty($user)) { // 未登录or登录失效
                // 不允许未登录用户访问，登录路径
                if ('Login' != CONTROLLER_NAME) {
                    // 跳转到首页
                    $this->redirect("Login/index");
                }
            } else { // 已登录
                // 已登录状态下，不允许跳转到登录页
                if ('Login' == CONTROLLER_NAME) {
                    // 跳转到首页
                    $this->redirect("Index/index");
                }
            }
        }
    }

    /**
     * 上传文件
     */
    public function upload_file() {
        $upload = new \Think\Upload();// 实例化上传类
        // $upload->maxSize   =     31457280;// 设置附件上传大小
        $upload->exts      =     array('swf', 'mp4', 'jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        // 上传单个文件 
        $info   =   $upload->uploadOne($_FILES['file']);

        $data['code'] = 0;
        $data['msg'] = "";
        $data['data'] = array("src"=>$info['savepath'].$info['savename'], "title"=>$info['savename'], 'demo'=>UPLOADS.$info['savepath'].$info['savename']);

        echo json_encode($data);
    }

    /**
     * layedit 上传文件
     */
    public function layedit_upload_file() {
        $upload = new \Think\Upload();// 实例化上传类
        // $upload->maxSize   =     31457280;// 设置附件上传大小
        $upload->exts      =     array('swf', 'mp4', 'jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        // 上传单个文件 
        $info   =   $upload->uploadOne($_FILES['file']);

        $data['code'] = 0;
        $data['msg'] = "";
        $data['data'] = array("src"=>UPLOADS.$info['savepath'].$info['savename'], "title"=>$info['savename']);

        echo json_encode($data);
    }

    /**
     * 退出登录
     */
    public function logout() {
        session('user', null);
        $this->redirect('Login/index');
    }

    /**
     * 修改密码
     */
    public function change_pw() {
        // 密码
        $password = I('password');

        // 当前登录用户信息
        $user = session('user');

        if (!empty($password) && !empty($user)) {
            $res = M()->execute("UPDATE admin SET password='".md5($password)."' WHERE id=".$user['id']);

            if ($res !== false) {
                Rs();
            } else {
                Fs();
            }
        } else {
            Fs();
        }
    }
}