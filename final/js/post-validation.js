function validateForm() {

    var qualification = document.forms["post"]["qualification"].value;
    var education = document.forms["post"]["education"].value;
    var complete = document.forms["post"]["complete"].value;
    var price = document.forms["post"]["price"].value;
    var msg = document.forms["post"]["bio"].value;
    var radius = document.forms["post"]["radius"].value;


    //Qualification validation
    if (qualification == "") {
        document.getElementById('qualification').style.border = "3px solid red";
        document.getElementById('qualification').value = "";
        document.getElementById('qualification').placeholder = "Please enter a valid qualification";
        document.getElementById('qualification').focus();
        document.getElementById('qualification').select();
        return false;
    } else {
        document.getElementById('qualification').style.border = "none";

    }

    //Place of education validation
    if (education == "") {
        document.getElementById('education').style.border = "3px solid red";
        document.getElementById('education').value = "";
        document.getElementById('education').placeholder = "Please enter the place at which your education was done";
        document.getElementById('education').focus();
        document.getElementById('education').select();
        return false;
    } else {
        document.getElementById('education').style.border = "none";

    }

    //Year complete validation
    if (complete > 2020) {
        document.getElementById('complete').style.border = "3px solid red";
        document.getElementById('complete').value = "";
        document.getElementById('complete').placeholder = "Please enter a realistic year";
        document.getElementById('complete').focus();
        document.getElementById('complete').select();
        return false;
    } else {
        document.getElementById('complete').style.border = "none";

    }

    //Price per lesson validation
    if (price == "") {
        document.getElementById('price').style.border = "3px solid red";
        document.getElementById('price').value = "";
        document.getElementById('price').placeholder = "Please enter a price";
        document.getElementById('price').focus();
        document.getElementById('price').select();
        return false;
    } else {
        document.getElementById('price').style.border = "none";

    }
    //Describe yourself validation
    if (msg == "") {
        document.getElementById('bio').style.border = "3px solid red";
        document.getElementById('bio').value = "";
        document.getElementById('bio').placeholder = "Please describe yourself";
        document.getElementById('bio').focus();
        document.getElementById('bio').select();
        return false;
    } else {
        document.getElementById('bio').style.border = "none";

    }

    //Driving radius validation

    if (radius == "") {
        document.getElementById('radius').style.border = "3px solid red";
        document.getElementById('radius').value = "";
        document.getElementById('radius').placeholder = "Please enter a radius";
        document.getElementById('radius').focus();
        document.getElementById('radius').select();
        return false;
    } else {
        document.getElementById('radius').style.border = "none";

    }

    return true;

};