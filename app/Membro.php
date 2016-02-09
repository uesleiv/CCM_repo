<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; /*Para habilitar o delete l�gico*/

class Membro extends Model {

	//
    protected $fillable = array('nome', 'sexo', 'email');

    // habilitar o delete lógico
    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
