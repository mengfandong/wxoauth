<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


	public function index()
	{
	   header("Content-Type: text/html; charset=UTF-8");        
       show_oauth_error('获取用户信息失败');
	}
}
