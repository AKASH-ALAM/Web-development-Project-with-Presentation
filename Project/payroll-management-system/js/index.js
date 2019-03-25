function validateForm() {
    var un = document.loginform.usr.value;
    var pw = document.loginform.pword.value;
    var username = "admin";
    var password = "admin@123";
    if ((un == username) && (pw == password)) {
        window.location = "payroll.php";
        return true;
    } else {
        alert("Login was unsuccessful, please check your username and password");
        return false;
    }
}