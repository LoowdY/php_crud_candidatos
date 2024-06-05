<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de Candidatos</title>
</head>

<body>

    <form action="/atualizar-candidato/{{$candidato->id}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nome</label>
        <input type="text" placeholder="Digite o seu nome" name="candidato_nome" value="{{ $candidato->nome}}" >
        <br />
        <br />
        <br />
        <label for="">Telefone</label>
        <input type="text" placeholder="Digite o seu telefone" name="candidato_telefone" value="{{ $candidato->telefone}}">


        <button>Enviar Cadastro</button>
    </form>
</body>

</html>