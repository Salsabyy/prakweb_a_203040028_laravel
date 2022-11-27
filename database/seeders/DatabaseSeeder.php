<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


       User::create([
           'name' => 'Salsabila Firdausi',
           'email' => 'salsabilafirdausi711@gmail.com',
            'password' => bcrypt('171122')
        ]);

     //   User::create([
       //     'name' => 'Bintang Yandi Putra',
         //   'email' => 'acut121@gmail.com',
           // 'password' => bcrypt('171122')
        //]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
          'name' => 'Personal',
          'slug' => 'personal'
      ]);
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aspernatur sit error ullam, quos dolore deleniti veritatis excepturi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aspernatur sit error ullam, quos dolore deleniti veritatis excepturi accusamus id cumque, sed dolores, tempora in vitae ipsa earum distinctio porro quod et? Deserunt quam impedit delectus quo eum in ea, nobis facilis recusandae ut magni esse quasi blanditiis necessitatibus maxime temporibus ullam deleniti modi sapiente. Ratione error atque minus, veniam numquam officiis impedit dignissimos cupiditate, hic sint at, quaerat sapiente cumque laborum nisi itaque nostrum! Consequatur tenetur maiores, repellat nostrum saepe nam! Consectetur distinctio, tempora excepturi numquam assumenda, doloremque maxime, iusto ex esse corrupti quisquam consequuntur temporibus eos culpa magni!',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aspernatur sit error ullam, quos dolore deleniti veritatis excepturi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aspernatur sit error ullam, quos dolore deleniti veritatis excepturi accusamus id cumque, sed dolores, tempora in vitae ipsa earum distinctio porro quod et? Deserunt quam impedit delectus quo eum in ea, nobis facilis recusandae ut magni esse quasi blanditiis necessitatibus maxime temporibus ullam deleniti modi sapiente. Ratione error atque minus, veniam numquam officiis impedit dignissimos cupiditate, hic sint at, quaerat sapiente cumque laborum nisi itaque nostrum! Consequatur tenetur maiores, repellat nostrum saepe nam! Consectetur distinctio, tempora excepturi numquam assumenda, doloremque maxime, iusto ex esse corrupti quisquam consequuntur temporibus eos culpa magni!',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aspernatur sit error ullam, quos dolore deleniti veritatis excepturi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aspernatur sit error ullam, quos dolore deleniti veritatis excepturi accusamus id cumque, sed dolores, tempora in vitae ipsa earum distinctio porro quod et? Deserunt quam impedit delectus quo eum in ea, nobis facilis recusandae ut magni esse quasi blanditiis necessitatibus maxime temporibus ullam deleniti modi sapiente. Ratione error atque minus, veniam numquam officiis impedit dignissimos cupiditate, hic sint at, quaerat sapiente cumque laborum nisi itaque nostrum! Consequatur tenetur maiores, repellat nostrum saepe nam! Consectetur distinctio, tempora excepturi numquam assumenda, doloremque maxime, iusto ex esse corrupti quisquam consequuntur temporibus eos culpa magni!',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aspernatur sit error ullam, quos dolore deleniti veritatis excepturi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aspernatur sit error ullam, quos dolore deleniti veritatis excepturi accusamus id cumque, sed dolores, tempora in vitae ipsa earum distinctio porro quod et? Deserunt quam impedit delectus quo eum in ea, nobis facilis recusandae ut magni esse quasi blanditiis necessitatibus maxime temporibus ullam deleniti modi sapiente. Ratione error atque minus, veniam numquam officiis impedit dignissimos cupiditate, hic sint at, quaerat sapiente cumque laborum nisi itaque nostrum! Consequatur tenetur maiores, repellat nostrum saepe nam! Consectetur distinctio, tempora excepturi numquam assumenda, doloremque maxime, iusto ex esse corrupti quisquam consequuntur temporibus eos culpa magni!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        }
}
