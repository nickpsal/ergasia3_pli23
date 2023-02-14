var form = document.querySelector("form");

form.addEventListener("submit", function (event) {
    var afmfield = document.getElementById("afm");
    var afm = afmfield.value;
    var passwordfield = document.getElementById("password");
    var password = passwordfield.value;
    var confirmpasswordfield = document.getElementById("passwordconfirm");
    var passwordconfirm = confirmpasswordfield.value;
    if (afm.length !== 9) {
        afmfield.style.backgroundColor = "red";
        errorafm.textContent = "Το ΑΦΜ πρέπει να έχει 9 Αριθμούς";
        event.preventDefault();
    } else {
        afmfield.style.backgroundColor = "white";
        errorafm.textContent = "";
    }
    if (password !== passwordconfirm) {
        passwordfield.style.backgroundColor = "red";
        confirmpasswordfield.style.backgroundColor = "red";
        errorPassword.textContent="Τα πεδίο Κωδικος και Επιβεβαίωση Κωδικου δεν ταιριάζουν";
        event.preventDefault();
    }else {
        passwordfield.style.backgroundColor = "white";
        confirmpasswordfield.style.backgroundColor = "white";
        errorPassword.textContent="";
    }
});