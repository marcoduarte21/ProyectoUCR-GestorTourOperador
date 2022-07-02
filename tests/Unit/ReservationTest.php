<?php

namespace Tests\Unit;

use App\Models\reservacion;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class ReservationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_reservation_has_many_clients()
    {
        $reservation = new reservacion;

        $this->assertInstanceOf(Collection::class, $reservation->clientes);
    }
}
