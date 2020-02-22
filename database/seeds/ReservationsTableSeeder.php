<?php


use App\Models\Reservations;

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservations = [
            [
                'user_id' => '1',
                'room_id' => '1',
                'num_of_guests' => '4',
                'arrival' => '5/18/20',
                'departure' => '5/28/20'
            ],
            [
                'user_id' => '1',
                'room_id' => '2',
                'num_of_guests' => '1',
                'arrival' => '5/10/20',
                'departure' => '5/12/20'
            ],
            [
                'user_id' => '1',
                'room_id' => '3',
                'num_of_guests' => '3',
                'arrival' => '5/6/20',
                'departure' => '5/7/20'
            ],
            [
                'user_id' => '1',
                'room_id' => '4',
                'num_of_guests' => '2',
                'arrival' => '5/12/20',
                'departure' => '5/25/20'
            ],
            [
                'user_id' => '1',
                'room_id' => '2',
                'num_of_guests' => '2',
                'arrival' => '5/20/20',
                'departure' => '5/24/20'
            ]
        ];

        foreach ($reservations as $reservations) {
            Reservations::create(array(
                'user_id' => $reservations['user_id'],
                'room_id' => $reservations['room_id'],
                'num_of_guests' => $reservations['number_of_guests'],
                'arrival' => $reservations['arrival'],
                'departure' => $reservations['departure']
            ));
        }
    }
}
