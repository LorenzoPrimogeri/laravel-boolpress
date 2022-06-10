<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Top', 'hot', 'new'];
        foreach ($tags as $tag) {
            $newtag = new Tag();
            $newtag->name = $tag;
            $newtag->slug = Str::slug($tag);
            $newtag->save();
        }
    }
}
