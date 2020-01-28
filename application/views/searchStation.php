<?php
if (!isset($_GET["vid"])) {
echo ' <div class="container-fluid" >
  <!-- DataTales Example -->
  <div class="card shadow mb-4" style="height:390px;padding-top:50px;text-align:center;color:green;">
    please search train and select the train for booking </br>In Order To Search Train To And From
    Station Use Space Between Two Station
  </div></div>';
  }else{ ?>  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Train Booking Form For This Train</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <label for="uname"><b>Check Date</b></label>
          <input id="datepickerpmn" name="datepickerpmn" class="form-control"  value="" type="date" min="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d",strtotime("+3 month")); ?>">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"style="font-size: 11px;" >
            <thead>
              <tr>
                <th>Train No</th>
                <th>Train Name</th>
                <th>Operating Day</th>
                <th>Arrival </th>
                <th>Departure</th>
                <th>Stations</th>
                <th>Seat Available </th>
                <th>Speed</th>
                <th>Quota</th>
                <th>Cupon</th>
              </tr>
            </thead>
            <tbody style="font-size: 11px;">
              <?php
              if($trainList ->num_rows() > 0){
              foreach($trainList->result() as $row){
              ?>
              <tr>
                <td><?php echo $row->trainNo ;?></td>
                <td><?php echo $row->TrainName ;?></td>
                <td><?php echo $row->operatingDay ;?></td>
                <td><?php echo $row->ArrvialTime ;?></td>
                <td><?php echo $row->DeparturetTime ;?></td>
                <td><?php echo $row->trainStation ;?></td>
                <td><?php echo $row->seatAvlForBooking ;?></td>
                <td><?php echo $row->speed;?></td>
                <td><?php echo $row->quota;?></td>
                <td><?php echo $row->cupon;?></td>
                
              </tr>
              <?php } } ?>
            </tbody>
          </table>
          <div  class="table-responsive">
            <form class=" animate" method="POST" action="<?php echo base_url('index.php/welcome/searchStation')?>" onsubmit="return ConfPayment(this)">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"style="font-size: 11px;text-align: center;">
                  <tbody>
                    <tr>
                      <td style="width:25%">
                       
                         <label for="uname"><b>Enter Name</b></label>
                <input type="text" id="enterName" placeholder="Enter Full Name" name="enterName" class="stylevalotp enterName" value="<?php echo $_SESSION['fname']." ".$_SESSION['lastname']?>">
                      </td>
                      <td style="width:25%">
                         <label for="uname"><b>Enter Age</b></label>
                <input type="number" id="enterage" placeholder="Enter Age" name="enterage" class="stylevalotp enterage" >
                      </td>
                      <td style="width:25%">
                         <label for="uname"><b>Enter Id Card Type</b></label>
                         <select class="stylevalotp form-control enterIdCard" name="enterIdCard" id="enterIdCard" style="font-size: 11px;">
                          <option selected>Voter</option>
                          <option>Voter</option>
                          <option>Pan</option>
                          <option>Aadhar</option>
                          <option>Passport</option>
                        </select>
                      </td>
                      <td style="width:25%">
                         <label for="uname"><b>Enter Id Card number</b></label>
                <input type="text" id="enterCardNumber" placeholder="Enter Id Card number" name="enterCardNumber" class="stylevalotp" value="<?php echo $_SESSION['idCardNum']?>">
                      </td>
                    </tr>
                     <tr>
                      <td style="width:25%">
                         <label for="uname"><b>Enter Contact</b></label>
                <input type="text" id="enterContact" placeholder="Enter Contact" name="enterContact" class=" stylevalotp" value="<?php echo $_SESSION['phone']?>">
                      </td>
                      <td style="width:25%">
                         <label for="uname"><b>No. Of Male Passenger</b></label>
                <select type="text" id="enterNoOfMale" name="enterNoOfMale" class="stylevalotp form-control enterNoOfMale" style="font-size: 11px;">
                  stylevalotp" style="font-size: 11px;">
                  <option >0</option>
                  <option >1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </td>
                      <td style="width:25%">
                         <label for="uname"><b>No. Of Female Passenger</b></label>
                <select type="text" id="enterNoOfFeMale"  name="enterNoOfFeMale" class="enterNoOfFeMale form-control stylevalotp" style="font-size: 11px;">
                  stylevalotp" style="font-size: 11px;">
                  <option >0</option>
                  <option >1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </td>
                      <td style="width:25%">
                         <label for="uname"><b>No. Of Child Passenger</b></label>
                 <select type="text" id="enterNoOfChild"  name="enterNoOfChild" class="enterNoOfChild form-control stylevalotp" style="font-size: 11px;">
                  <option >0</option>
                  <option >1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:25%">
                         <label for="uname"><b>No. Of Senior Citizen Passenger</b></label>
                 <select type="text" id="enterNoSeniorCitizen" name="enterNoSeniorCitizen" class="enterNoSeniorCitizen form-control stylevalotp" style="font-size: 11px;">
                  stylevalotp" style="font-size: 11px;">
                  <option >0</option>
                  <option >1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </td>
                      <td style="width:25%">
                         <label for="uname"><b>Coondition</b></label>
                <select type="text" id="Coondition" name="Coondition" class="stylevalotp form-control Coondition" style="font-size: 11px;">
                  <option >1st Ac</option>
                          <option>2nd Ac</option>
                          <option>3rd Ac</option>
                          <option>Sleeper</option>
                        </select>
                      </td>
                      <td style="width:25%">
                         <label for="uname"><b>Food</b></label>
                <select type="text" id="enterFoode"  name="enterFoode" class="enterFoode form-control stylevalotp" style="font-size: 11px;">
                  <option >No</option>
                          <option>Yes</option>
                        </select>
                      </td>
                      <td style="width:25%">
                         <label for="uname"><b>From</b></label>
                 <select type="text" id="fromStation" name="fromStation" class="fromStation form-control stylevalotp" style="font-size: 11px;">
                 <?php
              if($trainList ->num_rows() > 0){
              foreach($trainList->result() as $row){
              $keywords = explode(',', $row->trainStation);
              foreach ($keywords as $keywords) {
                
              ?>
                  <option ><?php  echo $keywords ;?></option>
                         <?php }} }?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:25%">
                         <label for="uname"><b>To</b></label>
                 <select type="text" id="toStation" name="toStation" class="toStation form-control stylevalotp" style="font-size: 11px;">
                 <?php
              if($trainList ->num_rows() > 0){
              foreach($trainList->result() as $row){
              $keywords = explode(',', $row->trainStation);
              foreach ($keywords as $keywords) {
                
              ?>
                  <option ><?php  echo $keywords ;?></option>
                         <?php }} }?>
                        </select>
                      </td>
                      <td style="width:25%">
                         <label for="uname"><b>Date Of Ticket</b></label>
                <input type="text" id="dateTicket" placeholder="Date Of Ticket" name="dateTicket" class=" dateTicket stylevalotp" readonly>
                      </td>
                      <td style="width:25%">
                         <label for="uname"><b>Price Of Ticket</b></label>
                <input type="text" id="priceTicket" placeholder="Price Of Ticket" name="priceTicket" class=" priceTicket stylevalotp" readonly>
                      </td>
                      <td style="width:25%">
                         <label for="uname"><b>Status Of Ticket</b></label>
                <input type="text" id="StatusTicket" placeholder="Status Of Ticket" name="StatusTicket" class=" StatusTicket stylevalotp" readonly>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <?php
              if($trainList ->num_rows() > 0){
              foreach($trainList->result() as $row){
              ?>
              <input type="hidden" name="trainName" id="hiddTrainNo" value="<?php echo $row->trainNo ;?>">
               <input type="hidden" name="tPrice" id="tPrice" value="<?php echo $row->price ;?>">
             <?php foreach($trainList->result() as $row){
              $keywords = explode(',', $row->trainStation);
              foreach ($keywords as $keywords) {
                
              ?>
              <input type="hidden" name="" class="hiddTraindays" value="<?php  echo $keywords ;?>">
                         <?php } }
                         foreach($trainList->result() as $row){
              $keywords = explode(',', $row->quota);
              foreach ($keywords as $keywords) {
                
              ?>
              <input type="hidden" name="" class="hiddTrainquota" value="<?php  echo $keywords ;?>">
                         <?php } }?>
              <?php } } ?>
                 
                <button type="submit" name="trainFormSubmit" class="moneyOnOtp">Payment</button>
              
              
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
  <?php } ?>