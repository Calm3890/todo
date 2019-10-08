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
            <?php if($todo->status == 1){
           echo' <tr>
             <th>';echo"{$todo->id}";echo '</th> 
                <th>';echo"{$todo->nama}";echo '</th>
                <th>'; echo"Completed";echo '</th>
            </tr>'; 
        }
            ?>
            @endforeach
            <div>
                <tr>
                    <th><input type="button" value="Index" onclick="location.href='/todo'"></th>
                </tr>
            </div>
        </table>
   
@endsection