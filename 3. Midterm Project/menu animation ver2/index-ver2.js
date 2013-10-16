window.onscroll = menuShows;

function menuShows(){
	var scrollValueY = window.scrollY;
	// console.log(scrollValueY);
	var menuContainer = document.getElementsByClassName("menu_container").item(0);
	var menuContainerPosY = menuContainer.offsetTop;
	console.log(menuContainerPosY);

	if(scrollValueY > menuContainerPosY){
		// console.log("you reached the menu div");
	}
}