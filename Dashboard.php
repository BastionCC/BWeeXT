<!-- dashboard.php -->
<?php
session_start();
//if (!isset($_SESSION['user_id'])) {
    //header("Location: Login.php");
    //exit();
//}

// Simulate diagnostic data (You can replace this with actual server-side code later)
$serverStatus = "";
$cpuUsage = "";
$memoryUsage = "";
$diskSpace = "";
$uptime = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - System Diagnostics</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="dashboard-container">
        <header>
            <h1>Welcome to Your Dashboard</h1>
            <p>Logged in as <?php echo $_SESSION['username']; ?> | <a href="logout.php">Logout</a></p>
        </header>
        
        <section class="diagnostics">
            <h2>System Diagnostics</h2>
            <div class="card">
                <h3>Server Status</h3>
                <p>Status: <strong><?php echo $serverStatus; ?></strong></p>
            </div>

            <div class="card">
                <h3>CPU Usage</h3>
                <p>Usage: <strong><?php echo $cpuUsage; ?></strong></p>
            </div>

            <div class="card">
                <h3>Memory Usage</h3>
                <p>Usage: <strong><?php echo $memoryUsage; ?></strong></p>
            </div>

            <div class="card">
                <h3>Disk Space</h3>
                <p>Space: <strong><?php echo $diskSpace; ?></strong></p>
            </div>

            <div class="card">
                <h3>System Uptime</h3>
                <p>Uptime: <strong><?php echo $uptime; ?></strong></p>
            </div>
        </section>
    </div>
</body>
</html>