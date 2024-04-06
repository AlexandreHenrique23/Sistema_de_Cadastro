<!doctype html>
<html lang="pt-br">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <h1 class="text-center">Meus Contatos</h1>
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Whatsapp</th>
                        <th>Endereço</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include 'Model.php';
                    $model = new Model();
                    $rows = $model->fetch();
                    if (!empty($rows)){
                        foreach ($rows as $row) {
                    ?>

                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['whatsapp'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                    </tr>
                        <td>
                            <a href="read.php?id=<?php echo $row['id']; ?>" class="badge bg-info p-2">Ver</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="badge bg-info p-2">Deletar</a>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="badge bg-info p-2">Editar</a>
                        </td>

                    <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>