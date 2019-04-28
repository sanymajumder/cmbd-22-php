<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>array</title>
</head>
<body>
    
    <h2>array functions </h2>
    
   <?php 
    
//    sizeof($var);
//    This function returns the number of elements in an array.

//Use this function to find out how many elements an array contains; this information is most commonly used to initialize a loop counter when processing the array.
    
//        $data = array("sunny" , " pranto " , "majumder");
//        echo "my name is " . sizeof($data) . " i am happy";
    
    
    
//    array_values($arr)
//    This function accepts a PHP array and returns a new array containing only its values (not its keys). Its counterpart is the array_keys() function.
//
//Use this function to retrieve all the values from an associative array.
    
//    $data = array("hero" => "Holmes", "villain" => "Moriarty");
//          print_r(array_values($data));
    
    
//    array_keys($var);
//    This function accepts a PHP array and returns a new array containing only its keys (not its values). Its counterpart is the array_values() function.
//
//Use this function to retrieve all the keys from an associative array.
    
//   $data = array("hero" => "Holmes", "villain" => "Moriarty");
//         print_r(array_keys($data)); 
    
    
//    array_pop($arr)
//    This function removes an element from the end of an array.
    
//    $data = array("Donald", "Jim", "Tom" , "pranto");
//            array_pop($data);
//            print_r($data);
    
    
    
//    array_push($arr, $val)
//    This function adds an element to the end of an array.
    
//    $data = array("Donald", "Jim", "Tom");
//            array_push($data, "Harry");
//            print_r($data);
    
    
    
//   array_shift($arr)
// This function removes an element from the beginning of an array. 
    
//    $data = array("pranto" ,"Donald", "Jim", "Tom");
//            array_shift($data);
//            print_r($data);
    
    
    
//    array_unshift($arr, $val)
//    This function adds an element to the beginning of an array.
    
//    $data = array("Donald", "Jim", "Tom");
//            array_unshift($data, "Sarah");
//            print_r($data);

    
//    each($arr)
    
//This function is most often used to iteratively traverse an array. Each time each() is called, it returns the current key-value pair and moves the array cursor forward one element. This makes it most suitable for use in a loop.
    
//    $data = array("hero" => "Holmes", "villain" => "Moriarty");
//            while (list($key, $value) = each($data)) {
//            echo "$key: $value \n";
//            }
    
    
    
//    sort($arr)
//
//This function sorts the elements of an array in ascending order. String values will be arranged in ascending alphabetical order.
//Note: Other sorting functions include asort(), arsort(), ksort(), krsort() and rsort().
    
    
//    $data = array("g", "t", "a", "s");
//            sort($data);
//            print_r($data);
//            
    
    
//array_flip($arr)
//
//The function exchanges the keys and values of a PHP associative array.
//Use this function if you have a tabular (rows and columns) structure in an array, and you want to interchange the rows and columns.    
    
//  $data = array("a" => "apple", "b" => "ball");
//            print_r(array_flip($data)); 
    
    
    
//    array_reverse($arr)
//
//The function reverses the order of elements in an array.
//Use this function to re-order a sorted list of values in reverse for easier processing—for example, when you're trying to begin with the minimum or maximum of a set of ordered values.
    
//    $data = array(10, 20, 25, 60);
//        print_r(array_reverse($data));
    
    
//    array_merge($arr)
//
//This function merges two or more arrays to create a single composite array. Key collisions are resolved in favor of the latest entry.
//Use this function when you need to combine data from two or more arrays into a single structure—for example, records from two different SQL queries.
    
//    $data1 = array("cat", "goat");
//        $data2 = array("dog", "cow");
//        print_r(array_merge($data1, $data2));
    
    
    
//    array_rand($arr)
//
//This function selects one or more random elements from an array.
//Use this function when you need to randomly select from a collection of discrete values—for example, picking a random color from a list.
    
//   $data = array("white", "black", "red");
//        echo "Today's color is " . $data[array_rand($data)]; 
    
    
  
//    array_search($search, $arr)
//
//This function searches the values in an array for a match to the search term, and returns the corresponding key if found. If more than one match exists, the key of the first matching value is returned.
//Use this function to scan a set of index-value pairs for matches, and return the matching index.
    
//    $data = array("blue" => "#0000cc", "black" => "#000000", "green" => "#00ff00");
//echo "Found " . array_search("#0000cc", $data);
    
    
//   array_slice($arr, $offset, $length)
//
//This function is useful to extract a subset of the elements of an array, as another array. Extracting begins from array offset $offset and continues until the array slice is $length elements long.
//Use this function to break a larger array into smaller ones—for example, when segmenting an array by size ("chunking") or type of data. 
    
//    $data = array("vanilla", "strawberry", "mango", "peaches");
//                print_r(array_slice($data, 1, 2));
    
    
    
//    array_unique($data)
//
//This function strips an array of duplicate values.
//Use this function when you need to remove non-unique elements from an array—for example, when creating an array to hold values for a table's primary key.
    
//    $data = array(1,1,4,6,7,4);
//        print_r(array_unique($data));
    
    
//    array_walk($arr, $func)
//
//This function "walks" through an array, applying a user-defined function to every element. It returns the changed array.
//Use this function if you need to perform custom processing on every element of an array—for example, reducing a number series by 10%.
    
    function reduceBy10(&$val, $key) {
            $val -= $val * 0.1;
            }

            $data = array(10,20,30,40);
            array_walk($data, 'reduceBy10');
            print_r($data);
    
    
    
    
    ?>
    
</body>
</html>