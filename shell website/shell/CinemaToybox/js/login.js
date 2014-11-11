// JavaScript Document


onload=init;

function init(){
	//when user tries to leave the name field....validate it. 
	document.forms[0].uid.onblur = function(){
		checkEmptyString(this,"feeduid");
	}
	
	document.forms[0].upass.onblur = function(){
		checkEmptyString(this,"feedpass");
	}

	document.forms[0].onsubmit=function(){
		 return checkSubmit(this);
	}
}



function checkSubmit(myform){
	//if this var is true when returned, form submits
	var ok_to_submit = true;
	//if user filled anything out incorrectly
	if(!checkEmptyString(myform.uid,"feeduid")){ok_to_submit = false;}
	if(!checkEmptyString(myform.upass,"feedpass")){ok_to_submit = false;}
	console.log(ok_to_submit);
	return ok_to_submit;
}

function checkEmptyString(fld,feedid){
	fld.style.backgroundColor = "white";//set the field to a normal appearance 
	document.getElementById(feedid).innerHTML = "";
	//if the string the user typed in that field has characters
	if(fld.value.length == 0){
		document.getElementById(feedid).innerHTML = "Required Field";
		/*fld.focus();*/
		fld.style.backgroundColor = "orange";//set the field to a warning appearance 
		//make feedback text appear on page
		return false;//this sends false to where function was called, and stops the code
		
	}//ends if
	return true;
}






