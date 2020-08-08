function validateForm() {

    var password0 = document.forms["change-password"]["epsw"].value;
    var password1 = document.forms["change-password"]["npsw"].value;
    var password2 = document.forms["change-password"]["cnpsw"].value;
    if (password0 == "") {
        document.getElementById('epsw').style.border = "3px solid red";
        document.getElementById('epsw').value = "";
        document.getElementById('epsw').focus();
        document.getElementById('epsw').select();
    }

    if ((password1 == "") || (password2 == "")) {
        document.getElementById('npsw').style.border = "3px solid red";
        document.getElementById('npsw').value = "";
        document.getElementById('cnpsw').value = "";
        document.getElementById('npsw').placeholder = "Please enter a password";
        document.getElementById('npsw').focus();
        document.getElementById('npsw').select();
        document.getElementById('cnpsw').style.border = "3px solid red";
        return false;
    } else {
        if (document.forms["change-password"]["npsw"].value.length < 6) {
            document.getElementById('npsw').style.border = "3px solid red";
            document.getElementById('npsw').value = "";
            document.getElementById('cnpsw').value = "";
            document.getElementById('npsw').placeholder = "Password must be at least 6 characters long";
            document.getElementById('npsw').focus();
            document.getElementById('npsw').select();
            document.getElementById('cnpsw').style.border = "3px solid red";
            return false;
        } else {
            if (password1 != password2) {
                document.getElementById('npsw').style.border = "3px solid red";
                document.getElementById('cnpsw').style.border = "3px solid red";
                document.getElementById('npsw').value = "";
                document.getElementById('cnpsw').value = "";
                document.getElementById('cnpsw').placeholder = "Passwords must match";
                return false;
            } else {
                document.getElementById('npsw').style.border = "none";
                document.getElementById('cnpsw').style.border = "none";
            }
        }
    }
}