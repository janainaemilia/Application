<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idCategoriaPost
 * @property string $nomeCategoria
 * @property Post[] $posts
 */
class Categoria extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'categoriapost';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idCategoriaPost';

    /**
     * @var array
     */
    protected $fillable = ['nomeCategoria'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Post', 'idCategoriaPost', 'idCategoriaPost');
    }
}
