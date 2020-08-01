function myFunction() {
    var x = document.getElementById("idp");
    var y = document.getElementById("idp2");


    if (x.type === "password" && y.type == "password") {
        x.type = "text";
        y.type = "text";

    } else {
        x.type = "password";
        y.type = "password";
    }
}