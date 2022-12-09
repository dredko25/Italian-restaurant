<?php
require_once "db.php";
global $pdo;

$queryAddress = 'INSERT INTO Address_(street, house, apartment) VALUES (:street, :house, :apartment)';
$addressINFO = $pdo->prepare($queryAddress);
$addressINFO->execute(['street' => $_POST['user_street'], 'house' => $_POST['user_house'], 'apartment' => $_POST['user_apartment']]);

$a_id = $pdo->lastInsertId();

$queryBuyer = 'INSERT INTO Buyer(buyer_name, buyer_surname, buyer_phone, buyer_email, id_address) VALUES (:name, :surname, :phone, :email, :address_id)';
$userINFO = $pdo->prepare($queryBuyer);
$userINFO->execute(['name' => $_POST['user_name'], 'surname' => $_POST['user_surname'], 'phone' => $_POST['user_phone'], 'email' => $_POST['user_email'], 'address_id' => $a_id]);

$u_id = $pdo->lastInsertId();

$queryBasket = 'INSERT INTO Basket(id_buyer, total_sum) VALUES (:id_buyer, :total_sum)';
$userBasket = $pdo->prepare($queryBasket);
$userBasket->execute(['id_buyer' => $u_id, 'total_sum' => $_SESSION['basket.sum']]);

header("Location: ../index.php");


?>