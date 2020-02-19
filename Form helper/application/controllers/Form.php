<?php 
defined('BASEPATH') OR exit ('no direct script access allowed');

/**
 * 
 */
class Form extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('coba_form');
	}
}