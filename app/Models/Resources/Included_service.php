<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Included_service extends Model
{
    protected $table = 'included_services';

    public $timestamps = false;
    
     // Relazione one-to-many con Service
    public function servizio()
    {
        return $this->belongsTo(Service::class, 'servizio', 'id');
    }
}
