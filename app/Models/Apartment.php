<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pricePerSquare(): string
    {
        $value = number_format((float)($this->price / $this->area), 2, '.', '');
        return "$value €/m";
    }

    public function listOfImages(): array
    {
        return explode(', ', $this->images);
    }

}
