$(function () {

    $('.add-to-basket').on('click', function (e) {
        e.preventDefault(); // відміна події переходу по посиланню
        let id = $(this).data('id'); // звертаємося до посилання кнопки та дістаємо значення id із data-id

        $.ajax({
            url: '../basket.php', // куди відправити запит
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

});