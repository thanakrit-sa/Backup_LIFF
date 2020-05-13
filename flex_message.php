<?
// function file_get_contents_curl($url)
// {
//   $ch = curl_init();
//   curl_setopt($ch, CURLOPT_HEADER, 0);
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//   curl_setopt($ch, CURLOPT_URL, $url);
//   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
//   $data = curl_exec($ch);
//   curl_close($ch);
//   return $data;
// }

// // $api = file_get_contents_curl("https://e-sport.in.th/ssdev/ecom/dashboard/api/products/");
// $html = file_get_contents_curl("http://dummy.restapiexample.com/api/v1/employees"); #API Dummy
// $dataFromApi = json_decode($api, true);

// foreach ($dataFromApi['data'] as $data) {
// //   $prod_name[] = $data['product_name'];
// //   $prod_image[] = $data['image_path'];
// //   $prod_stock[] = $data['stock'];
// //   $prod_price[] = $data['price'];
// //   $prod_address[] = $data['address'];
// //   $prod_cate[] = $data['category_name'];
// //   $prod_created_time[] = $data['created_at'];
// //   $prod_updated_time[] = $data['updated_at'];
// echo $dataFromApi['data'];
// }

// for($i = 0;$i < count($dataFromApi['data']);$i++) {
//     echo $prod_name[0];
//     echo $prod_price[$i];
//     echo $prod_image[0];
// }

$jsonFlex = [
    "type"=> "flex",
    "altText"=> "Flex Message",
    "contents"=> [
      "type"=> "carousel",
      "contents"=> [
        [
          "type"=> "bubble",
          "hero"=> [
            "type"=> "image",
            "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_5_carousel.png",
            "size"=> "full",
            "aspectRatio"=> "20:13",
            "aspectMode"=> "cover"
      ],
          "body"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "contents"=> [
              [
                "type"=> "text",
                "text"=> "Arm Chair, White",
                "size"=> "xl",
                "weight"=> "bold",
                "wrap"=> true
            ],
              [
                "type"=> "box",
                "layout"=> "baseline",
                "contents"=> [
                  [
                    "type"=> "text",
                    "text"=> "$49",
                    "flex"=> 0,
                    "size"=> "xl",
                    "weight"=> "bold",
                    "wrap"=> true
                ],
                  [
                    "type"=> "text",
                    "text"=> ".99",
                    "flex"=> 0,
                    "size"=> "sm",
                    "weight"=> "bold",
                    "wrap"=> true
                ]
                ]
            ]
            ]
            ],
          "footer"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "contents"=> [
              [
                "type"=> "button",
                "action"=> [
                  "type"=> "uri",
                  "label"=> "Add to Cart",
                  "uri"=> "https://linecorp.com"
            ],
                "style"=> "primary"
            ],
              [
                "type"=> "button",
                "action"=> [
                  "type"=> "uri",
                  "label"=> "Add to whishlist",
                  "uri"=> "https://linecorp.com"
            ]
            ]
            ]
      ]
      ],
        [
          "type"=> "bubble",
          "hero"=> [
            "type"=> "image",
            "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_6_carousel.png",
            "size"=> "full",
            "aspectRatio"=> "20:13",
            "aspectMode"=> "cover"
      ],
          "body"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "contents"=> [
              [
                "type"=> "text",
                "text"=> "Metal Desk Lamp",
                "size"=> "xl",
                "weight"=> "bold",
                "wrap"=> true
              ],
              [
                "type"=> "box",
                "layout"=> "baseline",
                "flex"=> 1,
                "contents"=> [
                  [
                    "type"=> "text",
                    "text"=> "$11",
                    "flex"=> 0,
                    "size"=> "xl",
                    "weight"=> "bold",
                    "wrap"=>true
                ],
                  [
                    "type"=> "text",
                    "text"=> ".99",
                    "flex"=> 0,
                    "size"=> "sm",
                    "weight"=> "bold",
                    "wrap"=> true
                ]
                ]
                ],
              [
                "type"=> "text",
                "text"=> "Temporarily out of stock",
                "flex"=> 0,
                "margin"=> "md",
                "size"=> "xxs",
                "color"=> "#FF5551",
                "wrap"=> true
            ]
            ]
            ],
          "footer"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "contents"=> [
              [
                "type"=> "button",
                "action"=> [
                  "type"=> "uri",
                  "label"=> "Add to Cart",
                  "uri"=> "https://linecorp.com"
            ],
                "flex"=> 2,
                "color"=> "#AAAAAA",
                "style"=> "primary"
            ],
              [
                "type"=> "button",
                "action"=> [
                  "type"=> "uri",
                  "label"=> "Add to wish list",
                  "uri"=> "https://linecorp.com"
            ]
            ]
            ]
      ]
      ]
      ]
    ]
];

# Flex Messages
// $jsonFlex = [
//     "type" => "flex",
//     "altText" => "Flex Message",
//     "contents" => [
//         "type" => "carousel",
//         "contents" => [
//             [
//                 "type" => "bubble",
//                 "header" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "contents" => [
//                         [
//                             "type" => "text",
//                             "text" => $prod_name[0],
//                             "align" => "center",
//                             "weight" => "bold",
//                             "color" => "#000000"
//                         ]
//                     ]
//                 ],
//                 "hero" => [
//                     "type" => "image",
//                     "url" => $prod_image[$i],
//                     "size" => "full",
//                     "aspectRatio" => "2:1",
//                     "aspectMode" => "fit",
//                 ],
//                 "body" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "spacing" => "sm",
//                     "contents" => [
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "box",
//                                     "layout" => "horizontal",
//                                     "contents" => [
//                                         [
//                                             "type" => "text",
//                                             "text" => "หมวดหมู่สินค้า :",
//                                             "flex" => 0,
//                                             "align" => "start",
//                                             "weight" => "bold"
//                                         ],
//                                         [
//                                             "type" => "text",
//                                             "text" => $prod_cate[$i],
//                                             "flex" => 2,
//                                             "margin" => "sm",
//                                             "align" => "start",
//                                             "wrap" => false
//                                         ]
//                                     ]
//                                 ]
//                             ]
//                         ],
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "text",
//                                     "text" => "ราคาสินค้า :",
//                                     "flex" => 0,
//                                     "align" => "start",
//                                     "weight" => "bold"
//                                 ],
//                                 [
//                                     "type" => "text",
//                                     "text" => $prod_price[$i] . " บาท",
//                                     "margin" => "sm",
//                                     "align" => "start"
//                                 ]
//                             ]
//                         ],
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "box",
//                                     "layout" => "horizontal",
//                                     "contents" => [
//                                         [
//                                             "type" => "text",
//                                             "text" => "คงเหลือ :",
//                                             "align" => "start",
//                                             "flex" => 0,
//                                             "weight" => "bold"
//                                         ],
//                                         [
//                                             "type" => "text",
//                                             "text" => $prod_stock[$i] . " ชิ้น",
//                                             "margin" => "sm",
//                                             "align" => "start"
//                                         ]
//                                     ]
//                                 ]
//                             ]
//                         ]
//                     ]
//                 ],
//                 "footer" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "spacing" => "sm",
//                     "contents" => [
//                         [
//                             "type" => "button",
//                             "action" => [
//                                 "type" => "uri",
//                                 "label" => "สั่งซื้อ",
//                                 "uri" => "https://linecorp.com"
//                             ],
//                             "color" => "#000000",
//                             "style" => "primary"
//                         ]
//                     ]
//                 ]
//             ],
//             [
//                 "type" => "bubble",
//                 "header" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "contents" => [
//                         [
//                             "type" => "text",
//                             "text" => $prod_name[$i],
//                             "align" => "center",
//                             "weight" => "bold",
//                             "color" => "#000000"
//                         ]
//                     ]
//                 ],
//                 "hero" => [
//                     "type" => "image",
//                     "url" => $prod_image[$i],
//                     "size" => "full",
//                     "aspectRatio" => "2:1",
//                     "aspectMode" => "fit",
//                 ],
//                 "body" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "spacing" => "sm",
//                     "contents" => [
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "box",
//                                     "layout" => "horizontal",
//                                     "contents" => [
//                                         [
//                                             "type" => "text",
//                                             "text" => "หมวดหมู่สินค้า :",
//                                             "flex" => 0,
//                                             "align" => "start",
//                                             "weight" => "bold"
//                                         ],
//                                         [
//                                             "type" => "text",
//                                             "text" => $prod_cate[$i],
//                                             "flex" => 2,
//                                             "margin" => "sm",
//                                             "align" => "start",
//                                             "wrap" => false
//                                         ]
//                                     ]
//                                 ]
//                             ]
//                         ],
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "text",
//                                     "text" => "ราคาสินค้า :",
//                                     "flex" => 0,
//                                     "align" => "start",
//                                     "weight" => "bold"
//                                 ],
//                                 [
//                                     "type" => "text",
//                                     "text" => $prod_price[$i] . " บาท",
//                                     "margin" => "sm",
//                                     "align" => "start"
//                                 ]
//                             ]
//                         ],
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "box",
//                                     "layout" => "horizontal",
//                                     "contents" => [
//                                         [
//                                             "type" => "text",
//                                             "text" => "คงเหลือ :",
//                                             "align" => "start",
//                                             "flex" => 0,
//                                             "weight" => "bold"
//                                         ],
//                                         [
//                                             "type" => "text",
//                                             "text" => $prod_stock[$i] . " ชิ้น",
//                                             "margin" => "sm",
//                                             "align" => "start"
//                                         ]
//                                     ]
//                                 ]
//                             ]
//                         ]
//                     ]
//                 ],
//                 "footer" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "spacing" => "sm",
//                     "contents" => [
//                         [
//                             "type" => "button",
//                             "action" => [
//                                 "type" => "uri",
//                                 "label" => "สั่งซื้อ",
//                                 "uri" => "https://linecorp.com"
//                             ],
//                             "color" => "#000000",
//                             "style" => "primary"
//                         ]
//                     ]
//                 ]
//             ],
//             [
//                 "type" => "bubble",
//                 "header" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "contents" => [
//                         [
//                             "type" => "text",
//                             "text" => $prod_name[$i],
//                             "align" => "center",
//                             "weight" => "bold",
//                             "color" => "#000000"
//                         ]
//                     ]
//                 ],
//                 "hero" => [
//                     "type" => "image",
//                     "url" => $prod_image[$i],
//                     "size" => "full",
//                     "aspectRatio" => "2:1",
//                     "aspectMode" => "fit",
//                 ],
//                 "body" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "spacing" => "sm",
//                     "contents" => [
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "box",
//                                     "layout" => "horizontal",
//                                     "contents" => [
//                                         [
//                                             "type" => "text",
//                                             "text" => "หมวดหมู่สินค้า :",
//                                             "flex" => 0,
//                                             "align" => "start",
//                                             "weight" => "bold"
//                                         ],
//                                         [
//                                             "type" => "text",
//                                             "text" => $prod_cate[$i],
//                                             "flex" => 2,
//                                             "margin" => "sm",
//                                             "align" => "start",
//                                             "wrap" => false
//                                         ]
//                                     ]
//                                 ]
//                             ]
//                         ],
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "text",
//                                     "text" => "ราคาสินค้า :",
//                                     "flex" => 0,
//                                     "align" => "start",
//                                     "weight" => "bold"
//                                 ],
//                                 [
//                                     "type" => "text",
//                                     "text" => $prod_price[$i] . " บาท",
//                                     "margin" => "sm",
//                                     "align" => "start"
//                                 ]
//                             ]
//                         ],
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "box",
//                                     "layout" => "horizontal",
//                                     "contents" => [
//                                         [
//                                             "type" => "text",
//                                             "text" => "คงเหลือ :",
//                                             "align" => "start",
//                                             "flex" => 0,
//                                             "weight" => "bold"
//                                         ],
//                                         [
//                                             "type" => "text",
//                                             "text" => $prod_stock[$i] . " ชิ้น",
//                                             "margin" => "sm",
//                                             "align" => "start"
//                                         ]
//                                     ]
//                                 ]
//                             ]
//                         ]
//                     ]
//                 ],
//                 "footer" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "spacing" => "sm",
//                     "contents" => [
//                         [
//                             "type" => "button",
//                             "action" => [
//                                 "type" => "uri",
//                                 "label" => "สั่งซื้อ",
//                                 "uri" => "https://linecorp.com"
//                             ],
//                             "color" => "#000000",
//                             "style" => "primary"
//                         ]
//                     ]
//                 ]
//             ],
//             [
//                 "type" => "bubble",
//                 "header" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "contents" => [
//                         [
//                             "type" => "text",
//                             "text" => $prod_name[$i],
//                             "align" => "center",
//                             "weight" => "bold",
//                             "color" => "#000000"
//                         ]
//                     ]
//                 ],
//                 "hero" => [
//                     "type" => "image",
//                     "url" => $prod_image[$i],
//                     "size" => "full",
//                     "aspectRatio" => "2:1",
//                     "aspectMode" => "fit",
//                 ],
//                 "body" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "spacing" => "sm",
//                     "contents" => [
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "box",
//                                     "layout" => "horizontal",
//                                     "contents" => [
//                                         [
//                                             "type" => "text",
//                                             "text" => "หมวดหมู่สินค้า :",
//                                             "flex" => 0,
//                                             "align" => "start",
//                                             "weight" => "bold"
//                                         ],
//                                         [
//                                             "type" => "text",
//                                             "text" => $prod_cate[$i],
//                                             "flex" => 2,
//                                             "margin" => "sm",
//                                             "align" => "start",
//                                             "wrap" => false
//                                         ]
//                                     ]
//                                 ]
//                             ]
//                         ],
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "text",
//                                     "text" => "ราคาสินค้า :",
//                                     "flex" => 0,
//                                     "align" => "start",
//                                     "weight" => "bold"
//                                 ],
//                                 [
//                                     "type" => "text",
//                                     "text" => $prod_price[$i] . " บาท",
//                                     "margin" => "sm",
//                                     "align" => "start"
//                                 ]
//                             ]
//                         ],
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "box",
//                                     "layout" => "horizontal",
//                                     "contents" => [
//                                         [
//                                             "type" => "text",
//                                             "text" => "คงเหลือ :",
//                                             "align" => "start",
//                                             "flex" => 0,
//                                             "weight" => "bold"
//                                         ],
//                                         [
//                                             "type" => "text",
//                                             "text" => $prod_stock[$i] . " ชิ้น",
//                                             "margin" => "sm",
//                                             "align" => "start"
//                                         ]
//                                     ]
//                                 ]
//                             ]
//                         ]
//                     ]
//                 ],
//                 "footer" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "spacing" => "sm",
//                     "contents" => [
//                         [
//                             "type" => "button",
//                             "action" => [
//                                 "type" => "uri",
//                                 "label" => "สั่งซื้อ",
//                                 "uri" => "https://linecorp.com"
//                             ],
//                             "color" => "#000000",
//                             "style" => "primary"
//                         ]
//                     ]
//                 ]
//             ],
//             [
//                 "type" => "bubble",
//                 "header" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "contents" => [
//                         [
//                             "type" => "text",
//                             "text" => $prod_name[$i],
//                             "align" => "center",
//                             "weight" => "bold",
//                             "color" => "#000000"
//                         ]
//                     ]
//                 ],
//                 "hero" => [
//                     "type" => "image",
//                     "url" => $prod_image[$i],
//                     "size" => "full",
//                     "aspectRatio" => "2:1",
//                     "aspectMode" => "fit",
//                 ],
//                 "body" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "spacing" => "sm",
//                     "contents" => [
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "box",
//                                     "layout" => "horizontal",
//                                     "contents" => [
//                                         [
//                                             "type" => "text",
//                                             "text" => "หมวดหมู่สินค้า :",
//                                             "flex" => 0,
//                                             "align" => "start",
//                                             "weight" => "bold"
//                                         ],
//                                         [
//                                             "type" => "text",
//                                             "text" => $prod_cate[$i],
//                                             "flex" => 2,
//                                             "margin" => "sm",
//                                             "align" => "start",
//                                             "wrap" => false
//                                         ]
//                                     ]
//                                 ]
//                             ]
//                         ],
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "text",
//                                     "text" => "ราคาสินค้า :",
//                                     "flex" => 0,
//                                     "align" => "start",
//                                     "weight" => "bold"
//                                 ],
//                                 [
//                                     "type" => "text",
//                                     "text" => $prod_price[$i] . " บาท",
//                                     "margin" => "sm",
//                                     "align" => "start"
//                                 ]
//                             ]
//                         ],
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "box",
//                                     "layout" => "horizontal",
//                                     "contents" => [
//                                         [
//                                             "type" => "text",
//                                             "text" => "คงเหลือ :",
//                                             "align" => "start",
//                                             "flex" => 0,
//                                             "weight" => "bold"
//                                         ],
//                                         [
//                                             "type" => "text",
//                                             "text" => $prod_stock[$i] . " ชิ้น",
//                                             "margin" => "sm",
//                                             "align" => "start"
//                                         ]
//                                     ]
//                                 ]
//                             ]
//                         ]
//                     ]
//                 ],
//                 "footer" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "spacing" => "sm",
//                     "contents" => [
//                         [
//                             "type" => "button",
//                             "action" => [
//                                 "type" => "uri",
//                                 "label" => "สั่งซื้อ",
//                                 "uri" => "https://linecorp.com"
//                             ],
//                             "color" => "#000000",
//                             "style" => "primary"
//                         ]
//                     ]
//                 ]
//             ],
//             [
//                 "type" => "bubble",
//                 "header" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "contents" => [
//                         [
//                             "type" => "text",
//                             "text" => $prod_name[$i],
//                             "align" => "center",
//                             "weight" => "bold",
//                             "color" => "#000000"
//                         ]
//                     ]
//                 ],
//                 "hero" => [
//                     "type" => "image",
//                     "url" => $prod_image[$i],
//                     "size" => "full",
//                     "aspectRatio" => "2:1",
//                     "aspectMode" => "fit",
//                 ],
//                 "body" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "spacing" => "sm",
//                     "contents" => [
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "box",
//                                     "layout" => "horizontal",
//                                     "contents" => [
//                                         [
//                                             "type" => "text",
//                                             "text" => "หมวดหมู่สินค้า :",
//                                             "flex" => 0,
//                                             "align" => "start",
//                                             "weight" => "bold"
//                                         ],
//                                         [
//                                             "type" => "text",
//                                             "text" => $prod_cate[$i],
//                                             "flex" => 2,
//                                             "margin" => "sm",
//                                             "align" => "start",
//                                             "wrap" => false
//                                         ]
//                                     ]
//                                 ]
//                             ]
//                         ],
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "text",
//                                     "text" => "ราคาสินค้า :",
//                                     "flex" => 0,
//                                     "align" => "start",
//                                     "weight" => "bold"
//                                 ],
//                                 [
//                                     "type" => "text",
//                                     "text" => $prod_price[$i] . " บาท",
//                                     "margin" => "sm",
//                                     "align" => "start"
//                                 ]
//                             ]
//                         ],
//                         [
//                             "type" => "box",
//                             "layout" => "horizontal",
//                             "contents" => [
//                                 [
//                                     "type" => "box",
//                                     "layout" => "horizontal",
//                                     "contents" => [
//                                         [
//                                             "type" => "text",
//                                             "text" => "คงเหลือ :",
//                                             "align" => "start",
//                                             "flex" => 0,
//                                             "weight" => "bold"
//                                         ],
//                                         [
//                                             "type" => "text",
//                                             "text" => $prod_stock[$i] . " ชิ้น",
//                                             "margin" => "sm",
//                                             "align" => "start"
//                                         ]
//                                     ]
//                                 ]
//                             ]
//                         ]
//                     ]
//                 ],
//                 "footer" => [
//                     "type" => "box",
//                     "layout" => "vertical",
//                     "spacing" => "sm",
//                     "contents" => [
//                         [
//                             "type" => "button",
//                             "action" => [
//                                 "type" => "uri",
//                                 "label" => "สั่งซื้อ",
//                                 "uri" => "https://linecorp.com"
//                             ],
//                             "color" => "#000000",
//                             "style" => "primary"
//                         ]
//                     ]
//                 ]
//             ]
//         ]
//     ]
// ];


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
