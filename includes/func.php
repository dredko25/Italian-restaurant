<?php
function get_categories(): void
{
    global $connection;
    $res = mysqli_query($connection, "SELECT * FROM `Category`");
    while($cat = mysqli_fetch_assoc($res)){
        echo '<pre>' . print_r ($cat, 1) . '</pre>';
    }
    echo "end";
}
