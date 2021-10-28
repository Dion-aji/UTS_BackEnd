<?php
class C_login extends CI_Controller {
  function index (){
    
    $this-> load -> model('M_login');
    $this-> load -> view ('V_login');
    if ($_POST){
      $email = $this->input ->post ('email');
      $pass  = $this-> input ->post ('password');
      $user  = $this-> M_login ->ceklogin (['email' => $email]);

      //jika email terdaftar maka akan ke beranda
      if ($user){
        if ($user -> password == md5($pass)){
          $sessi =[
            'nama'=>$user -> first_name,
            'level'=>$user -> level ,
            'id_user'=>$user -> id_user
          ];
          $this-> session ->set_userdata($sessi);
          redirect (base_url().'C_beranda');
        }else {
            echo "<script>alert('passw belum terdaftar')</script>";
        }
      }else {
          echo "<script>alert('email belum terdaftar')</script>";
      }
    }
  }
  function keluar (){
    session_destroy();
    redirect ('./');
  }
}
 ?>
