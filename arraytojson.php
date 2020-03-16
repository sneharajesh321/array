<?php
    $names = array(
        [
            'name' => 'Aravinth',
            'city' => 'Coimbatore',
            'status' => 'active' 
        ],
        [
            'name' => 'Mani',
            'city' => 'Selam',
            'status' => 'inactive' 
        ]
    );

    echo "<pre>";
    print_r($names);

    echo json_encode($names);
?>