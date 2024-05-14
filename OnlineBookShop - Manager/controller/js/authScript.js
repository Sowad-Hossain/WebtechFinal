function validateSignInForm() {
    var username = document.getElementsByName("username")[0].value;
    var password = document.getElementsByName("password")[0].value;

    if (username.trim() === '' || password.trim() === '') {
        alert("Username and password cannot be empty");
        return false;
    }

    return true;
}
