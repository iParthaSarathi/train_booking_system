
<div class="container emp-profile" style="padding-top: 2%;margin-top: 0px;">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img img-rounded">
                    <img src="<?php echo base_url()?>assets/upload/<?php echo $_SESSION['photo'] ;?>" alt=""/>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                    <?php echo ucfirst($_SESSION['fname']);?> <?php echo ucfirst($_SESSION['lastname']);?>
                    </h5>
                    <h6>
                    <?php echo ucfirst($_SESSION['bio']);?>
                    </h6>
                    <p class="proile-rating">Birth Day : <span><?php echo $_SESSION['birthDate'];?></span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <a href="<?php echo base_url("index.php/welcome/userprofileEdit"); ?>"><input type="button" class="profile-edit-btn" name="btnMore" value="Edit Profile"/></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>Address Provided</p>
                    <a href=""><?php echo ucfirst($_SESSION['address']);?></a><br/>
                    <a href="">City:<?php echo ucfirst($_SESSION['city']);?></a><br/>
                    <a href="">State:<?php echo ucfirst($_SESSION['state']);?></a><br/>
                    <a href="">Country:<?php echo ucfirst($_SESSION['country']);?></a>
                    <p>Card Detail</p>
                    <a href="">Card Type:<?php echo ucfirst($_SESSION['paymentCardType']);?></a><br/>
                    <a href="">Card Number:<?php echo ucfirst($_SESSION['paymentCardNumber']);?></a><br/>
                    <a href="">expiry date:<?php echo ucfirst($_SESSION['exp']);?></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>User Id</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $_SESSION['userName'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo ucfirst($_SESSION['fname']);?> <?php echo ucfirst($_SESSION['lastname']);?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $_SESSION['email'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $_SESSION['phone'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Profession</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $_SESSION['work'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $_SESSION['gender'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Marital Status</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $_SESSION['marriedStatus'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Id Card Type</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $_SESSION['idcardType'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Id Card Number</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $_SESSION['idCardNum'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Security Qustions</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $_SESSION['securityQuestion'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Security Answer</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $_SESSION['SecQusAns'];?></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>