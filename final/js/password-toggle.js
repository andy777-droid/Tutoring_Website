function myFunction() {
    var x = document.getElementById("idp");

    if (x.type === "password") {
        x.type = "text";

    } else {
        x.type = "password";
    }
}