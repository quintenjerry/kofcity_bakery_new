
 

<?php
 
 
 $query  = "SELECT * FROM category";
 
 $result = mysqli_query($conn, $query);
 
 $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
 
 
 ?>

<!-- categories  -->
<section class="categories" id="categories">
    <h1 class="heading">Our <span>categories</span></h1>

    <div class="box-container">

    <?php
    foreach($data as $data){ ?>

        <div class="box">
            <img src=<?php echo htmlspecialchars($data['img'])?> alt>
            <h3><?php echo htmlspecialchars($data['category'])?></h3>
            <a class="btn" href="#">shop now</a>
        </div>
        <?php }?>
    </div>




</section>
