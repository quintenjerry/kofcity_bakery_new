 

<?php
 
$query  = "SELECT * FROM listing";

$result = mysqli_query($conn, $query);

$data = mysqli_fetch_all($result,MYSQLI_ASSOC);


?>


<!--bakes  starts-->
<section class="features" id="bakes">
    <h1 class="heading"> Our <span>bakes</span> </h1>

    <div class="box-container">

    <?php
    foreach($data as $data){ ?>
        <div class="swiper-slider box">
        <img src=<?php echo htmlspecialchars($data['img'])?> alt>
        <h3><?php echo htmlspecialchars($data['name'])?></h3>
  
        <div class="price"><h5><?php echo htmlspecialchars($data['price'])?></h5></div>
      
        <a class="btn" href="#">add to cart</a>
    </div>
   
   <?php  }?>
        
        
    </div>

</section>
 