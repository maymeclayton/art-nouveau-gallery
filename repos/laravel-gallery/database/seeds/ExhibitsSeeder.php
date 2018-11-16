<?php

use Illuminate\Database\Seeder;

class ExhibitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $e= new \App\Exhibit;
      $e->piece_name = "Zodiac";
      $e->year = 1896;
      $e->artist_name = "Alphonse Mucha";
      $e->url = "http://www.alphonsemucha.org/Zodiac%20Alphonse%20Mucha.jpg";
      $e->description = "Zodiac was Mucha's first work under his contract with the printer Champenois and was originally designed as an in-house calendar for the company. In this composition, Mucha incorporated twelve zodiac signs in the halo-like disk behind the woman's head, one of Mucha's customary motifs. The majestic beauty of the woman is emphasised by her regal bearing and elaborate jewellery.";
      $e->save();
    }
}
