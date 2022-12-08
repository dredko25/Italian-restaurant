<?php
function get_categories(): void
{
    global $connection;
    $res = mysqli_query($connection, "SELECT * FROM `Category`");
    while ($cat = mysqli_fetch_assoc($res)) {
        echo '<pre>' . print_r($cat, 1) . '</pre>';
    }
    echo "end";
};

function header_choice(string $choice)
{
    
    $choice == 'main' ? true : false;
}

function debug(array $data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function get_products(): array
{
    global $pdo;
    $res = $pdo->query("SELECT category_name FROM Category"); // готує та виконує оператор SQL за допомогою одного виклику функції, повертаючи оператор як об’єкт PDOStatement
    return $res->fetchAll(); //  отримати всі рядки
}

function get_dish(string $name): array
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM `Dish` WHERE `id_category` IN (SELECT `id_category` FROM `Category` WHERE `category_name` = ?)");
    $stmt->execute([$name]);
    return $stmt->fetchAll();
}

function get_product(int $id): array
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM Dish WHERE id_dish = ?"); // готує оператор до виконання та повертає об’єкт оператора
    $stmt->execute([$id]); // Виконує підготовлений оператор
    return $stmt->fetch(); // Отримує наступний рядок із набору результатів
}

function add_to_busket($product): void
{
    if (isset($_SESSION['busket'][$product['id_dish']])) { // якщо тавар вже є в кошику додаємо до кількості 1
        $_SESSION['busket'][$product['id_dish']]['qty'] += 1;
    } 
    else { // якщо немає, то створюємо цей товар
        $_SESSION['busket'][$product['id_dish']] = [
            'dish_name' => $product['dish_name'],
            'dish_weight' => $product['dish_weight'],
            'dish_cost' => $product['dish_cost'],
            'qty' => 1,
            'dish_img' => $product['dish_img'],
        ];
    }

    $_SESSION['busket.qty'] = !empty($_SESSION['busket.qty']) ? ++$_SESSION['busket.qty'] : 1; // кількість - якщо така страва вже є в кошику, то збільшуємо на 1, якшо ні, кількість = 1
    $_SESSION['busket.sum'] = !empty($_SESSION['busket.sum']) ? $_SESSION['busket.sum'] + $product['dish_cost'] : $product['dish_cost']; // аналогічна ситуація із сумою: якщо сума != 0, то до поточної + вартість тільки що доданого товару, а якщо порожня, то записуємо значення вартості тільки що доданого товару
}
