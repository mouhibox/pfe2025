<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        Article::create([
            'titre' => 'Premier article',
            'contenu' => 'Contenu du premier article.',
        ]);

        Article::create([
            'titre' => 'Deuxième article',
            'contenu' => 'Contenu du deuxième article.',
        ]);
    }
}
