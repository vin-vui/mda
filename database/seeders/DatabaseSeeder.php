<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;
use Illuminate\Support\Str;
use Illuminate\Container\Container;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /* The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /* Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'secretariat',
            'email' => 'secretariat.resado@ch-novillars.fr',
            'password' => Hash::make('resado'),
        ]);

        // CREATE SECTIONS
        DB::table('sections')->insert(['title' => 'HOME', 'description' => $this->faker->paragraph(), 'image_1' => 'placeholder.jpg', 'image_2' => 'placeholder.jpg', 'image_3' => 'placeholder.jpg', 'image_4' => 'placeholder.jpg', 'image_5' => 'placeholder.jpg', 'image_6' => 'placeholder.jpg']);
        DB::table('sections')->insert(['title' => 'MISSIONS', 'description' => $this->faker->paragraph(), 'image_1' => 'placeholder.jpg', 'image_2' => 'placeholder.jpg', 'image_3' => 'placeholder.jpg', 'image_4' => 'placeholder.jpg', 'image_5' => 'placeholder.jpg', 'image_6' => 'placeholder.jpg']);
        DB::table('sections')->insert(['title' => 'VALUES', 'description' => $this->faker->paragraph(), 'image_1' => 'placeholder.jpg', 'image_2' => 'placeholder.jpg', 'image_3' => 'placeholder.jpg', 'image_4' => 'placeholder.jpg', 'image_5' => 'placeholder.jpg', 'image_6' => 'placeholder.jpg']);
        DB::table('sections')->insert(['title' => 'PUBLICS', 'description' => $this->faker->paragraph(), 'image_1' => 'placeholder.jpg', 'image_2' => 'placeholder.jpg', 'image_3' => 'placeholder.jpg', 'image_4' => 'placeholder.jpg', 'image_5' => 'placeholder.jpg', 'image_6' => 'placeholder.jpg']);
        DB::table('sections')->insert(['title' => 'PUBLICS_TEEN', 'description' => $this->faker->paragraph(), 'image_1' => 'placeholder.jpg', 'image_2' => 'placeholder.jpg', 'image_3' => 'placeholder.jpg', 'image_4' => 'placeholder.jpg', 'image_5' => 'placeholder.jpg', 'image_6' => 'placeholder.jpg']);
        DB::table('sections')->insert(['title' => 'PUBLICS_FAMILY', 'description' => $this->faker->paragraph(), 'image_1' => 'placeholder.jpg', 'image_2' => 'placeholder.jpg', 'image_3' => 'placeholder.jpg', 'image_4' => 'placeholder.jpg', 'image_5' => 'placeholder.jpg', 'image_6' => 'placeholder.jpg']);
        DB::table('sections')->insert(['title' => 'PUBLICS_PRO', 'description' => $this->faker->paragraph(), 'image_1' => 'placeholder.jpg', 'image_2' => 'placeholder.jpg', 'image_3' => 'placeholder.jpg', 'image_4' => 'placeholder.jpg', 'image_5' => 'placeholder.jpg', 'image_6' => 'placeholder.jpg']);
        DB::table('sections')->insert(['title' => 'SEMINARS', 'description' => $this->faker->paragraph(), 'image_1' => 'placeholder.jpg', 'image_2' => 'placeholder.jpg', 'image_3' => 'placeholder.jpg', 'image_4' => 'placeholder.jpg', 'image_5' => 'placeholder.jpg', 'image_6' => 'placeholder.jpg']);
        DB::table('sections')->insert(['title' => 'RESADO', 'description' => $this->faker->paragraph(), 'image_1' => 'placeholder.jpg', 'image_2' => 'placeholder.jpg', 'image_3' => 'placeholder.jpg', 'image_4' => 'placeholder.jpg', 'image_5' => 'placeholder.jpg', 'image_6' => 'placeholder.jpg']);
        DB::table('sections')->insert(['title' => 'US', 'description' => $this->faker->paragraph(), 'image_1' => 'placeholder.jpg', 'image_2' => 'placeholder.jpg', 'image_3' => 'placeholder.jpg', 'image_4' => 'placeholder.jpg', 'image_5' => 'placeholder.jpg', 'image_6' => 'placeholder.jpg']);
        DB::table('sections')->insert(['title' => 'INFORMATIONS', 'description' => $this->faker->paragraph(), 'image_1' => 'placeholder.jpg', 'image_2' => 'placeholder.jpg', 'image_3' => 'placeholder.jpg', 'image_4' => 'placeholder.jpg', 'image_5' => 'placeholder.jpg', 'image_6' => 'placeholder.jpg']);
        DB::table('sections')->insert(['title' => 'FOOTER', 'description' => $this->faker->paragraph(), 'image_1' => 'placeholder.jpg', 'image_2' => 'placeholder.jpg', 'image_3' => 'placeholder.jpg', 'image_4' => 'placeholder.jpg', 'image_5' => 'placeholder.jpg', 'image_6' => 'placeholder.jpg']);

        // CREATE ANNOUNCEMENT
        // for ($i = 1; $i <= 3; $i++) {
            // DB::table('announcements')->insert([
            //     'title' => $this->faker->catchPhrase(),
            //     'description' => $this->faker->paragraph(),
            //     'display' => true,
            // ]);
        // }

        // CREATE INFORMATIONS
        DB::table('informations')->insert(['title' => 'adresse', 'label' => '13 rue des Jardins - 25000 Besançon']);
        DB::table('informations')->insert(['title' => 'email', 'label' => 'secretariat.resado@ch-novillars.fr']);
        DB::table('informations')->insert(['title' => 'téléphone', 'label' => '03 81 53 97 67']);
        DB::table('informations')->insert(['title' => 'téléphone resado', 'label' => '03 81 53 97 66']);
        DB::table('informations')->insert(['title' => 'accès tramway', 'label' => 'Ligne 1 - arrêt Tristan Bernard (6 mn à pied)']);
        DB::table('informations')->insert(['title' => 'accès bus', 'label' => 'Ligne 5 - arrêt Mermoz (6 mn à pied)']);
        DB::table('informations')->insert(['title' => 'facebook', 'label' => 'https://www.facebook.com/profile.php?id=100054914929152']);
        DB::table('informations')->insert(['title' => 'instagram', 'label' => 'https://www.instagram.com/Maison_ado_25/?fbclid=IwAR2Y2mm7b6mNHixQlPg4q7AinEE1vD4ne8Miri86j5K89RTnYlhM3TLJ42U']);

        // SEED PARTNERS
        for ($i = 1; $i <= 9; $i++) {
            DB::table('partners')->insert([
                'url' => 'placeholder.jpg',
                'label' => Str::upper($this->faker->word()),
            ]);
        }
        // SEED LINKS
        for ($i = 1; $i <= 7; $i++) {
            DB::table('links')->insert([
                'url' => $this->faker->url(),
                'label' => $this->faker->word(),
            ]);
        }
        // SEED SEMINARS
        for ($i = 1; $i <= 33; $i++) {
            DB::table('seminars')->insert([
                'date' => $this->faker->numberBetween(1, 31) . ' ' . $this->faker->month() . ' 2023',
                'image' => 'placeholder.jpg',
                'title' => $this->faker->catchPhrase(),
                'description' => $this->faker->paragraph(),
                'display' => $this->faker->boolean(),
                'tag' => $this->faker->randomElement(['atelier ados', 'atelier parents', 'atelier ados/parents']),
            ]);
        }
    }
}
