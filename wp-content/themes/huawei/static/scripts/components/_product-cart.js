var timeout;
 
console.log('chnaged');
	jQuery('.woocommerce').on('change', 'input.qty', function(){
 
		if ( timeout !== undefined ) {
			clearTimeout( timeout );
		}
 
		timeout = setTimeout(function() {
			jQuery("[name='update_cart']").trigger("click");
		}, 1000 ); // 1 second delay, half a second (500) seems comfortable too
 
	});
