<?php
/**
 * Created by PhpStorm.
 * User: Haider Ali
 * Date: 7/14/2018
 * Time: 2:15 AM
 */

class controller_team extends CI_Controller
{
    public function index()
    {
        $this->load->view('our-team');
    }
}