<?php $config = require_once 'src/config/init.php'; ?>
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

</div>
<?php foreach ($config['setting']['js'] as $js) echo $js; ?>
</body>
</html>