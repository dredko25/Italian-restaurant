<?php
session_start(); // створює сеанс або відновлює поточний на основі ідентифікатора сеансу, переданого через запит GET або POST або через файл cookie
require_once "db.php";
require_once "func.php";

if (isset($_GET['basket'])) { // Визначає, чи змінна оголошена та відрізняється від null
    switch ($_GET['basket']) {
        case 'add':
            $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
            $product = get_product($id);

            if (!$product) {
                echo json_encode(['code' => 'error', 'answer' => 'Error product']); // повертає JSON-представлення значення
            } else {
                add_to_basket($product);
                ob_start(); // Ця функція вмикає буферизацію виводу. Поки буферизація виводу активна, вихідні дані не надсилаються зі сценарію (окрім заголовків), натомість вихідні дані зберігаються у внутрішньому буфері.
                $basket = ob_get_clean(); //Отримує поточний вміст буфера та видаляє поточний вихідний буфер.
                echo json_encode(['code' => 'ok', 'answer' => $basket]);
            }
            break;
        case 'delete':
            $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
            if ($_SESSION['basket'][$id]) {
                $product = get_product($id);
                del_from_basket($product);
                unset($_SESSION['basket'][$id]);
                echo json_encode(['code' => 'ok', 'answer' => $_SESSION['basket']]);
            } else {
                echo json_encode(['code' => 'error', 'answer' => 'Error product']);
            }

            break;
        case 'clear':
            if (!empty($_SESSION['basket'])) {
                unset($_SESSION['basket']);
                unset($_SESSION['basket.sum']);
            }
            break;
    }
}
