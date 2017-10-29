<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="utf-8">
    <style>
      #myform{margin-top: 30px;}
    </style>
    <title></title>
  </head>
  <body>

    <div class="container" style="margin-top:50px;margin-bottom:25px;">

      	<div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                  <div id="imaginary_container">
                    <?php echo form_open('Loaddata_con/searchData'); ?>
                      <div class="input-group stylish-input-group">
                          <input type="text" class="form-control" name="search"  placeholder="Search by indexno" >
                          <span class="input-group-addon">
                              <button type="submit">
                                  <span class="glyphicon glyphicon-search"></span>
                              </button>
                          </span>
                      </div>
                    <?php echo form_close(); ?>
                  </div>
              </div>
      	</div>
        <?php
        if($this->session->flashdata('msg1')){
          echo "<h4>".$this->session->flashdata('msg1')."</h4>";
        }elseif ($this->session->flashdata('msg2')) {
          echo "<h4>".$this->session->flashdata('msg2')."</h4>";
        }elseif ($this->session->flashdata('msg3')) {
          echo "<h4>".$this->session->flashdata('msg3')."</h4>";
        }
        session_destroy();
         ?>


        <?php echo form_open('Loaddata_con/action', 'class="form-horizontal" id="myform"'); ?>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Id:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"  placeholder="Index No" name="id" value="<?php echo $this->session->userdata('indexno');  ?>">
          </div>
        </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">First Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  placeholder="First Name" name="fname" value="<?php echo $this->session->userdata('fname');  ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Last Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  placeholder="Last Name" name="lname" value="<?php echo $this->session->userdata('lname');  ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Tel No:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  placeholder="Tel No" name="tno" value="<?php echo $this->session->userdata('tno');  ?>">
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-6">
                <button style="width:120px;" type="submit" class="btn btn-default" name="update_button">Update</button>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-6">
                <button style="width:120px;" type="submit" class="btn btn-default" name="delete_button">Delete</button>
              </div>
            </div>

          </div>

        <?php echo form_close(); ?>



    </div>
    <!-- main containter -->


  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
