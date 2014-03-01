$(document).ready(function() {
var _URL = window.URL || window.webkitURL;

$("#blog_image").change(function(e) {
    var file, img;
	var horiz=false;

    if ((file = this.files[0])) {  <!-- defines the image -->
        img = new Image();
		img.src = _URL.createObjectURL(file);  <!-- assignes url to image -->

        img.onload = function() {  <!-- function fires -->
			
			if(this.width>=this.height)  
			{
				horiz = true;
			}
			if(horiz && (this.width < minWidth))
			{
alert("Image width must be at least " + minWidth + "px");
document.getElementById('cat_image').value = "";
			}
			else if (!horiz && (this.height < minHeight))
			{
alert("Image height must be at least " + minHeight + "px");
document.getElementById('cat_image').value = "";
			}
			else if (file.size > maxFileSize)
			{
			alert("Image file size must be at less than " + maxFileSize + "kb");
document.getElementById('cat_image').value = "";	
			}
        };
        img.onerror = function() {
            alert( "not a valid file: " + file.type);
        };


    }

});
});