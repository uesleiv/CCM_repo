<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; /*Para habilitar o delete l�gico*/

class Membro extends Model {

	//
    //protected $fillable = array('nome', 'sexo', 'email', '' ); alternativo
    protected  $fillable = [
        'nome',
        'sexo',
        'email',
        'id_grupo_caseiro'
    ];
    //protected $guarded = array('deleted_at');
    // habilitar o delete lógico
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function aniversariantes ($squery,$data){

        $squery->where(DB::raw('MONTH(dtAniversario)'),'=', Carbon::now()->startOfMonth());
    }

    /**
     * Um membro possui muitos grupos caseiros
     * (no caso de quererem histórico de grupos que o membro passou)
     * @return mixed
     */
    public function grupoCaseiro ()
    {
        //return $this->hasMany('app\gruposCaseiros');
        return $this->belongsTo('app\gruposCaseiros');
    }
}
