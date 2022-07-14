<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\reservacion;
 
class ReservationFactory extends Factory
{
/*
    * @var string
*/
    protected $model = reservacion::class;
    /**
     * Define the model's default state.
     *
      *@return array
     */
    public function definition()
    {
        return [

             'fecha' => $this->faker->sentence(), 
             'monto' => $this-> faker-> sentence(),
             'pasajeros' => $this-> faker->sentence() , 
             'observaciones' => $this->faker->paragraph()
        ];
    }
}
