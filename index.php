<?php
$localhost = 'C:\xampp\htdocs'; // directory address

$dir = array_diff(scandir($localhost), array('..', '.')); // remove dots
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>localhost</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>Welcome to localhost</h1>

        <div class="card text-center">
            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#directoryLocalhost" title="Klik untuk melihat">
                Directory
            </div>
            <div class="card-body collapse" id="directoryLocalhost">
                <ul class="list-group list-group-flush">
                    <?php foreach ($dir as $d) : ?>
                        <li class="list-group-item"><a href="<?= $d; ?>"><?= $d; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="card-footer text-muted">
                <?= count($dir); ?> Directory exist
            </div>
        </div>

        <hr>
        <h1>Workspace</h1>
        <small>Use the workspace to test code without creating folders</small>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>