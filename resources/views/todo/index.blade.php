@extends('base')

@section('body')
    <h1>Todo</h1>
        <table border="solid 2px black">
            
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Status</th>
            </tr>
            @foreach ($todos as $todo)
            <tr>
             <th>{{$todo->id}}</th> 
                <th>{{$todo->nama}}</th>
                <th><?php if($todo->status==0){echo "Pending";}else{echo"Completed";}?></th>
              <th><input type="button" value="Edit" onclick="location.href='/todo/edit/ {{ $todo -> id}}'"></th>
              <th><input type="button" value="Delete" onclick="location.href='/todo/delete/ {{$todo -> id}}'"></th>
            </tr>
            @endforeach
           
            <div>
                <tr>
                <th><input type="button" value="Add" onclick="location.href='/todo/new'"></th>
                <th><input type="button" value="Finished" onclick="location.href='/todo/finished'"></th>
                </tr>
            </div>
        </table>
   
@endsection