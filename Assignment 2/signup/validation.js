function validationForm() {
    var fullname = document.forms["myForm"]["Full name"].value;
    var email = document.forms["myForm"]["Email"].value;
    var day = document.forms["myForm"]["Dateday"].value;
    var month = document.forms["myForm"]["Datemonth"].value;

    var applecake = document.forms["myForm"]["Apple Cake"].checked;
    var custardtart = document.forms["myForm"]["Custard Tart"].checked;
    var donuts = document.forms["myForm"]["Donuts"].checked;
    var randytart = document.forms["myForm"]["Randy Tart"].checked;
    var raspberrycake = document.forms["myForm"]["Raspberry Cake"].checked;
    var vanillaslice = document.forms["myForm"]["Vanilla Slice"].checked;

    var gendermale = document.forms["myForm"]["gendermale"].checked;
    var genderfemale = document.forms["myForm"]["genderfemale"].checked;
    var gendercupake = document.forms["myForm"]["gendercupake"].checked;

    if (fullname == "") {
        alert("Name must be filled out");
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    } else {
        if (!email.includes("@")) {
            alert("Email must be a valid email");
            return false;
        }
    }
    if (day == "" || month == "") {
        alert("Please fill out your birthday");
        return false;
    } else {
        if (parseInt(day) > 31 || parseInt(day) <= 0) {
            alert("You cant be born on that day");
            return false;
        }
        if (parseInt(month) > 12 || parseInt(month) <= 0) {
            alert("You cant be born in this month");
            return false;
        }
    }
    if ((applecake == false) && (custardtart == false) &&
        (donuts == false) && (randytart == false) &&
        (raspberrycake == false) && (vanillaslice == false)) {

        alert("You need to check at least one pastry");
        return false;
    }

    if ((gendermale == false) && (genderfemale == false) &&
        (gendercupake == false)) {

        alert("Please choose a gender");
        return false;
        }
}
