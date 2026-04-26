<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Restaurant;
class RestaurantSeeder extends Seeder
{       
    
    public function run(): void
{
    $restaurants = [
        ['name'=>'Tagamchy','address' => 'Kemine Street 132','rating' => 4.5,'phone_number' => '6252655'],
        ['name'=>'Burger Station','address' => 'Magtymguly Avenue 73 Turkmenistan SC 1-nji gat','rating' => 3.9,'phone_number' => '63646969'],
        ['name' => 'Kudo Kudo','address' => 'Magtymguly Avenue Arkac SDM 1-nji gat ','rating' => 4.5,'phone_number' => '65989785'],
        ['name' => 'Azady','address' => 'N.Analyp(Mir) Street 20','rating' => 4.7,'phone_number' => '64129651'],
        ['name' => 'Hurma Cafe','address' => 'Hoja Ahmet Yasawy(Griboyed) Street ','rating' => 4.0,'phone_number' => '63258963'],
        ['name' => 'Mado','address' => '219 Bitaraplyk Avenue','rating' => 4.9,'phone_number' => '65789654'],
        ['name' => 'AlpEt','address' => 'Bagtyyarlyk Street 9','rating' => 4.8,'phone_number' => '61569874'],
        ['name' => 'Magat','address' => 'Gurtly Area,Abadanchylyk Shopping Center','rating' => 4.6,'phone_number' => '64589672'],
        ['name' => 'Parahat','address' => 'Magtymguly Avenue 98/1','rating' => 4.4,'phone_number' => '63569874'],
        ['name' => 'La Casa','address' => 'Baba Annanov Steet 112','rating' => 4.9,'phone_number' => '63256985'],
        ['name' => 'Şa Abbas','address' => 'Hoja Ahmet Yasawy(Griboyed) Street ','rating' => 5.0,'phone_number' => '63569870'],
        ['name' => 'Katmer','address' => 'Ankara Street 19 ','rating' => 4.0,'phone_number' => '61236549'],
        ['name' => 'Waka','address' => 'Mollanepes Street 53','rating' => 4.7,'phone_number' => '63598764'],
        ['name' => 'Altyn Acar','address' => 'Magtymguly Avenue','rating' => 4.5,'phone_number' => '65897456'],
        ['name' => 'Crystal','address' => 'Gulzemin Shopping Center','rating' => 4.8,'phone_number' => '63598763'],
         ];



    foreach($restaurants as $restaurant){

        \App\Models\Restaurant::create([
            'name'=>$restaurant['name'],
            'address'=>$restaurant['address'],
            'rating'=>$restaurant['rating'],
            'phone_number'=>$restaurant['phone_number'],
        ]);
    }

    // Restaurant::create([
    //     'name' => 'Burger Station',
    //     
    // ]);

    // Restaurant::create([
    //     'name' => 'Kudo Kudo',
    //     'address' => 'Magtymguly Shayoly Arkac SDM 1-nji gat ',
    //     'rating' => 4.5,
    //     'phone_number' => '65989785'
    // ]);

    }
}
