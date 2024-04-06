<!doctype html>
<html lang="pt-br">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="row">
    <div class="col-md-12 mt-4">
        <h1 class="text-center">Ver Contato</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <?php
            include 'Model.php';
            $model = new Model();
            $id = $_REQUEST['id'];
            $row = $model ->fecth_unico($id);
            if(!empty($row)){
            ?>
            <div class="card-header">
                <?php echo $row['name']; ?>
            </div>
            <div class="card-body">
                <p><?php echo $row['email']; ?></p>
                <p><?php echo $row['whatsapp']; ?></p>
                <p><?php echo $row['address']; ?></p>
            </div>
            <?php
            }else{
                echo "Sem registros";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>