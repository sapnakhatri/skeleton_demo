<?php 

return [
    "thumbnail1" => [
        "items" => [
            [
                "method" => "frame",
                "arguments" => [
                    "width" => 100,
                    "height" => 100,
                    "forceResize" => FALSE
                ]
            ],
            [
                "method" => "setBackgroundColor",
                "arguments" => [
                    "color" => "#cccccc"
                ]
            ],
            [
                "method" => "roundCorners",
                "arguments" => [
                    "width" => 10,
                    "height" => 10
                ]
            ],
            [
                "method" => "rotate",
                "arguments" => [
                    "angle" => 90
                ]
            ]
        ],
        "medias" => [
            "500w" => [
                [
                    "method" => "frame",
                    "arguments" => [
                        "width" => 100,
                        "height" => 200,
                        "forceResize" => FALSE
                    ]
                ]
            ]
        ],
        "name" => "thumbnail1",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1575981958,
        "creationDate" => 1575980710,
        "id" => "thumbnail1"
    ]
];
