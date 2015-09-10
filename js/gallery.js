document.addEventListener("keydown", sliderFunction, false);

var img_id = 'gallery_img0';
currImg();
var counter = document.getElementById('img_counter').innerHTML;

document.getElementById("gallery_main_img").src = document.getElementById(img_id).src;

//load image on click
function myfunction(id) {
	img_id = id;
	document.getElementById("gallery_main_img").src = document.getElementById(img_id).src;

	currImg();
}

function currImg() {
	var temp;
	for (var i = 0; i < counter; i++) {
		temp = document.getElementById('gallery_img'+[i]);
		temp.className = '';
	};
	
	document.getElementById(img_id).className = 'selected_img';
}

//previous and next image
function sliderFunction(e) {
	var character;
	var keyCode = e.keyCode;
	var token = img_id.split('');
	
	for (var i = 0; i < token.length; i++) {
		character = token[i];
	};

	if (e == 'left' && character > 0 || keyCode == 37 && character > 0) {
		character--;
	}
	else if(e == 'right' && character < counter-1 || keyCode == 39 && character < counter-1){
		character++;
	}

	img_id = 'gallery_img'+character;
	document.getElementById("gallery_main_img").src = document.getElementById(img_id).src;

	currImg();
}