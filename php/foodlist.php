<?php
$foodlist = array(
    'taco mexicain' => array('../src/traditional-mexican-tacos-with-meat-vegetables-isolated-white-background.jpg', 'taco Mexicain', 'this is a mexicain taco'),
    'taco traditional' => array('../src/delicious-traditional-tacos-arrangement.jpg', 'taco traditional', 'this is a traditional taco'),
    'burger' => array('../src/f.jpg', 'burger', 'this is a burger'),
    'cheese burger' => array('../src/buffalo-chicken.webp', 'cheese burger', 'this is a cheese burger'),
    'chiken pizza' => array('../src/pizza.jpg', 'checkin burger', 'this is a checkin burger'),
    'greek pizza' => array('../src/pizza-salmon.png', 'greek pizza', 'this is a greek pizza'),
    'italian pizza ' => array('../src/menu-pizza.jpg', 'italian pizza', 'this is an italian pizza'),
    'shrimp' => array('../src/sea3.jpg', 'shrimp', 'this is a shrimp'),
    'fish' => array('../src/sea1.webp', 'fish', 'this is a fish'),
    'catfish' => array('../src/sea1.webp', 'catfish', 'this is a catfish'),
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
?>
<ul>
    <?php foreach ($foodlist as $foodtype => $details){ ?>
        <li>
            <h2><?php echo $details[1]; ?></h2>
            <img src="<?php echo $details[0]; ?>" alt="<?php echo $details[1]; ?>" width="100px" height="100px">
            <p><?php echo $details[2]; ?></p>
        </li>
    <?php } ?>
</ul>
