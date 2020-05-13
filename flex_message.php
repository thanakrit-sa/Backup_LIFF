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
                "header" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "contents" => [
                        [
                            "type" => "text",
                            "text" => "ลิปสติก Rouge Dior",
                            "align" => "center",
                            "weight" => "bold",
                            "color" => "#FFFFFF"
                        ]
                    ]
                ],
                "hero" => [
                    "type" => "image",
                    "url" => $prod_image[0],
                    "size" => "full",
                    "aspectRatio" => "2:1",
                    "aspectMode" => "fit",
                ],
                "body" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => [
                                [
                                    "type" => "box",
                                    "layout" => "horizontal",
                                    "contents" => [
                                        [
                                            "type" => "text",
                                            "text" => "หมวดหมู่สินค้า :",
                                            "flex" => 0,
                                            "align" => "start",
                                            "weight" => "bold"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => "เครื่องสำอาง",
                                            "flex" => 2,
                                            "margin" => "sm",
                                            "align" => "start",
                                            "wrap" => false
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        [
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => [
                                [
                                    "type" => "text",
                                    "text" => "ราคาสินค้า :",
                                    "flex" => 0,
                                    "align" => "start",
                                    "weight" => "bold"
                                ],
                                [
                                    "type" => "text",
                                    "text" => "1345 บาท",
                                    "margin" => "sm",
                                    "align" => "start"
                                ]
                            ]
                        ],
                        [
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => [
                                [
                                    "type" => "box",
                                    "layout" => "horizontal",
                                    "contents" => [
                                        [
                                            "type" => "text",
                                            "text" => "คงเหลือ :",
                                            "align" => "start",
                                            "weight" => "bold"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => "4 ชิ้น",
                                            "flex" => 3,
                                            "margin" => "sm",
                                            "align" => "start"
                                        ]
                                    ]
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
                                "label" => "สั่งซื้อ",
                                "uri" => "https://linecorp.com"
                            ],
                            "color" => "#000000",
                            "style" => "primary"
                        ]
                    ]
                ]
            ]
        ],
        "styles" => [
            "header" => [
                "backgroundColor" => "#000000"
            ],
            "footer" => [
                "backgroundColor" => "#FFFFFF"
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
