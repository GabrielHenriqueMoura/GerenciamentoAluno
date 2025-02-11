<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
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
        
        #Corpo tr:nth-child(even) {background-color: #f2f2f2;}
        
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

<table id="Corpo">
    <form action="{{ route('Alunoineitor.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <th>
        <label for="nome">Nome:</label>
        <input type="text" value="{{ $aluno->nome }}" name="nome"/>
        <br>
        <label for="curso">Curso:</label>
        <input type="text" value="{{ $aluno->curso }}" name="curso"/>
        <br>
        <label for="periodo">Período:</label>
        <input type="text" value="{{ $aluno->periodo }}" name="periodo"/>
        <br>
        <label for="ano_matricula">Ano de Matrícula:</label>
        <input type="number" value="{{ $aluno->ano_matricula }}" name="ano_matricula"/>
        <br>
        <label for="mes_matricula">Mês de Matrícula:</label>
        <input type="number" value="{{ $aluno->mes_matricula }}" name="mes_matricula"/>
        <br>
        <label for="dia_matricula">Dia de Matrícula:</label>
        <input type="number" value="{{ $aluno->dia_matricula }}" name="dia_matricula"/>
        <br>
        <label for="status_matricula">Status da Matrícula:</label>
        <input type="text" value="{{ $aluno->status_matricula }}" name="status_matricula"/>
        <br>
        <br>
        <input type="submit" value="Atualizar"/>
  
        <button onclick="window.location.href = '{{ route('Alunoineitor.index') }}'">Cancelar</button>
        </th>
    </form>
</table>

@endsection

</body>
</html>
