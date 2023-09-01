<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    public function projects(){
        // con hasMany sto automanìticamente dicendo di essere il modello indipendente e ha una relazione con il modello selezionato nel metodo, che dipende da questo modello.
        return $this->belongsToMany(Project::class);
}
