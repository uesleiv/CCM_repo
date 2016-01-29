<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait; /*Para habilitar o delete lógico*/

class Membro extends Model {

	//
    protected $fillable = array('nome', 'sexo', 'email');

    // habilitar o delete lógico
    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];

}
