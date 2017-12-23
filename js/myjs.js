
//alert('hello there');

var thumbnails = document.getElementsByClassName('homepic_img');
var b_img = document.getElementsByClassName('big_img');
var img_toshow = document.getElementById('mymodal1');
var close_icon = document.getElementById('close_icon');
var tbn_container = document.getElementById('thumbnail_container');
var welcome_sec = document.getElementById('active-link');
var arrow_mover = document.getElementById('arrow_mover');

tbn_container.onclick = function (e) {
	for (var i =0; i <= thumbnails.length; i++) {
	
	if (e.target.id == thumbnails[i].id) {
		img_toshow.style.display = "block";
		b_img[i].style.display = "block";

	}
	}
}


img_toshow.onclick = function () {
	img_toshow.style.display = "none";
	for (var i =0; i <= thumbnails.length; i++) {
		b_img[i].style.display = "none";
	}

}

close_icon.onclick = function () {
	img_toshow.style.display = "none";

	for (var i =0; i <= thumbnails.length; i++) {
		b_img[i].style.display = "none";
	}
}

/*======================*/

