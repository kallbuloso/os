<?php

namespace Modules\Customers\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'tipe',
        'status',
        'name',
        'nickname',
        'contact',
        'gender',
        'birtday_at',
        'cpf_cnpj',
        'rg_insc_est',
        'insc_mun',
        'telephone',
        'cell_phone',
        'whatsapp',
        'email',
        'newsletter',
        'email_nfe',
        'site',
        'group',
        'limit_purc',
        'note_purchase',
        'note',
    ];
}
