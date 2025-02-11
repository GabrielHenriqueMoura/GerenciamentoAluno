<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrículas por Período</title>
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

    <h1>Alunos Agrupados por Período</h1>

    @foreach($alunosPorPeriodo as $periodo => $alunos)
        <h2>Período: {{ $periodo }}</h2>
        <table id="Corpo">
            <tr>
                <th>Nome</th>
                <th>Período</th>
            </tr>

            @foreach($alunos as $aluno)
            <tr>
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->periodo }}</td>
            </tr>
            @endforeach
        </table>
        <br><br>
    @endforeach

    <br>
    <button onclick="window.location.href = '{{ route('Alunoineitor.create') }}'">Cadastrar Alunos</button>
    <button onclick="window.location.href = '{{ route('Alunoineitor.index') }}'">Visualizar dados totais de Alunos</button>

    @endsection
</body>
</html>
