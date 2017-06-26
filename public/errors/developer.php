<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">Error Handler</h3>
    </div>
    <div class="row">
        <div class="panel panel-danger">
            <!-- Default panel contents -->
            <div class="panel-heading"><?= $errstr; ?></div>
            <div class="panel-body">
                <p>...</p>
            </div>

            <!-- List group -->
            <ul class="list-group">
                <li class="list-group-item"> Код ошибки: <strong><?= $errno; ?></strong>.</li>
                <li class="list-group-item">Текст ошибки: <strong><?= $errstr; ?></strong>.</li>
                <li class="list-group-item">Файл, в которой произошла ошибка: <code><?= $errfile; ?></code>.</li>
                <li class="list-group-item">Строка, в которой произошла ошибка: <strong><?= $errline; ?></strong>.</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>