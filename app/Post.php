<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idPost
 * @property string $tituloPost
 * @property string $textoPost
 * @property string $dataPost
 * @property string $atualizacaoPost
 * @property int $idCategoriaPost
 * @property int $idUsuario
 * @property Categoriapost $categoriapost
 * @property Usuario $usuario
 * @property Tagpost[] $tagposts
 * @property Midium[] $midias
 */
class Post extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'post';

    /**
     * @var array
     */
    protected $fillable = ['tituloPost', 'textoPost', 'atualizacaoPost', 'idCategoriaPost', 'idUsuario'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoriapost()
    {
        return $this->belongsTo('App\Categoriapost', 'idCategoriaPost', 'idCategoriaPost');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idUsuario', 'idusuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tagposts()
    {
        return $this->belongsToMany('App\Tagpost', 'itemtagpost', 'idPost', 'idTagPost');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function midias()
    {
        return $this->hasMany('App\Midium', 'idPost', 'idPost');
    }
}
