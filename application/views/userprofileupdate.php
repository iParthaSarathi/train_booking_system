<div class="container emp-profile" style="padding-top: 2%;margin-top: 0px;">
    <form method="POST" enctype="multipart/form-data" onsubmit="return updateVal(this)">
        <div class="row">
            <div class="col-md-4" style="padding-top: 2%;margin-top: 0px;">
                <div class="profile-img">
                    <img src="<?php echo base_url()?>assets/upload/<?php echo $_SESSION['photo'] ;?>" alt=""/>
                    <div class="file btn btn-lg btn-primary changePhoto" >
                        Change Photo
                        <input type="file" name="photo" class="changePhoto" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <p style="margin: 2px; color: #0062CC;">Enter Name :</p>
                    <h5 >
                    <input id="firstName" name="firstName" placeholder="First Name" class="form-control firstName"  value="<?php echo ucfirst($_SESSION['fname']);?>" type="text">
                    <input id="lastname" name="lastname" placeholder="Last Name" class="form-control lastname"  value="<?php echo ucfirst($_SESSION['lastname']);?>" type="text">
                    </h5>
                    <h6>
                    <p style="margin: 2px; color: #0062CC;">Add a Bio :</p>
                    <input id="bio" name="bio" placeholder="bio" class="form-control bio"  value="<?php echo ucfirst($_SESSION['bio']);?>" type="text">
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
            
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>Address Provided</p>
                    <input id="address" name="address" placeholder="Address" class="form-control address"  value="<?php echo ucfirst($_SESSION['address']);?>" type="text">
                    <br/>
                    City:<input id="city" name="city" placeholder="city" class="form-control city"  value="<?php echo ucfirst($_SESSION['city']);?>" type="text">
                    <br/>
                    State:<input id="state" name="state" placeholder="state" class="form-control state"  value="<?php echo ucfirst($_SESSION['state']);?>" type="text">
                    <br/>
                    Country:<input id="country" name="country" placeholder="country" class="form-control country"  value="<?php echo ucfirst($_SESSION['country']);?>" type="text">
                    
                    <p>Card Detail</p>
                    Card Type:<input id="paymentCardType" name="paymentCardType" placeholder="payment Card Type" class="form-control paymentCardType"  value="<?php echo ucfirst($_SESSION['paymentCardType']);?>" type="text" readonly>
                    <br/>
                    Card Number:<input id="paymentCardNumber" name="paymentCardNumber" placeholder="0000-0000-0000-0000" class="form-control paymentCardNumber"  value="<?php echo ucfirst($_SESSION['paymentCardNumber']);?>" type="text">
                    <br/>expiry date:<input id="expDate" name="exp" placeholder="mm/yy" class="form-control expDate"  value="<?php echo ucfirst($_SESSION['exp']);?>" type="text">
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
                                <p><input id="userName" name="userName" placeholder="user Name" class="form-control userName"  value="<?php echo $_SESSION['userName'];?>" type="text" readonly>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p><input id="fnamea" name="fnamea" placeholder="Name" class="form-control fnamea"  value="<?php echo ucfirst($_SESSION['fname']);?> <?php echo ucfirst($_SESSION['lastname']);?>" type="text" readonly>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p><input id="email" name="email" placeholder="email" class="form-control email"  value="<?php echo $_SESSION['email'];?>" type="text" readonly>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Phone</label>
                        </div>
                        <div class="col-md-6">
                            <p><input id="phone" name="phone" placeholder="Phone" class="form-control phone"  value="<?php echo $_SESSION['phone'];?>" type="text" readonly>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Profession</label>
                    </div>
                    <div class="col-md-6">
                        <p><input id="work" name="work" placeholder="work" class="form-control work"  value="<?php echo $_SESSION['work'];?>" type="text"></p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-md-6">
                        <label>Gender</label>
                    </div>
                    <div class="col-md-6">
                        <p><input id="gender" name="gender" placeholder="gender" class="form-control gender"  value="<?php echo $_SESSION['gender'];?>" type="text" readonly></p>
                    </div>
                </div>
                 <div class="row">
                <div class="col-md-6">
                    <label>Marital Status</label>
                </div>
                <div class="col-md-6">
                    <p><input id="marriedStatus" name="marriedStatus" placeholder="Marital Status" class="form-control marriedStatus"  value="<?php echo $_SESSION['marriedStatus'];?>" type="text"> </p>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Id Card Type</label>
                    </div>
                    <div class="col-md-6">
                        <p><input id="idcardType" name="idcardType" placeholder="id card Type" class="form-control idcardType"  value="<?php echo $_SESSION['idcardType'];?>" type="text" readonly>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Id Card Number</label>
                    </div>
                    <div class="col-md-6">
                        <p><input id="idCardNum" name="idCardNum" placeholder="id Card Number" class="form-control idCardNum"  value="<?php echo $_SESSION['idCardNum'];?>" type="text" readonly></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Security Qustions</label>
                    </div>
                    <div class="col-md-6">
                        <p><select class="securityQuestion form-control" name="securityQuestion" id="securityQuestion">
                            <option>Favorite food</option>
                            <option>Favorite Book</option>
                            <option>Favorite Car</option>
                            <option>Favorite Color</option>
                            <option>Favorite Fruit</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Security Answer</label>
                </div>
                <div class="col-md-6">
                    <p><input id="secQusAns" name="secQusAns" placeholder="Ans" class="form-control SecQusAns"  value="<?php echo $_SESSION['SecQusAns'];?>" type="password"> </p>
                </div>
            </div>
           
        </div>
    </div>
</div>
</div>
<div class="col-md-3" style="text-align: right;margin-left: 70%;"><input type="submit" name="buttonUpdate" class="profile-edit-btn" name="btnAddMore" value="UPDATE" style="background-color:#658AF7; color: white;" />
</div>
</form>
</div>