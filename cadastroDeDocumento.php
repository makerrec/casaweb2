<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Documentos</title>
    <link href="./arquivos/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="./arquivos/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include("./menu.php") ?>

    <div class="row mb-4 mt-5">
        <div class="alert alert-light" role="alert">
            <h1>Cadastro de Documento</h1>
        </div>
    </div>

    <!-- nome tipo (tcc artigo) Categoria Estudante Professor Autodidata input email numero de tel (opc)-->
    <form action="salvarDocumento.php" method="POST">
        <div class="row mb-3">
            <div class="col col-md-6">
                <label class="form-label" for="idnome">Nome</label>
                <input class="form-control" type="text" name="nome" id="idnome">
            </div>

            <div class="col col-md-6">
            <label class="form-label" for="idtipo">Tipo</label>
                <select class="form-select form-control" for="idcep" id="idtipo" name="tipo"><option>Tipo do Documento</option>
                    <option value="1">Artigo</option>
                    <option value="2">TCC</option>
                    <option value="3">Outro</option>
                </select> 
            </div>


        </div>
        <div class="row mb-3">
            <div class="col col-md-4">
                <label class="form-label" for="idct">Categoria</label>               
                <select class="form-select form-control" for="idct" id="idct" name="categoria"><option>Categoria</option>
                    <option value="1">Autodidata</option>
                    <option value="2">Estudante</option>
                    <option value="3">Professor</option>
                </select> 
            </div>
            <div class="col col-md-4">
                <label class="form-label" for="idemail">E-Mail</label>
                <input class="form-control" type="text" name="email" id="idemail">
            </div>
            <div class="col col-md-4">
                <label class="form-label" for="idtelefone">Telefone</label>
                <input class="form-control" type="number" name="telefone" id="idtelefone">
            </div>
            
        </div>
        <input class="btn btn-primary" type="submit" value="Salvar">
    </form>




    <div class="area-upload">
        <label for="upload-file" class="label-upload">
            <i class="fas fa-cloud-upload-alt"></i>
            <div class="texto">Clique ou arraste o arquivo</div>
        </label>
        <input type="file" accept="image/jpg,image/png" id="upload-file" multiple />

        <div class="lista-uploads">
        </div>
        <script src="arquivos/js/script.js"></script>
    </div>
</body>