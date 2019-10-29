<?php


namespace App\Http\Controllers;

use App\Http\Requests\SeriesRequest;
use App\Serie;
use Illuminate\Http\Request;
use app\Http\Requests\SeriesFormRequest;

class SeriesController extends Controller
{
    public function index(Request $request){
        //cho $request->query('paramentro');
        //$series = Serie::all();
        $series = Serie::query()
        -> orderBy('nome')
        ->get();

        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series','mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }


    public function store(SeriesRequest $request)
    {
        //$request->validate(['nome' => 'required|min:2']);


        $serie = Serie::create($request->all());
        $request->session()->flash('mensagem',"Serie {$serie->id} criada com sucesso. {$serie->nome}");
        return redirect(route('index'));
    }


    public function destroy(Request $request)
    {
        Serie::destroy($request->id);
        $request->session()->flash('mensagem',"Serie excluida com sucesso.");
        return redirect(route('index'));
    }
}
