<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $table = "equipe_";
    protected $fillable =["nom","prenom","telephone","mail","poste","role","salaire"];
}
