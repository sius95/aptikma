<?php

	class Beranda extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->library("session");
		}

		public function index(){
			$this->load->view("admin/beranda");
		}

	}
?>