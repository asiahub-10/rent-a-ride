<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url(); ?>/public/front_end/images/image_6.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Booking <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Book Your Car</h1>
            </div>
        </div>
    </div>
</section>

<section class="py-5 my-5"></section>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12	featured-top">
                <form action="">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="request-form ftco-animate bg-dark">
                                <h2 class="text-uppercase">Make your trip</h2>
                                <div class="form-group">
                                    <label for="" class="label">Pick-up location</label>
                                    <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Pick-up District</label>
                                    <select name="" class="form-control" disabled>
                                        <option value="">Dhaka</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Drop-off location</label>
                                    <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Drop-off District</label>
                                    <select name="" class="form-control">
                                        <?php
                                        foreach ($districts as $dist) {
                                            echo "<option class='bg-dark' value='{$dist["id"]}'>{$dist["district"]}</option>";
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Pick-up date</label>
                                        <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Drop-off date</label>
                                        <input type="text" class="form-control" id="book_off_date" placeholder="Date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Pick-up time</label>
                                    <input type="text" class="form-control" id="time_pick" placeholder="Time">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 bg-white rounded shadow-sm">
                            <div class="d-flex justify-content-between p-4">
                                <h3 class="text-primary">Select Your Ride</h3>
                                <select id="cmbCarType" class="form-control border border-success form-control-sm w-auto">
                                    <option value="0">All Vehicles</option>
                                    <?php
                                    foreach ($categories as $category) {
                                        echo "<option value='{$category["id"]}'>{$category["name"]}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <?php
                            foreach ($vehicles as $vehicle) {
                            ?>
                                <div class="card-body">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6">
                                            <div class="car-details text-center">
                                                <img src="<?php echo base_url() . "/public/img/vehicles/" . $vehicle["photo"]; ?>" alt="" class="img-fluid rounded" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 py-3">
                                            <div class="text text-center">
                                                <span class="subheading text-primary"><?php echo $vehicle["name"]; ?></span>
                                                <h2><?php echo $vehicle["model"] . ", " . $vehicle["model_year"]; ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md">
                                            <div class="d-flex align-items-center">
                                                <i class="far fa-bookmark fa-2x mr-3 text-success"></i>
                                                <div class="text-dark font-weight-bold">
                                                    <span class="text-muted font-weight-normal">Manufacturer</span> <br> <?php echo $vehicle["manufacturer"]; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-user-friends fa-2x mr-3 text-success"></i>
                                                <div class="text-dark font-weight-bold">
                                                    <span class="text-muted font-weight-normal">Seats</span> <br> <?php echo $vehicle["passenger_capacity"]; ?> Person
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-luggage-cart fa-2x mr-3 text-success"></i>
                                                <div class="text-dark font-weight-bold">
                                                    <span class="text-muted font-weight-normal">Luggage</span> <br> <?php echo $vehicle["luggage_capacity"]; ?> Bags
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-gas-pump fa-2x mr-3 text-success"></i>
                                                <div class="text-dark font-weight-bold">
                                                    <span class="text-muted font-weight-normal">Fuel</span> <br> <?php echo $vehicle["fuel"]; ?>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="d-inline-block">
                                        <div class="d-flex justify-content-start align-items-center btn btn-primary">
                                            <input type="radio" name="car" value="" id="btn<?php echo $vehicle["id"]?>" class="">
                                            <label for="btn<?php echo $vehicle["id"]?>" class="btn btn-primary mb-0">Select</label>
                                        </div>
                                    </div> 
                                    <hr>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>