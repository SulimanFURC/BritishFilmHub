<?php

// any function which is written here and will be presend in array_helper.php file will be override 
// with the function which are written here
    function show()
    {
        echo "Show Function in My Helper Array ";
    }

    // this function will override the element function in array_helper
    // function element() 
    // {
    //     echo "Element Function is Overriden Here";
    // }
?>