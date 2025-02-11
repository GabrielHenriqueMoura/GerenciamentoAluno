<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <style>
        #Corpo {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #Corpo td, #Corpo th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #Corpo tr:nth-child(even){background-color: #f2f2f2;}

        #Corpo tr:hover {background-color: #ddd;}

        #Corpo th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #070403;
            color: white;
        }
    </style>
</head>
<body>
@extends('layout.design')

@section('content')

<h1>Lista de Alunos Cadastrados</h1>

<table id="Corpo">
    <tr>
        <th>Nome</th>
        <th>Curso</th>
        <th>Período</th>
        <th>Data de Matrícula</th>
        <th>Status da Matrícula</th>
 
    </tr>
    @foreach($alunoineitor as $aluno)
        <tr>
            <td>{{ $aluno->nome }}</td>
            <td>{{ $aluno->curso }}</td>
            <td>{{ $aluno->periodo }}</td>
            <td>{{ $aluno->dia_matricula }}\{{ $aluno->mes_matricula }}\{{ $aluno->ano_matricula }}</td>
            <td>{{ $aluno->status_matricula }}</td>
            <td>
        
            <a href="{{ route('Alunoineitor.edit', $aluno->id) }}">Editar informações</a>
                <a href="{{ route('Alunoineitor.destroy', $aluno->id) }}" onclick="return confirm('Tem certeza que deseja excluir este aluno?')">Deletar</a>
            </td>
        </tr>
    @endforeach
</table>

<br>
<button onclick="window.location.href = '{{ route('Alunoineitor.create') }}'">Cadastrar Alunos</button>

@endsection
</body>
</html>
