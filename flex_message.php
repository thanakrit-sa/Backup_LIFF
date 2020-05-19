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
                    "url" => $prod_image[0],
                    "size" => "full",
                    "aspectRatio" => "1:1",
                    "aspectMode" => "cover",
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
                                            "text" => "ชื่อสินค้า :",
                                            "flex" => 0,
                                            "align" => "start",
                                            "weight" => "bold"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $prod_name[0],
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
                                            "text" => $prod_cate[0],
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
                                    "text" => $prod_price[0] . " บาท",
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
                                            "flex" => 0,
                                            "weight" => "bold"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $prod_stock[0] . " ชิ้น",
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
                                "uri" => "https://liff.line.me/1654173341-pJegLPb3?prod_id=$id0"
                            ],
                            "color" => "#000000",
                            "style" => "primary"
                        ]
                    ]
                ]
            ],
            [
                "type" => "bubble",
                "hero" => [
                    "type" => "image",
                    "url" => $prod_image[1],
                    "size" => "full",
                    "aspectRatio" => "1:1",
                    "aspectMode" => "cover",
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
                                            "text" => "ชื่อสินค้า :",
                                            "flex" => 0,
                                            "align" => "start",
                                            "weight" => "bold"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $prod_name[1],
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
                                            "text" => $prod_cate[1],
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
                                    "text" => $prod_price[1] . " บาท",
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
                                            "flex" => 0,
                                            "weight" => "bold"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $prod_stock[1] . " ชิ้น",
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
                                "uri" => "https://liff.line.me/1654173341-pJegLPb3"
                            ],
                            "color" => "#000000",
                            "style" => "primary"
                        ]
                    ]
                ]
            ],
            [
                "type" => "bubble",
                "hero" => [
                    "type" => "image",
                    "url" => $prod_image[2],
                    "size" => "full",
                    "aspectRatio" => "1:1",
                    "aspectMode" => "cover",
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
                                            "text" => "ชื่อสินค้า :",
                                            "flex" => 0,
                                            "align" => "start",
                                            "weight" => "bold"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $prod_name[2],
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
                                            "text" => $prod_cate[2],
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
                                    "text" => $prod_price[2] . " บาท",
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
                                            "flex" => 0,
                                            "weight" => "bold"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $prod_stock[2] . " ชิ้น",
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
                                "uri" => "https://liff.line.me/1654173341-pJegLPb3"
                            ],
                            "color" => "#000000",
                            "style" => "primary"
                        ]
                    ]
                ]
            ],
            [
                "type" => "bubble",
                "body" =>
                [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "text",
                            "text" => "See more Product",
                            "size" => "lg",
                            "align" => "center",
                            "weight" => "bold",
                            "color" => "#FFFFFF"
                        ],
                        [
                            "type" => "separator",
                            "margin" => "xl",
                            "color" => "#000000"
                        ],
                        [
                            "type" => "image",
                            "url" => "https://static.vecteezy.com/system/resources/previews/000/554/229/non_2x/plus-sign-vector-icon.jpg",
                            "size" => "full",
                            "aspectRatio" => "4:3",
                            "aspectMode" => "fit",
                            "action" => [
                                "type" => "uri",
                                "uri" => "https://liff.line.me/1654173341-QR4Yj7Mx"
                            ]
                        ]
                    ]
                ],
                "footer" => [
                    "type" => "box",
                    "layout" => "horizontal",
                    "flex" => 1,
                    "contents" => [
                        [
                            "type" => "image",
                            "url" => "https://s.isanook.com/he/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2hlLzAvdWQvMy8xODg0MS9hc3Ryb25hdXQuanBn.jpg",
                            "flex" => 0,
                            "size" => "full",
                            "aspectRatio" => "4:3",
                            "aspectMode" => "cover",
                            "backgroundColor" => "#FFFFFF"
                        ]
                    ]
                ],
                "styles" => [
                    "body" => [
                        "backgroundColor" => "#000000"
                    ],
                    "footer" => [
                        "backgroundColor" => "#000000"
                    ]
                ]
            ]
        ]
    ]
];


// $text = [
//     "type" => "text",
//     "text" => "คำที่คุณกรอกไม่ตรงกับคีย์เวิร์ด"
// ];

// $jsonRich = [
//     "size" => [
//         "width" => 2500,
//         "height" => 1686
//     ],
//     "selected" => true,
//     "name" => "ริชเมนู 1",
//     "chatBarText" => "ประกาศ",
//     "areas" => [
//         [
//             "bounds" => [
//                 "x" => 47,
//                 "y" => 61,
//                 "width" => 790,
//                 "height" => 787
//             ],
//             "action" => [
//                 "type" => "message",
//                 "text" => "พื้นที่ 1"
//             ]
//         ],
//         [
//             "bounds" => [
//                 "x" => 851,
//                 "y" => 57,
//                 "width" => 801,
//                 "height" => 791
//             ],
//             "action" => [
//                 "type" => "message",
//                 "text" => "พื้นที่ 2"
//             ]
//         ],
//         [
//             "bounds" => [
//                 "x" => 1669,
//                 "y" => 54,
//                 "width" => 784,
//                 "height" => 794
//             ],
//             "action" => [
//                 "type" => "message",
//                 "text" => "การดำเนินการ 3"
//             ]
//         ],
//         [
//             "bounds" => [
//                 "x" => 50,
//                 "y" => 858,
//                 "width" => 783,
//                 "height" => 769
//             ],
//             "action" => [
//                 "type" => "message",
//                 "text" => "การดำเนินการ 4"
//             ]
//         ],
//         [
//             "bounds" => [
//                 "x" => 851,
//                 "y" => 858,
//                 "width" => 801,
//                 "height" => 773
//             ],
//             "action" => [
//                 "type" => "message",
//                 "text" => "การดำเนินการ 5"
//             ]
//         ],
//         [
//             "bounds" => [
//                 "x" => 1674,
//                 "y" => 855,
//                 "width" => 779,
//                 "height" => 779
//             ],
//             "action" => [
//                 "type" => "message",
//                 "text" => "การดำเนินการ 6"
//             ]
//         ]
//     ]
// ];
