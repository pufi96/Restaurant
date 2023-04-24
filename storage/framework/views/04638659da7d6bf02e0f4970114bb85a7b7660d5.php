<?php $__env->startSection('title'); ?> Home <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> The main page of the restaurant. <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> restaurant, food, eat, delicious, home <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Start slides -->
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/slider-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view  <br>
                                trends to see any changes in performance over time.</p>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?php echo e(route('reservation')); ?>">Reservation</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/slider-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view  <br>
                                trends to see any changes in performance over time.</p>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/slider-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view  <br>
                                trends to see any changes in performance over time.</p>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?php echo e(route('reservation')); ?>">Reservation</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="images/about-img.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="inner-column">
                    <h1>Welcome To <span>Yamifood Restaurant</span></h1>
                    <h4>Little Story</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                    <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
                    <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-left">
                <p class="lead ">
                    " If you're not the one cooking, stay out of the way and compliment the chef. "
                </p>
                <span class="lead">Michael Strahan</span>
            </div>
        </div>
    </div>
</div>
<!-- End QT -->

<!-- Start Contact info -->
<div class="contact-imfo-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-volume-control-phone"></i>
                <div class="overflow-hidden">
                    <h4>Phone</h4>
                    <p class="lead">
                        +01 123-456-4590
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <i class="fa fa-envelope"></i>
                <div class="overflow-hidden">
                    <h4>Email</h4>
                    <p class="lead">
                        yourmail@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <i class="fa fa-map-marker"></i>
                <div class="overflow-hidden">
                    <h4>Location</h4>
                    <p class="lead">
                        800, Lorem Street, US
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact info -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurants\resources\views/pages/home.blade.php ENDPATH**/ ?>