<?php
    session_start();
    if(empty($_SESSION)){
        echo "<script>location.href= 'index.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Formula One</title>
</head>
<body>
    <section class="vh-100 " style="background-color: #8A0000;">
        <nav class = "navbar navbar-dark bg-dark">
            <div class = "container-fluid">
                <a class = "navbar-brand">Formula One</a>
                <a class="btn btn-danger" href="logout.php" role="button">Sair</a>
            </div>
        </nav>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>
