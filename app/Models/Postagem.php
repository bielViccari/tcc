<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Postagem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'postagens';
    protected $fillable = [
        'o_que_vai_doar',
        'instituicao',
        'tipo',
        'quantidade',
        'user_id',
        'telefone',
        'imagem',
       
        
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comentario(){
        return $this->hasMany(Comentario::class);
    }

}
