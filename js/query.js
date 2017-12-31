$(function() {
	// body...
	//alert('hey');
	
	$('#thumbnail_container a').hover(function() {
		
		$(this).fadeOut('slow', function() {
			$(this).fadeIn('slow');
		});
	});

	/*==========NAV LINKS==============*/

    sr.reveal('.about_content_reveal', { duration: 3000, reset: true, mobile: true}, 500);
    sr.reveal('.tutos_reveal_left', { duration: 2000, reset: true, scale: 0.5, distance: '50px', origin: 'left', mobile: true});
    sr.reveal('.tutos_reveal_right', { duration: 2000, reset: true, scale: 0.5, distance: '50px', origin: 'right', mobile: true});


    // sr.reveal('.about_content_reveal', { container: '.fooContainer' }, 500);

    $('li>a').click(function(){
        var pos = $($(this).attr('href')).offset().top;
        $('body, html').animate({scrollTop:(pos-93)}, 1000);
    })
	
});