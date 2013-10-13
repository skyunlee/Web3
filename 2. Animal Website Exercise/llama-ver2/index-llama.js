// var stories = document.getElementById("stories");
// stories.addEventListener("click",function(evt){
// 	evt.preventDefault;
// 	document.write("Test!");
// 	// stories.classList.toggle("is-clicked");
// 	// var aboutLlama = document.getElementsByClassName("about_llama");
// 	// aboutLlama.classList.toggle("is-active");
// }, false);


var llama1 = document.getElementsByClassName("llama1");
llama1.addEventListener("click", imgChange, false);

function imgChange(){
	var imgContainer = document.getElementsByClassName("img_container");
	imgContainer.write("test");
}
