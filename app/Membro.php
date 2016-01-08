<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Membro;

class Membro extends Model {

	//
    protected $fillable = array('nome', 'sexo', 'email');

}
