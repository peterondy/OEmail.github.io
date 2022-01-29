<?php 
    include 'init.php';
    include 'header.php';
    ?>
    <div class="container pb-1">
        <div class="justify-content-center text-center" 
            style="background-image : url('<?php echo $img .'background_tech.jpg'; ?>');">
            <h3 class="mt-5 mb-5 pt-5" style="color : #fff !important;">
            Through the smart management website, you can conduct transactions electronically 
            without the trouble of navigating to the relevant departments
            </h3>
            <h6 class="mt-5 mb-5" style="color : #fff !important;">
            You can request the national card, extract civil status documents, book travel visas and an appointment 
            with embassies or any ministry. You can also make online payments, book airline tickets and many more.
            </h6>
        </div>
        <div class="content">
            <!--ministries-->
            <div class="ministries">
                <h3 class="mt-3 mb-3 text-center color-w">Online Registration Email</h3>

                <div class="card-group">
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .''; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reserve Hotel</h5>
                            <p class="card-text">You can reserve hotel online with OReservation.</p>
                            <a href="<?php echo $dash . 'page.php?pos=travel&option=hotel';?>" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .''; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reserve House</h5>
                            <p class="card-text">You can reserve house online with OReservation.</p>
                            <a href="<?php echo $dash . 'page.php?pos=travel&option=house';?>" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $img .''; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reserve Hotel</h5>
                            <p class="card-text">You can reserve hotel online with OReservation.</p>
                            <a href="<?php echo $dash . 'page.php?pos=travel&option=hotel';?>" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'sidebar.php';
?>
<?php
    include 'footer.php';
?>

