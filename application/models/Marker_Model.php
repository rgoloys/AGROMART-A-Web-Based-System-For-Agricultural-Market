<?php
#[\AllowDynamicProperties]
class Marker_Model extends CI_model{

  public function save(){

    $unik =$this->session->userdata('auth_user')['unique_id'];
     $data = [
        'LocName' => $this->input->post('LocName', true),
        'LocDescription' => $this->inout->post('LocDescription', true),
        'Lat' => $this->input->post('Lat', true),
        'Lng' =>$this->input->post('Lng', true),
        'unique_id'=> $unik
     ];
     $this->db->insert('marker', $data);
  }

  public function get(){
    return $this->db->get('marker')->result_array();
  }
}
