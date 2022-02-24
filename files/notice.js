let noticeContainer = document.querySelectorAll(".noticeContainer");

let noticeBox = document.querySelectorAll(".noticeBox");
let arrowDown = `
<svg
xmlns="http://www.w3.org/2000/svg"
width="24"
height="24"
viewBox="0 0 24 24"
fill="none"
stroke="currentColor"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
class="feather feather-chevron-down"
>
<polyline points="6 9 12 15 18 9"></polyline>
</svg>
`;
let arrowUp = `
<svg
xmlns="http://www.w3.org/2000/svg"
width="24"
height="24"
viewBox="0 0 24 24"
fill="none"
stroke="currentColor"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
class="feather feather-chevron-up"
>
<polyline points="18 15 12 9 6 15"></polyline>
</svg>
`;

noticeContainer.forEach((elem, ind) => {
	elem.addEventListener("click", () => {
		if (elem.style.display == "block") {
			noticeBox.style.display = "none";
		}
		noticeClickHandler(elem, ind);
	});
});

function noticeClickHandler(elem, ind) {
	noticeBox.forEach((e, i) => {
		if (ind == i) {
			e.style.display = "block";
		} else {
			e.style.display = "none";
		}
	});
	noticeContainer.forEach((e, i) => {
		if (i == ind) {
			e.style.border = "none";
			e.style.background = "rgba(0, 0, 0, 0.1)";
		} else {
			e.style.border = "1px solid lightgray";
			e.style.background = "white";
		}
	});
}
