<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gene = new \App\User;
        $gene->name = 'Gene';
        $gene->email = 'gene@gene.gene';
        $gene->password = bcrypt('secret');
        $gene->save();

        $jon = new \App\User;
        $jon->name = "Jon";
        $jon->email = 'boehmann@gene.gene';
        $jon->password = bcrypt('secret');
        $jon->save();
    }
}
