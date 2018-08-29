<?php

use Illuminate\Database\Seeder;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'categoria' => 'Technology', 'slug' => 'yellow',],
            ['id' => 2, 'categoria' => 'Academy', 'slug' => 'purple',],
            ['id' => 3, 'categoria' => 'Innovation', 'slug' => 'orange',],
            ['id' => 4, 'categoria' => 'Consulting', 'slug' => 'blue',],

        ];

        foreach ($items as $item) {
            \App\Categoria::create($item);
        }
    }
}
