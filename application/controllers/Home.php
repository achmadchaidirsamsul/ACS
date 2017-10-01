<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Mohon untuk tidak Menambah, Menghapus, atau Memodifikasi pesan ini.
 * Copyright (c) 2017 ACS. 

 * Created by NetBeans IDE 8.2 .
 * User    :   ACS
 * Date    :   29/09/2017
 * Time    :   13:33:36
 */

/**
 * Description of Home
 *
 * @author ACS
 */
class Home extends CI_Controller { 
    
    public function index() {
        $this->load->view('index');
    }
    
}
