<?php

// para executar este projeto
// 1- baixar do github 
// https://github.com/ewbriao1978/exemplo_webbackend_IFRS

// 2- entrar na pasta raíz do projeto ( onde está 
// arquivo artisan e executar ): 
// composer update
// 3 - depois renomear .env_example para .env
// 4 - php artisan serve -> entrar em 127.0.0.1:8000
// 5 - erro de generate key irá ocorrer. clicar 
// em generate key e depois "refresh" .
// acho que era isso 


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CasaModel;

class Home extends Controller
{
    //

    public function index(){
        $model = new CasaModel();
        $data['dados'] = $model -> all();
        return view('index',$data);
    }

    public function cadastro(){
        return view("cadastro");
    }

    public function cadastrar(Request $request){
        $model = new CasaModel();
        $model->endereco = $request->endereco;
        $model->preco = $request->preco;
        $model->imobiliaria = $request->imobiliaria;
        $model->tipo = $request->tipo;
        $model->save();
        return redirect()->to('/');
    }

    public function pesquisar(Request $request){
        $model = new CasaModel();
        $queries = [];
        if($request->tipo!='ambos'){
            array_push($queries,['tipo','=',$request->tipo]);
        }
        array_push($queries,[$request->campo,'like','%'.$request->pesquisa.'%']);
        $data['dados'] = $model ->where($queries)->orderBy($request->ordempor,$request->ordem)->get();
        return view('index',$data);
    }

    public function editar($id){
        $model = new CasaModel();
        $data = $model:: where('id',$id) -> first();
        return view('editar',$data);
    }

    public function update(Request $request){
        $casa = CasaModel::find($request->id);
        $casa->endereco = $request->endereco;
        $casa->imobiliaria = $request->imobiliaria;
        $casa->tipo = $request->tipo;
        $casa->preco = $request->preco;
        $casa->save();
        return redirect()->to('/');
    }

    public function remover($id){
        $casa = CasaModel::find($id);
        $casa->delete();
        return redirect()->to('/');
    }
}