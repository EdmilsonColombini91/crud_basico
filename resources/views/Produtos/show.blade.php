<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um produto</title>
</head>
<body>
    <label for="">Nome</label> <br />
    <input type="text" name="nome" value="{{ $produto->nome }}"> <br />
    <label for="">custo</label> <br />
    <input type="text" name="custo" value="{{ $produto->custo }}"> <br />
    <label for="">Preco</label> <br />
    <input type="text" name="preco" value="{{ $produto->preco }}"> <br />
    <label for="">quantidade</label> <br />
    <input type="text" name="quantidade" value="{{ $produto->quantidade }}"> <br />
</body>
</html>