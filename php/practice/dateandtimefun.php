 <?php
 echo"terms used in date method:";
 echo "<br>";
 echo "today is " .date("d");
 echo "<br>"; 
 echo "today is " .date("jS");
 echo "<br>"; 
 echo "month is " .date("F") ;
 echo "<br>";
 echo "month is " .date("m") ;
 echo "<br>"; 
 echo "month is " .date("n") ;
 echo "<br>"; 
 echo "month is " .date("M") ;
 echo "<br>"; 
 echo "year is " .date("Y") ;
 echo "<br>";
 echo "year is " .date("y") ;
 echo "<br>";
 echo "today date is " .date("d/m/Y") ;
 echo "<br>"; 
 echo "today date is " .date("jS/M/Y") ;
 echo "<br>";
 echo "today date is ".date("jS/M/Y")." day of the week  ".date("D");
 echo "<br>";  
 echo "count of the day in year is  " .date("z");
 echo "<br>"; 
 echo "count of the day in year is  " .date("W");
 echo "<br>"; 
 echo "count of the day in year is  " .date("t");
 echo "<br>"; 
 echo "count of the day in year is  " .date("L");
 echo "<br>"; 
 echo "<br>";
 echo"terms used in date method:";
 echo "<br>";
 echo "hour is " .date("h");
 echo "<br>";
 echo "hour is " .date("H");
 echo "<br>";
 echo "hour is " .date("g");
 echo "<br>";
 echo "hour is " .date("G");
 echo "<br>";
 echo "minutes is " .date("i");
 echo "<br>";
 echo "seconds is " .date("s");
 echo "<br>";
 echo "time " .date("H:i:sA"); /*time as per servers time zone*/
 echo "<br>";
 echo "<br>";
 echo "time according to india:";
 echo "<br>";
 date_default_timezone_set("Asia/Kolkata");
 echo "time " .date("H:i:sA"); /*time as per time zone of India*/
 echo "<br>";
 echo "<br>";
 echo "past date:";
 echo "<br>";
 echo date("l",mktime(0,0,0,10,15,2003) );
 echo "<br>";
 echo date("jS/M/Y H:i:sA",mktime(5,0,0,10,15,2003) );
 echo "<br>";
 echo "<br>";
 echo"greenwich mean time";
 echo "<br>";
 echo date("jS/M/Y H:i:sA" );
 echo "<br>";
 echo "<br>";
echo "future time";
echo "<br>";
  $date=date_create("25-04-2024 23:45:55",timezone_open("Asia/Kolkata")); /*date time of timezone we want*/
  echo date_format($date,"d/M/Y H:i:sa");
  echo "<br>";
  echo "<br>";
  echo "checkdate is it valid or not";
  echo "<br>";
  echo checkdate(2,29,2004);
    
 ?>