// JavaScript Document



$('.menuOp').hover(function(){
	"use strict";
	
	$(this).toggleClass('hoving');
	//console.log("log");
});

$about = document.getElementById('about');
$contact = document.getElementById('contact');

$about.addEventListener("click", function(){
	"use strict";
	location.href="index.php";
});

$contact.addEventListener("click",function(){
	"use strict";
	location.href="contact.php";
});