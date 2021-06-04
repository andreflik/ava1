<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
</head>
<body>
    <form action="{{route('registro_usuario')}}" method="POST">
        @csrf
        <label for="">Nome</label>
        <input type="text" name="nome"> <br>
        <label for="">CPF</label>
        <input type="text" name="cpf"> <br>
        <label for="">RG</label>
        <input type="text" name="rg"> <br>
        <label for="">Data de Nascimento</label>
        <input type="text" name="nasc"> <br>
        <label for="">Telefone</label>  
        <input type="text" name="telefone"> <br>
        <label for="">Cidade:</label>
        <select name="cidade" id="cidade">
            <option value="BA">BA</option>
            <option value="SP">SP</option> <br>
        </select>
        <br>
        <button>Enviar</button>

    
    </form>
    
</body>
</html>