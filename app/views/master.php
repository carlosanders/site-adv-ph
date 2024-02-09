<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site com Slim Framework</title>
    <link rel="stylesheet" href="<?= $this->asset('assets/bootstrap/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= $this->asset('assets/css/master.css') ?>" />
</head>

<body>
    
    <header class="demo-wrap topo">
        <div class="demo-content">
            <h1>Hello World!</h1>
        </div>
    </header>

    <div id="container">
        <?php echo $this->section('content') ?>
    </div>
</body>

<!-- JavaScript asset -->
<script src="<?= $this->asset('assets/js/jquery-3.7.1.js'); ?>"></script>
<script src="<?= $this->asset('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?= $this->asset('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>