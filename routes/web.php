<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoineitorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/MostrarAlunos', [AlunoineitorController::class, 'index'])->name('Alunoineitor.index');
Route::get('/criarAlunos', [AlunoineitorController::class, 'create'])->name('Alunoineitor.create');
Route::post('/criarAlunos/cadastrar', [AlunoineitorController::class, 'store'])->name('Alunoineitor.store');
Route::get('/mostrarCursos', [AlunoineitorController::class, 'show'])->name('Alunoineitor.show');
Route::get('/matriculas', [AlunoineitorController::class, 'matriculas'])->name('Alunoineitor.matriculas');
Route::get('/MostrarAlunos/destruir/{id}', [AlunoineitorController::class, 'destroy'])->name('Alunoineitor.destroy');
Route::get('/editarAluno/{aluno}', [AlunoineitorController::class, 'edit'])->name('Alunoineitor.edit');
Route::put('/editarAluno/{aluno}', [AlunoineitorController::class, 'update'])->name('Alunoineitor.update');
