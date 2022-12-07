<?php
session_start(); // створює сеанс або відновлює поточний на основі ідентифікатора сеансу, переданого через запит GET або POST або через файл cookie
require_once "includes/db.php";
require_once "includes/func.php";

if (isset($_GET['busket'])) { // Визначає, чи змінна оголошена та відрізняється від null
    switch ($_GET['busket']) {
        case 'add':
            $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
            $product = get_product($id);

            if (!$product) {
                echo json_encode(['code' => 'error', 'answer' => 'Error product']);
            } else {
                echo json_encode(['code' => 'ok', 'answer' => $product]);
            }
            break;
    }
}