<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);

    echo "</pre>";
}

$mobileArr=[
    [
        'Type' => 'iphone10',
        'price' => 10000,
        'stores' => ['台北']
      ],
    
      [
        'Type' => 'iphone11',
        'price' => 20000,
        'stores' => ['台北', '台中']
      ],
    
      [
        'Type' => 'iphone12',
        'price' => 30000,
        'stores' => ['高雄']
      ],
    
      [
        'Type' => 'iphone13',
        'price' => 40000,
        'stores' => ['台北', '台中', '高雄']
      ]

];

// $mobileStores=[
//     's1'=>'amy',
//     's2'=>'bob',
//     's3'=>'cat',
// ];


// dd($mobileArr);

echo json_encode($mobileArr);

?>