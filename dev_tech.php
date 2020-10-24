<?php
    echo "<font align= center><h1>DEV-  TECH INDUSTRIES</h1></font>";
    echo "<font align= center><h2>The following are the list of the User credentials of the new employed workers</h2></font><br>";


    function usernames(){

            // Array containing usernames of users
            $users = ["Evans", "Jeff", "Luke", "Kings", "Faith"];


         foreach($users as $users) {
                //Check if the length of the name for each item in the username array is less than 6.
                $len = (strlen($users));
                    
                if ($len < 6){

                    // If name is less than 6, generate a default username with number using 
                    // the rand() function that adds 3 random numbers to the end of each name 
                    // for each user in the array
                    $gen_name = str_pad(rand(100,999),3,'0', STR_PAD_LEFT);

                    // contatenate users to the randomly generated nums (gen_name)
                    $username = $users.$gen_name;

                    //username cannot be greater than 8 or less than 6.
                    if (strlen($username <=8 and strlen($username) > 6)){

                        //Declare a new array that containers headers for password 
                        //NOTE: not more than 5 items ONLY in this array.
                        $pass = ["rad", "jon", "afa", "blu", "suc"];

                        //generate a password that contains letters and number
                        $gen_pass = str_pad(rand(100,999),3,'0', STR_PAD_LEFT);

                        $i = rand(0,4);

                        // contatenate password to the randomly generated nums (gen_pass)
                        $password = $pass[$i].$gen_pass.$pass[$i];

                        //display to the browser: username & password in the format 
                        //for each item of the arrays you have declared above.
                        echo "<fieldset>
                            <legend><h2>User Credentials</h2></legend><h3>Username:  <b>".$username."</b>  <br>"."Password:
                          <b>".$password."</h3></fieldset></b>";
                        echo "<br><br>";
                    }else{
                        echo "Username must be greater than 6 and not greater than 8";
                    };



                }else{
                    echo "Name should be lesser than 6<br>";
                
            };
        };

    };    
    //Call the function
    usernames();
?>