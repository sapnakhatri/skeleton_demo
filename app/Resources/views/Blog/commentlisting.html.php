<?php 
use Pimcore\Model\DataObject\Blog;
$this->extend('layout.html.php'); ?>
 
<div class="container">
  <div class="w3-container w3-padding-32" id="contact" style="margin-top: 20px;">
    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16" ><b style="color:#6428b4;">Comments</b></h1>

    <p>
        

        <br/>
        <br/>
       <?php //print_r($object);exit; ?>
        <!-- <div class="card-columns"> -->
        <?php  foreach ($this->articles as $article) { foreach ($this->object as $object) {?>
<?php
            /** @var Test2 $article */
            ?>
             
            <div class="card">
                
                  <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9 col-md-8 col-xs-6">
	                       	<p><b>Comment By:</b><?php echo $article->getName();?></p>
		                    <p><b>Email:</b><?php echo $article->getEmail();?></p>
		                    <p><b>Blogid:</b><?php echo $article->getBlog_id();?></p> 
		                    <p><b>Blogtitle:</b><?php echo $this->object->getBlog_title();?></p>
		                    <p><?php echo $article->getComment();?></p>

		                </div>
                     </div>
   
    
                    <!-- </blockquote> -->
                  </div>
                </div>
                <br>
        <?php } } ?>


       


      <!-- </div> -->
      <div style="margin:0px auto;">
       <!-- pagination start -->
        <?= $this->render(
            "includes/paging.html.php",
            get_object_vars($this->articles->getPages("Sliding")));
        ?>
        <!-- pagination end -->
        <br>
    </p>
</div>

</div>






