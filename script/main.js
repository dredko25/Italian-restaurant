$(function () {

    $('.add-to-busket').on('click', function (e) {
        e.preventDefault(); // відміна події переходу по посиланню
        let id = $(this).data('id'); // звертаємося до посилання кнопки та дістаємо значення id із data-id

        $.ajax({
            url: '../busket.php',
            type: 'GET',
            data: { busket: 'add', id: id },
            dataType: 'json',
            success: function (res) {
                console.log(res.answer);
            },
            error: function () {
                alert('Error');
            }
        });
    });

});