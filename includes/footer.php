	</div> <!-- /container -->

	<script src="/libraries/jquery.min.js"></script>
	<script src="/libraries/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



	<script>
		$(document).ready(function(){

			if (location.pathname.indexOf('store.php') !== -1) {
				sessionStorage.clear();
				$('[data-context="product"] [data-action="add-to-cart"]')
					.on('click', function(e){
						var $this = $(this);
						var $product = $this.parents('[data-context="product"]');
						var sku = $product.find('[name="sku"]').val() + '-' + $this.data('size');
						var price = $this.data('price')
						
						$this
							.toggleClass('btn-default')
							.toggleClass('btn-primary');

						if (!sessionStorage.getItem(sku)) {
							var obj = {
								price: $this.data('price'),
								sku: sku,
								name: $this.data('size') + ' ' + $product.find('[name="name"]').val(),
								category: $product.find('[name="category"]').val(),
						        quantity: 1
							};
							sessionStorage.setItem(sku, JSON.stringify(obj));
						} else {
							sessionStorage.removeItem(sku);
						}

						e.preventDefault();
					});

				$('[data-action="clear"]').on('click', function(e){
					sessionStorage.clear();
					$('[data-action="add-to-cart"]')
						.removeClass('btn-primary')
						.addClass('btn-default');
					e.preventDefault();
				});

			}

			if (location.pathname.indexOf('thankyou.php') !== -1) { 
				var total = parseFloat('0.00');
				var trans = {
					event: 'transaction',
					transactionId: Math.floor((Math.random() * 100000) + 1),
					transactionProducts: [],
				};

				for(var i = 0; i < sessionStorage.length; i++) {
				    var item = JSON.parse(sessionStorage.getItem(sessionStorage.key(i)));
				    trans.transactionProducts.push(item)
				    total = total + parseFloat(item.price);
				}

				trans.transactionTotal = total;

				
				dataLayer.push(trans);
				console.log(dataLayer);
			}
			

		});
	</script>


</body>
</html>