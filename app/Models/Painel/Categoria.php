<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false; 

	protected $fillable =['id', 'nome'];

}
