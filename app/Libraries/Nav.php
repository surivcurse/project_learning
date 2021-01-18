<?php namespace App\Libraries;

class Nav {

    public function mainMenu(){
        $data = [
            "menu" => [
                "home" => [
                    "home1"=> [
                        "text"=>"Home 1",
                        "url"=>"home"
                    ],
                    "home2"=> [
                        "text"=>"Home 2",
                        "url"=>"home"
                    ],
                    "home3"=>[
                        "text"=>"Home 3",
                        "url"=>"home"
                    ]
                ],
                "course" => [
                    "course1"=>[
                        "text"=>"Course List",
                        "url"=>"course/list"
                    ],
                    "course2"=>[
                        "text"=>"Course Single",
                        "url"=>"course/single"
                    ]
                ],
                "event" => [
                    "event1"=>[
                        "text"=>"Event List",
                        "url"=>"event/list"
                    ],
                    "event2"=>[
                        "text"=>"Event Single",
                        "url"=>"event/single"
                    ]
                ],
                "contact"=> [
                    "contact1"=>[
                        "text"=>"Contact",
                        "url"=>"contact"
                    ]
                ]
            ]

        ];
        return view('templates/nav-dropdown', $data);
    }
}
