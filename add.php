<?php
session_start();

if (isset ($_POST['id'])) {
    $product_id = $_POST['id'];

    if (!isset ($_SESSION['basket'])) {
        $_SESSION['basket'] = [];
    }

    if (isset ($_SESSION['basket'][$product_id])) {
        $_SESSION['basket'][$product_id]['quantity']++;
    } else {
        $_SESSION['basket'][$product_id] = [
            'quantity' => 1
        ];
    }
    $sum=0;
    foreach ($_SESSION['basket'] as $intem)
    {
        if ($intem['quantity']>0)
        {
            $sum += $intem['quantity'];
        }
    } 

    echo "Товар успешно добавлен в корзину!<br>
    (Всего в корзине " . strval($sum) . ")\n";

    echo "Данные сессии
    <pre>";
    echo "<pre>";
    var_dump($_SESSION['basket']);
    echo "</pre>";

}
