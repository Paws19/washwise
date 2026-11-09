<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class RegistrationModel extends Model
{
    protected $table = "account_tbl"; 

    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'password',
        'role',
        'verification_code',
        'is_agree_terms_conditions',
        'save_session',
        'status',
        'is_verified',
        'email_verified_at',
    ];

    public function cast(array $attributes)
    {
        return [
            'is_agree_terms_conditions' => 'boolean',
            'save_session' => 'boolean',
            'status' => 'boolean',
            'is_verified' => 'boolean',
            'email_verified_at' => 'datetime',
            'full_name'=> 'encrypted',
            'phone_number'=> 'encrypted',
            'verification_code'=> 'encrypted',
        ];
    }


}
