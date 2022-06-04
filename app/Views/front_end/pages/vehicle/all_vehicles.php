<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url(); ?>/public/front_end/images/car-10.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Choose Your Car</h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <?php
            foreach ($vehicles as $vehicle) {
            ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo base_url() . "/public/img/vehicles/" . $vehicle["photo"]; ?>);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="#"><?php echo $vehicle["model"] . ", " . $vehicle["model_year"]; ?></a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat text-secondary"><?php echo $vehicle["name"]; ?></span>
                                <p class="price ml-auto"><?php echo $vehicle["passenger_capacity"]; ?> <span class="text-black-50">/PERSONS</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="<?php echo base_url() . "/vehicle/carDetails/{$vehicle["id"]}#details"; ?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>