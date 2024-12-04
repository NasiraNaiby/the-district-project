<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Search</title>
</head>
<body>
    <h1>Search Food Items</h1>
    
    <?php
    $foodlist = array(
        'taco mexicain' => array('../src/traditional-mexican-tacos-with-meat-vegetables-isolated-white-background.jpg', 'taco Mexicain', 'this is a mexicain taco'),
        'taco traditional' => array('../src/delicious-traditional-tacos-arrangement.jpg', 'taco traditional', 'this is a traditional taco'),
        'burger' => array('../src/f.jpg', 'burger', 'this is a burger'),
        'cheese burger' => array('../src/buffalo-chicken.webp', 'cheese burger', 'this is a cheese burger'),
        'Chicken pizza' => array('../src/pizza.jpg', 'checkin pizza', 'this is a checkin pizza'),
        'greek pizza' => array('../src/pizza-salmon.png', 'greek pizza', 'this is a greek pizza'),
        'italian pizza ' => array('../src/menu-pizza.jpg', 'italian pizza', 'this is an italian pizza'),
        'shrimp' => array('../src/sea3.jpg', 'shrimp', 'this is a shrimp'),
        'salmon' => array('../src/sea4.jpg', 'salmon', 'this is a salmon'),
        'mussels' => array('../src/sea2.jpg', 'mussels', 'this is a mussels'),
        'oyesters' => array('../src/sea2.jpg', 'oyesters', 'this is an oyesters'),
        'eggs' => array('../src/breakfast4.jpg', 'eggs', 'this is an eggs'),
        'panacke' => array('../src/breakfast2.jpg', 'panacke', 'this is a panacke'),
        'toast and coffee' => array('../src/breakfast1.jpg', 'toast and coffee', 'this is a toast and coffee'),
        'caesar salad' => array('../src/salad1.jpg', 'caesar salad', 'this is a caesar salad'),
        'egg salad' => array('../src/salad2.jpg', 'egg salad', 'this is an egg salad'),
        'orange jus' => array('../src/jusorange.jpeg', 'orange jus', 'this is an orange jus'),
        'Energy drink' => array('../src/eee.jpeg', 'Energy drink', 'this is an Energy drink'),
        'coca cola' => array('../src/eeeee.jpeg', 'coca cola', 'this is a coca cola'),
        'water' => array('../src/eau.jpg', 'water', 'this is water'),
    );

    if (isset($_REQUEST['user_value']) && !empty(trim($_REQUEST['user_value']))) {
        $user_value = strtolower(trim($_REQUEST['user_value']));
        $results = array_filter($foodlist, function($details) use ($user_value) {
            return stripos($details[1], $user_value) !== false;
        });
        
        if (!empty($results)) {
            echo '<ul>';
            foreach ($results as $foodtype => $details) {
                echo '<li>';
                echo '<h2>' . htmlspecialchars($details[1]) . '</h2>';
                echo '<img src="' . htmlspecialchars($details[0]) . '" alt="' . htmlspecialchars($details[1]) . '" width="100px" height="100px">';
                echo '<p>' . htmlspecialchars($details[2]) . '</p>';
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>No results found for "' . htmlspecialchars($user_value) . '"</p>';
        }
    }
    ?>
</body>
</html>
