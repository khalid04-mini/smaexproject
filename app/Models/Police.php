<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_num',
        'police_number',
        'raison_sociale',
        'addresse',
        'telephone1',
        'telephone2',
        'fax',
        'telex',
        'code_activite',
        'dirigeant',
        'fonction',
        'statut',
        'date_souscription',
        'date_fin',
        'file_path'
    ];
}
