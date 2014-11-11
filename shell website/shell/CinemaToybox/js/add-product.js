// JavaScript Document

// JavaScript Document

onload=init;

function init(){
	//when user tries to leave the name field....validate it. 
	document.forms[0].brand_type.onblur = function(){
		checkEmptyString(this,"feedtype");
	}
	
	document.forms[0].prod_name.onblur = function(){
		checkEmptyString(this,"feedname");
	}
	document.forms[0].brief_desc.onblur = function(){
		checkEmptyString(this,"feedbdesc");
	}
	document.forms[0].full_desc.onblur = function(){
		checkEmptyString(this,"feedfdesc");
	}
	
	document.forms[0].newprice.onblur = function(){
		checkPrice(this,"feedprice");
	}
	document.forms[0].onsubmit=function(){
		 return checkSubmit(this);
	}
}



function checkSubmit(myform){
	//if this var is true when returned, form submits
	var ok_to_submit = true;
	//if user filled anything out incorrectly
	if(!checkEmptyString(myform.prod_name,"feedname")){ok_to_submit = false;}
	if(!checkEmptyString(myform.brand_type,"feedtype")){ok_to_submit = false;}
	if(!checkEmptyString(myform.newprice,"feedprice")){ok_to_submit = false;}
	if(!checkEmptyString(myform.full_desc,"feedfdesc")){ok_to_submit = false;}
	if(!checkEmptyString(myform.brief_desc,"feedbdesc")){ok_to_submit = false;}
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


function checkPrice(fld,feedid){
	fld.style.backgroundColor = "white";//set the field to a normal appearance 
	document.getElementById(feedid).innerHTML = "";
	//if the string the user typed in that field has characters
	//if a Number function on what the user typed returns Not a Number......
	if(isNaN(Number(fld.value))){
		document.getElementById(feedid).innerHTML = "Must be a Number";
		/*fld.focus();*/
		fld.style.backgroundColor = "orange";//set the field to a warning appearance 
		//make feedback text appear on page
		return false;//this sends false to where function was called, and stops the code
		
	}else if(fld.value.length == 0){
		document.getElementById(feedid).innerHTML = "Required Field";
		/*fld.focus();*/
		fld.style.backgroundColor = "orange";//set the field to a warning appearance 
		//make feedback text appear on page
		return false;//this sends false to where function was called, and stops the code
		
	}//ends if
	return true;
}




