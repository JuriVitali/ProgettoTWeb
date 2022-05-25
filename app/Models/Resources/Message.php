<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    
    // Relazione one-to-many con User (mittente)
    public function mittente()
    {
        return $this->belongsTo(User::class, 'mittente', 'id');
    }
    
    // Relazione one-to-many con User (destinatario)
    public function destinatario()
    {
        return $this->belongsTo(User::class, 'destinatario', 'id');
    }
}
