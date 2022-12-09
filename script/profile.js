const mainForm = document.forms.userData;

mainForm.user_name.addEventListener("input", function () {
    let value_uname = mainForm.user_name.value;
    if (value_uname.length < 1 || /\d/.test(value_uname)) { // \d - будь-яке число
        er("user_name");
    }
    else {
        noter("user_name");
    }
});
mainForm.user_surname.addEventListener("input", function () {
    let value_usurname = mainForm.user_surname.value;
    if (value_usurname.length < 1 || /\d/.test(value_usurname)) { // \d - будь-яке число
        er("user_surname");
    }
    else {
        noter("user_surname");
    }
});
mainForm.user_phone.addEventListener("input", function () {
    let value_uphone = mainForm.user_phone.value;
    if (!(/\d\d\d\d\d\d\d\d\d\d/.test(value_uphone)) || value_uphone.length !== 10) {
        er("user_phone");
    }
    else {
        noter("user_phone");
    }
});
mainForm.user_email.addEventListener("input", function () {
    let value_uemail = mainForm.user_email.value;
    //console.log(value_email);
    if ((value_uemail == '') || (value_uemail.length < 6) || !(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(value_uemail))) {
        er("user_email");
    }
    else {
        noter("user_email");
    }
});
mainForm.user_street.addEventListener("input", function () {
    let value_ustreet = mainForm.user_street.value;
    if (value_ustreet.length < 1) {
        er("user_street");
    }
    else {
        noter("user_street");
    }
});
mainForm.user_house.addEventListener("input", function () {
    let value_uhouse = mainForm.user_house.value;
    if (value_uhouse.length < 1 || value_uhouse == 0) {
        er("user_house");
    }
    else {
        noter("user_house");
    }
});
mainForm.user_apartment.addEventListener("input", function () {
    let value_uapartmet = mainForm.user_apartment.value;
    if (value_uapartmet.length < 1  || /\D/.test(value_uapartmet) || value_uapartmet == 0) { // \D = !\d
        er("user_apartment");
    }
    else {
        noter("user_apartment");
    }
});

function noter(name) {
    document.getElementsByName(name)[0].style.borderColor = "#008000";
}
function er(name) {
    document.getElementsByName(name)[0].style.borderColor = "#FF0000";
}