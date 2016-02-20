<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; /*Para habilitar o delete lógico*/

class gruposCaseiros extends Model {

	//
    use SoftDeletes;
    protected $fillable = ['nome'];
    protected $dates = ['deleted_at'];

    /**
     * Um grupo caseiro pode ter vários membros
     * @return mixed
     */
    public function membro()
    {
        //return $this->belongsTo('app\Membro');
        return $this->hasMany('app\Membro');
    }
}
