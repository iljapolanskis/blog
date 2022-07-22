<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Rent\Location;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    public function index()
    {
        $malta = new Location('35.9192537,14.3387204');
        Mapper::map($malta->latitude, $malta->longitude);
        foreach (Apartment::all() as $apartment) {
            $location = new Location($apartment->location);
            Mapper::marker($location->latitude, $location->longitude, [
                'title' => $apartment->title,
                'label' => [
                    'text' => "{$apartment->price} EUR/M",
                    'className' => 'marker-label',
                    'fontSize' => '14px',
                    'fontWeight' => 'bold',
                    'color' => '#FFFFFF',
                    'origin' => '55',
                ],
                'icon' => [
                    'path' => 'M -49.774 -13.574 L 50.34 -13.574 L 50.34 5.882 L 5.476 5.882 L 0.375 21.596 L -4.726 5.882 L -49.774 5.882 Z',
                    'fillColor' => '#DD716C',
                    'fillOpacity' => 1,
                    'strokeWeight' => 0,
                    'anchor' => [0, 0],
                    'origin' => [0, 0],
                ],
                'clickable' => true,
                'eventClick' => 'console.log("Marker clicked!")',
            ]);
        }

        return view(
            'apartments.index',
            [
                "apartments" => Apartment::all(),
            ]
        );
    }

    public function show(Apartment $apartment)
    {
        $location = new Location($apartment->location);

        Mapper::map($location->latitude, $location->longitude)
            ->marker($location->latitude, $location->longitude, [
                'title' => $apartment->title,
                'icon' => [
                    'path' => 'M -49.774 -13.574 L 50.34 -13.574 L 50.34 5.882 L 5.476 5.882 L 0.375 21.596 L -4.726 5.882 L -49.774 5.882 Z',
                    'fillColor' => '#DD716C',
                    'fillOpacity' => 1,
                    'strokeWeight' => 0,
                    'anchor' => [0, 0],
                    'origin' => [0, 0],
                ],
                'label' => [
                    'text' => "{$apartment->price} EUR/M",
                    'className' => 'marker-label',
                    'fontSize' => '14px',
                    'fontWeight' => 'bold',
                    'color' => '#FFFFFF',
                    'origin' => '55',
                ],
                'clickable' => true,
                'eventClick' => 'console.log("Marker clicked!")',
            ]);

        return view(
            'apartments.show',
            [
                "apartment" => $apartment,
            ]
        );
    }
}
