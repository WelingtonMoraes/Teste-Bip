$(function(){ 
	
	$('.input-payment').on('change', function(){
		if (this.id == 'payment-card' && this.checked) {
			$('.wrapp-payment').fadeIn();
		} else {
			$('.wrapp-payment').fadeOut();
		}
	});
	
	$('.checkout__step--title').on('click', function() {
		var actionStep = this;
		
		if ($(this).hasClass('open')) {
			$(this).removeClass('open');
			$(this).siblings('.checkout__content').slideUp();
		} else {
			$(this).addClass('open');
			$(this).siblings('.checkout__content').slideDown();
		}
		
		
	});
});