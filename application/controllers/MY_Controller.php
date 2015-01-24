<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*******************************************************************************
 * System           : CMS
 * Sub System       : CI_Controller
 * File Name        : MY_Controller.php
 * Description      : Abstract controller
 * Version          : 1.0
 * ------------- ----- ---------------- ----------------------------------------
 * Date          Ver.  Editor           Description
 * ------------- ----- ---------------- ----------------------------------------
 * 2010/01/11    1.0   ChiLT             Initial
 *******************************************************************************
 *
 *******************************************************************************
 */
 class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $logged_in = $this->session->userdata('user_logged');
        if($logged_in['logged_in'] != TRUE){
			redirect('authenticate', 'refresh');
        }
    }

    function index() {
        exit('No direct script access allowed');
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */