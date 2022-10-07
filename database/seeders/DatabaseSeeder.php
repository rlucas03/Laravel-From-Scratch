<?php


namespace Database\Seeders;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]); // this does same as all code below
//
//         $user = User::factory()->create();
//
//       $personal = Category::create([
//             'name' =>  'Personal',
//             'slug' => 'personal'
//         ]);
//
//        $family = Category::create([
//             'name' =>  'Family',
//             'slug' => 'family'
//         ]);
//
//        $work = Category::create([
//             'name' =>  'Work',
//             'slug' => 'work'
//         ]);
//
//         Post::create([
//             'user_id' => $user->id,
//             'category_id' => $family->id,
//             'title'=> 'My Family Post',
//             'slug' => 'my-first-post',
//             'excerpt' => '<p>Lorem ipsim doar sit amet.</p>',
//             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus placerat cursus. Nunc eget tellus ornare, dictum neque congue, pellentesque ipsum. Ut vel urna nec nibh sollicitudin imperdiet nec vitae ligula. Nunc pellentesque lectus eget risus bibendum tincidunt. Quisque vehicula aliquam mattis. Fusce rhoncus mauris eget risus pellentesque, at efficitur felis luctus. Ut nec dignissim tortor. Quisque ultricies tortor id dolor convallis vulputate nec id ex.</p>'
//         ]);
//
//         Post::create([
//             'user_id' => $user->id,
//             'category_id' => $work->id,
//             'title'=> 'My Work Post',
//             'slug' => 'my-work-post',
//             'excerpt' => '<p>Lorem ipsim doar sit amet.</p>',
//             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus placerat cursus. Nunc eget tellus ornare, dictum neque congue, pellentesque ipsum. Ut vel urna nec nibh sollicitudin imperdiet nec vitae ligula. Nunc pellentesque lectus eget risus bibendum tincidunt. Quisque vehicula aliquam mattis. Fusce rhoncus mauris eget risus pellentesque, at efficitur felis luctus. Ut nec dignissim tortor. Quisque ultricies tortor id dolor convallis vulputate nec id ex.</p>'
//         ]);

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
    }
}
