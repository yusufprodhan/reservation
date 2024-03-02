<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Country;

class BillingAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bill_to',
        'billing_email',
        'billing_phone',
        'vat_id',
        'website_url',
        'billing_address',
        'billing_city',
        'billing_state',
        'billing_country_id',
        'billing_post_code'
    ];

    /**
     * One-to-Many relations with Role.
     *
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class,'billing_country_id');
    }
}
