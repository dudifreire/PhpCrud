<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir produto</title>
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
            <h4 class="mb-3">Deletar Produto</h4>
            <form action="{{route('excluir_produto', ['id'=> $produto->id]) }}" method="POST" class="needs-validation" novalidate="">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome">Tem certeza que deseja excluir esse produto?</label>
                        <input type="text" class="form-control" id="nome" placeholder="nome" value="{{$produto->nome}}" required="">
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
