function profile() {
    var x = document.getElementById("arrow");
    if (x.style.transform == "rotate(-45deg)") {
        x.style.transform = "rotate(135deg)";
        document.getElementById("dropdown-content").style.display = "none";
    }
    else {
        x.style.transform = "rotate(-45deg)";
        document.getElementById("dropdown-content").style.display = "block";
    }
    
};





