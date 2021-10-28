<?php
class M_login extends CI_model{
  function ceklogin ($data){
    return $this-> db -> get_where('users',$data)->row();
  }
}
 ?>
