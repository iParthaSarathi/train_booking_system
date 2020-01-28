<!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">WALLET BALANCE</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_SESSION['wallet']?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-rupee-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="card-body">
                  <?php
              if($pendingShow ->num_rows() > 0){
              foreach($pendingShow->result() as $row){
                if ($row->price < $_SESSION['wallet']) {
                 
              ?>
              <a href="<?php echo base_url("index.php/welcome/finalPaym"); ?>?vid=<?php echo $row->id ;?>">
                 <h4 class="small font-weight-bold"><?php echo $row->dateOfTravel ;?> <span class="float-right"><?php echo $row->price ;?></span></h4>
              <h4 class="small font-weight-bold"><?php echo $row->fromStation ;?>  &nbsp <?php echo $row->toSation;?> <span class="float-right">Condition :<?php echo $row->seatCondition;?></span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </a>
              <form action="" method="POST">
                <input type="hidden" name="money" value="<?php echo $row->price ;?>">
                <input type="hidden" name="moneyId" value="<?php echo $row->id ;?>">
                <button type="submit" name="finalSubmit" class="finalSubmit">click For Payment</button>
              </form>
              
                
              <?php  }else{ ?>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Add Money In Wallet To To book</div>
                     <button></button>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-rupee-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }} }?>