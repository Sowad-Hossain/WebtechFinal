<?php
function get_status_message($status)
{
    switch ($status) {
        case 1:
            return '<span class="error-message">Invalid Credentials</span>';
        case 2:
            return '<span class="error-message">Fields cannot be empty</span>';
        case 3:
            return '<span class="success-message">Sign up successful. Please log in to continue.</span>';
        case 4:
            return '<span class="error-message">Password and confirm password not matched.</span>';
        case 5:
            return '<span class="error-message">Old password not matched.</span>';
        case 6:
            return '<span class="success-message">Password updated successfully.</span>';
        case 7:
            return '<span class="success-message">Profile info updated successfully.</span>';
        case 8:
            return '<span class="success-message">Address Updated Successfully.</span>';
        case 9:
            return '<span class="error-message">Item Deleted.</span>';
        case 10:
            return '<span class="success-message">Item Added.</span>';
        case 11:
            return '<span class="error-message">Failed to Delete.</span>';
        case 12:
            return '<span class="error-message">Failed to add.</span>';
        case 13:
            return '<span class="success-message">Added to cart successfully.</span>';
        case 14:
            return '<span class="error-message">Deleted from cart.</span>';
        case 15:
            return '<span class="success-message">Rating added.</span>';
        case 16:
            return '<span class="success-message">Posted.</span>';
        case 17:
            return '<span class="success-message">Order Placed.</span>';
        case 18:
            return '<span class="success-message">Password do not match.</span>';
            case 22:
                return '<span class="success-message">You maybe Banned by system.</span>';
        default:
            return '<span class="error-message">Unknown error occurred</span>';
    }
}
?>