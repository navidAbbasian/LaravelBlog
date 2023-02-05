<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
//        User::truncate();
//        Post::truncate();
//        Category::truncate();


        Post::factory(30)->create();


//
//        $user = User::factory()->create();
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$personal->id,
//            'title'=>'My Personal Post',
//            'slug'=>'my-personal-post',
//            'excerpt'=>'<p>Reque orci ullamcorper animal dapibus nec suavitate. Luptatum habemus lectus curabitur ubique errem justo numquam ferri.</p>',
//            'body'=>'<p>Nunc per ius latine populo semper repudiandae integer aenean interdum. Maecenas te libero senectus interpretaris epicuri mei propriae dicat vim. Tacimates saperet efficitur alienum elitr usu alia. Dapibus nostrum reformidans assueverit inimicus ferri ponderum harum repudiare debet. Tacimates sadipscing persequeris turpis vituperata et porta atomorum solet. Magnis pellentesque pro dui sale altera expetenda facilisis cum adipisci. Eu mediocrem eos dictas mi fames mus conceptam prompta. Hac habitasse usu atqui reprimique vidisse. Idque iriure theophrastus viderer quod enim. Leo vero libris rutrum ultrices similique petentium necessitatibus.</p>'
//        ]);
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$work->id,
//            'title'=>'My Work Post',
//            'slug'=>'my-work-post',
//            'excerpt'=>'<p>Reque orci ullamcorper animal dapibus nec suavitate. Luptatum habemus lectus curabitur ubique errem justo numquam ferri.</p>',
//            'body'=>'<p>Nunc per ius latine populo semper repudiandae integer aenean interdum. Maecenas te libero senectus interpretaris epicuri mei propriae dicat vim. Tacimates saperet efficitur alienum elitr usu alia. Dapibus nostrum reformidans assueverit inimicus ferri ponderum harum repudiare debet. Tacimates sadipscing persequeris turpis vituperata et porta atomorum solet. Magnis pellentesque pro dui sale altera expetenda facilisis cum adipisci. Eu mediocrem eos dictas mi fames mus conceptam prompta. Hac habitasse usu atqui reprimique vidisse. Idque iriure theophrastus viderer quod enim. Leo vero libris rutrum ultrices similique petentium necessitatibus.</p>'
//        ]);
//
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$family->id,
//            'title'=>'My Family Post',
//            'slug'=>'my-family-post',
//            'excerpt'=>'<p>Reque orci ullamcorper animal dapibus nec suavitate. Luptatum habemus lectus curabitur ubique errem justo numquam ferri.</p>',
//            'body'=>'<p>Nunc per ius latine populo semper repudiandae integer aenean interdum. Maecenas te libero senectus interpretaris epicuri mei propriae dicat vim. Tacimates saperet efficitur alienum elitr usu alia. Dapibus nostrum reformidans assueverit inimicus ferri ponderum harum repudiare debet. Tacimates sadipscing persequeris turpis vituperata et porta atomorum solet. Magnis pellentesque pro dui sale altera expetenda facilisis cum adipisci. Eu mediocrem eos dictas mi fames mus conceptam prompta. Hac habitasse usu atqui reprimique vidisse. Idque iriure theophrastus viderer quod enim. Leo vero libris rutrum ultrices similique petentium necessitatibus.</p>'
//        ]);
    }
}
