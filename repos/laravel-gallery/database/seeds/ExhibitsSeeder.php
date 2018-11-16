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

      $e2= new \App\Exhibit;
      $e2->piece_name = "Portrait of Adele Bloch-Bauer";
      $e2->year = 1907;
      $e2->artist_name = "Gustav Klimt";
      $e2->url = "https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Gustav_Klimt%2C_1907%2C_Adele_Bloch-Bauer_I%2C_Neue_Galerie_New_York.jpg/440px-Gustav_Klimt%2C_1907%2C_Adele_Bloch-Bauer_I%2C_Neue_Galerie_New_York.jpg";
      $e2->description = "Portrait of Adele Bloch-Bauer I (also called The Lady in Gold or The Woman in Gold) is a painting by Gustav Klimt, completed between 1903 and 1907. The portrait was commissioned by the sitter's husband, Ferdinand Bloch-Bauer, a Jewish banker and sugar producer. The painting was stolen by the Nazis in 1941 and displayed at the Österreichische Galerie Belvedere. In 2006, following eight years of effort by the Bloch-Bauer heirs, the painting was returned to the family; it was sold the same year for $135 million, at the time a record price for a painting.";
      $e2->save();

      $e3= new \App\Exhibit;
      $e3->piece_name = "Blown glass with flower design";
      $e3->year = 1896;
      $e3->artist_name = "Karl Koepping";
      $e3->url = "https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Karl_koepping%2C_due_bicchieri_decorativi_in_vetro_soffiato%2C_gemania_1896%2C_01.jpg/506px-Karl_koepping%2C_due_bicchieri_decorativi_in_vetro_soffiato%2C_gemania_1896%2C_01.jpg";
      $e3->description = "German blown glass.";
      $e3->save();

      $e4= new \App\Exhibit;
      $e4->piece_name = "Hair barrette";
      $e4->year = 1900;
      $e4->artist_name = "Louis Aucoc";
      $e4->url = "https://upload.wikimedia.org/wikipedia/commons/b/b9/Louis_Aucoc02.jpg";
      $e4->description = "Barrette made of carved horn and decorated with pearls.";
      $e4->save();

      $e5= new \App\Exhibit;
      $e5->piece_name = "Viking-Art Nouveau Chair";
      $e5->year = 1900;
      $e5->artist_name = "Lars Kinsarvik";
      $e5->url = "https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Lars_kinsarvik%2C_poltroncina%2C_norvegia_ante_1900%2C_02.JPG/448px-Lars_kinsarvik%2C_poltroncina%2C_norvegia_ante_1900%2C_02.JPG";
      $e5->description = "Norwegian Art Nouveau furniture piece";
      $e5->save();
    }
}
