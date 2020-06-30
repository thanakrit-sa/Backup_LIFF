<?

# Flex Messages
$prodInCate = [
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
                                "uri" => "https://liff.line.me/1654173341-lVDxGq6k"
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
                                "uri" => "https://liff.line.me/1654173341-pvNL4RX5"
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

$category = [
    "type"=> "flex",
    "altText"=> "Flex Message",
    "contents"=> [
      "type"=> "carousel",
      "contents"=> [
        [
          "type"=> "bubble",
          "hero"=> [
            "type"=> "image",
            "url"=> "https://www.img.in.th/images/59ba47cd8b972b5ef8c0dfd758c3af46.png",
            "size"=> "full",
            "aspectRatio"=> "16:9",
            "aspectMode"=> "cover",
            "action"=> [
              "type"=> "message",
              "text"=> "25:แฟชั่นชาย"
            ]
          ]
        ],
        [
          "type"=> "bubble",
          "hero"=> [
            "type"=> "image",
            "url"=> "https://www.img.in.th/images/cd0437edd19660696a9a9280d863e9c4.png",
            "size"=> "full",
            "aspectRatio"=> "16:9",
            "aspectMode"=> "cover",
            "action"=> [
              "type"=> "message",
              "text"=> "แฟชั่นหญิง"
            ]
          ]
        ],
        [
          "type"=> "bubble",
          "body"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "contents"=> [
              [
                "type"=> "button",
                "action"=> [
                  "type"=> "uri",
                  "label"=> "หมวดหมู่เพิ่มเติม",
                  "uri"=> "https://linecorp.com"
              ],
                "flex"=> 1,
                "gravity"=> "center"
                ]
            ]
        ]
      ]
    ]
]
];

$prod_fasionMen = [
    "type"=> "flex",
    "altText"=> "Flex Message",
    "contents"=> [
      "type"=> "carousel",
      "contents"=> [
        [
          "type"=> "bubble",
          "hero"=> [
            "type"=> "image",
            "url"=> "https://e-sport.in.th/ssdev/ecom/dashboard/uploads/img_prod/".$prod_image[0],
            "size"=> "full",
            "aspectRatio"=> "1:1",
            "aspectMode"=> "cover",
            "action"=> [
              "type"=> "message",
              "text"=> "แฟชั่นชาย"
      ]
        ],
          "body"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "margin"=> "sm",
            "contents"=> [
              [
                "type"=> "text",
                "text"=> $prod_name[0],
                "size"=> "lg",
                "weight"=> "bold",
                "color"=> "#000000"
            ],
              [
                "type"=> "separator",
                "margin"=> "lg"
            ],
              [
                "type"=> "box",
                "layout"=> "horizontal",
                "margin"=> "lg",
                "contents"=> [
                  [
                    "type"=> "box",
                    "layout"=> "horizontal",
                    "contents"=> [
                      [
                        "type"=> "text",
                        "text"=> "฿".$prod_price[0],
                        "flex"=> 0,
                        "size"=> "lg",
                        "weight"=> "bold",
                        "color"=> "#FF9300"
                    ]
                    ]
                    ],
                  [
                    "type"=> "box",
                    "layout"=> "vertical",
                    "flex"=> 0,
                    "contents"=> [
                      [
                        "type"=> "text",
                        "text"=> "เหลือเพียง".$prod_stock[0]."ชิ้นเท่านั้น",
                        "size"=> "sm",
                        "weight"=> "bold"
                    ]
                    ]
                ]
                ]
            ]
            ]
      ]
      ],
        [
          "type"=> "bubble",
          "hero"=> [
            "type"=> "image",
            "url"=> "https://my-live-02.slatic.net/original/42a0c116c133ae07e3d2107102741514.jpg",
            "size"=> "full",
            "aspectRatio"=> "1:1",
            "aspectMode"=> "cover",
            "action"=> [
              "type"=> "message",
              "text"=> "แฟชั่นชาย"
      ]
        ],
          "body"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "margin"=> "sm",
            "contents"=> [
              [
                "type"=> "text",
                "text"=> "CAMEL Man กระเป๋าหนังแท้ธุรกิจสบายๆสั้น",
                "size"=> "lg",
                "weight"=> "bold",
                "color"=> "#000000"
            ],
              [
                "type"=> "separator",
                "margin"=> "lg"
            ],
              [
                "type"=> "box",
                "layout"=> "horizontal",
                "margin"=> "lg",
                "contents"=> [
                  [
                    "type"=> "box",
                    "layout"=> "horizontal",
                    "contents"=> [
                      [
                        "type"=> "text",
                        "text"=> "฿729.00",
                        "flex"=> 0,
                        "size"=> "lg",
                        "weight"=> "bold",
                        "color"=> "#FF9300"
                    ]
                    ]
                    ],
                  [
                    "type"=> "box",
                    "layout"=> "vertical",
                    "flex"=> 0,
                    "contents"=> [
                      [
                        "type"=> "text",
                        "text"=> "เหลือเพียง 10 ชิ้นเท่านั้น",
                        "size"=> "sm",
                        "weight"=> "bold"
                    ]
                    ]
                ]
                ]
            ]
            ]
      ]
      ]
      ]
    ]
                      ];