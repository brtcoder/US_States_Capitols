<html>
    <head>
     <title>PHP-Hello World!</title>
    </head>
    <body>
        <?php
            echo "<pre>\n</pre>";
            $US_Capitols=["Alabama" => "Montgomery", "Alaska" => "Juneau", "Arizona" => "Phoenix", "Arkansas" => "Little Rock", "California" => "Sacramento", "Colorado" => "Denver", "Connecticut" => "Hartford", "Delaware" => "Dover", "Florida" => "Tallahassee", "Georgia" => "Atlanta", "Hawaii" => "Honolulu", "Idaho" => "Boise", "Illinois" => "Springfield", "Indiana" => "Indianapolis", "Iowa" => "Des Moines", "Kansas" => "Topeka", "Kentucky" => "Frankfort", "Louisiana" => "Baton Rouge", "Maine" => "Augusta", "Maryland" => "Annapolis", "Massachusetts" => "Boston", "Michigan" => "Lansing", "Minnesota" => "Saint Paul", "Mississippi" => "Jackson", "Missouri" => "Jefferson City", "Montana" => "Helena", "Nebraska" => "Lincoln", "Nevada" => "Carson City", "New Hampshire" => "Concord", "New Jersey" => "Trenton", "New Mexico" => "Santa Fe", "New York" => "Albany", "North Carolina" => "Raleigh", "North Dakota" => "Bismarck", "Ohio" => "Columbus", "Oklahoma" => "Oklahoma City", "Oregon" => "Salem", "Pennsylvania" => "Harrisburg", "Rhode Island" => "Providence", "South Carolina" => "Columbia", "South Dakota" => "Pierre", "Tennessee" => "Nashville", "Texas" => "Austin", "Utah" => "Salt Lake City", "Vermont" => "Montpelier", "Virginia" => "Richmond", "Washington" => "Olympia", "West Virginia" => "Charleston", "Wisconsin" => "Madison", "Wyoming" => "Cheyenne"];
            echo "<pre>\n</pre>";
            //print_r($US_Capitols);
            echo "<pre>\n</pre>";
            echo count($US_Capitols);
            echo "<pre>\n</pre>";

            global $range;
            $range = rand(1,count($US_Capitols));
            echo $range;
            echo "<pre>\n</pre>";
            echo $US_Capitols["Alabama"];
            global $count;
            $count = 1;
            /*
            foreach($US_Capitols as $attributes =>$City){
                echo $count." ";
                $count = $count+1;
                echo"$attributes state capitol is: $City";
                echo "<pre>\n</pre>";
                    if ($count > $range) {
                        break;
                    }
            }
            */
        ?>
    </body?>
</html>
