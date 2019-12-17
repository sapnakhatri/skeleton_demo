<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */ 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: #6428B4;
  color: white;
}

.header-right {
  float: right;
}


@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #6428B4;
   color: white;
   text-align: center;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<div class="header" id="myDIV">
  <a href="https://pimcore.com/en" target="_blank" class="logo"><img style=" width: 113px;" src="https://pimcore.com/static/img/logo-claim.svg"></a>
  <div class="header-right" id="header-right">
       <?php echo $this->link("home"); ?>
       <?php echo $this->link("Insurance", ["class" => "special-link-class"]); ?>
       <?php echo $this->link("blogs", ["class" => "special-link-class"]); ?>
       <?php echo $this->link("aboutus", ["class" => "special-link-class"]); ?>
       <?php echo $this->link("contactus", ["class" => "special-link-class"]); ?>
  </div>
</div>
<div class="info">
            <?php $this->slots()->output('_content') ?>
        </div>
<div class="footer">
  <p>&nbsp;</p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
  
var tab = window.location.pathname;
$('#header-right').find('a').each(function(e) {
  $(this).removeClass('active');
    if(tab == $(this).attr('href')){
      $(this).addClass('active');
    }
});
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="/bundles/pimcorecustomermanagementframework/js/startup.js?_dc=1522854913"></script>
</body>
</html>


