<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ability extends Model
{
    use HasFactory,SoftDeletes;

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
      * Ability May have Many Roles
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
      */

      public function roles()
      {
        return $this->belongsToMany(Role::class);
      }
}
