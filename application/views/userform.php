<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
if ($_SESSION['fomcompleate']==1) {
	redirect(base_url().'index.php/Welcome/dashIndex');
}
if(!$this->session->has_userdata('id')){
	redirect(base_url().'index.php/Welcome/index');
}

 

  //echo $_SESSION['id'] ;
  //echo $_SESSION['address'];

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Register Form</title>

    <link href="<?php echo base_url("assets/css/all.min.css"); ?>" rel="stylesheet" type="text/css">
  <!-- Google Fonts -->
  <link href="<?php echo base_url("assets/css/css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/css(1)"); ?>" rel="stylesheet" type="text/css">
  <!-- Plugin CSS -->
  <link href="<?php echo base_url("assets/css/magnific-popup.css"); ?>" rel="stylesheet">
  <!-- Theme CSS - Includes Bootstrap -->
  <link href="<?php echo base_url("assets/css/creative.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/trainChgkCommon.css"); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/all.css"); ?>">

  </head>

  <body>
  	

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-white bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?php echo base_url("assets/image/user.png"); ?>" alt="" class="regFromStyle"><span style="padding-left: 15px;"><?php echo $_SESSION['userName'];?></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link logOutBtn" href="<?php echo base_url("index.php/welcome/logout"); ?>">Log Out
                <span class="sr-only">(current)</span>
              </a>
          </ul>
        </div>
      </div>
    </nav>
    <p class="formHeadMsg">Please Fill The Form For Complete Your Registration</p>
    <div class="container">
    	<form class="well form-horizontal" method="POST" action="" onsubmit="return onSave(this)">
      <table class="table table-striped">
        <tbody>
          <tr>
            <td colspan="1">
                <fieldset>
                  <div class="form-group">
                    <label class="col-md-4 control-label">First Name</label>
                    <div class="col-md-8 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span><input id="firstName" name="firstName" placeholder="First Name" class="form-control firstName"  value="" type="text"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Birth Date</label>
                    <div class="col-md-8 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-home"></i>
                        </span><input id="datepicker" name="datepicker" class="form-control"  value="" type="date" min="<?php echo date("Y-m-d",strtotime("-80 year")); ?>" max="<?php echo date("Y-m-d"); ?>"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">City</label>
                    <div class="col-md-8 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-home"></i>
                        </span><input id="city" name="city" placeholder="City" class="form-control city"  value="" type="text"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Marital Status</label>
                    <div class="col-md-8 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-home"></i>
                        </span><input id="marriedStatus" name="marriedStatus" placeholder="Marital Status" class="form-control"  value="" type="text"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Id Card Number</label>
                    <div class="col-md-8 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-home"></i>
                        </span><input id="idCardNumber" name="idCardNumber" placeholder="Id Card Number" class="form-control idCardNumber"  value="" type="text"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Security Ans</label>
                    <div class="col-md-8 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-home"></i>
                        </span><input id="securityAns" name="securityAns" placeholder="Security Ans" class="form-control securityAns"  value="" type="text"></div>
                    </div>
                  </div>
                </fieldset>
            </td>
            <td colspan="1">
              <form class="well form-horizontal">
                <fieldset>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Last Name</label>
                    <div class="col-md-8 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span><input id="lastName" name="lastName" placeholder="Last Name" class="form-control lastName"  value="" type="text"></div>
                    </div>
                  </div>
               
                  <div class="form-group">
                    <label class="col-md-4 control-label">Address</label>
                    <div class="col-md-8 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-home"></i>
                        </span><input id="address" name="address" placeholder="Address " class="form-control address"  value="" type="text"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">State</label>
                    <div class="col-md-8 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-home"></i>
                        </span><input id="state" name="state" placeholder="State" class="form-control state"  value="" type="text"></div>
                    </div>
                  </div>
                     <div class="form-group">
                    <label class="col-md-4 control-label">Id Card Type</label>
                    <div class="col-md-8 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-home"></i>
                        </span><select class="selectIdCard form-control" name="selectIdCard" id="selectIdCard">
                          <option>Voter</option>
                          <option>Pan</option>
                          <option>Aadhar</option>
                          <option>Passport</option>
                        </select></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Security Qustions</label>
                    <div class="col-md-8 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-home"></i>
                        </span><select class="securityQust form-control" name="securityQust" id="securityQust">
                          <option>Favorite food</option>
                          <option>Favorite Book</option>
                          <option>Favorite Car</option>
                          <option>Favorite Color</option>
                          <option>Favorite Fruit</option>
                        </select></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-earphone"></i>
                        </span><input id="subButton" name="subButton" class="form-control subButton" value="Submit" type="submit"></div>
                    </div>
                  </div>
                </fieldset>
            </td>
          </tr>
        </tbody>
      </table>
      </form>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
<!-- Plugin JavaScript -->
<script src="<?php echo base_url("assets/js/jquery.easing.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/jquery.magnific-popup.min.js"); ?>"></script>
<!-- Custom scripts for this template -->
<script src="<?php echo base_url("assets/js/creative.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/userForm.js"); ?>"></script>
  </body>

</html>