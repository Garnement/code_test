<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;
use Carbon\Carbon;

class Question extends Model
{
    protected $fillable = ['title', 'abstract', 'content', 'category_id', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Fonction pour définir à "null" si aucune catégorie n'est choisie pour le formulaire
    public function setCategoryIdAttribute($value)
    {
      $this->attributes['category_id'] = ( ($value == 0) ? null : $value ) ;
    }

    //Fonction pour transformer le 'on' en publiée ou non publiée si la case est cochée ou non.
      public function setStatusAttribute($value)
    {
      $this->attributes['status'] = ( ($value == 'on') ? 'Publiée' : 'Non publiée');
    }

    //Fonction pour formater la date
    public function getDateAttribute($date)
    {
        //Si Date vaut null, on renvoi 'non publié'
        //if ($date == null) return 'Non publiée';

        return Carbon::parse($date)->format('d/m/Y');
    }

    public function scopeDate($query)
    {
        return $query->where('status', '=', 'Publiée');
    }
}
