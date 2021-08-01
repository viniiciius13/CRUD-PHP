<?php  

include 'conexao.php';

$buscar_cadastros = "SELECT * FROM tb_cliente";
$query_cadastros = mysqli_query($connx, $buscar_cadastros);

?>
    



<!doctype html>
<html lang="en">
  <head>
    <title>Cadastro de Clientes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tablebody>
            <?php 
            while($receber_cadastro = mysqli_fetch_array($query_cadastros))
            {
                $id = $receber_cadastro['id'];
                $nome = $receber_cadastro['nome'];
                $email = $receber_cadastro['email'];
                $telefone = $receber_cadastro['telefone'];
            
            
            
            ?>
            <tr class="">
            <form action="editar.php" method="POST">        
                    <td class=""><input type="text" name ="nome" value="<?php echo $nome; ?>"></td>
                    <td class=""><input type="text" name ="email" value="<?php echo $email; ?>"></td>
                    <td class=""><input type="text" name ="telefone" value="<?php echo $telefone; ?>"></td>
                    <td class="">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" value="Editar">
                    </td>
                </form>
                


                <td>            
                    <form action="excluir.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" value="Excluir">
                    </form>
                </td>   
            </tr>

            <?php }; ?>  <!-- parou o while -->

                <tr>
                    <form action="cadastro.php" method="post">
                        <td></td>
                        <td><input type="text" name="nome"></td>
                        <td><input type="text" name="email"></td>
                        <td><input type="text" name="telefone"></td>

                        <td><input type="submit" value="Novo Cadastro"></td>
                    </form>
                </tr>


                

        </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>