<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>カフェmiu</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/main.css">
</head>
<body>

    <header class="head">
        <div class="header_titel"></div>
            <h1>
                人にやさしい カフェmiu
            </h1>
    </header>
    <div class="box">
        <?php $home = "ホーム"?>
        <?php $menu = "メニュー"?>
        <?php $miutte = "カフェmiuって？"?>
        <?php $access = "アクセス"?>
        <ul class="index">
            <li><a href="index.php"><div><?php echo $home;?></div></a></li>
            <li><a href="/?page_id=24"><div><?php echo $menu;?></div></a></li>
            <li><a href="/?page_id=27"><div><?php echo $miutte;?></div></a></li>
            <li><a href="/?page_id=32"><div><?php echo $access;?></div></a></li>
        </ul>
