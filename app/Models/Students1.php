<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students
{
    private static $students = [

            [
                "id"     => 1,
                "nis"    => "872912",
                "nama"   => "Davin",
                "kelas"  => "11 PPLG 2",
                "alamat" => "semarang",
            ],
            [
                "id"     => 2,
                "nis"    => "21498",
                "nama"   => "Kafila",
                "kelas"  => "11 PPLG 2",
                "alamat" => "Kudus",
            ],
            [
                "id"     => 3,
                "nis"    => "12148",
                "nama"   => "Haidar",
                "kelas"  => "11 PPLG 2",
                "alamat" => "jakarta",
            ],
            [
                "id"     => 4,
                "nis"    => "281247",
                "nama"   => "Adip",
                "kelas"  => "11 PPLG 2",
                "alamat" => "bali",
            ],
            [
                "id"     => 5,
                "nis"    => "12984",
                "nama"   => "Dude",
                "kelas"  => "11 PPLG 2",
                "alamat" => "surabaya",
            ],
        ];
    public static function all()
       {
        return self::$students;
       }
    }
