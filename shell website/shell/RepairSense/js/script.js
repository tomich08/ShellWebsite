// JavaScript Document
onload=init;

function init(){
	updateCart();
}	
	
	
function choseTruck(){
	sessionStorage.carType = '<img src="img/pickup.png" alt="pickup"/><br/><p>Truck</p>';
	updateCart;
}

function choseSuv(){
	sessionStorage.carType = '<img src="img/suv.png" alt="pickup"/><br/><p>SUV</p>';
	updateCart;
}

function choseCar(){
	sessionStorage.carType = '<img src="img/car.png" alt="pickup"/><br/><p>Car</p>';
	updateCart;
}

function choseCompact(){
	sessionStorage.carType = '<img src="img/compactcar.png" alt="pickup"/><br/><p>Compact Car</p>';
	updateCart;
}

function choseOptOne(){
	sessionStorage.warType = '<img src="img/plan1.png" alt="plans" class="vehiclemil"/>';
	sessionStorage.warPrice = 25.99;
	updateCart;
}

function choseOptTwo(){
	sessionStorage.warType = '<img src="img/plan2.png" alt="plans" class="vehiclemil"/>';
	sessionStorage.warPrice = 35.99;
	updateCart;
}

function choseOptThree(){
	sessionStorage.warType = '<img src="img/plan3.png" alt="plans" class="vehiclemil"/>';
	sessionStorage.warPrice = 45.99;
	updateCart;
}

function choseMileOne(){
	sessionStorage.mileType = '<img src="img/vehinfo1.png" alt="vehicle mileage" class="vehiclemil"/>';
	sessionStorage.milePrice = 0;
	updateCart;
}

function choseMileTwo(){
	sessionStorage.mileType = '<img src="img/vehinfo2.png" alt="vehicle mileage" class="vehiclemil"/>';
	sessionStorage.milePrice = 5;
	updateCart;
}

function choseMileThree(){
	sessionStorage.mileType = '<img src="img/vehinfo3.png" alt="vehicle mileage" class="vehiclemil"/>';
	sessionStorage.milePrice = 10;
	updateCart;
}

function choseLengthOne(){
	sessionStorage.lengthType = '<img src="img/cov1.png" alt="coverage" class="vehiclemil"/>';
	sessionStorage.lengthPrice = 10;
	updateCart;
}

function choseLengthTwo(){
	sessionStorage.lengthType = '<img src="img/cov2.png" alt="coverage" class="vehiclemil"/>';
	sessionStorage.lengthPrice = 15;
	updateCart;
}

function choseLengthThree(){
	sessionStorage.lengthType = '<img src="img/cov3.png" alt="coverage" class="vehiclemil"/>';
	sessionStorage.lengthPrice = 20;
	updateCart;
}




function updateCart(){
	
	var w_price = 0;
	var s_price = 0;
	var c_price = 0;
	
	
	//if user hasn't picked an item. run if/else statement	
	if(sessionStorage.carType){	
	
	document.getElementById("vehicle").innerHTML=sessionStorage.carType;
}

	if(sessionStorage.carType){
		
	document.getElementById("vehicle").innerHTML=sessionStorage.carType;
}

	if(sessionStorage.carType){	

	document.getElementById("vehicle").innerHTML=sessionStorage.carType;
}

	if(sessionStorage.carType){	
	
	document.getElementById("vehicle").innerHTML=sessionStorage.carType;
}

	if(sessionStorage.warType){	
	
	document.getElementById("warranty").innerHTML=sessionStorage.warType;
	w_price = Number(sessionStorage.warPrice).toFixed(2);
	document.getElementById("warranty_price").innerHTML=sessionStorage.warPrice;
}

	if(sessionStorage.mileType){
	document.getElementById("mileage").innerHTML=sessionStorage.mileType;
	s_price = Number(sessionStorage.milePrice).toFixed(2);
	document.getElementById("milsurcharge").innerHTML=sessionStorage.milePrice;
	}
	
	if(sessionStorage.lengthType){
	document.getElementById("cov").innerHTML=sessionStorage.lengthType;
	c_price = Number(sessionStorage.lengthPrice).toFixed(2);
	document.getElementById("covprice").innerHTML=sessionStorage.lengthPrice;
	}
	
	document.getElementById("cart_total").innerHTML = (Number(s_price)+ Number(w_price)+ Number(c_price)).toFixed(2);

}