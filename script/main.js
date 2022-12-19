$(function () {

    $('.add-to-basket').on('click', function (e) {
        e.preventDefault(); // відміна події переходу по посиланню
        let id = $(this).data('id'); // звертаємося до посилання кнопки та дістаємо значення id із data-id

        $.ajax({
            url: '../includes/basket-logic.php', // куди відправити запит
            type: 'GET', // метод запиту
            data: { basket: 'add', id: id }, // дані, що передаються у масиві
            dataType: 'json', // метод запиту
            success: function (res) { // функція, яка виконується пістя успішного запиту; в res зберігоється відповідь від basket.php
                console.log(res.answer);
            },
            error: function () {
                alert('Error');
            }
        });
    });

    $('.del-from-basket').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: '../includes/basket-logic.php',
            type: 'GET',
            data: { basket: 'delete', id: id },
            dataType: 'json',
            success: function (res) {
                console.log(res.answer);
            },
            error: function () {
                alert('Error');
            }
        });
    });

    $('#clear-basket').on('click', function (e) {
        e.preventDefault();
        $.ajax({
            url: '../includes/basket-logic.php',
            type: 'GET',
            data: { basket: 'clear' },
            success: function (res) {
                console.log(res.answer);

            },
            error: function () {
                alert('Error');
            }
        });
    });

    $('#search').keyup(function () {
        let input = $(this).val();

        if (input != "") {
            $.ajax({
                url: "../includes/Search-logic.php",
                method: "POST",
                data: { input: input },
                success: function (res) {
                    $('#index-main').html("");
                    $('#display').css("display", "block");
                    $('#display').html(res);
                },
                error: function () {
                    alert('Error');
                    $('#display').css("display", "none");
                }

            });
        }
    });


    $('.buy').on('click', function () {
        $("#pop-up").show();
        setTimeout(function () { $("#pop-up").hide(); }, 1000);
    });
});

