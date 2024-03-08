document.addEventListener('DOMContentLoaded', function() {
	const elementsToRemove = document.querySelectorAll('.wp-block-woocommerce-checkout, .wc-block-checkout');

	elementsToRemove.forEach(function(element) {
			element.parentNode.removeChild(element);
	});
});