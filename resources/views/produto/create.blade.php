<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar produto</title>
</head>
<body>
    <form action = "{{route('registrar_produto')}}" method="POST">
        @csrf
        <label for="">Nome</label>
        <input type="text" name="nome">
        <br/>
        <label for="">Custo</label>
        <input type="text" name="custo">
        <br />
        <label for="">Preco</label>
        <input type="text" name="preco">
        <br />
        <label for="">quantidade</label>
        <input type="text" name="quantidade">
        <br />
        <button> Salvar</button>

    </form>

</body>
</html>
