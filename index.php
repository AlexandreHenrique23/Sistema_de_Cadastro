<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <h1 class="text-center">
                Sistema de Cadastro
            </h1>
        </div>
        <div class="row">
            <div class = "col-md-5 mx-auto">
                <?php
                require_once  'model.php';
                $model = new Model();
                $insert = $model->insert();
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Whatsapp</label>
                                <input type="text" name="whats" class="form-control" pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{5})-([0-9]{4})" required>
                                <span>Formato do telefone: (99) 99999-9999 </span>
                            </div>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="">Endereço</label>
                                    <textarea type="text" name="address" rows="3" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        Cadastrar
                                    </button>
                                </div>
                            </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>