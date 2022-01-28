jQuery(function() {
	// add to cart
	$('.addToCartBtn').click(function(e) {
		e.preventDefault();

		var produsId = $(this).closest('.produs-data').find('input[name="produs_id"]').val();
		var quantity = $(this).closest('.produs-data').find('input[name="quantity"]').val();


		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.ajax({
			url: '/add-to-cart',
			method: 'POST',
			data: {
				produs_id: produsId,
				quantity: quantity

			},
			success: function(response) {
				console.log(response);
				$('.cart-count').text(response.cartCount);
				$('.cart-total').text(response.cartTotal);
				$('.cart-items').html(response.cartItems);
			}
		});

	});

	// On quantity input change update cart
	$('.produs-data').on('change', 'input[name="quantity"]', function(e) {
		e.preventDefault();

		var produsId = $(this).closest('.produs-data').find('input[name="produs_id"]').val();
		var quantity = $(this).closest('.produs-data').find('input[name="quantity"]').val();

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.ajax({
			url: '/update-cart',
			method: 'POST',
			data: {
				produs_id: produsId,
				quantity: parseInt(quantity),
				updateQuantity: true
			},
			success: function(response) {
				console.log(quantity)
				$('.cart-count').text(response.cartCount);
				$('.cart-total').text(response.cartTotal);
				$('.cart-items').html(response.cartItems);
			}
		});
	});


});