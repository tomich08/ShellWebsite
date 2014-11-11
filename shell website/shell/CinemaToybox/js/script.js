// JavaScript Document








document.getElementsByTagName("a")[8].onclick = 
	function(){
		navDrop();
	}

var nav = "none"

function navDrop(){
	if(nav == "none"){
		document.getElementsByClassName("nav_drop")[0].style.display = "block";
		
		nav = "block";
		}
		else if(nav == "block"){
			document.getElementsByClassName("nav_drop")[0].style.display = "none";
			
			nav = "none";
			}
			
}


