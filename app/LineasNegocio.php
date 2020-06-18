<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineasNegocio extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'users_id',
        'descripcion',
        'abreviatura',
        'comentario',
        'adicional1',
        'adicional2',
        'adicional3',
        'adicional4',
    ];

    public $campos = [
        'id',
        'users_id',
        'descripcion',
        'abreviatura',
        'user_edit',
        'comentario',
        'adicional1',
        'adicional2',
        'adicional3',
        'adicional4',
    ];

    public $config;

    public function __construct(){
        parent::__construct();
        $this->config = new Configuration;
    }
}
