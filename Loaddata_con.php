<?php
/**
 *
 */
class Loaddata_con extends CI_Controller
{

  public function index(){
    $this->load->view('loaddata');
  }

  public function searchData(){
    $this->load->model('Loaddata_model');
    $user_data = $this->Loaddata_model->getData();
    if($user_data){
      $this->session->set_userdata($user_data);
      redirect('Loaddata_con/index');
    }else {
      $this->session->set_flashdata('msg3','No data records found!');
      redirect('Loaddata_con/index');
    }


  }
  public function action(){

    if (isset($_POST['update_button'])) {
       $this->updatedata();
       session_start();
       $user_data =  array(
         'var' => "",
       );
       $this->session->set_flashdata('msg1','Successfully updated!');
       $this->session->set_userdata($user_data);
       redirect('Loaddata_con/index');
    } else if (isset($_POST['delete_button'])) {
       $this->deletedata();
       $this->session->set_flashdata('msg2','Successfully deleted!');
       redirect('Loaddata_con/index');

    } else {
      echo "Something wrong!";
    }

  }

  public function updatedata(){
    $this->load->model('Loaddata_model');
    $this->Loaddata_model->setData();


  }

  public function deletedata(){
    $this->load->model('Loaddata_model');
    $this->Loaddata_model->delData();

  }

  public function updatedview(){}
}

 ?>
