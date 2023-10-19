<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO usuarios (username, senha, email) VALUES (:username, :senha, :email);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../index.php");
}
