<?php if(!empty($product_list) && isset($product_list)) { ?>
        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    <h3>Product Details</h3>
                    <div class="col-12">                          
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Base Price</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="" alt="Product" id="list_image" style="max-height: 100px;"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5 id="list_name"></h5>
                                        </td>
                                        <td class="price">
                                            <span id="list_price"></span>
                                        </td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <form action="#" method="post" class="form">
                            <div class="row mb-2">
                                <label for="product_ID col-md-3">Select Product</label>
                                <div class="col-md-9">
                                    <select name="product_ID" id="product_ID" onchange="UpdateProduct()" required="">
                                        <option value="">Select The Product</option> 
                                        <?php foreach ($product_list as $list) { ?>
                                            <option value="<?= $list->product_ID ?>"><?= $list->product_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                             
                            
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="product_quantity" id="product_quantity" placeholder="Available Quantity" required="" min="1">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" step="any" class="form-control" name="product_price" id="product_price" placeholder="Price For Single Piece" required="" min="1">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="product_color" id="product_color" placeholder="Product Color" required="">
                                </div>
                                <div class="col-md-6">
                                    <select name="product_size" id="product_size" required="">
                                        <option value="">Select Size Of The Product</option> 
                                        <option value="S">Small</option> 
                                        <option value="M">Medium</option> 
                                        <option value="L">Larger</option> 
                                        <option value="XL">X-Larger</option> 
                                        <option value="XXL">XX-Larger</option> 
                                    </select>
                                </div>
                            </div> 
                            
                            <button type="submit" name="addtocart" value="5" class="btn amado-btn">Update Details</button>
                        </form>  
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

<script type="text/javascript">
    function UpdateProduct() { 
        var product_ID = document.getElementById('product_ID').value; 
        var img = document.getElementById('list_image');
        var name = document.getElementById('list_name');
        var price = document.getElementById('list_price');
        switch(product_ID){
            <?php foreach ($product_list as $list) { ?>
                case '<?= $list->product_ID ?>' :   
                    img.src = '<?= base_url().$list->product_image ?>';
                    name.innerHTML = "<?= $list->product_name ?>";
                    price.innerHTML = 'Rs. '+<?= $list->product_baseprice ?>;
                break;
            <?php } ?>
            default: break;
        }
    }
</script> 
<?php } ?>