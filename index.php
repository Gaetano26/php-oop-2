<?php

include './Views/header.php';
?>

<?php

include __DIR__ . '/Database/db.php';

?>
 <main class="container">
   <div class="row">
    
        <?php foreach ($products as $product) { ?>
        <div class="col col-lg-3">
                    <div class="card p-3 ms-3 mt-4">
                        <div class="card-img">
                            <img class="img-fluid" src=<?php echo $product->image; ?> alt="">
                        </div>

                        <div class="card-body">
                            <h3 class="card-title fs-6"> <?php echo $product->title ?></h3>
                            <p> Vote:<?php echo $product->price ?>€</p>
                            <p> Genere: <?php echo $product->category->genre ?></p>
                            <p> Tipologia: <?php echo $product->category->type ?></p>
                            <p>Nationality: <?php echo $product->getIcon() ?> </p>

                        </div>


                    </div>
        </div>
         <?php } ?>
   
   </div>
 </main>
<?php
include './Views/footer.php';
?>