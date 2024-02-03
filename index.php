<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database-connection.php";
    
    $sql = "SELECT * FROM user
            WHERE userid = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>E-commerce Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>E-commerce Home</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Sign in as <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="signout.php">Sign out</a></p>
        
    <?php else: ?>
        
        <p><a href="signin.php">Sign in</a> or <a href="signup.html">Sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    