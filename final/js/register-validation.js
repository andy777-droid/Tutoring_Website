function validateForm() {
    var fname = document.forms["reg"]["fname"].value;
    var lname = document.forms["reg"]["lname"].value;
    var email = document.forms["reg"]["email"].value;
    var contact = document.forms["reg"]["cell"].value;
    var password1 = document.forms["reg"]["idp"].value;
    var password2 = document.forms["reg"]["idp2"].value;


    //first name validation
    if (fname == "") {
        document.getElementById('fname').style.border = "3px solid red";
        document.getElementById('fname').value = "";
        document.getElementById('fname').placeholder = "Please enter a valid name";
        document.getElementById('fname').focus();
        document.getElementById('fname').select();
        return false;
    } else {
        document.getElementById('fname').style.border = "none";
    }

    //last name validation
    if (lname == "") {
        document.getElementById('lname').style.border = "3px solid red";
        document.getElementById('lname').value = "";
        document.getElementById('lname').placeholder = "Please enter a valid surname";
        document.getElementById('lname').focus();
        document.getElementById('lname').select();
        return false;
    } else {
        document.getElementById('lname').style.border = "none";

    }

    //email validation
    if (!email.match(/^\S+@\S+\.\S+$/)) {
        document.getElementById('email').style.border = "3px solid red";
        document.getElementById('email').value = "";
        document.getElementById('email').placeholder = "Please enter a valid email";
        document.getElementById('email').focus();
        document.getElementById('email').select();
        return false;
    } else {
        document.getElementById('email').style.border = "none";
    }

    //contact validation
    if (!contact.match(/^[0-9]\d{9}$/)) {
        document.getElementById('cell').style.border = "3px solid red";
        document.getElementById('cell').value = "";
        document.getElementById('cell').placeholder = "Please enter a valid cellphone number";
        document.getElementById('cell').focus();
        document.getElementById('cell').select();
        return false;
    } else {
        document.getElementById('cell').style.border = "none";
    }


    //password validation
    if ((password1 == "") || (password2 == "")) {
        document.getElementById('idp').style.border = "3px solid red";
        document.getElementById('idp').value = "";
        document.getElementById('idp2').value = "";
        document.getElementById('idp').placeholder = "Please enter a password";
        document.getElementById('idp').focus();
        document.getElementById('idp').select();
        document.getElementById('idp2').style.border = "3px solid red";
        return false;
    } else {
        if (document.forms["reg"]["idp"].value.length < 6) {
            document.getElementById('idp').style.border = "3px solid red";
            document.getElementById('idp').value = "";
            document.getElementById('idp2').value = "";
            document.getElementById('idp').placeholder = "Password must be at least 6 characters long";
            document.getElementById('idp').focus();
            document.getElementById('idp').select();
            document.getElementById('idp2').style.border = "3px solid red";
            return false;
        } else {
            if (password1 != password2) {
                document.getElementById('idp').style.border = "3px solid red";
                document.getElementById('idp2').style.border = "3px solid red";
                document.getElementById('idp').value = "";
                document.getElementById('idp2').value = "";
                document.getElementById('idp2').placeholder = "Passwords must match";
                return false;
            } else {
                document.getElementById('idp').style.border = "none";
                document.getElementById('idp2').style.border = "none";
            }
        }

    }

    alert("User registered successfully!");
    return true;

}