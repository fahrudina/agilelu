<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ping extends CI_Controller {
	public function index()
	{
		$data = array("alive"=>true);
		header('Content-Type: application/json');
		echo json_encode($data);
	}
}
