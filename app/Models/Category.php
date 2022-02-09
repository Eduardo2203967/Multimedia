<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    /* Se a chave primária não for id:
        protected $primaryKey= 'nome_chave' ;

      Se a tabela não estiver no plural:
        protected $table= 'nome_tabela';

      Se a chave não for numérica:
        protect $keyType='string';

      Se a chave não for auto-incrementada:
        public $incrementing=false;

      Senão tiverem timestamps (campos created_at e updated_at):
        public $timestamps=false;
        */

        protected $fillable = [ 'name', 'description' ];

        public function posts(){
            return $this->hasMany(Post::class,"category_id","id");
        }

}
