<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendaftar>
 */
class PendaftarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'id_registrasi' => $this->numberBetween(1, 10),
            'id_kategori' => $this->numberBetween(1, 10),
            'jen_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'tpt_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->date(),
            'tb' => $this->faker->numberBetween(150, 200) . ' cm',
            'bb' => $this->faker->numberBetween(50, 100) . ' kg',
            'kelas' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E']),
            'asal_sekolah' => $this->faker->company(),
            'kategori_tanding' => $this->faker->word(),
            'golongan' => $this->faker->word(),
            'kode_gr' => $this->faker->bothify('GR-####'),
            'kelas_tanding_FK' => $this->faker->word(),
            'kontingen' => $this->faker->state(),
            'foto' => $this->faker->imageUrl(),
            'ktp' => $this->faker->numerify('KTP####'),
            'akta_lahir' => $this->faker->numerify('AK####'),
            'ijazah' => $this->faker->numerify('IJ####'),
        ];
    }
}
