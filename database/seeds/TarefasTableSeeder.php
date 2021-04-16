<?php

use Illuminate\Database\Seeder;

class TarefasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tarefa::class)->create([
            'name'=>'Estudar PHP',
            'complete'=>false
        ]);

        factory(App\Tarefa::class)->create([
            'name'=>'Estudar JavaScript',
            'complete'=>false
        ]);

        factory(App\Tarefa::class)->create([
            'name'=>'Estudar Laravel',
            'complete'=>false
        ]);

        factory(App\Tarefa::class)->create([
            'name'=>'Estudar MySQL',
            'complete'=>false
        ]);
        
    }
}