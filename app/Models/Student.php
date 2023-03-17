<?php

namespace App\Models;

class Student {
    public static function all() {
        $students = [
                [
                    'id' => 1,
                    'name' => 'Ahmed',
                    'city' => 'Egypt',
                    'phone' => '01233333',
                    'email' => 'essl33@gmail.com'
                ],
                [
                    'id' => 2,
                    'name' => 'Mohamed',
                    'city' => 'Alx',
                    'phone' => '44444444',
                    'email' => 'essl44d@gmail.com'
                ]
                ];
        return $students ;
    }

    public static function find($id) {
        $students = self::all();

        foreach ($students as $student){
            if ($id == $student['id']){
                return $student ;
            }
        }
    }

}
