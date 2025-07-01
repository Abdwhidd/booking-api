<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Booking> $bookings
 * @property-read int|null $bookings_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Venue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Venue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Venue query()
 * @mixin \Eloquent
 */
class Venue extends Model
{
    protected $table = 'venue';

    protected $fillable = [
        'name',
        'location',
        'description',
        'price_per_hour',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
