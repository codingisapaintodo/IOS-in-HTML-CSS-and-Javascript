<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPod Touch 7th Gen Replica</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="ipod-container">
        <div class="ipod-screen">
            <img src="assets/images/ipod-background.jpg" alt="Background" class="background">
            <div class="app-icons">
                <div class="icon" id="music">
                    <img src="assets/images/icon-music.png" alt="Music">
                    <span>Music</span>
                </div>
                <div class="icon" id="apps">
                    <img src="assets/images/icon-apps.png" alt="Apps">
                    <span>Apps</span>
                </div>
                <div class="icon" id="settings">
                    <img src="assets/images/icon-settings.png" alt="Settings">
                    <span>Settings</span>
                </div>
            </div>
        </div>
        <div class="ipod-frame">
            <img src="assets/images/ipod-frame.png" alt="iPod Frame">
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>

<?php
    $apps = ['Music', 'Photos', 'Games', 'Settings'];
    echo "<ul>";
    foreach ($apps as $app) {
        echo "<li><button onclick='launchApp(\"$app\")'>$app</button></li>";
    }
    echo "</ul>";
?>

<script>
    function launchApp(appName) {
        alert(appName + " launched!");
    }
</script>
