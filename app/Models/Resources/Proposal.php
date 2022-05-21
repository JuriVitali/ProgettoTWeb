<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    
     // Relazione one-to-many con User
    public function mittente()
    {
        return $this->belongsTo(User::class, 'mittente', 'id');
    }
}
