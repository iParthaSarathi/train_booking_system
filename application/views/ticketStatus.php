 <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Ticket Panding Status</h6>
                </div>
                <div class="card-body">
                  <?php
              if($pendingShow ->num_rows() > 0){
              foreach($pendingShow->result() as $row){
                if ($row->confirm==0) {
              ?>
              <p class="small font-weight-bold" style="color: red;">Pending Payment For Conferm</p>
              <a href="<?php echo base_url("index.php/welcome/finalPaym"); ?>?vid=<?php echo $row->id ;?>">
                 <h4 class="small font-weight-bold"><?php echo $row->dateOfTravel ;?> <span class="float-right"><?php echo $row->price ;?></span></h4>
              <h4 class="small font-weight-bold"><?php echo $row->fromStation ;?>  &nbsp <?php echo $row->toSation;?> <span class="float-right">Condition :<?php echo $row->seatCondition;?></span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </a>
            <?php }else{?>
              <p class="small font-weight-bold" style="color: green;">Success </p>
               <h4 class="small font-weight-bold"><?php echo $row->dateOfTravel ;?> <span class="float-right"><?php echo $row->price ;?></span></h4>
              <h4 class="small font-weight-bold"><?php echo $row->fromStation ;?>  &nbsp <?php echo $row->toSation;?> <span class="float-right">Condition :<?php echo $row->seatCondition;?></span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                
              <?php } }} ?>
            </div>
          </div>
        </div>