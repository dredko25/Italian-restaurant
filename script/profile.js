const mainForm = document.forms.userData;

let checkName = false;
let checkSurname = false;
let checkPhone = false;
let checkEmail = false;
let checkStreet = false;
let checkHouse = false;
let checkApartment = false;
mainForm.user_name.addEventListener("input", function () {
    let value_uname = mainForm.user_name.value;
    if (value_uname.length < 1 || /\d/.test(value_uname)) { // \d - будь-яке число
        er("user_name");
        checkName = false;
    }
    else {
        noter("user_name");
        checkName = true;
    }
});
mainForm.user_surname.addEventListener("input", function () {
    let value_usurname = mainForm.user_surname.value;
    if (value_usurname.length < 1 || /\d/.test(value_usurname)) { // \d - будь-яке число
        er("user_surname");
        checkSurname = false;
    }
    else {
        noter("user_surname");
        checkSurname = true;
    }
});
mainForm.user_phone.addEventListener("input", function () {
    let value_uphone = mainForm.user_phone.value;
    if (!(/\d\d\d\d\d\d\d\d\d\d/.test(value_uphone)) || value_uphone.length !== 10) {
        er("user_phone");
        checkPhone = false;
    }
    else {
        noter("user_phone");
        checkPhone = true;
    }
});
mainForm.user_email.addEventListener("input", function () {
    let value_uemail = mainForm.user_email.value;
    if ((value_uemail == '') || (value_uemail.length < 6) || !(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(value_uemail))) {
        er("user_email");
        checkEmail = false;
    }
    else {
        noter("user_email");
        checkEmail = true;
    }
});
mainForm.user_street.addEventListener("input", function () {
    let value_ustreet = mainForm.user_street.value;
    if (value_ustreet.length < 1) {
        er("user_street");
        checkStreet = false;
    }
    else {
        noter("user_street");
        checkStreet = true;
    }
});
mainForm.user_house.addEventListener("input", function () {
    let value_uhouse = mainForm.user_house.value;
    if (value_uhouse.length < 1 || value_uhouse == 0) {
        er("user_house");
        checkHouse = false;
    }
    else {
        noter("user_house");
        checkHouse = true;
    }
});
mainForm.user_apartment.addEventListener("input", function () {
    let value_uapartmet = mainForm.user_apartment.value;
    if (value_uapartmet.length < 1  || /\D/.test(value_uapartmet) || value_uapartmet == 0) { // \D = !\d
        er("user_apartment");
        checkApartment = false;
    }
    else {
        noter("user_apartment");
        checkApartment = true;
    }
});

function noter(name) {
    document.getElementsByName(name)[0].style.borderColor = "#008000";
}
function er(name) {
    document.getElementsByName(name)[0].style.borderColor = "#FF0000";
}

document.getElementById('mouseover').addEventListener("mouseover", function() {
    if (checkName && checkSurname && checkPhone && checkEmail && checkStreet && checkHouse && checkApartment){
        document.getElementById('make-order-input').disabled = false;
    }
    else{
        document.getElementById('make-order-input').disabled = true;
    }
});
