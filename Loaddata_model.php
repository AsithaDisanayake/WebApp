<?php
/**
 *
 */
class Loaddata_model extends CI_Model
{

  public function getData(){
    $this->db->from('user');
    $this->db->where('indexno',$this->input->post('search',TRUE));
    return $this->db->get()->row_array();

  }
  public function setData(){
    $data = array(
      'indexno' => $this->input->post('indexno',TRUE),
      'fname' => $this->input->post('fname',TRUE),
      'lname' => $this->input->post('lname',TRUE),
      'tno' => $this->input->post('tno',TRUE),

    );

    $this->db->where("indexno",$data['indexno']);
    $this->db->update("user",$data);
  }

  public function delData(){
    $this->db->where('indexno', $this->input->post('indexno',TRUE));
    $this->db->delete('user');
    echo $this->input->post('indexno',TRUE);
  }
}

 ?>
