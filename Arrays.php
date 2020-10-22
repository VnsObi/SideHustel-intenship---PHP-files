<?php
    /*
   =================== Arrays ======================
    1)  Numeric Array
    2)  Associative Array
    3) Multi Array
    */

    // ************ Numeric Array *******************
    echo "<h1>Numeric Arrays</h1>";

    // Declaring arrays
    $usernames = array("Clinton", "Kelly", "Tracy", "Nelly");

    echo "The first item in our array is: " .$usernames[0]."<br/>";
    echo "The second item in our array is: " .$usernames[1]."<br/>";
    echo "The third item in our array is: " .$usernames[2]."<br/>";
    echo "The fourth item in our array is: " .$usernames[3]."<br/>";

    //How to change the value of a numeric array.

    $usernames[0] = "Evans";
    echo $usernames[0]; 

    // ================== Associative Array =========================
    echo "<h1>Associative Array</h1>";

    $password = array(
                        "usernames[0]" => "pass909",
                        "usernames[1]" => 1874,
                        "usernames[2]" => 98.352,
                        "usernames[3]" => "jnjii3",
                    );
    echo "$usernames[0]'s password is <strong>". $password["usernames[0]"]."</strong>"."<br/>" ;
    echo "$usernames[1]'s password is <strong>". $password["usernames[1]"]."</strong>" ."<br/>";
    echo "$usernames[2]'s password is <strong>". $password["usernames[2]"]."</strong>"."<br/>" ;
    echo "$usernames[3]'s password is <strong>". $password["usernames[3]"]."</strong>" ."<br/>";

// ================== Multi Dimentional Arrays =========================
echo "<h1>Multi Dimentional Arrays</h1>";

$online_store = array(
                        // Shop Categories
                        "phones" => array("iphone 12", "Tecno camon 15", "infinix note 8"),
                        "cars"  => array("BMW", "Audi", "Ferrari"),
                        "shoes" => array("Sneakers", "Sandals", "Loafers")
);

echo $online_store["phones"][1]."<br/>" ;
echo "$usernames[0] orderd <strong>". ($online_store["phones"][0])."</strong>"."<br/>" ;
echo $online_store["phones"][0] . " added to <strong>CART</strong>"
?>