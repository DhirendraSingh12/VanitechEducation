<?php
session_start();
require_once 'database/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $message = $_POST['message'];

    try {
        $stmt = $pdo->prepare("INSERT INTO contacts (name, email, phone, message, created_at) 
                               VALUES (:name, :email, :phone, :message, NOW())");
        $stmt->execute([
            'name'    => $name,
            'email'   => $email,
            'phone'   => $phone,
            'message' => $message
        ]);
        $_SESSION['success'] = "Your message has been submitted successfully!";
        header("Location: contact.php");
        exit();
    } catch (PDOException $e) {
        $_SESSION['error'] = "Error: " . $e->getMessage();
        header("Location: contact.php");
        exit();
    }
}
?>


<?php // index.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Vanitech - Educational Platform</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

    <?php include('includes/header.php'); ?>
    <?php include('includes/hero.php'); ?>
    <?php include 'includes/contact-content.php'; ?>
    <?php include 'includes/footer.php'; ?>

</body>
</html>