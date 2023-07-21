<?php
session_start();

function addToCart($Book_Image, $qty, $Unit_Price)
{

    $Item_Image = 'Item_' . $Book_Image;

    if (isset($_SESSION['cart'][$Item_Image])) {
        $_SESSION['cart'][$Item_Image]['qty'] += $qty;
    } else {
        $_SESSION['cart'][$Item_Image] = array(
            'Book_Image' => $Book_Image,
            'qty' => $qty,
            'Unit_Price' => $Unit_Price
        );
    }
}


addToCart($Book_Image, $qty, $Unit_Price);

if (!empty($_SESSION['cart'])) {
    echo '<table>';
    echo '<tr>';
    echo '<th>Book_Image</th>';
    echo '<th>qty</th>';
    echo '<th>Unit_Price</th>';
    echo '<th>total</th>';
    echo '</tr>';

    $totalPrice = 0;

    foreach ($_SESSION['cart'] as $Item) {
        $Item_Image = 'Item_' . $Item['Item_Image'];
        $total = $Item['qty'] * $Item['Unit_Price'];
        $totalPrice += $total;

        echo '<tr>';
        echo '<td>' . $Item['Book_Image'] . '</td>';
        echo '<td>' . $Item['qty'] . '</td>';
        echo '<td>' . $Item['Unit_Price'] . '</td>';
        echo '<td>' . $total . '</td>';
        echo '</tr>';
    }

    echo '<tr>';
    echo '<td colspan="3">Total Price:</td>';
    echo '<td>' . $totalPrice . '</td>';
    echo '</tr>';

    echo '</table>';
} else {
    echo 'Your shopping cart is empty.';
}
?>
