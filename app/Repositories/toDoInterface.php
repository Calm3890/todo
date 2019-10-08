<?php
namespace App\Repositories;

use Illuminate\Support\Collection;
use App\tdo;

interface toDoInterface{
    public function create(string $nama, string $status);
    public function all();
    public function get(int $id);
    public function update(int $id, string $nama, string $status);
    public function delete(int $id);
}