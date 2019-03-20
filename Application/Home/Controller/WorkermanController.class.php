<?php
namespace Home\Controller;
use Think\Controller;


class WorkermanController extends Controller {
   
    public function index() {
    	$this->display();
    }
    public function send($uid,$sendname,$img,$content,$sendid)
    {
    	# code...
    	$gateway = new \Org\Util\Gateway;
    	$gateway::$registerAddress = '0.0.0.0:8899';

    	$sendname =1;
    	$content = '222';
    	$sendid = 1;
    	$uid = '1';
    	$msg = array(
    		'sendname'=>$sendname,
    		'img'=>$img,
    		'content'=>$content,
    		'sendid'=>$sendid
    	);
    	$msg = json_encode($msg);
    	$gateway::sendToUid($uid,$msg);
    }
    public function bind(){
    	$gateway = new \Org\Util\Gateway;
    	$gateway::$registerAddress = "0.0.0.1:8889";
    	$uid = 1;
    	$client_id = 2;
    	$gateway::bindUid($client_id,$uid);
    }
}