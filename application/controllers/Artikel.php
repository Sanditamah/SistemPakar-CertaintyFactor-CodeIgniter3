<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

    public function index()
    {
        $this->load->view('partials/head');
        $this->load->view('artikel');
        $this->load->view('partials/footer');
    }
}