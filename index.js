var regbtn = document.getElementById("regButton");
var loginbtn = document.getElementById("loginButton");
var reg = document.getElementById("reg");
var login = document.getElementById("login");
var x = document.getElementById("x");
var x2 = document.getElementById("x2");

regbtn.onclick = function() {
    reg.style.right = "0";
}

x.onclick = function() {
    reg.style.right = "-60%";
    login.style.right = "-60%";
}

loginbtn.onclick = function() {
    login.style.right = "0";
}

x2.onclick = function() {
    login.style.right = "-60%";
    reg.style.right = "-60%";
}


