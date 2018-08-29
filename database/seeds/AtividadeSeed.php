<?php

use Illuminate\Database\Seeder;

class AtividadeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'nome' => 'Desenvolvimento', 'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta eros libero, posuere viverra mi volutpat venenatis. Suspendisse potenti.', 'categoria_id' => 3,],
            ['id' => 2, 'nome' => 'Realidade Virtual', 'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta eros libero, posuere viverra mi volutpat venenatis. Suspendisse potenti.', 'categoria_id' => 3,],
            ['id' => 3, 'nome' => 'Teste de Software', 'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta eros libero, posuere viverra mi volutpat venenatis. Suspendisse potenti.', 'categoria_id' => 1,],
            ['id' => 4, 'nome' => 'Treinamento SCRUM', 'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta eros libero, posuere viverra mi volutpat venenatis. Suspendisse potenti.', 'categoria_id' => 2,],
            ['id' => 5, 'nome' => 'Sustentação', 'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta eros libero, posuere viverra mi volutpat venenatis. Suspendisse potenti.', 'categoria_id' => 4,],

        ];

        foreach ($items as $item) {
            \App\Atividade::create($item);
        }
    }
}
