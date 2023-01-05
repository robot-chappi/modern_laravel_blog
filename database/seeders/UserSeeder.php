<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug','admin')->first();
        $manager = Role::where('slug','manager')->first();
        $content_manager = Role::where('slug','content-manager')->first();
        $developer = Role::where('slug','web-developer')->first();
        $marketing_specialist = Role::where('slug','marketing-specialist')->first();
        $copywriter = Role::where('slug','copywriter')->first();

        $user_admin = new User();
        $user_admin->name = 'Admin Admin';
        $user_admin->email = 'admin@admin.com';
        $user_admin->password = bcrypt('@Yungx4YnS$#^j8130Xj');
        $user_admin->save();
        $user_admin->roles()->attach($admin);

        $user_manager = new User();
        $user_manager->name = 'Manager Manager';
        $user_manager->email = 'manager@manager.com';
        $user_manager->password = bcrypt('lT!3y^0^d4yX7Y%0XQ^5');
        $user_manager->save();
        $user_manager->roles()->attach($manager);

        $user_content_manager = new User();
        $user_content_manager->name = 'Contentmanager Contentmanager';
        $user_content_manager->email = 'contentmanager@contentmanager.com';
        $user_content_manager->password = bcrypt('%iM9T5xxcoW0kLe6*ST3');
        $user_content_manager->save();
        $user_content_manager->roles()->attach($content_manager);

        $user_developer= new User();
        $user_developer->name = 'Developer Developer';
        $user_developer->email = 'developer@developer.com';
        $user_developer->password = bcrypt('6m2n@7UI5$4c5jjCgla9');
        $user_developer->save();
        $user_developer->roles()->attach($developer);

        $user_marketing_specialist= new User();
        $user_marketing_specialist->name = 'Marketingspecialist Marketingspecialist';
        $user_marketing_specialist->email = 'marketingspecialist@marketingspecialist.com';
        $user_marketing_specialist->password = bcrypt('ic@lghhQ3Sk1s80zBBqm');
        $user_marketing_specialist->save();
        $user_marketing_specialist->roles()->attach($marketing_specialist);

        $user_copywriter = new User();
        $user_copywriter->name = 'Copywriter Copywriter';
        $user_copywriter->email = 'copywriter@copywriter.com';
        $user_copywriter->password = bcrypt('7!rOOwjS^CPFMlDN010v');
        $user_copywriter->save();
        $user_copywriter->roles()->attach($copywriter);
    }
}
