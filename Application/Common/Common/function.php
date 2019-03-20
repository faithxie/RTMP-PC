<?php
/**
 * 应用公共类
 * 20180105
 * zjr
 */

/**
 * 返回错误 json
 */
function Fs($msg='') {
    $res['status'] = 1;
    $res['msg'] = $msg;
    $res['data'] = array();
    echo json_encode($res);
    die();
}

/**
 * 返回正确 json
 */
function Rs($data=array()) {
    $res['status'] = 0;
    $res['msg'] = '成功';
    $res['data'] = $data;
    echo json_encode($res);
    die();
}

/**
 * 返回正确 json
 */
function Ts($msg) {
    $res['status'] = 0;
    $res['msg'] = $msg;
    $res['data'] = $data;
    echo json_encode($res);
    die();
}


function Rl($list, $count=0) {
    $data['code'] = 0;
    $data['count'] = $count;
    $data['msg'] = '';
    $data['data'] = $list;

    echo json_encode($data);
    die();
}

/**
 * 检查必填项是否为空
 */
function check_empty($list) {
    if (!empty($list)) {
        foreach ($list as $val) {
            if (empty(I($val))) {
                Fs($val . '不能为空！');
            }
        }
    }
}