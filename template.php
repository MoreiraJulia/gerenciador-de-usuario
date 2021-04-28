<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="bootstrap-5/bootstrap.min.css">
</head>
<body class="container">

<div class="text-center">
    <img src="img/people5.png">
</div>
    
    <h2 class="text-center">CADASTRO DE USUÁRIOS</h2>
    <form class="row g-3 justify-content-center">
        <div class="col-md-4">
            <label for="usuario" class="form-label">Usuário</label>
            <input type="usuario" name="usuario" class="form-control" id="usuario">
        </div>
        <div class="col-md-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" maxlength="8">
        </div>
        <div class="col-md-7 form-check">
            <input class="form-check-input" name="administrador" type="checkbox" value="sim" id="admistrador">
            <label class="form-check-label" for="administrador">Usuário administrador</label>
        </div>
        
        <div class="mb-4 text-center">
            <button class="btn btn-primary justify-content-end" type="submit">Salvar</button>
        </div>
    </form>

    <div class="mb-5 ">
        <table class="table text-center">
            <thead class="table-primary ">
                <tr class="row justify-content-center">
                    <th class="col-3">Usuário</th>
                    <th class="col-3">Administrador</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sqlBusca = "SELECT * FROM tb_usuarios";
                $resultado = mysqli_query($conexao , $sqlBusca);

                $cadastroUsuario = [];

                while($cadastro = mysqli_fetch_assoc($resultado)){
                    $cadastroUsuario[] = $cadastro;
                }

                foreach($cadastroUsuario as $cadastro): ?>
                    <tr class="row justify-content-center">
                        <td class="col-3"><?php echo $cadastro['usuario']; ?></td>
                        <td class="col-3"><?php echo $cadastro['administrador']; ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
    
    <script src="bootstrap-5/bootstrap.bundle.min.js"></script>
</body>
</html>