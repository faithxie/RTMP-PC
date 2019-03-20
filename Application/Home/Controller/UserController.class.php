<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 机构管理
 */
class UserController extends BaseController {
    /**
     * 人员管理列表
     */
    public function index() {
      
      	$id = I('id');
      	$my = I('my');
      	$this->assign('id',$id);
      	$this->assign('my',$my);
        $this->display();
    }
    public function publish($value='')
    {
    	# code...
    	$myphone = I('myphone');
    	$callphone = I('callphone');

    	$url = "http://xxxxxxx.cn/mqtt/examples/postmessage.php";
			//初始化
		    $curl = curl_init();
		    //设置抓取的url
		    curl_setopt($curl, CURLOPT_URL, $url );
		    //设置头文件的信息作为数据流输出
		    curl_setopt($curl, CURLOPT_HEADER, 1);
		    //设置获取的信息以文件流的形式返回，而不是直接输出。
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		    //设置post方式提交
		    curl_setopt($curl, CURLOPT_POST, 1);
		    //设置post数据
		    $post_data = array(
		        "myphone" => $myphone,
		        "callphone" => $callphone
		        );
		    curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
		    //执行命令
		    $data = curl_exec($curl);
		    //关闭URL请求
		    curl_close($curl);
		    //显示获得的数据
		   $r = json_encode($data);
		   echo $r;

    }
  }
   