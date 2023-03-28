<?php
    $mhs = array(
        array ("ardika", "22334455", "denpasar"),
        array ("devi", "11221155", "gianyar"),
        array ("putri", "66778899", "bangli"),
        array ("dewi", "99887766", "buleleng")

    );
    header("Content-Type: application/json");
    echo json_encode($mhs);
    