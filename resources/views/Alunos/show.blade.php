<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cursos</title>
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

    <h1>Quantidade de alunos nos cursos</h1>

    <table id="Corpo">
        <tr>
            <th>Curso</th>
            <th>Quantidade de Alunos</th>
        </tr>

        @foreach($cursos as $curso)
        <tr>
            <td>{{ $curso->curso }}</td>
            <td>{{ $curso->total_alunos }}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <button onclick="window.location.href = '{{ route('Alunoineitor.index') }}'">Retornar</button>

    @endsection
</body>
</html>
