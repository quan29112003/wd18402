<?php

// lấy chuỗi các keys dữ liệu trong bảng database
if (!function_exists('get_str_keys')) {
    function get_str_keys($data)
    {
        return implode(", ", array_keys($data));
    }
}

// lấy chuỗi các giá trị trong keys
if (!function_exists('get_virtual_params')) {
    function get_virtual_params($data)
    {
        $keys = array_keys($data);

        $tmp = [];
        foreach ($keys as $key) {
            $tmp[] = ":$key";
        }

        return implode(", ", $tmp);
    }
}


if (!function_exists('get_set_params')) {
    function get_set_params($data)
    {
        $keys = array_keys($data);

        $tmp = [];

        foreach ($keys as $key) {
            $tmp[] = "$key =  :$key";
        }

        return implode(", ", $tmp);
    }
}

// hàm lấy dữ liệu cho tất cả bảng dữ liệu
if (!function_exists('insert')) {
    function insert($tableName, $data = [])
    {
        try {
            $strKeys = get_str_keys($data);

            $virtualParams = get_virtual_params($data);

            $sql = "INSERT INTO $tableName($strKeys) VALUES($virtualParams)";
            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fileName => &$value) {
                $stmt->bindParam(":$fileName", $value);
            }

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('insert_get_last_id')) {
    function insert_get_last_id($tableName, $data = [])
    {
        try {
            $strKeys = get_str_keys($data);
            $virtualParams = get_virtual_params($data);

            $sql = "INSERT INTO $tableName($strKeys) VALUES ($virtualParams)";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->execute();

            return $GLOBALS['conn']->lastInsertId();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// lấy ra toàn bộ dự liệu
if (!function_exists('listAll')) {
    function listAll($tableName)
    {
        try {
            $sql = "SELECT * FROM $tableName ORDER BY id DESC"; 

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


// lấy ra 1 dữ liệu
if (!function_exists('showOne')) {
    function showOne($tableName, $idName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE $idName = :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


if (!function_exists('showOne2table')) {
    function showOne2table($tableName1, $tableName2, $Name1, $Name2, $idName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName1 JOIN $tableName2 ON $tableName1.$Name1 = $tableName2.$Name2 WHERE $tableName1.$idName = :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('showOne3table')) {
    function showOne3table($tableName1, $tableName2, $tableName3, $Name1, $Name2, $Name3, $Name4, $idName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName1 JOIN $tableName2 ON $tableName1.$Name1 = $tableName2.$Name2 JOIN $tableName3 ON $tableName1.$Name3 = $tableName3.$Name4 WHERE $tableName1.$idName = :id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('showOne3table2')) {
    function showOne3table2($tableName1, $tableName2, $tableName3, $Name1, $Name2, $Name3, $Name4, $idName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName1 JOIN $tableName2 ON $tableName1.$Name1 = $tableName2.$Name2 JOIN $tableName3 ON $tableName2.$Name3 = $tableName3.$Name4 WHERE $tableName1.$idName = :id";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// sửa dữ liệu 
if (!function_exists('update')) {
    function update($tableName, $idName, $id, $data = [])
    {
        try {
            $setParams = get_set_params($data);

            $sql = "UPDATE $tableName SET $setParams WHERE $idName = :id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fileName => &$value) {
                $stmt->bindParam(":$fileName", $value);
            }

            $stmt->bindParam(":id", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// xóa dữ liệu
if (!function_exists('destroy')) {
    function destroy($tableName, $idName, $id)
    {
        try {
            $sql = "DELETE FROM $tableName WHERE $idName = :id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('list2table')) {
    function list2table($tableName1, $tableName2, $name1, $name2)
    {
        try {
            $sql = "SELECT * FROM $tableName1, $tableName2 WHERE $tableName1.$name1 = $tableName2.$name2";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('list3table')) {
    function list3table($tableName1, $tableName2, $tableName3, $name1, $name2, $name3,  $name4)
    {
        try {
            $sql = "SELECT * FROM $tableName1 JOIN $tableName2 ON $tableName1.$name1 = $tableName2.$name2 JOIN $tableName3 ON $tableName1.$name3 = $tableName3.$name4";

            
            $stmt = $GLOBALS['conn']->prepare($sql);
            
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('delete2')) {
    function delete2($tableName, $id) {
        try {
            $sql = "DELETE FROM $tableName WHERE id = :id";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}