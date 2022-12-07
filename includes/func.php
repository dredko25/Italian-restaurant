<?php
function get_categories(): void
{
    global $connection;
    $res = mysqli_query($connection, "SELECT * FROM `Category`");
    while($cat = mysqli_fetch_assoc($res)){
        echo '<pre>' . print_r ($cat, 1) . '</pre>';
    }
    echo "end";
};
// function get_dish(int $id) //: array|false 
// {
//     global $connection;
//     $stmt = mysqli_prepare($connection, "SELECT * FROM `Dish` WHERE `id_dish` = ?");
//     // echo $stmt[$id];
//     mysqli_stmt_execute($stmt[$id]);  // look at this!!! [$id]
//     return mysqli_stmt_fetch($stmt);
// }

function get_products(): array
{
    global $pdo;
    $res = $pdo->query("SELECT category_name FROM Category");
    return $res->fetchAll();
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
    $stmt = $pdo->prepare("SELECT * FROM Dish WHERE id_dish = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}
