<?php

namespace App\Models\Rent;

class Location
{
    public float $latitude;
    public float $longitude;

    public function __construct(string $location)
    {
        $parts = explode(',', $location);
        $this->latitude = (float)$parts[0];
        $this->longitude = (float)$parts[1];
    }

    public function __toString()
    {
        return $this->latitude . ',' . $this->longitude;
    }

    public function toJson()
    {
        return json_encode([
                               'latitude' => $this->latitude,
                               'longitude' => $this->longitude,
                           ]);
    }
}
