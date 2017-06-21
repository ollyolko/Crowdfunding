<?php

use Illuminate\Database\Seeder;

class dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('data')->insert(
                    [
                        [
                            'name'=>"dobro",
                            'value'=>225454
                        ],
                         [
                            'name'=>"money",
                            'value'=>15808784
                        ],
                         [
                            'name'=>"project",
                            'value'=>297
                        ],
                         [
                            'name'=>"new",
                            'value'=>36
                        ],
                         [
                            'name'=>"hot",
                            'value'=>17
                        ],

                    ]
        );
    }
}