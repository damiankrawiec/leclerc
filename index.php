<?php $config = require_once 'src/config/init.php'; ?>
<?php $content = require_once 'src/php/init.php'; ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="<?php echo $config['setting']['encode'] ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $config['var']['title'] ?></title>
    <?php foreach ($config['setting']['css'] as $css) echo $css; ?>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php echo $content->top('basket'); ?>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php echo $content->slider(); ?>
    </div>
</div>
<div class="container-fluid product-box">
    <div class="row product-list"></div>
</div>
<?php foreach ($config['setting']['js'] as $js) echo $js; ?>
</body>
</html>