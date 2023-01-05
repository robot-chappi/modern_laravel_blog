<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'Admin';
        $admin->slug = 'admin';
        $admin->description = 'The admin role has access to the entire site and to all its functionality.';
        $admin->save();

        $manager = new Role();
        $manager->name = 'Manager';
        $manager->slug = 'manager';
        $manager->description = 'The role of the Manager. This is an employee who manages certain processes and other employees in the company. Its main tasks include: work planning, organization of work processes, coordination of personnel, control over the implementation of tasks.';
        $manager->save();

        $content_manager = new Role();
        $content_manager->name = 'Content Manager';
        $content_manager->slug = 'content-manager';
        $content_manager->description = 'The Role of the Content Manager. This is an employee who fills the site with certain content.';
        $content_manager->save();

        $developer = new Role();
        $developer->name = 'Web Developer';
        $developer->slug = 'web-developer';
        $developer->description = 'The role of a Web Developer. This is an employee who maintains the site, adds new functions.';
        $developer->save();

        $copywriter = new Role();
        $copywriter->name = 'Copywriter';
        $copywriter->slug = 'copywriter';
        $copywriter->description = 'The role of a Copywriter. This is an employee who writes various posts to the site.';
        $copywriter->save();

        $marketing_specialist = new Role();
        $marketing_specialist->name = 'Marketing Specialist';
        $marketing_specialist->slug = 'marketing-specialist';
        $marketing_specialist->description = 'This is an employee who creates a strategy to promote products and services in order to increase sales and total revenue of the company, also advertises.';
        $marketing_specialist->save();
    }
}
