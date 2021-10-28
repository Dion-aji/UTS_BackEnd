<?php
class C_produk extends CI_controller{
function index (){
  
  $this-> load -> model ('M_crud');
  $this-> load -> view ('V_header');
  $data ['produk']=$this->M_crud -> tampil ('produk')->result();
  $this-> load -> view ('V_produk',$data);
  if ($_POST){
    $field ['nama_produk']= $this->input -> post ('nama_produk');
    $field ['harga_satuan']= $this->input -> post ('harga');
    $field ['stok']= $this->input -> post ('stok');
    $this->M_crud -> tambah ('produk',$field);
    redirect (base_url().'C_produk');
  }
  $this-> load -> view ('V_footer');
}
function hapus ($id){
  $this->load -> model ('M_crud');
  $kode ['id_produk']=$id;
  $this-> M_crud -> hapus ('produk',$kode);
  redirect (base_url().'C_produk');
}
function edit($id){
  $this-> load -> model ('M_crud');
  $this-> load -> view ('V_header');
  $data ['produk']=$this->M_crud -> tampil ('produk')->result();
  $kode ['id_produk']=$id;
  $data ['edit']= $this-> M_crud ->tampil_id('produk',$kode)->row ();
  $this-> load -> view ('V_edit_produk',$data);
  if ($_POST){
    $field ['nama_produk']= $this->input -> post ('nama_produk');
    $field ['harga_satuan']= $this->input -> post ('harga');
    $field ['stok']= $this->input -> post ('stok');
    $this->M_crud ->edit ('produk',$field,$kode);
    redirect (base_url().'C_produk');
  }
  $this-> load -> view ('V_footer');
}
}
 ?>
