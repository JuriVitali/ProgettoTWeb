<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Included_service extends Model
{
    protected $table = 'included_services';
    protected $primaryKey = ['servizio','alloggio'];

    public $timestamps = false;
    
     // Relazione one-to-many con Service
    public function servizio()
    {
        return $this->belongsTo(Service::class, 'servizio', 'id');
    }
}
