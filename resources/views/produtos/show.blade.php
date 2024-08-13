<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        
        <label for="">Nome</label> <br />
        <input type="text" name="nome" id="" value="{{$produto->nome}}">
        <br />
        <label for="">Custo</label> <br />
        <input type="text" name="custo" id="" value="{{$produto->custo}}">
        <br />

        <label for="">Preço</label> <br />
        <input type="text" name="preco" id="" value="{{ $produto->preco }}">
        <br />

        <label for="">Quantidade</label> <br />
        <input type="text" name="quantidade" id="" value="{{$produto->quantidade}}">
        <br />
</body>
</html>