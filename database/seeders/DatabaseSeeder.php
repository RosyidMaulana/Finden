<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\Post;
use App\Models\User;
use App\Models\Daerah;
use App\Models\Category;
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
        
      User::create([
      'name' => 'Nadeshiko Kagamihara',
      'username' => 'Nadeshiko',
      'email' => 'nadeshikodesu@gmail.com',
      'email_verified_at' => now(),
      'password' => bcrypt('ninomiku'),
        ]);

      User::factory(3)->create();

      Category::create([
        'nama' => 'DITEMUKAN',
        'slug' => 'ditemukan'
      ]);

      Category::create([
        'nama' => 'DICARI',
        'slug' => 'dicari'
      ]);

      Post::factory(30)->create();

      Pet::create([
        'category_id' => 1,
        'user_id' => 3,
        'jenis' => 'Anjing',
        'slug' => 'anjing',
        'warna' =>'coklat',
        'gender'=>'Jantan',
        'contact' => '213657975',
        'nama_kalung'=> 'GuGu',
        'last' => 'Mojokerto',
        'reward'=> '200000',
        'spesial' => 'kalau dipanggil gugu pasti nyamperin atau dibalas dengan menggongong',
        
      ]);
      Pet::create([
        'category_id' => 2,
        'user_id' => 3,
        'jenis' => 'Kucing',
        'slug' => 'kucing',
        'warna' =>'oren',
        'gender'=>'Betina',
        'contact' => '213657975',
        'nama_kalung'=> 'Oren',
        'last' => 'Mojokerto',
        'reward'=> '200000',
        'spesial' => 'kalau dipanggil oren pasti nyamperin kalau deket',
        
      ]);
      Pet::create([
        'category_id' => 1,
        'user_id' => 3,
        'jenis' => 'Kucing Persia',
        'slug' => 'kucing-persia',
        'warna' =>'Abu-Abu',
        'gender'=>'Jantan',
        'contact' => '213657975',
        
        'last' => 'Mojokerto',
        'reward'=> '200000',
        'spesial' => 'kalau dipanggil gugu pasti nyamperin atau dibalas dengan menggongong',
        
      ]);
      
      Daerah::create([
        'nama'=>'Kabupaten Bangkalan'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Banyuwangi'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Blitar'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Bojonegoro'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Bondowoso'
      ]);
      
      Daerah::create([
        'nama'=>'Kabupaten Gresik'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Jember'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Jombang'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Kediri'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Lamongan'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Lumajang'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Madiun'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Magetan'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Malang'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Mojokerto'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Nganjuk'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Ngawi'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Pacitan'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Pamekasan'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Pasuruan'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Ponorogo'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Probolinggo'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Sampang'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Sidoarjo'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Situbondo'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Sumenep'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Trenggalek'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Tuban'
      ]);
      Daerah::create([
        'nama'=>'Kabupaten Tulungagung'
      ]);
      
      Daerah::create([
        'nama'=>'Kota Batu'
      ]);
      Daerah::create([
        'nama'=>'Kota Blitar'
      ]);
      Daerah::create([
        'nama'=>'Kota Kediri'
      ]);
      Daerah::create([
        'nama'=>'Kota Madiun'
      ]);
      Daerah::create([
        'nama'=>'Kota Malang'
      ]);
      Daerah::create([
        'nama'=>'Kota Mojokerto'
      ]);
      Daerah::create([
        'nama'=>'Kota Pasuruan'
      ]);
      Daerah::create([
        'nama'=>'Kota Probolinggo'
      ]);
      Daerah::create([
        'nama'=>'Kota Surabaya'
      ]);

      



    }
}
