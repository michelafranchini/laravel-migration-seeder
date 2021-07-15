<?php

use Illuminate\Database\Seeder;
use App\Viaggio; 

class ViaggiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayViaggi = config('viaggi'); 

        foreach ($arrayViaggi as $item ) {
            
            $viaggio = new Viaggio(); 

            $viaggio->titolo = $item["titolo"]; 
            $viaggio->destinazione = $item["destinazione"]; 
            $viaggio->descrizione = $item["descrizione"]; 
            $viaggio->prezzo = $item["prezzo"]; 
            $viaggio->data = $item["data"]; 
            $viaggio->notti = $item["notti"]; 
            
            $viaggio->save(); 
        }
    }
}
