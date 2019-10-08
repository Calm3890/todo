@extends('base')

@section('body')
<form action="/todo/edit" method="POST">
@csrf
    <div>
        <label>Nama:</label>
        <input type="text" name="nama" value='{{$todo->nama}}'>
    </div>
    <div>
        <label >Status:</label>
        <input type="radio" name="status" value='0' checked="checked"><label>Pending</label>
        <input type="radio" name="status" value="1"><label>Completed</label>
    </div>
        <input type="hidden" name='id'value = '{{$todo->id}}'>
    <div>
        <input type="submit" >
    </div>
</form>