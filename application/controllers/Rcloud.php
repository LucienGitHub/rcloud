<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 融云接口控制器
 */
class Rcloud extends CI_Controller {


	//获取Tocken
	public function getToken()
	{	
		$this->load->library('rongcloud.php');
		$appKey = 'uwd1c0sxugm61';
		$appSecret = 'nOYQR0H1cjl';
		$jsonPath = "jsonsource/";
		$RongCloud = new RongCloud($appKey,$appSecret);

		echo ("\n***************** 获取Token **************\n");
		// 获取 Token 方法
		$result = $RongCloud->user()->getToken('userId1', 'username', 'http://www.rongcloud.cn/images/logo.png');
		echo "getToken   <pre> ";
		print_r($result);
		echo "\n";
	}
}
