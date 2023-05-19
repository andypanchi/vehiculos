<?php
  /**
   *
   */
  class Vehiculos extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
    }
    //Creamos una funcion que renderiza la vidta de Vehiculos
    public function nosotros(){
      $this->load->view('header');
      $this->load->view('vehiculos/nosotros');
      $this->load->view('footer');
    }

    public function automoviles(){
      $this->load->view('header');
      $this->load->view('vehiculos/automoviles');
      $this->load->view('footer');
    }

    public function camionetas(){
      $this->load->view('header');
      $this->load->view('vehiculos/camionetas');
      $this->load->view('footer');
    }

    public function camiones(){
      $this->load->view('header');
      $this->load->view('vehiculos/camiones');
      $this->load->view('footer');
    }
    public function suvs(){
      $this->load->view('header');
      $this->load->view('vehiculos/suvs');
      $this->load->view('footer');
    }

    public function index(){
      $this->load->view('header');
      $this->load->view('vehiculos/index');
      $this->load->view('footer');
    }

    public function nuevo(){
      $this->load->view('header');
      $this->load->view('vehiculos/nuevo');
      $this->load->view('footer');
    }
  }



 ?>
