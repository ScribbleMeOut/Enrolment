<!DOCTYPE html>
<html lang="en">
    <head>
       <title>MySQL setup</title>     
       <style type="text/css">
           html, body {
               font-family: arial, helvetica, sans-serif;
               padding: 14px;
               margin: 0;
           }
           p.action {
               border-top: 1px solid #dddddd;
           }
           strong {
               color: darkred;
           }
       </style>
    </head>
    <body>
       <h1>Setting up the database</h1> 
        
<?PHP
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "nptc";		         
        
    // all SQL from CakePHP Cookbook 
    
        
        
        
        
    );

    
    // make connection (servername/username/password/dbname)
    $db = new mysqli($servername, $username, $password, $dbname);

    // check connection, die if not present
    if ($db->connect_error) die("<p class='action'><strong>Connection failed:</strong> " . $db->connect_error . "</p>");

    // loop over SQL array executing each statement in turn, die on error
    foreach ($sql as $q) {  
        if (isset($q)) {
            echo "<p class='action'><strong>Execute:</strong> " . $q;
            if ($db->query($q) !== TRUE) echo "<br/><strong>Query failed:</strong> " . $db->error;
            else echo "<br/>Complete";
            echo "</p>";
        }
    }

    // complete
    echo "<h3>All actions complete</h3>";

?>

    </body>
</html>