		//show relevant workout
		function showRelevantWorkout() {
		//variables
        var abs = document.getElementById("absRadio");
		var legs = document.getElementById("legsRadio");
		var easy = document.getElementById("easyRadio");
		var medium = document.getElementById("mediumRadio");
		var hard = document.getElementById("hardRadio");
		var easyAbsVideo = document.getElementById("abs-easy");
		var mediAbsVideo = document.getElementById("abs-medium");
		var hardAbsVideo = document.getElementById("abs-hard");
		var easyLegsVideo = document.getElementById("legs-easy");
		var mediLegsVideo = document.getElementById("legs-medium");
		var hardLegsVideo = document.getElementById("legs-hard");
		var videosSection = document.getElementById("videos");
		var lastSection = document.getElementById("last-section");
		var legsRules = document.getElementById("legs-rules");
		var absRules = document.getElementById("abs-rules");
		
		if (easy.checked == true && legs.checked == true){
			
		videosSection.style.display = "block";
        easyLegsVideo.style.display = "block";
		legsRules.style.display = "block";
		
		} else
		if (easy.checked == true && abs.checked == true){
		videosSection.style.display = "block";
        easyAbsVideo.style.display = "block";
		absRules.style.display = "block";
		
		
		} else 
		if (medium.checked == true && legs.checked == true){
		videosSection.style.display = "block";
        mediLegsVideo.style.display = "block";
		legsRules.style.display = "block";
		
		}  else 
		if (medium.checked == true && abs.checked == true){
		videosSection.style.display = "block";
        mediAbsVideo.style.display = "block";
		absRules.style.display = "block";
		
		} else
		if (hard.checked == true && legs.checked == true){
		videosSection.style.display = "block";
        hardLegsVideo.style.display = "block";
		legsRules.style.display = "block";
		
		} else
		if (hard.checked == true && abs.checked == true){
		videosSection.style.display = "block";
        hardAbsVideo.style.display = "block";
		absRules.style.display = "block";
		}
	
		
}

function resetForm(){
location.reload();
window.scrollTo(0,0); 
}



	 
		




