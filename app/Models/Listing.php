<?php 
namespace App\Models;

class Listing {
  public static function all(){
    return [ 
            [
            'id' => 1,
            'title'=> 'Sojib Talukdar',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dolores quaerat dolore vitae animi ducimus sequi rem amet voluptatem, possimus ipsa doloribus dicta ratione autem minus repudiandae non consequuntur veritatis?'
        ],
        [
            'id' => 2,
            'title'=> 'Saeem Talukder',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dolores quaerat dolore vitae animi ducimus sequi rem amet voluptatem, possimus ipsa doloribus dicta ratione autem minus repudiandae non consequuntur veritatis?i'
        ]
        ];
  }
  public static function find($id){
    $listings = self::all();
    foreach($listings as $listing){
      if($listing['id'] == $id) {
        return $listing;
      }
    }
  }
}