<?php
class C_Users extends CI_controller{
  function index(){
    
    $this->load -> model('M_crud');
    $this-> load -> view ('V_header');
    $data ['users']= $this->M_crud->tampil ('users')->result();
    $this->load -> view ('V_users',$data);
    if ($_POST){
      $field ['first_name']= $this-> input -> post ('fname');
      $field ['last_name']= $this-> input -> post ('lname');
      $field ['email']= $this-> input -> post ('email');
      $field ['password']= md5($this-> input -> post ('password'));
      $field ['level']= 2;
      $this->M_crud -> tambah ('users',$field);
      redirect (base_url('C_users'));
    }
    $this->load -> view ('V_footer');
  }
  function edit ($id){
    $this->load -> model('M_crud');
    $this-> load -> view ('V_header');
    $data ['users']= $this->M_crud->tampil ('users')->result();
    $kode ['id_user']=$id;
    $data ['edit'] = $this-> M_crud -> tampil_id('users',$kode)->row ();
    $this->load -> view ('V_edit_users',$data);
    if ($_POST){
      $field ['first_name'] = $this-> input -> post ('fname');
      $field ['last_name'] = $this-> input -> post ('lname');
      $field ['email'] = $this-> input -> post ('email');
      if (empty($this->input -> post ('password'))){
          $field ['password'] = md5($this-> input -> post ('password_lama'));
      }else{
          $field ['password'] = md5($this-> input -> post ('password'));
      }
      $field ['level']= 2;
      $where ['id_user']= $id;
      $this->M_crud -> edit ('users',$field,$kode);
      redirect (base_url('C_users'));
    }
    $this->load -> view ('V_footer');
  }
  function hapus ($id){
    $this-> load -> model ('M_crud');
    $kode ['id_user']=$id;
    $this-> M_crud -> hapus('users',$kode);
    redirect (base_url().'C_users');
  }
}
 ?>
