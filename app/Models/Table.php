<?php

namespace App\Models;

use App\Enums\TableLocation;
use App\Enums\TableStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'guest_number', 'status', 'location'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public const STATUS = [
        'Pending' => "Pending",
        'Available' => "Available",
        'Unavalaible' => "Unavalaible",
    ];

    public const LOCATION = [
        'Front'     => 'Front',
        'Inside'    => 'Inside',
        'Outside' => 'Outside',
    ];
}
