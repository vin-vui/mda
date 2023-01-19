<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Section;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('password'),
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'secretariat',
        //     'email' => 'secretariat.resado@ch-novillars.fr',
        //     'password' => Hash::make('resado'),
        // ]);

        // CREATE SECTIONS
        DB::table('sections')->insert(['title' => 'HOME']);
        DB::table('sections')->insert(['title' => 'PUBLICS']);
        DB::table('sections')->insert(['title' => 'PUBLICS_TEEN']);
        DB::table('sections')->insert(['title' => 'PUBLICS_FAMILY']);
        DB::table('sections')->insert(['title' => 'PUBLICS_PRO']);
        DB::table('sections')->insert(['title' => 'SEMINARS']);
        DB::table('sections')->insert(['title' => 'RESADO']);
        DB::table('sections')->insert(['title' => 'US']);
        DB::table('sections')->insert(['title' => 'INFORMATIONS']);
        DB::table('sections')->insert(['title' => 'FOOTER']);

        // CREATE INFORMATIONS
        DB::table('informations')->insert(['title' => 'adresse', 'label' => '13 rue des Jardins - 25000 Besançon']);
        DB::table('informations')->insert(['title' => 'email', 'label' => 'secretariat.resado@ch-novillars.fr']);
        DB::table('informations')->insert(['title' => 'téléphone', 'label' => '03 81 53 97 67']);
        DB::table('informations')->insert(['title' => 'téléphone resado', 'label' => '03 81 53 97 66']);
        DB::table('informations')->insert(['title' => 'accès tramway', 'label' => 'Ligne 1 - arrêt Tristan Bernard (6 mn à pied)']);
        DB::table('informations')->insert(['title' => 'accès bus', 'label' => 'Ligne 5 - arrêt Mermoz (6 mn à pied)']);
        DB::table('informations')->insert(['title' => 'facebook', 'label' => 'https://www.facebook.com/profile.php?id=100054914929152']);
        DB::table('informations')->insert(['title' => 'instagram', 'label' => 'https://www.instagram.com/Maison_ado_25/?fbclid=IwAR2Y2mm7b6mNHixQlPg4q7AinEE1vD4ne8Miri86j5K89RTnYlhM3TLJ42U']);
    }
}
