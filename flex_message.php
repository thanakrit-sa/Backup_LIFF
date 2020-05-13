<?
# Flex Messages
$jsonFlex = [
    "type" => "flex",
    "altText" => "Flex Message",
    "contents" => [
        "type" => "carousel",
        "contents" => [
            [
                "type" => "bubble",
                "hero" => [
                    "type" => "image",
                    "url" => "https://www.bnn.in.th/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/S/a/Samsung-Tablet-Galaxy-Tab-S6-Lite-4_2B64GB-Wi-Fi-SM-P610NZIATHL-Chiffon-Pink-1-1588867299.jpg",
                    "size" => "full",
                    "aspectRatio" => "20:13",
                    "aspectMode" => "cover"
                ],
                "body" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "text",
                            "text" => $prod_name[0],
                            "size" => "xl",
                            "weight" => "bold",
                            "wrap" => true
                        ],
                        [
                            "type" => "box",
                            "layout" => "baseline",
                            "contents" => [

                                [
                                    "type" => "text",
                                    "text" => $prod_stock[0],
                                    "flex" => 0,
                                    "size" => "sm",
                                    "weight" => "bold",
                                    "wrap" => true
                                ]
                            ]
                        ]
                    ]
                ],
                "footer" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "uri",
                                "label" => "Detail 1",
                                "uri" => "https://liff.line.me/1654173341-pJegLPb3"
                            ]
                        ]
                    ]
                ]
            ],
            [
                "type" => "bubble",
                "hero" => [
                    "type" => "image",
                    "url" => "https://www.bnn.in.th/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/W/I/WIWU-Alcohol-Wipes-White-1-1588022365.jpg",
                    "size" => "full",
                    "aspectRatio" => "20:13",
                    "aspectMode" => "cover"
                ],
                "body" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "text",
                            "text" => $prod_name[1],
                            "size" => "xl",
                            "weight" => "bold",
                            "wrap" => true
                        ],
                        [
                            "type" => "box",
                            "layout" => "baseline",
                            "contents" => [

                                [
                                    "type" => "text",
                                    "text" => $prod_stock[1],
                                    "flex" => 0,
                                    "size" => "sm",
                                    "weight" => "bold",
                                    "wrap" => true
                                ]
                            ]
                        ]
                    ]
                ],
                "footer" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "uri",
                                "label" => "Detail 2",
                                "uri" => "https://liff.line.me/1654173341-pJegLPb3"
                            ]
                        ]
                    ]
                ]
            ],
            [
                "type" => "bubble",
                "hero" => [
                    "type" => "image",
                    "url" => "https://www.bnn.in.th/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/7/3/7340055337076-1-1588524115.jpg",
                    "size" => "full",
                    "aspectRatio" => "20:13",
                    "aspectMode" => "cover"
                ],
                "body" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "text",
                            "text" => $prod_name[2],
                            "size" => "xl",
                            "weight" => "bold",
                            "wrap" => true
                        ],
                        [
                            "type" => "box",
                            "layout" => "baseline",
                            "flex" => 1,
                            "contents" => [

                                [
                                    "type" => "text",
                                    "text" => $prod_stock[2],
                                    "flex" => 0,
                                    "size" => "sm",
                                    "weight" => "bold",
                                    "wrap" => true
                                ]
                            ]
                        ]
                    ]
                ],
                "footer" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "uri",
                                "label" => "Detail 3",
                                "uri" => "https://liff.line.me/1654173341-lVDxGq6k"
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

$text = [
    "type" => "text",
    "text" => "คำที่คุณกรอกไม่ตรงกับคีย์เวิร์ด"
];

$jsonRich = [
    "size" => [
        "width" => 2500,
        "height" => 1686
    ],
    "selected" => true,
    "name" => "ริชเมนู 1",
    "chatBarText" => "ประกาศ",
    "areas" => [
        [
            "bounds" => [
                "x" => 47,
                "y" => 61,
                "width" => 790,
                "height" => 787
            ],
            "action" => [
                "type" => "message",
                "text" => "พื้นที่ 1"
            ]
        ],
        [
            "bounds" => [
                "x" => 851,
                "y" => 57,
                "width" => 801,
                "height" => 791
            ],
            "action" => [
                "type" => "message",
                "text" => "พื้นที่ 2"
            ]
        ],
        [
            "bounds" => [
                "x" => 1669,
                "y" => 54,
                "width" => 784,
                "height" => 794
            ],
            "action" => [
                "type" => "message",
                "text" => "การดำเนินการ 3"
            ]
        ],
        [
            "bounds" => [
                "x" => 50,
                "y" => 858,
                "width" => 783,
                "height" => 769
            ],
            "action" => [
                "type" => "message",
                "text" => "การดำเนินการ 4"
            ]
        ],
        [
            "bounds" => [
                "x" => 851,
                "y" => 858,
                "width" => 801,
                "height" => 773
            ],
            "action" => [
                "type" => "message",
                "text" => "การดำเนินการ 5"
            ]
        ],
        [
            "bounds" => [
                "x" => 1674,
                "y" => 855,
                "width" => 779,
                "height" => 779
            ],
            "action" => [
                "type" => "message",
                "text" => "การดำเนินการ 6"
            ]
        ]
    ]
];
