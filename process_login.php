<?php
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    
    // Query untuk mencari user dengan status active
    $query = "SELECT id, username, password, role, nama FROM users WHERE username = ? AND status = 'active'";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($result)) {
        // Verifikasi password (asumsi password disimpan dengan password_hash())
        if (password_verify($password, $row['password'])) {
            // Login berhasil
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['logged_in'] = true;
            
            // Redirect ke halaman dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['error'] = "Password salah!";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Username tidak ditemukan atau akun tidak aktif!";
        header("Location: login.php");
        exit();
    }
    
    mysqli_stmt_close($stmt);
} else {
    header("Location: login.php");
    exit();
}

mysqli_close($conn);
?>