  

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">
 

                <div class="row">  
                    <!-- Single Product Area -->
                    <?php foreach ($product_list as $list) { ?>
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="<?= base_url().$list->product_image; ?>" alt="" style="max-height: 330px;">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="<?= base_url().$list->product_image; ?>" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price"> Rs.<?= $list->product_baseprice; ?></p>
                                    <a href="product-details.html">
                                        <h6><?= $list->product_name; ?></h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right"> 
                                    <div class="cart">
                                        <a href="<?= base_url('web/product_details/').urlencode($list->product_name).'/'.urlencode($this->encrypt->encode($list->product_ID)); ?>" data-toggle="tooltip" data-placement="left" title="View Product Details" class="btn amado-btn mb-15">View Product 
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <?php } ?>
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                                <li class="page-item"><a class="page-link" href="#">04.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span>25% Discount</span></h2>
                        <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### --> 