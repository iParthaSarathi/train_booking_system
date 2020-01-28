<section class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">WALLET BALANCE</h5>
            <hr>
            <ul class="fa-ul">
              <li style="font-size:35px;"><span class="fa-li"><i class="fas fa-check" style="padding-left: 32%;font-size:25px;color:green"></i></span><?php echo $_SESSION['wallet'];?></li>
              
            </ul>
            <p style="font-size: 10px;">*This Wallet Balance Only Can Be Used For This Website</p>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4" >
        <div class="card mb-5 mb-lg-0" >
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">ADD MONEY</h5>
            <h6 class="card-price text-center"><span class="period"></span></h6>
            <hr>
                <div class="profile-work">
                    Card Type:<input  placeholder="payment Card Type" class="form-control"  value="<?php echo ucfirst($_SESSION['paymentCardType']);?>" type="text" readonly>
                    <br/>
                    Card Number:<input placeholder="" class="form-control"  value="<?php echo ucfirst($_SESSION['paymentCardNumber']);?>" type="text" readonly>
                    <br/>expiry date:<input  placeholder="" class="form-control "  value="<?php echo ucfirst($_SESSION['exp']);?>" type="text" readonly>
                </div>
           <input onclick="document.getElementById('id01').style.display='block'" class="btn btn-block btn-primary text-uppercase addMoneyStyl" value="Add Money">
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">ADD CARD</h5>
            <h6 class="card-price text-center"><span class="period" style="font-size: 10px;color:#FF6159 ">*Add Card Automatically Replace The Previous Saved Card</span></h6>
            <hr>
            <form action="" method="POST" onsubmit="return addCard(this)">
            <div class="row">
            <div class="col-md-12">
                <div class="profile-work">
                     Card Type:<input id="paymentCardType" name="paymentCard" placeholder="payment Card Type" class="form-control paymentCardType"  value="<?php echo ucfirst($_SESSION['paymentCardType']);?>" type="text" readonly>
                    <br/>
                    Card Number:<input id="paymentCardNumber" name="CardNumber" placeholder="0000-0000-0000-0000" class="form-control paymentCardNumber"  value="<?php echo ucfirst($_SESSION['paymentCardNumber']);?>" type="text">
                    <br/>expiry date:<input id="expDate" name="expdate" placeholder="mm/yy" class="form-control expDate"  value="<?php echo ucfirst($_SESSION['exp']);?>" type="text">
                </div>
            </div>
          </div>
            <input type="submit" name="addCardSub" class="btn btn-block btn-primary text-uppercase" value="ADD CARD">
             </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="id01" class="modal1">
  
  <form class="modal1-content animate" method="POST" action="<?php echo base_url('index.php/welcome/wallet')?>" onsubmit="return addMoneyOn(this)">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span><i class="fas fa-wallet avatar" style="font-size:45px;color:green"></i>
    </div>

    <div class="container">
      <label for="uname"><b>Enter Amount</b></label>
      <input type="text" id="enterAmount" placeholder="Enter Amount" name="enterAmount" class="stylevalotp" ><br>
      <label for="uname"><b>Enter CVV</b></label>
       <input type="text" id="enterCvv" placeholder="Enter CVV" name="enterCvv" class="stylevalotp" ><br>
       <label id="feedback" > </label><br>
       <input type="hidden" name="" value="" id="storeOtp">

      <label for="psw"><b>Enter Otp</b></label>
      <input type="password" id="otpForWallet" placeholder="Enter otp" name="otpForWallet" class="styleotp otpForWallet">
      <button type="button" class="cancelbtn sentOtp">Sent Otp</button>
        
      <button type="submit" name="moneySubmit" class="moneyOnOtp">Add Money</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="submit" name="moneySubmit" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>