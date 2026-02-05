<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Websolvit - Digital Marketing Agency</title>
    <link rel="icon" href="public/favicon.svg" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./tailwind.config.js"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- Loader -->
    <?php include_once("components/loader.php") ?>

    <!-- Page Content -->
    <div id="content" class="hidden">
        <?php
        require_once("./config.php");
        include_file("components/header.php");

        include_file("base.php");

        include_file("components/mobile_menu.php");
        include_file("components/footer.php");
        include_file("components/floating_aside.php");
        include_file("components/floating_bottom_left.php");
        include_file("components/floating_bottom_right.php");
        ?>
    </div>
    <script>
        lucide.createIcons();
    </script>
    <script src="./script.js"></script>
</body>

</html>