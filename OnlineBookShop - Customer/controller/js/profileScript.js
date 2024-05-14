function validateEditProfileForm() {
    var fullName = document.getElementsByName("full_name")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var mobileNumber = document.getElementsByName("mobile_number")[0].value;
    var userName = document.getElementsByName("username")[0].value;
    var nid = document.getElementsByName("nid")[0].value;

    if (fullName.trim() === '' || email.trim() === '' || mobileNumber.trim() === '' || userName.trim() === '' || nid.trim() === '') {
        alert("All fields are mandatory!");
        return false;
    }

    return true;
}


function validateChangePasswordForm() {
    var password = document.getElementsByName("password")[0].value;
    var nPassword = document.getElementsByName("npassword")[0].value;
    var cnPassword = document.getElementsByName("cnpassword")[0].value;

    if (password.trim() === '' || nPassword.trim() === '' || cnPassword.trim() === '') {
        alert("All fields are mandatory!");
        return false;
    }

    return true;
}

function validateManageAddressBookForm() {
    var password = document.getElementsByName("password")[0].value;

    if (password.trim() === '') {
        alert("All fields are mandatory!");
        return false;
    }

    return true;
}
