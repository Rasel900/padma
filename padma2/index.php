<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
        <div class="container-fluid slider px-0">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <?php $qry= new WP_Query(array(
                  'post_type'=>'post',
                  'category_name'=>'slider'
            ));?>
            <div class="carousel-inner">
                    <?php
                    $x=0;
                    while($qry->have_posts()){$qry->the_post(); 
                    $x++;
                    ?>
                <div class="carousel-item <?= ($x==1)?'active':''?> ">
                        <?php the_post_thumbnail();?>
                
                </div>
                <?php }?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
</div>
        </div>

        <section class="container_fluid logo">
            <div class="row">
                <div class="col-lg-6">
                    <?php the_custom_logo();?>
                </div>
                <div class="col-lg-6 text-end">
                    <?php dynamic_sidebar('logosecond');?>
                </div>
            </div>
        </section>


<?php wp_footer();?>
</body>
</html>