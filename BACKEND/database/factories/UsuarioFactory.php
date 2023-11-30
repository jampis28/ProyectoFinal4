<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_personas'=>rand(1,3),
            'usuario'=>fake()->email(),
            'clave'=>fake()->password(),
            'fecha'=>fake()->date(),
            'habilitado'=>true,
            'id_rol'=>rand(1,3),
            'usuario_creacion'=>fake()->name(),
            'usuario_modificacion'=>fake()->name(),
        ];
    }
}
