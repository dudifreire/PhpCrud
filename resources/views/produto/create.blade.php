<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <title>Criar produto</title>
</head>

<body class="bg-light">

    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                alt="" width="72" height="72">
            <h2>Php Crud</h2>
        </div>

        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Cadastro de Produto</h4>
            <form action="{{ route('registrar_produto') }}" method="POST" class="needs-validation" novalidate="">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="nome" value="" required="">
                        <div class="invalid-feedback">
                            É Necessário digitar um nome.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="custo">Custo</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" id="custo" placeholder="custo" required="">
                        <div class="invalid-feedback" style="width: 100%;">
                            É necessário digitar o custo.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" id="preco" placeholder="preço">
                    <div class="invalid-feedback">
                        É necessário digitar o preço.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="quantidade">Quantidade</label>
                    <input type="text" class="form-control" id="quantidade" placeholder="quantidade" required="">
                    <div class="invalid-feedback">
                        É necessário digitar a quantidade.
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-danger btn-lg btn-block" type="submit">Registrar</button>
            </form>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2021 PhpCrud by dudifreire</p>
    </footer>
    </div>
    <script src="/js/app.js"></script>

</body>


</html>
