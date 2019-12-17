<?php 
use Pimcore\Model\DataObject\Blog;
$this->extend('layout.html.php'); ?>
 
<div class="container">
  <div class="w3-container w3-padding-32" id="contact" style="margin-top: 20px;">
    <!-- <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16" ><b style="color:#6428b4;">Home</b></h1> -->

    <p><h4 class="w3-border-bottom w3-border-light-grey w3-padding-16" ><b style="color:#6428b4;">Customers Details</b></h4>
       
        <br/>
       
        <!-- <div class="card-columns"> -->
        <?php  foreach ($this->persons as $person) { ?>

             <?php //print_r($product);exit; ?>
              <div class="card">
                 <div class="card-header">
                 
                    <a href=""><?php echo $person->getName();?></a>
                  </div>
                  <div class="card-body">
                      <div class="row">
                         <div class="col-lg-9 col-md-8 col-xs-6">
                          <p><b>Father Name:</b><?php echo $person->getFatherName();?></p>
                          <p><b>Phone Number:</b><?php echo $person->getPhoneNumber();?></p> 
                          <p><b>Address:</b><?php echo $person->getAddress();?></p> 
                          <p><b>Date of Birth:</b><?php echo $person->getDob();?></p> 
                         </div>
                       </div>
   
                  </div>
                </div>
                <br>
        <?php } ?>


       

      <!-- </div> -->
      <div style="margin:0px auto;">
       <!-- pagination start -->
        <?= $this->render(
            "includes/paging.html.php",
            get_object_vars($this->persons->getPages("Sliding")));
        ?>
        <!-- pagination end -->
        <br>
   
</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>








