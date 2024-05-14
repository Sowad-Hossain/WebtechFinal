function validateEditProfileForm() {
    var fullName = document.getElementsByName("full_name")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var mobileNumber = document.getElementsByName("mobile_number")[0].value;
    var username = document.getElementsByName("username")[0].value;
    var nid = document.getElementsByName("nid")[0].value;

    if (fullName.trim() === '' || email.trim() === '' || mobileNumber.trim() === '' || username.trim() === '' || nid.trim() === '') {
        alert("Fields cannot be empty");
        return false;
    }
    return true;
}



function validateChangePasswordForm() {
    var oldPassword = document.getElementsByName("password")[0].value;
    var newPassword = document.getElementsByName("npassword")[0].value;
    var confirmNewPassword = document.getElementsByName("cnpassword")[0].value;

    if (oldPassword.trim() === '' || newPassword.trim() === '' || confirmNewPassword.trim() === '') {
        alert("Fields cannot be empty");
        return false;
    }

    if (newPassword !== confirmNewPassword) {
        alert("New password and confirm new password must match");
        return false;
    }

    return true;
}

function validateProfileUpdateForm() {
    var fullName = document.getElementsByName("full_name")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var mobileNumber = document.getElementsByName("mobile_number")[0].value;
    var address = document.getElementsByName("Address")[0].value;
    var username = document.getElementsByName("username")[0].value;
    var password = document.getElementsByName("password")[0].value;
    var nid = document.getElementsByName("nid")[0].value;

    if (fullName.trim() === '' || email.trim() === '' || mobileNumber.trim() === '' || address.trim() === '' || username.trim() === '' || password.trim() === '' || nid.trim() === '') {
        alert("Fields cannot be empty");
        return false;
    }

    return true;
}
