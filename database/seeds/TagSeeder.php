<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [ "News", "New release", "Updates", "Trailer", "Spoiler", "Giveaway" ];

        foreach ($tags as $tag) {
            //1. creazione istanza
            $newTag = new Tag();

            //2. valorizzazione proprietà
            $newTag->name = $tag;
            $newTag->slug = Str::slug($tag, '-');

            //3. Salvataggio
            $newTag->save();
        }
    }
}
