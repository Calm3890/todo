@extends('base')

@section('body')
<form action="/todo" method="POST">
@csrf
    <div>
        <label>Nama:</label>
        <input type="text" name="nama">
    </div>
    <div>
        <input type="hidden" name="status" value="0">
    </div>
    <div>
        <input type="submit" >
    </div>
</form>