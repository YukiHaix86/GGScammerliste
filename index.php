<!doctype html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<meta charset="utf-8">
<title>Unbenanntes Dokument</title>
</head>   
<body>
    <br>
    <div class="Tablecontent">
        <table>
            <tr>
                <th>ID</th>
                <th>UUID</th>
                <th>Name</th>
                <th>Beweis</th>
            </tr>
        <?php
            
            $servername = "localhost";
            $username = "test";
            $password = "test";
            $dbname = "scammer";
            
            $conn = new mysqli($servername, $username, $password, $dbname); 
            
            if ($conn->connect_error) {
                die("Upsi Pupsi" . $conn->connect_error);
            }

            $sql = "SELECT Nummer, UUID, Name, Beweis FROM liste";
            
            $suche = mysqli_query($conn, $sql);
            
            if ($suche->num_rows > 0) {
                
                while($row = $suche->fetch_assoc()) {
                    echo "<tr><td>".$row["Nummer"]."</td><td>".$row["UUID"]."</td><td>".$row["Name"]."</td><td>".$row["Beweis"]."</td></tr>";
                }
            } else {
                echo "0 results";
            }
            
            
            mysqli_close($conn);
        
            ?>
        </table>
        </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
