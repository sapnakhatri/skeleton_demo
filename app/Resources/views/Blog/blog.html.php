<?php 
use Pimcore\Model\DataObject\Blog;
$this->extend('layout.html.php'); ?>
 <?php
    use Pimcore\Model\Asset;
    // get an asset
    $asset = Asset::getById(51);
?>
 
<?php if ($asset) { ?>
   <img src="<?= $asset->getThumbnail("thumbnail1") ?>" />


<?php } ?>
<div class="container">
  <div class="w3-container w3-padding-32" id="contact" style="margin-top: 20px;">
    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16" ><b style="color:#6428b4;">Blogs</b></h1>

    <p>
        We received the following information from you:

        <br/>
        <br/>
       
        <!-- <div class="card-columns"> -->
        <?php  foreach ($this->articles as $article) { ?>
<?php
            /** @var Test2 $article */
            ?>
             <?php //print_r($articles->getId());exit; ?>
            <div class="card">
                  <div class="card-header">
                 
                    <a href=""><?php echo $article->getBlog_title();?></a>
                  </div>
                  <div class="card-body">
                    <div class="row">
                    <!-- <blockquote class="blockquote mb-0"> -->
                      <div class="col-lg-3 col-md-4 col-xs-6"><img src="<?php echo $article->getBlog_image(); ?>" width="200" height="200"  /></div>
                     
                       <div class="col-lg-9 col-md-8 col-xs-6"><p class="claimedRight"><?php echo $article->getBlog_description();?></p><a href="Blog/<?php echo $article->getid(); ?>" class="btn btn-primary">Read More</a></div>


                     </div>
   
    
                    <!-- </blockquote> -->
                  </div>
                </div>
                <br>
        <?php } ?>


       


      <!-- </div> -->
      <div style="margin:0px auto;">
       <!-- pagination start -->
        <?= $this->render(
            "includes/paging.html.php",
            get_object_vars($this->articles->getPages("Sliding")));
        ?>
        <!-- pagination end -->
        <br>
   
</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">

//   $(document).ready(function(){
   
//   $('.claimedRight').each(function () {
//     console.log($(this));
//       var newstr = $(this).text().substring(0,20);
//       $(this).text(newstr);

//     });
// })
</script>







