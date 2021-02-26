<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    <?php /* メタ用意できたら追加する
    <title><?php echo $title?></title>
    <meta name='description' content='<?php echo $description ?>'>
    */ ?>

    <?php echo $css ?>
</head>

<body>
    <div class=''>
        <?php echo $header ?>
        <?php echo $content ?>
        <?php echo $footer ?>

        <?php /* 用意できたら追加
        <?php echo $pankuzu ?>
        */ ?>
    </div>
</body>

</html>