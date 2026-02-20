<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/*
 * @property int $id
 * @property string $name
 * @property string $icon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * 
 * 
*/
class Issue extends Model
{
    /**
     * All fields inside the $guarded array are not mass-assignable
     *
     * @var array
     */
    protected $guarded = ['id'];
}
