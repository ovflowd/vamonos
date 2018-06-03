<?php

use Illuminate\Database\Seeder;

class UsersFriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_friend')->insert([
            'name' => 'Maria Cristina',
            'email' => 'maria@gmail.com',
            'url' => 'https://weneedfun.com/wp-content/uploads/2016/07/Girls-Black-and-White-Profile-Pictures-8.jpg'
        ]);

        DB::table('users_friend')->insert([
            'name' => 'Luiz Augusto',
            'email' => 'luiz@gmail.com',
            'url' => 'http://i0.kym-cdn.com/entries/icons/mobile/000/026/147/Screen_Shot_2018-05-10_at_12.23.59_PM.jpg'
        ]);

        DB::table('users_friend')->insert([
            'name' => 'Bruna Pereira',
            'email' => 'bruna@gmail.com',
            'url' => 'https://www.ienglishstatus.com/wp-content/uploads/2018/04/cute-profile-pics-for-whatsapp-images.png'
        ]);

        DB::table('users_friend')->insert([
            'name' => 'Alexandre Barba',
            'email' => 'alex@gmail.com',
            'url' => 'https://openclipart.org/image/2400px/svg_to_png/294182/Bearded-Man-Profile.png'
        ]);

        DB::table('users_friend')->insert([
            'name' => 'Maria Cristina',
            'email' => 'maria@gmail.com',
            'url' => 'https://weneedfun.com/wp-content/uploads/2016/07/Girls-Black-and-White-Profile-Pictures-8.jpg'
        ]);

        DB::table('users_friend')->insert([
            'name' => 'Cleo Cunha',
            'email' => 'cleo@gmail.com',
            'url' => 'https://www.rd.com/wp-content/uploads/2017/09/01-shutterstock_476340928-Irina-Bg-1024x683.jpg'
        ]);

        DB::table('users_friend')->insert([
            'name' => 'João Abelardo',
            'email' => 'abe@gmail.com',
            'url' => 'https://s3tv.com/blog/wp-content/uploads/2018/03/Zahid-Ahmed-Biography-Profile-Dramas-Pictures-380x260.jpg'
        ]);
    }
}
