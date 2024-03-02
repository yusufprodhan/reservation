<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'job_title',
        'user_id',
        'image_quantity',
        'instruction',
        'image_complexity',
        'return_file_extension',
        'service_id',
        'turnaround',
        'image_link',
    ];


    /**
     * get user
     *
     * @return BelongsTo
     *
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * get path service
     *
     * @return BelongsTo
     *
     */
    public function pathService(): HasMany
    {
        return $this->hasMany(PathServices::class,'service_id','id');
    }

    /**
     * get media
     *
     * @return BelongsTo
     *
     */
    public function media(): HasMany
    {
        return $this->hasMany(Media::class,'media_id','id');
    }
}
