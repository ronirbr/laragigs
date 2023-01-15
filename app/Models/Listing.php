<?php
  namespace App\Models;

  class Listing {
    public static function all() {
      return [
        [
          'id' => 1,
          'title' => 'Listing One',
          'description' => 'Ipsum quas quidem itaque ad quidem! Odit exercitationem iure incidunt facere autem. Quos omnis amet iure iste incidunt quidem quaerat, quibusdam.'
        ],
        [
          'id' => 2,
          'title' => 'Listing Two',
          'description' => 'Ipsum quas quidem itaque ad quidem! Odit exercitationem iure incidunt facere autem. Quos omnis amet iure iste incidunt quidem quaerat, quibusdam.'
        ]
      ];
    }

    public static function find($id) {
      $listings = self::all();

      foreach($listings as $listing) {
        if ($listing['id'] == $id) {
          return $listing;
        }
      }
    }
  } 
