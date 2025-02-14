<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Anchors!' ?></title>
    <!-- Adicionando jQuery via CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <?php $this->load->view($view); ?>
</body>

</html>