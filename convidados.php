<?php include "conexao.php";?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  <div class="container">
    <div class="mt-4 p-5 bg-primary text-white rounded text-center">
      <h1>Lista convidados</h1>
    </div>
    <form class="row g-3 mt-4 col-md-7 offset-md-3" action="#" method="GET">

    <!-- <div class="col-auto"> 
    <label for="nome" class="visually-hidden">Nome</label> 
    <input type="text" class="form-control"  placeholder="Nome" name="nome">
  </div>
  <div class="col-auto">
    <label for="acompanhantes" class="visually-hidden"></label>
    <input type="text" class="form-control" id="acompanhantes" placeholder="acompanhantes" name="acompanhantes">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Salvar</button>
   </div> -->



      <div class="col-auto">
        <label for="nome" class="visually-hidden">Nome</label> 
        <input type="text" class="form-control pl-auto" placeholder="Nome" name="nome">
      </div>
      <div class="col-auto">
        <label for="acompanhantes" class="visually-hidden px-auto">Acompanhantes</label>
        <input type="number" class="form-control pl-auto" id="acompanhantes" placeholder="Acompanhantes" name="acompanhantes">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Salvar</button>
      </div>
      </div>
    </form>
    <div class="container mt-3">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome Convidados</th>
            <th>Quantidade de Acompanhantes</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($resultado as $convidado) : ?>
          <tr>
            <td><?php echo $convidado['id_convidado'] ?></td>
            <td><?php echo $convidado['nome'] ?></td>
            <td><?php echo $convidado['acompanhantes'] ?></td>
            <td>
              <a href="editar.php?id=<?php echo $convidado['id_convidado'] ?>">
                <button type="button" class="btn btn-success">
                  Atualizar
                </button>
              </a>
            </td>
            <td>
              <a href="excluir.php?id=<?php echo $convidado['id_convidado'] ?>">
                <button type="button" class="btn btn-danger">
                  Excluir
                </button>
              </a>
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </body>
</html>