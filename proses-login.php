<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];

    try {
        // Buat koneksi menggunakan PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Query menggunakan prepared statement
        $stmt = $pdo->prepare("SELECT * FROM user WHERE username = :username AND password = :password");
        $stmt->bindParam(':username', $user);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            session_start();
            $_SESSION['login_user'] = $user;

            if ($result['status'] == 'admin') {
                header('location: admin.php');
            } elseif ($result['status'] == 'user') {
                header('location: user.php');
            }
        } else {
            header("location: login.php");
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $pdo = null; // Tutup koneksi PDO
}
?>

<!-- Akhir Eksekusi Form Login -->
</div>
