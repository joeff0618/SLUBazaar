<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLU Bazaar | Home</title>
    
    <link rel="stylesheet" href="../admin/assets/style.css">
    <link rel="stylesheet" href="/client/global.css">
    
    <script src="/client/admin/assets/main.js" defer></script>
</head>

<body>
    <div class="bg-overlay"></div>

    <div class="title-tagline-box">
        <div class="title-tagline">
            <img src="/client/assets/img/SLU Logo.png" alt="slu_logo"
                 onerror="this.src='https://placehold.co/128x128/ffffff/003366?text=SLU'; this.onerror=null;">
            <div>
                <h1>SLU Bazaar</h1>
                <p>Admin Hub</p>
            </div>
        </div>

        <div class="dashboard">
            <ul id="tabs">
                <li data-tab-target="#overview" class="active-tab">Overview</li>
                <li data-tab-target="#users">Users</li>
                <li data-tab-target="#listings">Listings</li>
            </ul>

            <div class="tab-contents">
                <?php include 'views/overview.php'; ?>
                <?php include 'views/users.php'; ?>
                <?php include 'views/listings.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>
