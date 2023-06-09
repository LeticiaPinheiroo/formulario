<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto Booststrap</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-body-secondary">
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
                    <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                    <a class="nav-link" href="#">Consultar</a>  #coisa p linkar
                  </div>
                </div>
              </div>
            </nav>
          </div>
      </div>

        <div class="col-1"> 
          &nbsp;
        </div>    
    </div>
    
    <div class="row">
      <div class="col-1">
       
      </div>
        <div class="mb-3 text-bg-light p-4">
          <div class="col-20" align="left">
            <form method="POST" action="teste.class.php">
              <br>
              <h4>Cadastrar - Agendamento de Potenciais Clientes</h4>
              <p>Sistema utilizado para agendamento de serviços</p>

              <div class="mb-3 text-start">
                <label for="exampleInputEmail1" class="form-label">Nome:</label>
                <input type="text" class="form-control"  name="nome" id="nome">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3 text-start">
                <label for="exampleInputPassword1" class="form-label">Telefone:</label>
                <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(xx)xxxxx-xxxx">
              </div>
              <label for="exampleInputOrigem" class="form-label">Origem:</label>
              <select class="form-select" aria-label="Default select example"  name="origem" id="origem">
                <option value="Celular">Celular</option>
                <option value="Telefone Fixo">Telefone fixo</option>
              </select>
              <br>
              <div class="mb-3 text-start">
                <label for="exampleInputEmail1" class="form-label">Data do Contato:</label>
                <input type="date" class="form-control"  name="datacontato" id="datacontato">
                <div id="datacontato" class="form-text"></div>
              </div>

              <div class="form-floating">
                Observação:
                <textarea class="form-control" placeholder="Leave a comment here"  name="observacao" id="observacao"></textarea>

              </div>
              <div class="mb-3 form-check">
              </div>
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
          </div>
          <div class="col-1">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>