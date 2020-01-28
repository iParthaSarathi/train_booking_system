    <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Train DataTables </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
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
                       <th>Book</th>
                    </tr>
                  </thead>
                  <tfoot>
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
                      <th>Book</th>
                    </tr>
                  </tfoot>
                  <tbody style="font-size: 11px;">
                      <?php
                    if($trainListShow ->num_rows() > 0){
              foreach($trainListShow->result() as $row){
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
                          <td><a href="<?php echo base_url("index.php/welcome/searchStation"); ?>?vid=<?php echo $row->trainNo ;?>">>Book</a></td>
                    </tr>
                  <?php } }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->