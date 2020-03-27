<?php
/**
 * Class UserSeeder.
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

/**
 * Class UserSeeder
 */
class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                //Admin
                [
                    'first_name' => 'Taofik',
                    'last_name' => 'tijani',
                    'phone_number' => '+23408096221646',
                    'slug' => 'taofik-tijani',
                    'email' => 'taofiktijani@gmail.com',
                    'password' => bcrypt('Ak!nsola'),
                    'location_id' => 1,
                    'user_verified' => 1,
                    'badge_id' => null,
                    'expiry_date' => null,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                //Employers
                [
                    'first_name' => 'Ava',
                    'last_name' => 'Nguyen',
                    'phone_number' => null,
                    'slug' => 'ava-nguyen',
                    'email' => 'ava@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 1,
                    'user_verified' => 1,
                    'badge_id' => null,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Charlotte',
                    'last_name' => 'Morton',
                    'phone_number' => null,
                    'slug' => 'charlotte-morton',
                    'email' => 'Charlotte@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 1,
                    'user_verified' => 1,
                    'badge_id' => null,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'good',
                    'last_name' => 'nice',
                    'phone_number' => null,
                    'slug' => 'good-nice',
                    'email' => 'goodnice@outlook.com',
                    'password' => bcrypt('google'),
                    'location_id' => 9,
                    'user_verified' => 1,
                    'badge_id' => null,
                    'expiry_date' => Carbon::now()->addDays(10)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Elijah',
                    'last_name' => 'Johnson',
                    'phone_number' => null,
                    'slug' => 'elijah-johnson',
                    'email' => 'johnson@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 2,
                    'user_verified' => 1,
                    'badge_id' => null,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Brooklyn',
                    'last_name' => 'Chan',
                    'phone_number' => null,
                    'slug' => 'brooklyn-chan',
                    'email' => 'chan@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 2,
                    'user_verified' => 1,
                    'badge_id' => null,
                    'expiry_date' => Carbon::now()->addDays(360)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Beau',
                    'last_name' => 'Simard',
                    'phone_number' => null,
                    'slug' => 'beau-simard',
                    'email' => 'beau@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 2,
                    'user_verified' => 1,
                    'badge_id' => null,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Isobel',
                    'last_name' => 'Jones',
                    'phone_number' => null,
                    'slug' => 'isobel-jones',
                    'email' => 'isobel@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 3,
                    'user_verified' => 1,
                    'badge_id' => null,
                    'expiry_date' => Carbon::now()->addDays(10)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Kian',
                    'last_name' => 'Johnson',
                    'phone_number' => null,
                    'slug' => 'kian-johnson',
                    'email' => 'kian@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 3,
                    'user_verified' => 1,
                    'badge_id' => null,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Sarah',
                    'last_name' => 'Chapman',
                    'phone_number' => null,
                    'slug' => 'sarah-chapman',
                    'email' => 'sarah@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 3,
                    'user_verified' => 1,
                    'badge_id' => null,
                    'expiry_date' => Carbon::now()->addDays(360)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Abhinav',
                    'last_name' => 'Balasubramanium',
                    'phone_number' => null,
                    'slug' => 'abhinav-balasubramanium',
                    'email' => 'balasubramanium@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 4,
                    'user_verified' => 1,
                    'badge_id' => null,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Anika',
                    'last_name' => 'Gavde',
                    'phone_number' => null,
                    'slug' => 'anika-gavde',
                    'email' => 'anika@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 4,
                    'user_verified' => 1,
                    'badge_id' => 1,
                    'expiry_date' => Carbon::now()->addDays(10)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                // Freelancers
                [
                    'first_name' => 'Shreyas',
                    'last_name' => 'Malhotra',
                    'phone_number' => null,
                    'slug' => 'shreyas-malhotra',
                    'email' => 'shreyas@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 4,
                    'user_verified' => 1,
                    'badge_id' => 3,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Alara',
                    'last_name' => 'Tekin',
                    'phone_number' => null,
                    'slug' => 'alara-tekin',
                    'email' => 'tekin@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 5,
                    'user_verified' => 1,
                    'badge_id' => 1,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Sait',
                    'last_name' => 'Karaca',
                    'phone_number' => null,
                    'slug' => 'sait-karaca',
                    'email' => 'karaca@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 5,
                    'user_verified' => 1,
                    'badge_id' => 1,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Hüsnü',
                    'last_name' => 'Çomak',
                    'phone_number' => null,
                    'slug' => 'hüsnü-comak',
                    'email' => 'comak@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 5,
                    'user_verified' => 1,
                    'badge_id' => 2,
                    'expiry_date' => Carbon::now()->addDays(360)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Jack',
                    'last_name' => 'Mills',
                    'phone_number' => null,
                    'slug' => 'jack-mills',
                    'email' => 'mills@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 6,
                    'user_verified' => 1,
                    'badge_id' => 3,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Judy',
                    'last_name' => 'Dixon',
                    'phone_number' => null,
                    'slug' => 'judy-dixon',
                    'email' => 'dixon@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 6,
                    'user_verified' => 1,
                    'badge_id' => 2,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Ann',
                    'last_name' => 'Coleman',
                    'phone_number' => null,
                    'slug' => 'ann-coleman',
                    'email' => 'coleman@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 6,
                    'user_verified' => 1,
                    'badge_id' => 1,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Louis',
                    'last_name' => 'James',
                    'phone_number' => null,
                    'slug' => 'louis-james',
                    'email' => 'james@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 7,
                    'user_verified' => 1,
                    'badge_id' => 3,
                    'expiry_date' => Carbon::now()->addDays(360)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Kai',
                    'last_name' => 'Clarke',
                    'phone_number' => null,
                    'slug' => 'kai-clarke',
                    'email' => 'kai@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 7,
                    'user_verified' => 1,
                    'badge_id' => null,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Georgia',
                    'last_name' => 'Baker',
                    'phone_number' => null,
                    'slug' => 'georgia-baker',
                    'email' => 'baker@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 7,
                    'user_verified' => 1,
                    'badge_id' => 2,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Ralph',
                    'last_name' => 'Davis',
                    'phone_number' => null,
                    'slug' => 'ralph-davis',
                    'email' => 'davis@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 8,
                    'user_verified' => 1,
                    'badge_id' => 3,
                    'expiry_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'first_name' => 'Alexa',
                    'last_name' => 'Xavier',
                    'phone_number' => null,
                    'slug' => 'jhon-xavier',
                    'email' => 'jhon@amentotech.com',
                    'password' => bcrypt('google'),
                    'location_id' => 8,
                    'user_verified' => 1,
                    'badge_id' => 2,
                    'expiry_date' => Carbon::now()->addDays(360)->format('Y-m-d H:i:s'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
