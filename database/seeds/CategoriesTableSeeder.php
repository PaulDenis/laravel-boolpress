<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "PC",
            "Playstation",
            "xBox",
            "Wii",
            "Switch",
            "Events"
        ];

        foreach($categories as $category) {   
            // 1 - creazione nuovo oggetto
            $newCategory = new Category();

            // 2 - valorizzazione proprietà
            $newCategory->name = $category;
            $newCategory->slug = Str::slug($newCategory->name, '-');

            // 3 - salvataggio dati
            $newCategory->save();
        }
    }
}
