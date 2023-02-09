<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    public function run()
    {
        Skill::createLanguageFramework(['name' => 'PHP', 'img_path' => 'php-icon.png', 'img_alt_text' => 'php icon', 'years_experience' => '3+']);
        Skill::createLanguageFramework(['name' => 'Laravel', 'img_path' => 'laravel-icon.png', 'img_alt_text' => 'laravel icon', 'years_experience' => '3+']);
        Skill::createLanguageFramework(['name' => 'PHP Unit', 'img_path' => 'phpunit-icon.png', 'img_alt_text' => 'phpunit icon', 'years_experience' => '2+']);
        Skill::createLanguageFramework(['name' => 'JavaScript', 'img_path' => 'javascript-icon.png', 'img_alt_text' => 'JavaScript icon', 'years_experience' => '1+']);
        Skill::createLanguageFramework(['name' => 'HTML', 'img_path' => 'html-icon.png', 'img_alt_text' => 'HTML icon', 'years_experience' => '3+']);
        Skill::createLanguageFramework(['name' => 'CSS', 'img_path' => 'css-icon.png', 'img_alt_text' => 'CSS icon', 'years_experience' => '3+']);
        Skill::createLanguageFramework(['name' => 'SQL', 'img_path' => 'sql-icon.png', 'img_alt_text' => 'sql icon', 'years_experience' => '2+']);
        Skill::createLanguageFramework(['name' => 'Laravel Livewire', 'img_path' => 'livewire.png', 'img_alt_text' => 'livewire icon', 'years_experience' => '2+']);

        Skill::createLanguageFramework(['name' => 'Alpine.js', 'img_path' => 'alpine-js.jpg', 'img_alt_text' => 'alpine.js icon', 'years_experience' => '2+']);
        Skill::createLanguageFramework(['name' => 'Bootstrap CSS', 'img_path' => 'bootstrap-icon.png', 'img_alt_text' => 'bootstrap icon', 'years_experience' => '2+']);
        Skill::createLanguageFramework(['name' => 'jQuery', 'img_path' => 'jquery-icon.png', 'img_alt_text' => 'jQuery icon', 'years_experience' => '2+']);
        Skill::createLanguageFramework(['name' => 'Tailwind CSS', 'img_path' => 'tailwind-icon.png', 'img_alt_text' => 'tailwind icon', 'years_experience' => '1+']);

        Skill::createTechnology(['name' => 'Apache', 'img_path' => 'apache-icon.png', 'img_alt_text' => 'apache icon', 'years_experience' => '1+']);
        Skill::createTechnology(['name' => 'Git', 'img_path' => 'git-icon.png', 'img_alt_text' => 'git icon', 'years_experience' => '2+']);
        Skill::createTechnology(['name' => 'GitHub', 'img_path' => 'github.jpg', 'img_alt_text' => 'github icon', 'years_experience' => '3+']);
        Skill::createTechnology(['name' => 'MySQL', 'img_path' => 'mysql-icon.png', 'img_alt_text' => 'mysql icon', 'years_experience' => '3+']);
        Skill::createTechnology(['name' => 'Linux/Unix', 'img_path' => 'unix-icon.png', 'img_alt_text' => 'unix icon', 'years_experience' => '1+']);
        Skill::createTechnology(['name' => 'Sentry', 'img_path' => 'sentry-icon.png', 'img_alt_text' => 'sentry icon', 'years_experience' => '2']);
        Skill::createTechnology(['name' => 'Jenkins', 'img_path' => 'jenkins-icon.png', 'img_alt_text' => 'jenkins icon', 'years_experience' => '2']);
    }
}
