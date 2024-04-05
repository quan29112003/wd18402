<?php

if (!function_exists('getUserAdminByEmailAndPassword')) {
    function getUserAdminByEmailAndPassword($email, $password)
    {
        try {
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password AND type = 1 LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}