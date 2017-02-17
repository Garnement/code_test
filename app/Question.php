<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;
use Carbon\Carbon;

class Question extends Model
{
    protected $fillable = ['title', 'abstract', 'content', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Fonction pour définir à "null" si aucune catégorie n'est choisie pour le formulaire
    public function setCategoryIdAttribute($value)
    {
      $this->attributes['category_id'] = ( ($value == 0) ? null : $value ) ;
    }

    //Fonction pour formater la date
    public function getDateAttribute($date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }

    public function scopeDate($query)
    {
        return $query->where('status', '=', 'published');
    }
}
