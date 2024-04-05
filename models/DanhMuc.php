<?php

function getAllCategory()
{
    try {
        $sql = 'SELECT * FROM danhmuc';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}


function getCategoryByID($id){
    try {
        $sql = 'SELECT * FROM danhmuc WHERE ID_DanhMuc = :id';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}
