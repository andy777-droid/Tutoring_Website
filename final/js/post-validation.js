function validateForm() {
    var suburb = document.forms["post"]["suburb"].value;
    var subject = document.forms["post"]["subjects"].value;
    var experience = document.forms["post"]["experience"].value;
    var qualification = document.forms["post"]["qualification"].value;
    var education = document.forms["post"]["education"].value;
    var complete = document.forms["post"]["complete"].value;
    var transport = document.forms["post"]["owntransport"].value;
    var price = document.forms["post"]["price"].value;
    var msg = document.forms["post"]["bio"].value;
    var age = document.forms["post"]["agerange"].value;
    var radius = document.forms["post"]["radius"].value;
    var image = document.forms["post"]["test"].value;


    alert(suburb + " : " + subject + " : " + experience + " : " + qualification + " : " + education + " : " + complete + " : " + transport + " : " + price + " : " + msg + " : " + age + " : " + radius);

















    return true;

}