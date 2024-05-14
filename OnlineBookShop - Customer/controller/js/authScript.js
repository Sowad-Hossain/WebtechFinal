function validateSignInForm() {
    var username = document.getElementsByName("username")[0].value;
    var password = document.getElementsByName("password")[0].value;

    if (username.trim() === '' || password.trim() === '') {
        alert("Username and password cannot be empty");
        return false;
    }

    return true;
}

function validateSignUpForm() {
    var fullName = document.getElementsByName("full_name")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var mobileNumber = document.getElementsByName("mobile_number")[0].value;
    var address = document.getElementsByName("Address")[0].value;
    var username = document.getElementsByName("username")[0].value;
    var password = document.getElementsByName("password")[0].value;
    var nid = document.getElementsByName("nid")[0].value;

    if (fullName.trim() === '' || email.trim() === '' || mobileNumber.trim() === '' || address.trim() === '' || username.trim() === '' || password.trim() === '' || nid.trim() === '') {
        alert("All fields are mandatory");
        return false;
    }

    if (password.length < 8) {
        alert("Password should contain at least 8 characters");
        return false;
    }

    return true;
}
