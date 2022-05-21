<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    
    // Relazione one-to-many con User
    public function proprietario()
    {
        return $this->belongsTo(User::class, 'proprietario', 'id');
    }
    
    // Relazione one-to-many con Proposal
    public function proposte()
    {
        return $this->hasMany(Proposal::class, 'alloggio', 'id');
    }
    
    //Relazione one-to-many con Photo
    public function foto()
    {
        return $this->hasMany(Photo::class, 'alloggio', 'id');
    }
    
    //Relazione one-to-many con Inclded_service
    public function servizi_inclusi()
    {
        return $this->hasMany(Included_service::class, 'alloggio', 'id');
    }
}
