<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    
     // Relazione one-to-many con User (locatore)
    public function locatore()
    {
        return $this->belongsTo(User::class, 'locatore', 'id');
    }
}
