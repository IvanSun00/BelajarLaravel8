<?php

namespace App\Models\Blog;



class Post_ 
{
    
    private static $content = [
        [
            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo expedita quo odio soluta ullam, quod, inventore enim magnam sint fugit excepturi? Velit autem, iste, doloribus deserunt incidunt minus cum accusantium nam ratione labore quis, sunt itaque? Praesentium minima placeat accusantium corporis eaque qui fuga nisi nostrum magnam tempora animi temporibus reprehenderit itaque, veritatis mollitia, sapiente facilis quae? Incidunt omnis cumque minus temporibus libero corporis ullam itaque asperiores eveniet labore aperiam perferendis ex rerum pariatur, fugiat praesentium ab numquam illum dolor ut? Tenetur nulla velit, porro aut qui eaque veniam, libero vero ducimus quas assumenda. Consequatur ab modi ea eveniet facilis?"  
        ],

        [
            "title" => "Judul Post 2",
            "slug" => "judul-post-2",
            "author" => "Ivan Sunjaya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo expedita quo odio soluta ullam, quod, inventore enim magnam sint fugit excepturi? Velit autem, iste, doloribus deserunt incidunt minus cum accusantium nam ratione labore quis, sunt itaque? Praesentium minima placeat accusantium corporis eaque qui fuga nisi nostrum magnam tempora animi temporibus reprehenderit itaque, veritatis mollitia, sapiente facilis quae? Incidunt omnis cumque minus temporibus libero corporis ullam itaque asperiores eveniet labore aperiam perferendis ex rerum pariatur, fugiat praesentium ab numquam illum dolor ut? Tenetur nulla velit, porro aut qui eaque veniam, libero vero ducimus quas assumenda. Consequatur ab modi ea eveniet facilis?"   
        ]
    ];

    public static function all(){
        //menggunakan self bukan this karena merupakkan static
        return collect(self::$content);
    }

    public static function find($slug){
        $posts = static::all();

        // $thisPost = [];

        // foreach($posts as $p){
        //     if($p['slug'] == $slug){
        //         $thisPost = $p;
        //     }
        // }

        return $posts->firstWhere('slug',$slug);
    }
}
