// Get the elements with the IDs "login", "register", and "btn"
var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

// Function to switch to the register form
function register() {
    // Move the login form to the left (-400px)
    x.style.left = "-400px";
    // Move the register form to the left (50px)
    y.style.left = "50px";
    // Move the button to the left (110px)
    z.style.left = "110px";
}

// Function to switch to the login form
function login() {
    // Move the login form to the left (50px)
    x.style.left = "50px";
    // Move the register form to the left (450px)
    y.style.left = "450px";
    // Move the button to the left (0)
    z.style.left = "0";
}
