window.onscroll = menuShows;

function menuShows(){
	var scrollValueY = window.scrollY;
	// console.log(scrollValueY);
	var menuContainer = document.getElementsByClassName("menu_container").item(0);
	var menuContainerPosY = menuContainer.offsetTop;
	console.log(menuContainerPosY);

	if(scrollValueY > menuContainerPosY){
		// console.log("you reached the menu div");

		var thm_delay1 = document.getElementsByClassName("thm_delay1").item(0);
		thm_delay1.classList.add("is-active");
		var thm_delay2 = document.getElementsByClassName("thm_delay2").item(0);
		thm_delay2.classList.add("is-active");
		var thm_delay3 = document.getElementsByClassName("thm_delay3").item(0);
		thm_delay3.classList.add("is-active");
		var thm_delay4 = document.getElementsByClassName("thm_delay4").item(0);
		thm_delay4.classList.add("is-active");
	}
}