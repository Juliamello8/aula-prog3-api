<?php
namespace App\Http\Controllers;

class AulaController extends Controller
{
    public function show($id = null)
    {
        echo 'Exibe um ou todos os recursos:';
    }
    public function create()
    {
        echo 'Cria um recurso';
    }
    public function update($id)
    {
        echo 'Altera recurso existente ';
    }
    public function destroy($id)
    {
        echo 'Deleta um recurso existente';
    }
}