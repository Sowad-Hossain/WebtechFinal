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


function validateCreateNewBookForm() {
    var title = document.getElementsByName("title")[0].value;
    var author = document.getElementsByName("author")[0].value;
    var genre = document.getElementsByName("genre")[0].value;
    var isbn = document.getElementsByName("isbn")[0].value;
    var price = document.getElementsByName("price")[0].value;
    var description = document.getElementsByName("description")[0].value;
    var stockQuantity = document.getElementsByName("stock_quantity")[0].value;

    if (title.trim() === '' || author.trim() === '' || genre.trim() === '' || isbn.trim() === '' || price.trim() === '' || description.trim() === '' || stockQuantity.trim() === '') {
        alert("Fields cannot be empty");
        return false;
    }
    return true;
}


function validateCreateNewEmployeeForm() {
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


function validateEditBookForm() {
    var title = document.getElementsByName("title")[0].value;
    var author = document.getElementsByName("author")[0].value;
    var genre = document.getElementsByName("genre")[0].value;
    var isbn = document.getElementsByName("isbn")[0].value;
    var price = document.getElementsByName("price")[0].value;
    var description = document.getElementsByName("description")[0].value;
    var stockQuantity = document.getElementsByName("stock_quantity")[0].value;

    if (title.trim() === '' || author.trim() === '' || genre.trim() === '' || isbn.trim() === '' || price.trim() === '' || description.trim() === '' || stockQuantity.trim() === '') {
        alert("Fields cannot be empty");
        return false;
    }

    if (isNaN(price) || isNaN(stockQuantity)) {
        alert("Price and Stock Quantity must be numeric");
        return false;
    }

    if (parseFloat(price) < 0 || parseInt(stockQuantity) < 0) {
        alert("Price and Stock Quantity must be non-negative");
        return false;
    }

    return true;
}

