<?php
  $page_title = "Cart Examples";
?>
<?php include_once("includes/header.php"); ?>

<div class="row">
  <div class="col-md-12"><h1>Cart Examples</h1></div>
</div>


<div class="row">

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" data-context="product" data-value="Red">
      <img style="background-color: red; height: 200px; width:100%;" >
      <div class="caption">
        <h3>Red Tee Shirt</h3>
        <p>Hefty, comfortable 7.4-oz. 100% cotton knit stands up to daily wear and washing</p>
        <p>
        	<a href="#" class="btn btn-default" role="button" 
        		data-action="add-to-cart" data-price="4.99" data-size="Small">Small $4.99</a> 
        	<a href="#" class="btn btn-default" role="button" 
        		data-action="add-to-cart" data-price="5.99" data-size="Medium">Medium $5.99</a> 
        	<a href="#" class="btn btn-default" role="button" 
        		data-action="add-to-cart" data-price="6.99" data-size="Large">Large $6.99</a>
        </p>
      </div>
      <input type="hidden" name="sku" value="red"></input>
      <input type="hidden" name="name" value="Red T-Shirt"></input>
      <input type="hidden" name="category" value="Apparel"></input>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" data-context="product" data-value="Yellow">
      <img style="background-color: yellow; height: 200px; width:100%;" >
      <div class="caption">
        <h3>Yellow Tee Shirt</h3>
        <p>Hefty, comfortable 7.4-oz. 100% cotton knit stands up to daily wear and washing</p>
        <p>
        	<a href="#" class="btn btn-default" role="button" 
        		data-action="add-to-cart" data-price="4.99" data-size="Small">Small $4.99</a> 
        	<a href="#" class="btn btn-default" role="button" 
        		data-action="add-to-cart" data-price="5.99" data-size="Medium">Medium $5.99</a> 
        	<a href="#" class="btn btn-default" role="button" 
        		data-action="add-to-cart" data-price="6.99" data-size="Large">Large $6.99</a>
        </p>
      </div>
      <input type="hidden" name="sku" value="yellow"></input>
      <input type="hidden" name="name" value="Yellow T-Shirt"></input>
      <input type="hidden" name="category" value="Apparel"></input>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" data-context="product" data-value="Blue">
      <img style="background-color: blue; height: 200px; width:100%;" >
      <div class="caption">
        <h3>Blue Tee Shirt</h3>
        <p>Hefty, comfortable 7.4-oz. 100% cotton knit stands up to daily wear and washing</p>
        <p>
        	<a href="#" class="btn btn-default" role="button" 
        		data-action="add-to-cart" data-price="4.99" data-size="Small">Small $4.99</a> 
        	<a href="#" class="btn btn-default" role="button" 
        		data-action="add-to-cart" data-price="5.99" data-size="Medium">Medium $5.99</a> 
        	<a href="#" class="btn btn-default" role="button" 
        		data-action="add-to-cart" data-price="6.99" data-size="Large">Large $6.99</a>
        </p>
      </div>
      <input type="hidden" name="sku" value="blue"></input>
      <input type="hidden" name="name" value="Blue T-Shirt"></input>
      <input type="hidden" name="category" value="Apparel"></input>
    </div>
  </div>

</div>

<div class="row">

  <div class="col-md-12 text-right">
  		<a href="#" class="btn btn-default" data-action="clear" role="button">Clear</a>
  		<a href="thankyou.php" class="btn btn-primary" role="button">Checkout</a>
  </div>

</div>

<?php include_once("includes/footer.php"); ?>