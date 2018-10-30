var slider_content = document.getElementById('box');
		
		//contain images in an array
		var image = ['images/IE.png','images/internal_incursion.png'];
		
		var i = image.length;
		
		//function for the next slide 
		function nextImage(){
			if (i<image.length) {
				i= i+1;
			}else{
				i = 1;
			}
			  slider_content.innerHTML = "<img class=imgslide src="+image[i-1]+" >";

		}


		// function for prew slide
		function prevImage(){

			if (i<image.length+1 && i>1) {
				i= i-1;
			}else{
				i = image.length;
			}
			  slider_content.innerHTML = "<img class=imgslide src="+image[i-1]+">";

		}

	  
	  // script for auto image slider
	  setInterval(nextImage , 4000);
}