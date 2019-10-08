<?php

namespace App\Repositories;

use App\tdo;
class TodoRepositories implements toDoInterface {
    public function create (string $nama, string $status){
        $newtest = new tdo;
        $newtest->nama = $nama;
        $newtest->status = $status;
        $newtest->save();
    }
    public function all(){
     return tdo::all();
    }
    public function get(int $id){
        return tdo::find($id);
    }
    public function update(int $id, string $nama, string $status){
        tdo::find($id)->update(['nama'=>$nama,'status'=>$status]);

    }
    public function delete(int $id){
        tdo::destroy($id);
    }
}

