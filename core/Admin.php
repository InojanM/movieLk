<?php
class Admin
{
    public $user_name;
    public $password;

    public static function selectAdmin()
    {
        $pdo = Database::db();
        $sql = "SELECT * FROM admin";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $admin = $stmt->fetchAll(PDO::FETCH_CLASS, Admin::class);
        return $admin;
    }

}