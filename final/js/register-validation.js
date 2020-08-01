function validateForm() {
    var fname = document.forms["reg"]["fname"].value;
    var lname = document.forms["reg"]["lname"].value;
    var email = document.forms["reg"]["email"].value;
    var contact = document.forms["reg"]["cell"].value;
    var password1 = document.forms["reg"]["idp"].value;
    var password2 = document.forms["reg"]["idp2"].value;


    //first name validation
    if (fname == "") {
        document.getElementById('fname').style.borderColor = "red";
        document.getElementById('fname').style.placeholder = "Enter a valid name";
        document.getElementById('fname').focus();
        document.getElementById('fname').select();
        return false;
    }

    //last name validation
    if (lname == "") {
        document.getElementById('lname').style.borderColor = "red";
        document.getElementById('lname').focus();
        document.getElementById('lname').select();
        return false;
    }

    //email validation
    if (!email.match(/^\S+@\S+\.\S+$/)) {
        document.getElementById('email').style.borderColor = "red";
        document.getElementById('email').focus();
        document.getElementById('email').select();
        return false;
    }

    //contact validation
    if (!contact.match(/^[0-9]\d{9}$/)) {
        document.getElementById('cell').style.borderColor = "red";
        document.getElementById('cell').focus();
        document.getElementById('cell').select();
        return false;
    }

    //password validation
    if (password1 == "" || password2 == "") {
        document.getElementById('idp').style.borderColor = "red";
        document.getElementById('idp').focus();
        document.getElementById('idp').select();
        document.getElementById('idp2').style.borderColor = "red";
        return false;
    } else {
        if (password1 !== password2) {
            document.getElementById('idp').style.borderColor = "red";
            document.getElementById('idp2').style.borderColor = "red";
            document.getElementById('idp').value = "";
            document.getElementById('idp2').value = "";
            check = false;
            return false;

        }
    }

    alert("Form submitted");
    return true;

}