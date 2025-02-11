<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
    <style>
        p.dashed {border-style: dashed;}
        #Corpo {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
      
        #Corpo td, #Corpo th {
            border: 1px solid #ddd;
            padding: 8px;
        }
      
        #Corpo tr:nth-child(even) {
            background-color: #f2f2f2;
        }
      
        #Corpo tr:hover {
            background-color: #ddd;
        }
      
        #Corpo th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #070403;
            color: white;
        }

        input[type="text"], input[type="number"], input[type="submit"] {
            padding: 6px;
            margin: 4px;
            width: 100%;
        }

        button {
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
@extends('layout.design')

@section('content')

<h2>Cadastrar Aluno</h2>
<form action="{{route('Alunoineitor.store')}}" method="POST">
    @csrf
    <table id="Corpo">
        <tr>
            <th><label for="nome">Nome do Aluno:</label></th>
            <th><label for="curso">Curso:</label></th>
            <th><label for="periodo">Período:</label></th>
            <th><label for="ano_matricula">Ano da Matrícula:</label></th>
            <th><label for="mes_matricula">Mês da Matrícula:</label></th>
            <th><label for="dia_matricula">Dia da Matrícula:</label></th>
            <th><label for="status_matricula">Status da Matrícula:</label></th>
        </tr>
        <tr>
            <td><input type="text" name="nome" required/></td>
            <td><input type="text" name="curso" required/></td>
            <td><input type="number" name="periodo" required/></td>
            <td><input type="number" name="ano_matricula" required/></td>
            <td><input type="number" name="mes_matricula" required/></td>
            <td><input type="number" name="dia_matricula" required/></td>
            <td><input type="text" name="status_matricula" required/></td>
        </tr>
    </table>
    <input type="submit" value="Cadastrar Aluno"/>
</form>

<br>
<button onclick="window.location.href = '{{route('Alunoineitor.index')}}'">Cancelar</button>

@endsection

</body>
</html>
