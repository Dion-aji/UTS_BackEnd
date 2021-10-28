<?php
class C_beranda extends CI_controller {
  function index (){
    $this->load -> view ('V_header');
    $this->load -> view ('V_selamatDatang');
    $this->load -> view ('V_footer');
  }
}
 ?>
