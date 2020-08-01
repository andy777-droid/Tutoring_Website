function validateForm() {
    var email = document.forms["login"]["email"].value;
    var password = document.forms["login"]["psw"].value;
    var counter = 0;


    //username validation
    if (email == "") {
        document.getElementById('email').style.borderColor = "red";
        document.getElementById('email').focus();
        document.getElementById('email').select();
        return false;
    } else {
        counter = counter + 1;
    }

    //password validation
    if (password == "") {
        document.getElementById('psw').style.borderColor = "red";
        document.getElementById('psw').focus();
        document.getElementById('psw').select();
        return false;
    } else {
        counter = counter + 1;
    }

    if (counter == 2) {
        return true;
    } else {
        return false;
        alert("User does not exist, please try again");
    }
}