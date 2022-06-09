<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Nazrul Islam',
            'email'=>'nazrul@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
            'avater'=>'uploads/profile/user.jpg',
            'about'=>'Whenever About pages come up, these are the tips I share: Write to your dream audience. Highlight the kind of work you want to be doing. Tell the truth in your own voice. Read it aloud to make sure it sounds like you. Treat it as a draft. Share it early and update it regularly.',
            'facebook'=>'https://www.facebook.com/',
            'youtube' =>'https://www.youtube.com/',
            'twitter'=>'https://www.twitter.com/'
        ]);
    }
}
