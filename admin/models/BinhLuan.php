<?php

function listBinhLuan(){
    try {
        $sql = "SELECT * FROM `binhluan` WHERE 1 ORDER BY idsanpham DESC";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $th) {
        debug($th);
    }
}