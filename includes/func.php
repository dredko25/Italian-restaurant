<?php
    function debug(array $data) : void
    {
        echo '<pre>' . print_r($data, true) . '</pre>';
    }
    function get_categories() : array
    {
        global $connection;
        $res = $connection -> query("SELECT * FROM `Category`");
        return $res -> fetch_all();
    }
