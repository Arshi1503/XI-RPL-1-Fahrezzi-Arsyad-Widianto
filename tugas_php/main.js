function openSidebar() {
    document.getElementById("mySidebar").style.width = "150px"; // Atur lebar sidebar saat dibuka
    console.log("width is 150px");
}

document.getElementById("open-btn").addEventListener("click", openSidebar);

function closeSidebar() {
    document.getElementById("mySidebar").style.width = "0"; // Kembalikan lebar sidebar menjadi 0 saat ditutup
}

