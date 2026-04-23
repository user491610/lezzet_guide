<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function postsIndex() {
        $news=$this->getPosts();
       
        return view('posts.index', compact('news'));
    }
    public function postsShow(Request $request) 
    { 
    $food_number = $request->number; 
    $posts=$this->getPosts();
    $post = $posts[$post_number];
    return view('posts.show',compact('post'));
}

public function getPosts()
{
    $habarlar = [
        1=>[
        "no"=>1,
        "title" => "Elektrikli ulaglar: Geljek eýýäm gapymyzy kakýar",
        "content"=>"Türkmenistanyň ýollarynda 'ýaşyl' energiýa: Elektromobiller köpelýär
        Dünýä bazarynda bolşy ýaly, Türkmenistanda hem elektrik energiýasy bilen işleýän ulaglara bolan gyzyklanma barha artýar. Diňe bir ekologiýa däl, eýsem tygşytlylyk nukdaýnazaryndan hem bu ulaglar sürüjileriň ünsüni çekýär.
        Esasy artykmaçlyklar:
        Tygşytlylyk: Ýangyç çykdajylarynyň düýpli azalmagy we tehniki hyzmatyň ýönekeýligi.
        Ekoloji arassalyk: Howa goýberilýän zyýanly gazlaryň nol derejesinde bolmagy.
        Innowasiýa: Akylly dolandyryş ulgamlary we ýokary rahatlyk.
        Hünärmenleriň çaklamasyna görä, ýakyn ýyllarda paýtagtymyzda we welaýat merkezlerinde zarýad beriji bekletleriň sanynyň artmagy bilen, elektromobiller adaty içinden ýanýan dwigatelli ulaglaryň esasy bäsdeşine öwrüler.",
        "image" => "post1.png",
        "date" => "15.02.2026",
        "view_count" => "57800",
        "author" => "Aman"
         ],
         2=>[
        "no"=>2,
        "title" => "Toyota taze Camry modelini tanyshdyrdy",
        "content"=>"lorem ipsum...",
        "image" => "post1.png",
        "date" => "30.03.2026",
        "view_count" => "897000",
        "author" => "Takyk"
         ],
         3=>[
        "no"=>3,
         "title" => "Hyundai Sonata taze modeli yglan  etdi",
         "content"=>"lorem ipsum...",
         "image" => "post1.png",
         "date" => "24.03.2026",
         "view_count" => "348799",
         "author" => "Turkmen portal"
          ],
           
     ];
 return $habarlar;
    }
}



