<?php 
use Pimcore\Model\DataObject\Blog;
$this->extend('layout.html.php'); 
//echo $this->blogdetail->getBlog_title();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 
<div class="container">
  <div class="w3-container w3-padding-32" id="contact" style="margin-top: 20px;">
  
        <br/>
       
        <!-- <div class="card-columns"> -->
      
            <div class="card">
                  <div class="card-header">
                 
                    <h2 class="w3-border-bottom w3-border-light-grey w3-padding-16" ><?php echo $this->blogdetail->getBlog_title();?></h2>
                  </div>
                  <div class="card-body">
                      <img src="<?php echo $this->blogdetail->getBlog_image(); ?>" width="200" height="200"  />
                     
                       <p class="claimedRight"><?php echo $this->blogdetail->getBlog_description();?></p>
                         <?php

                        
                           foreach ($this->comments as $comments) { 
                            // print_r($comments);
                             // if($comments->getBlog_id()==$this->blogdetail->getid()){

                            ?>
                         
                         
                          <div class="card" style="margin: 0px 20px;">
                                <div class="card-header">
                               
                                  <b><?php echo $comments->getName();?></b> &nbsp;<?php echo $comments->getEmail();?>
                                </div>
                                <div class="card-body">
                                  <div class="row">
                                      <div class="col-lg-9 col-md-8 col-xs-6">
                                      <p><?php echo $comments->getComment();?></p>

                                  </div>
                                   </div>
                                </div>
                              </div>
                              <br>
                      <?php  } 
                     // }
                      ?>
                      

                        <button class="btn btn-primary addcomment">Add Comment</button>
                        <br> <br>

                        <div id='form'>
                            <div class="card col-md-6" style="border: #CCC solid;">
                              <!-- <div class="row"> -->
                                <form method="POST">
                                   <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name">
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" id="email">
                                  </div>
                                 
                                  <div class="form-group">
                                    <label for="comment">Comment:</label>
                                    <textarea id="comment_field" name="comment" class="form-control"></textarea>
                                    <input type="hidden" id="blogid" name="blogid" value="<?php echo $this->blogdetail->getid();?>">
                                  </div>
                                  
                                  <button type="button" class="btn btn-primary submitButton" style="margin-bottom: 20px;">Submit</button>
                                </form>

                                

                            </div>
                        </div>
                        <br>

                  </div>




                </div>
                 <br>
     
   
</div>

</div>
<script type="text/javascript">
  $("#form").css('display', 'none');
  $(".addcomment").click(function() {
        $("#form").css('display', 'block');
  });
  $(".submitButton").click(function() {
    // alert("hii");
    
    var name = $("#name").val();
     var comment_field = $("#comment_field").val();
      var email = $("#email").val();
      var blogid = $("#blogid").val();

    $.ajax({
      url : "/blog/comment",
      data : {'name':name,'comment':comment_field,'email':email,'blogid':blogid},
      type : 'POST',
      success : function(response) {
        alert(response);
        if (response) {
          $("#name").val("");
          $("#comment_field").val("");
          $("#email").val("");
        } else {
          alert("Failed to add comments !");
          return false;
        }
      }
    });
  });
</script>




