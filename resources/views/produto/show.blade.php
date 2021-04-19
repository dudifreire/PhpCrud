<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar produto</title>
</head>
<body>
        <label for="">Nome</label>
        <input type="text" name="nome" value="{{$produto->nome}}">
        <br/>
        <label for="">Custo</label>
        <input type="text" name="custo" value="{{$produto->custo}}">
        <br />
        <label for="">Preco</label>
        <input type="text" name="preco" value="{{$produto->preco}}">
        <br />
        <label for="">quantidade</label>
        <input type="text" name="quantidade" value="{{$produto->quantidade}}">
        <br />
        <button> Salvar</button>

</body>
</html>
