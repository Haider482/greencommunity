<?php
/**
 * Created by PhpStorm.
 * User: Haider Ali
 * Date: 7/13/2018
 * Time: 5:30 PM
 */
defined ('BASEPATH') OR exit('No Direct Access Allowed');
class Controller_home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home');
    }
}