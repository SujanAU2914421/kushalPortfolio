let navBar = document.querySelector(".navbar");
let scrollContainer = document.querySelector(".scrollContainer");

window.onload = () => {
	scrollF();
};

function scrollF() {
	scrollContainer.addEventListener("scroll", (e) => {
		scrollFTrans(e);
	});
}
function scrollFTrans(e) {
	if (e.target.scrollTop > 0) {
		navBar.style.background = "rgba(0, 0, 0, 1)";
	} else if (
		e.target.scrollTop >
		screen.availHeight - navBar.getBoundingClientRect().height - 300
	) {
		navBar.style.background = "rgba(255, 255, 255, 0.7)";
	} else {
		navBar.style.background = "rgba(0, 0, 0, 0.7)";
	}
}

scrollContainer.addEventListener("click", () =>{
    hideShowLogoutBtn()
})