let logoutBtn = document.querySelector(".logoutBtn")
let logouts = document.querySelector(".logouts")

function hideShowLogoutBtn(){
    if(logouts.style.display == "none"){
        logouts.style.display = "block"
    } else{
        logouts.style.display = "none"
    }
}
logoutBtn.addEventListener("click", ()=>{
    hideShowLogoutBtn()
})