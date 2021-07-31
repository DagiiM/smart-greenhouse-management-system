<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory,SoftDeletes;

    /**
      * The attributes that aren't mass assignable
      * @var array
      */

      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
       protected $fillable = [
           'name',
           'description',
       ];

       protected $dates = ['deleted_at'];

      protected $guarded=[];

      /**
      * A role may have many abilities
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
      */

      public function abilities()
      {
        return $this->belongsToMany(Ability::class)->withTimestamps();
      }

      public function allowTo($ability)
      {
        if (is_string($ability))
         {
          $ability=Ability::whereName($ability)->firstOrFail();
        }
        $this->abilities()->sync($ability,false);
      }
}
