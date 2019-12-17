<?php 
use Pimcore\Model\DataObject\Blog;
$this->extend('layout.html.php'); ?>
 
<div class="container">
  <div class="w3-container w3-padding-32" id="contact" style="margin-top: 20px;">
    <!-- <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16" ><b style="color:#6428b4;">Home</b></h1> -->

    <p><h4 class="w3-border-bottom w3-border-light-grey w3-padding-16" ><b style="color:#6428b4;">Insurance Details</b></h4>
       
        <br/>
       
        <!-- <div class="card-columns"> -->
        <?php  foreach ($this->products as $product) { ?>

             <?php //print_r($product);exit; ?>
              <div class="card">
                  <div class="card-body">
                      <?php if($product->getPolicyType()=="HI"){ ?>
                        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" ><b style="color:#6428b4;"><?php echo $product->getPolicyName();?></b></h3>
                       
                      <?php } ?>
                      <?php if($product->getPolicyType()=="AI"){ ?>
                        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" ><b style="color:#6428b4;"><?php echo $product->getPolicyName();?></b></h3>
                      <?php } ?>
                      <?php if($product->getPolicyType()=="LI"){ ?>
                        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" ><b style="color:#6428b4;"><?php echo $product->getPolicyName();?></b></h3>
                      <?php } ?>
              
                      <div class="row">
                         <div class="col-lg-9 col-md-8 col-xs-6"><a href="insurancePolicy/<?php echo $product->getid(); ?>" class="btn btn-primary">Read More</a>
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
            get_object_vars($this->products->getPages("Sliding")));
        ?>
        <!-- pagination end -->
        <br>
   
</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>








