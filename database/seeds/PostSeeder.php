<?php
use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->content = $faker->text(500);
            $post->slug =  Str::slug($post->title, '-'); //pre creare lo slug si utilizza un pacchetto chiamato Str che viene richiamato in cima a questo file e che permette di associare ad ogni titolo il nome formattato in modo specifico, in questo caso tutto miniscolo con il trattino usato come separatore
            $post->cover_image = $faker->imageUrl(600, 300, 'Post', true, $post->slug, false);
            $post->save();
        }
    }
}
