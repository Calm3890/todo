<?php

namespace App\Http\Controllers;
use App\tdo as ToDoModel;
use Illuminate\Http\Request;
use App\Repositories\toDoInterface;
use App\Repositories\TodoRepositories;
class ctrller extends Controller
{
    private $todorepo;
    public function __construct()
    {$this->todorepo = new TodoRepositories;
        
    }
    public function index(){
        $todos = $this->todorepo->all();
        return view('todo.index',['todos'=>$todos]);
    }
    public function new_form(){
        return view('todo.new');
    }
    public function edit_form($id) {
        $todos = ToDoModel::find($id);
        return view ('todo.edit',['todo'=>$todos]);
    }
    public function save(Request $request){
        $nama = $request->input('nama');
        $status = $request->input('status');
        $this->todorepo->create($nama,$status);
        return redirect('/todo');
    }
    public function edit(Request $request) {
        // KomentarModel::find($request->id)->update
        // (['nama'=>$request->nama, 'komentar'=>$request->komentar]);
        $id = $request->id;
        $nama = $request->nama;
        $status = $request->status;
        $this->todorepo->update($id,$nama,$status);
        return redirect('/todo');
    }
    public function delete($id){
        $this->todorepo->delete($id);
        return redirect('/todo');
    }
}
