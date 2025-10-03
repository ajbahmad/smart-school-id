<?php
session_start();
include "koneksi.php";

// Jika sudah login → larang akses ke login
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    echo "<script>
        window.location.href='index.php';
    </script>";
    exit();
}

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['status'] !== 'active') {
            $error = "Akun Anda tidak aktif. Hubungi admin.";
        } else {
            if (password_verify($password, $row['password'])) {
                $_SESSION['login'] = true;
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];

                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Berhasil',
                        text: 'Selamat datang, {$row['username']}!'
                    }).then(() => {
                        window.location='index.php';
                    });
                </script>";
                exit();
            } else {
                $error = "Password salah!";
            }
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <h2>Form Login</h2>
    <?php if (isset($error)) { ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal Login',
                text: '<?php echo $error; ?>'
            });
        </script>
    <?php } ?>

    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
