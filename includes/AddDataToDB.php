<?php

require_once "db.php";
require_once "func.php";
session_start();
global $pdo;

$queryBuyer = 'INSERT INTO Buyer(buyer_name, buyer_surname, buyer_phone, buyer_email, street, house, apartment) VALUES (:name, :surname, :phone, :email, :street, :house, :apartment)';
$userINFO = $pdo->prepare($queryBuyer);
$userINFO->execute(['name' => $_POST['user_name'], 'surname' => $_POST['user_surname'], 'phone' => $_POST['user_phone'], 'email' => $_POST['user_email'], 'street' => $_POST['user_street'], 'house' => $_POST['user_house'], 'apartment' => $_POST['user_apartment']]);

$u_id = $pdo->lastInsertId();

$queryBasket = 'INSERT INTO Basket(id_buyer, total_sum) VALUES (:id_buyer, :total_sum)';
$userBasket = $pdo->prepare($queryBasket);
$userBasket->execute(['id_buyer' => $u_id, 'total_sum' => $_SESSION['basket.sum']]);

$b_id = $pdo->lastInsertId();

foreach ($_SESSION['basket'] as $dish){
    $queryOrder = 'INSERT INTO Order_(id_basket, id_dish, number_of_servings) VALUES (:id_basket, :id_dish, :number_of_servings)';
    $userOrder = $pdo->prepare($queryOrder);
    $userOrder->execute(['id_basket' => $b_id, 'id_dish' => $dish['id_dish'], 'number_of_servings' => $dish['dish_qty']]);
}

header("Location: ../index.php");
