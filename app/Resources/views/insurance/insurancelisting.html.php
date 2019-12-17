<?php 
use Pimcore\Model\DataObject\Blog;
$this->extend('layout.html.php'); ?>
 
<div class="container">
  <div class="w3-container w3-padding-32" id="contact" style="margin-top: 20px;">
    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16" ><b style="color:#6428b4;">Person Details</b></h1>

    <p>
        
       <?php //print_r($object);exit; ?>
        <!-- <div class="card-columns"> -->
        <?php  foreach ($this->insurancedetails as $insurancedetail) { foreach ($this->persons as $person) {?>
              <?php //print_r($insurancedetails->getSpecificAttribute()->getBrickGetters()[0]);
            // echo "<pre>";print_r($insurancedetails->getBricks()->getTire());exit; ?>
            <div class="card">
                
                  <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9 col-md-8 col-xs-6">
                        <p><b>Policy Name:</b><?php echo $insurancedetails->getPolicyName();?></p>
	                      <p><b>Policy Terms:</b><?php echo $insurancedetails->getPolicyTerm();?></p>
                        <p><b>Father Name:</b><?php echo $person->getFatherName();?></p>
                        <p><b>Phone Number:</b><?php echo $person->getPhoneNumber();?></p> 
                        <p><b>Address:</b><?php echo $person->getAddress();?></p> 
                        <p><b>Date of Birth:</b><?php echo $person->getDob();?></p> 
                        <?php if( $insurancedetails->getSpecificAttribute()->getHealth()!=""){ ?>
                            <p><b>Insured Amount:</b><?php echo $insurancedetails->getSpecificAttribute()->getHealth()->getInsuredAmount();?></p> 
                            <p><b>Diseases Covered:</b><?php echo $insurancedetails->getSpecificAttribute()->getHealth()->getDiseasesCovered();?></p>
                            <p><b>Exclusions:</b><?php echo $insurancedetails->getSpecificAttribute()->getHealth()->getExclusions();?></p>
                            <p><b>Existing Diseases:</b><?php echo $insurancedetails->getSpecificAttribute()->getHealth()->getExistingDiseases();?></p> 
                        <?php } ?>
                        <?php if($insurancedetails->getSpecificAttribute()->getAuto()!=""){ ?>
                            <p><b>Life:</b><?php echo $insurancedetails->getSpecificAttribute()->getAuto()->getvehicleDetails();?></p>
                            <p><b>Life:</b><?php echo $insurancedetails->getSpecificAttribute()->getAuto()->getCoverageDetails();?></p>
                            <p><b>Life:</b><?php echo $insurancedetails->getSpecificAttribute()->getAuto()->getExclusions();?></p>
                        <?php } ?>
                        <?php if( $insurancedetails->getSpecificAttribute()->getLife()!=""){ ?>
                            <p><b>Sum Assured:</b><?php echo $insurancedetails->getSpecificAttribute()->getLife()->getSumAssured();?></p>
                        <?php } ?>

		                </div>
                     </div>
   
    
                    <!-- </blockquote> -->
                  </div>
                </div>
                <br>
        <?php } } ?>


       


      <!-- </div> -->
      <div style="margin:0px auto;">
      
        <br>
    </p>
</div>

</div>






