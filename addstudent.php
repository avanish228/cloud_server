
      <div class="row">
         <div class= " col-lg-12 col-md-12 col-sm-12  " align= "left">
            <div id="ab">
               <form action="<?php if(isset($_REQUEST['nid'])){ echo 'addstudent.php'; }?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                     <label  for="sname">Name:</label>
                     <input type="text" class="form-control" value="<?php if(isset($_REQUEST['nid'])){ echo $row['sname'];} ?>"  name="sname" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                     <input type="hidden" value="<?php if(isset($_REQUEST['nid'])){ echo $row['sid'];} ?>" class="form-control" name="sid" placeholder="Enter Id Number">
                  </div>
                  <div class="form-group">
                     <label  for="syr">year of joining:</label>
                     <input type="text" value="<?php if(isset($_REQUEST['nid'])){ echo $row['syear'];} ?>" class="form-control datepicker" name="syear" placeholder="Enter year of joining">
                  </div>
                  <div class="form-group">
                     <label  for="sclass">class:</label>
                     <input type="number" class="form-control" name="sclass" value="<?php if(isset($_REQUEST['nid'])){ echo $row['sclass'];} ?>" pattern="^\d{2}$" title="class cannot be more than 2 digit number" placeholder="Enter current class">
                  </div>
                  <div class="form-group">
                     <label  for="ssection">section:</label>
                     <input type="text" class="form-control" name="ssection" value="<?php if(isset($_REQUEST['nid'])){ echo $row['ssection'];} ?>" placeholder="Enter section">
                  </div>
                  <div class="form-group">
                     <label  for="semail">Email ID:</label>
                     <input type="email" class="form-control" name="semail" value="<?php if(isset($_REQUEST['nid'])){ echo $row['semail'];} ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="enter valid email address" placeholder="Enter your email id">
                  </div>
                  <div class="form-group">
                     <label  for="smob">Mobile No.:</label>
                     <input type="number" type="tel" pattern="^\d{10}$" title="10 Digit only" class="form-control" name="smobile" value="<?php if(isset($_REQUEST['nid'])){ echo $row['smobile'];} ?>" placeholder="Enter your mobile number" >
                  </div>
                  <div class="form-group">
                     <label  for="sfather">Father's Name:</label>
                     <input type="text" class="form-control" name="sfather" value="<?php if(isset($_REQUEST['nid'])){ echo $row['sfather'];} ?>" placeholder="Enter father's name">
                  </div>
                  <div class="form-group">
                     <label  for="smob">Father's Mobile No.:</label>
                     <input type="tel" pattern="^\d{10}$" title="10 Digit only" class="form-control" name="sfmob" value="<?php if(isset($_REQUEST['nid'])){ echo $row['sfmob'];} ?>" placeholder="Enter father's mobile number">
                  </div>
                  <div class="form-group">
                     <label  for="smother">Mother's Name:</label>
                     <input type="text" class="form-control" name="smother" value="<?php if(isset($_REQUEST['nid'])){ echo $row['smother'];} ?>" placeholder="Enter mother's name">
                  </div>
                  <div class="form-group">
                     <label  for="samob">Mother's Mobile No.:</label>
                     <input type="tel" pattern="^\d{10}$" title="10 Digit only" class="form-control" name="smmob" value="<?php if(isset($_REQUEST['nid'])){ echo $row['smmob'];} ?>" placeholder="Enter mother's mobile number">
                  </div>
                  <div class="form-group">
                     <label  for="saddress">Address:</label>
                     <textarea class="form-control" rows="5" name="saddress"  placeholder="Enter your address"><?php if(isset($_REQUEST['nid'])){ echo $row['saddress'];} ?></textarea>
                  </div>
                  <?php
                     if(isset($_REQUEST['nid'])){}  else {
                     
                     ?>
                  <?php } ?>
                  <?php
                     if(isset($_REQUEST['nid'])){
                         echo "<input style= 'width: 100%;' align='middle' class='btn btn-primary btn_attendance' style='color:white' type='submit' name='update' value='update' required>";
                     }
                     else echo "<input style= 'width: 100%;' align='middle' class='btn btn-primary btn_attendance' style='color:white' type='submit' name='submit' value='submit' required>";
                             ?>
               </form>
            </div>
            <?php
               require 'submitstudent.php';
               ?>
         </div>
      </div>
   </section>
</div>
<script>
   $( function() {
     $( ".datepicker" ).datepicker();
   } );
</script>
