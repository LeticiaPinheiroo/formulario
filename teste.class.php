<?php

require_once("pessoa.class.php");

class Teste{
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setNome($_POST['nome'] ."<br><br>");    

        $pessoa->setTelefone($_POST['telefone']."<br><br>");

        $pessoa->setOrigem($_POST['origem']."<br><br>");

        $pessoa->setDatacontato($_POST['datacontato']."<br><br>");

        $pessoa->setObservacao($_POST['observacao']."<br><br>");

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Consulta dados</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
<div>
    <div class="container text-center">
      <div class="row">
        <div class="col1"> 
         
          <div class="col bg-primary">
            <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">SISTEMA WEB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContnent" aria-controls="navbarSupportedContnent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContnent">
                  <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="formulario_bootstrap.php">Cadastrar</a>
                    <a class="nav-link" href="formulario_bootstrap.php">Consultar</a>  
                  </div>
                </div>
              </div>
            </nav>
          </div>
      </div>

      <label for="formGroupExampleInput" class="form-label"<br><b>Consultar - Contatos Agendados</b><br>
        <table widht=50% border=0 cellpading=10 cellspacing=1 align=center>
            <tr align=center bgcolor=#007BFF>
                <th widht=8%>Nome</th>
                <th widht=8%>Telefone</th>
                <th widht=8%>Origem</th>
                <th widht=8%>Contato</th>
                <th widht=8%>Observação</th>
                <th widht=8%>Ação</th>
            </tr>
            <tr align=center bgcolor=white>
                <tr align=center bgcolor=white>
                <th widht=8%><?php echo $pessoa->getNome();?></th>
                <th widht=8%><?php echo $pessoa->getTelefone();?></th>
                <th widht=8%><?php echo $pessoa->getOrigem();?></th>
                <th widht=8%><?php echo $pessoa->getDatacontato();?></th>
                <th widht=8%><?php echo $pessoa->getObservacao();?></th>
                <th widht=8%>Ação</th>
        </table>
</body>
</html>