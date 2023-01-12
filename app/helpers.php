<?php
if (! function_exists('urunleriGetir')) {
    function urunleriGetir() {
        return [
            [
                "id"=> 1,
                "urunAdi" => "Jean Pantolon Gri",
                "urunFiyati" => 100,
                "paraBirimi" => "tl",
                "urunGorseli"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSayb9ii5KUvsoMtUcrrjB2w4WpdOJs48PT7w&usqp=CAU"
            ],
            [
                "id"=> 2,
                "urunAdi" => "Baş Örtü",
                "urunFiyati" => 150,
                "paraBirimi" => "tl",
                "urunGorseli"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKdOkgu2s_G2TZbHJcYAvPbQuD3Qn34M6Xjw&usqp=CAU"
            ]
        ];

    }
    function aracBaslangic(){
        return [
            [
                "id"=> 1,
                "BaslangıcNoktasi" => "Çekmeköy",
            ],
            [
                "id"=> 2,
                "BaslangıcNoktasi" => "Ümraniye",
            ],
            [
                "id"=> 3,
                "BaslangıcNoktasi" => "Ataşehir",
            ],
            [
                "id"=> 4,
                "BaslangıcNoktasi" => "Kadıköy",
            ],
            [
                "id"=> 5,
                "BaslangıcNoktasi" => "Beykoz",
            ]
        ];
    }
    function aracBitis(){
        return[
            [
                "id"=> 1,
                "BitisNoktasi" => "Çekmeköy",
            ],
            [
                "id"=> 2,
                "BitisNoktasi" => "Ümraniye",
            ],
            [
                "id"=> 3,
                "BitisNoktasi" => "Ataşehir",
            ],
            [
                "id"=> 4,
                "BitisNoktasi" => "Kadıköy",
            ],
            [
                "id"=> 5,
                "BitisNoktasi" => "Beykoz",
            ]
        ];
    }
    function aracMarka(){
        return[
            [
                "id"=> 1,
                "Aracmarkasi" => "Fiat Punto",
            ],
            [
                "id"=> 2,
                "Aracmarkasi" => "Toyota Corolla",
            ],
            [
                "id"=> 3,
                "Aracmarkasi" => "Hyundai İ20",
            ],
            [
                "id"=> 4,
                "Aracmarkasi" => "Bmw 320d",
            ],
            [
                "id"=> 5,
                "Aracmarkasi" => "Audi A4",
            ]
        ];
    }
}
