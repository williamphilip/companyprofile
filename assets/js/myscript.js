// sweet alert effect
const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal({
		title: 'Pesan Anda ',
		text: 'Berhasil ' + flashData,
		type: 'success'
	});
}

// sticky Navigation 
const navbar = $(".navbar");

$(window).scroll(function () {
	const oTop = $(".pelayanan").offset().top - window.innerHeight;
	if ($(window).scrollTop() > oTop) {
		navbar.addClass("sticky");
	} else {
		navbar.removeClass("sticky");
	}
});

// parallax card
$(window).scroll(function () {
	const wScroll = $(this).scrollTop();
	if (wScroll > $('.news').offset().top - 250) {
		$('.news .card').each(function (i) {
			setTimeout(function () {
				$('.news .card').eq(i).addClass('muncul');
			}, 400 * (i + 1));
		});
	}

	const mScroll = $(this).scrollTop();
	if (mScroll > $('.testimonials').offset().top - 250) {
		$('.tLeft').addClass('tNongol');
		$('.tRight').addClass('tNongol');
	}

});
