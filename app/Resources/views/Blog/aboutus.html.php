<?php 
$this->extend('layout.html.php'); ?>
 
<div class="container">
  <div class="w3-container w3-padding-32" id="about" style="margin-top: 20px;">
    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16" ><b style="color:#6428b4;"><?= $this->input("healine") ?></b></h1>


    <p>
       

<?= $this->areablock('myAreablock'); ?>


<?= $this->areablock("content", [
    'allowed' => [
        'gallery-carousel',
        'gallery-single-images',
        'horizontal-
        line',
        'icon-teaser-row',
        'image',
        'productgrid',
        'productteaser',
        'wysiwyg'
    ]
]) ?>
        <br/>
        <br/>
        <?php //print_r($this->articles);exit; ?>
        <div class="card-columns">
       
      </div>
    </p>
</div>

</div>