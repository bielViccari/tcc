<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['comentario','postagem_id','user_id'];

    public function postagem(){
        return $this->belongsTo(Postagem::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

   public function iniciais()
   {
       $words = explode(" ", $this->user->name);

       $initName =[];
       $initName[0] = $words [0];

       if (count($words) > 1)
       $initName[1] = $words[count($words) - 1];

       $iniciais = null;
       foreach ($initName as $name) {
           $iniciais .= $name[0];
       }

       return strtoupper($iniciais);
   }
}

