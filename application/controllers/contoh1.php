<?php
class contoh1 extends CI_Controller
{
    public function index()
    {
        // echo "<h1>Perkenalkan</h1>";
        // echo "nama saya Lyon saya tinggal di daerah bumi olahraga yang saya sukai adalah tidur";
		$this->load->view('welcome_message2');

    }
}