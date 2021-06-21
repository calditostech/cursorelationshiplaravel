<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class OneToManyController extends Controller
{
    public function oneToMany()
    {
        $country = Country::where('name', 'Brasil')->get()->first();
        
        $states = $country->states()->where('initials', 'LIKE', 'RJ')->get();

        foreach($states as $state) {
            echo "<hr>{$state->initials} - {$state->name}";
        }
    }

    public function manyToOne()
    {
        $stateName = 'RIO DE JANEIRO';
        $state = State::where('name', $stateName)->get()->first();
        echo "<br>{$state->name}</b>";

        $country = $state->country;
        echo "<br>Pais: {$country->name}";

    }
}
