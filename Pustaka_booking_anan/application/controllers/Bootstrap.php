<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bootstrap extends Ci_Controller{
    function index(){
        $this->load->view('v_bootstrap');
    }
}