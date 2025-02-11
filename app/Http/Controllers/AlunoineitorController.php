<?php

namespace App\Http\Controllers;


use App\Models\alunoineitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AlunoineitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('Alunos.index',[ 'alunoineitor' => DB::table('Alunoineitor')->get() 
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('Alunoineitor')->insert([
            'nome' => $request->nome,
            'curso' => $request->curso,
            'periodo' => $request->periodo,
            'ano_matricula' => $request->ano_matricula,
            'mes_matricula' => $request->mes_matricula,
            'dia_matricula' => $request->dia_matricula,
            'status_matricula' => $request->status_matricula,
        ]);
    
        return redirect()->route('Alunoineitor.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $cursos = DB::table('Alunoineitor')
        ->select('curso', DB::raw('count(*) as total_alunos'))
        ->groupBy('curso')
        ->get();

return view('Alunos.show', ['cursos' => $cursos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alunoineitor $aluno)
    {
        return view('alunos.edit', ['aluno' => $aluno]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alunoineitor $aluno)
    {
        $aluno->update($request->all()); 
        return redirect()->route('Alunoineitor.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      
        $aluno = Alunoineitor::findOrFail($id);
        $aluno->delete();
        
        
        return redirect()->route('Alunoineitor.index');

    }
    
    public function matriculas()
    {
        
        $periodos = DB::table('Alunoineitor')
                      ->select('periodo')
                      ->distinct()  
                      ->orderBy('periodo')  
                      ->get();
    

        $alunosPorPeriodo = [];
    
        foreach ($periodos as $periodo) {
            $alunosPorPeriodo[$periodo->periodo] = DB::table('Alunoineitor')
                                                     ->where('periodo', $periodo->periodo)
                                                     ->get();
        }
    
        return view('Alunos.matriculas', ['alunosPorPeriodo' => $alunosPorPeriodo]);
    }
    

}
