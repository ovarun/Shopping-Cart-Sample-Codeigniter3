

        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid"> 
                <?php foreach ($product_view as $list) { ?>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Shrts</a></li> 
                                <li class="breadcrumb-item active" aria-current="page"><?= $list->product_name; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel"> 
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="<?= base_url().$list->product_image; ?>">
                                            <img class="d-block w-100" src="<?= base_url().$list->product_image; ?>" alt="First slide">
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <a><h6><?= $list->product_name; ?></h6></a>
                                <div class="line"></div>
                                <p class="product-price" id="product_price">Rs <?= $list->product_baseprice; ?></p>
                                <!-- Ratings & Review -->
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div> 
                                </div>
                                <!-- Avaiable -->
                                <!--p class="avaibility"><i class="fa fa-circle"></i> In Stock</p-->
                            </div>

                            <div class="row"> 
                                <div class="col-md-6"> 
                                    <div class="cart-btn d-flex mb-1 mt-1"> 
                                        <p class="pr-2">Color</p>
                                        <select name="color" id="color" onchange="updateDetails()">
                                            <option value="">Select Color</option>
                                            <?php foreach ($product_atrb as $attr) { ?>
                                                <option value="<?= $attr->color ?>"><?= $attr->color ?></option>
                                            <?php } ?>
                                        </select> 
                                    </div> 
                                </div>
                                <div class="col-md-6"> 
                                    <div class="cart-btn d-flex mb-1 mt-1">
                                        <p class="pr-2">Size</p>
                                        <select name="size" id="size" onchange="updateDetails()">
                                            <option value="">Select Size</option>
                                            <?php foreach ($product_atrb as $attr) { ?>
                                                <option value="<?= $attr->size ?>"><?= $attr->size ?></option>
                                            <?php } ?>
                                        </select> 
                                    </div> 
                                </div>
                            </div>

                            <div class="short_overview my-5">
                                <p><?= $list->product_description; ?></p>
                            </div>

                            <!-- Add to Cart Form -->
                            <form action="" class="cart clearfix" method="post" id="SearchDataform">
                                <input type="hidden" name="product_ID"    id="product_ID" value="<?= $list->product_ID ?>" required>
                                <input type="hidden" name="product_color" id="product_color" required>
                                <input type="hidden" name="product_size"  id="product_size" required>
                                <div class="cart-btn d-flex mb-50">
                                    <p>Qty</p>
                                    <div class="quantity"> 
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1" onchange="AjaxUpdateAttributes()"> 
                                    </div>
                                </div>  
                                <button type="submit" name="buy_now" id="buy_now" value="5" class="btn amado-btn">Buy Now</button>
                            </form>

                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- Product Details Area End -->
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

<script type="text/javascript">
    function updateDetails() {
        var color = document.getElementById('color').value;
        var size  = document.getElementById('size').value;

        document.getElementById('product_color').value = color;
        document.getElementById('product_size').value  = size; 
        console.log(color);
        console.log(size);
    }
</script>
<script type="text/javascript"> 
    function AjaxUpdateAttributes() { 
        var color = document.getElementById('color').value;
        var size  = document.getElementById('size').value;
        if(!empty(color) && !empty(size)){
            var SearchDataform = $('#slider_img_form');  
            $.ajax({
                url  : '<?= base_url("web/SearchProductAttribute"); ?>',
                type : 'post',
                data : SearchDataform.serialize(),
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                success: function(data){  
                  if(data){  
                    console.log(data);
                  }else{
                    alert('Error, Not In Stock'); 
                  }
                },
                error: function() { 
                    alert('Error, Not In Stock');  
                }
            }); 
        }
    }
</script> 