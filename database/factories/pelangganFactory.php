<?php

namespace Database\Factories;

use App\Models\pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

class pelangganFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = pelanggan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pelanggan' => $this->faker->word,
        'alamat_pelanggan' => $this->faker->word,
        'nomor_telepon' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
