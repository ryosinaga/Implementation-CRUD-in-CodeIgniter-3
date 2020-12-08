<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {
    public function tambah_praktik(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'npm' => $this->input->post('npm'),
            'kelas' => $this->input->post('kelas'),
            'region' => $this->input->post('region')
    );
    //insert data
    $this->db->insert('tbl_praktikan', $data);
    if($this->db->affected_rows()>0){
        $this->session->set_flashdata('pesan','Ditambah');
        redirect('Dashboard','refresh');
    }
    }

   //select data
   public function get_praktikan(){
    return $this->db->get('tbl_praktikan')->result_array();
   }
   //hapus data
   public function hapus_data($id){
       $this->db->delete('tbl_praktikan', array('id_praktikan' => $id));
       if($this->db->affected_rows()>0){
        $this->session->set_flashdata('pesan','dihapus');
        redirect('Dashboard','refresh');
    }
    
   }
   //update data
   public function get_selected_praktikan($id){
    return $this->db->get_where('tbl_praktikan', ['id_praktikan' => $id])->row_array();
   }
   public function submit_edit(){
    $data = array(
        'nama' => $this->input->post('nama'),
        'npm' => $this->input->post('npm'),
        'kelas' => $this->input->post('kelas'),
        'region' => $this->input->post('region')
);
$this->db->where('id_praktikan',$this->input->post('id_praktikan') );
$this->db->update('tbl_praktikan', $data);
if($this->db->affected_rows()>0){
    $this->session->set_flashdata('pesan','diubah');
    redirect('Dashboard','refresh');
}
   }
}
