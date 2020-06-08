var i = 0;

var images = [];
var time = 3000;


// image list
images[0] = 'images/ace1.jpg';
images[1] = 'images/ace2.jpg';
images[2] = 'images/ace4.jpg';
images[3] = 'images/ace5.jpg';
images[4] = 'images/ace7.jpg';
images[5] = 'images/ace8.jpg';
images[6] = 'images/ace9.jpg';
images[7] = 'images/ace10.jpg';
images[8] = 'images/ace11.jpg';
images[9] = 'images/ace12.jpg';
images[10] = 'images/ace13.jpg';
images[11] = 'images/ace14.jpg';
images[12] = 'images/ace16.jpg';
images[13] = 'images/ace18.jpg';
//change image
function changeImg() {
	document.slide.src = images[i];

	if (i < images.length - 1) {
		i++;
	} else {
		i = 0;
	}

	setTimeout("changeImg()", time);
}

window.onload = changeImg;