<?php

namespace App\Models;
use App\Models\Traits\TranslatedTrait;
use App\Models\Scopes\ActiveScope;
use Larapen\Admin\app\Models\Crud;
class Skill extends BaseModel
{
    use Crud, TranslatedTrait;

    protected $table = 'skills';
    public $translatable = ['name'];




    protected $guarded = ['id'];
    protected $appends = ['tid'];

    protected $fillable =['id','name'];
    protected static function boot()
    {
        parent::boot();

    }
    
}
