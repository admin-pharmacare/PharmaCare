
<?php

require_once "config/db.php";

// Admin information
$name = "PharmaCare Admin";
$email = "admin@pharmacare.com";
$password = "Admin@123";

// Encrypt password
$hashed_password = password_hash(
    $password,
    PASSWORD_DEFAULT
);

// Insert admin into database
$sql = "INSERT INTO users (name, email, password, role)
        VALUES (?, ?, ?, 'admin')";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sss",
    $name,
    $email,
    $hashed_password
);

if (mysqli_stmt_execute($stmt)) {
    echo "Admin Account Created Successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>
