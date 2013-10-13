// var menuDropButton = document.getElementById("menu-drop");
// menuDropButton.addEventListener("click",function(evt){
// 	evt.preventDefault();

// 	var menuArea = document.getElementById("menu_container");
// 	menuArea.style.background="blue";
// },false);



//************Owen's code help*************
// var menu_container = document.getElementById('menu_container');

// var menu_top = menu_container.offsetTop;

// function scroll() {
// 	var scrollValue = window.scrollY;
// 	//console.log(scrollValue);

// 	requestAnimationFrame(scroll);
// }

// function menuAlert() {
// 	alert("FART");
// }

// scroll();




// var menuContainer = document.getElementById("menu_container");

// var scrollValueY = window.scrollY;
// console.log(scrollValueY);

window.onscroll = menuShows;

function menuShows(){
	var scrollValueY = window.scrollY;
	console.log(scrollValueY);

	if(scrollValueY > 400){
		// var menuArea = document.getElementById("menu_container");
		// menuArea.style.background="blue";

		var thumbnail_container = document.getElementById("thumbnail_container");
		thumbnail_container.classList.add("is-active");
		console.log("menu shows!");
	}
}


