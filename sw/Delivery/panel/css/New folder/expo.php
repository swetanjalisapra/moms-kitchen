  <?php 
  include "../../connect.php";
header('Content-Type: text/csv');
$query = mysqli_query($conn, 'select * from user')or die( mysqli_error($conn) ); // Get data from Database from demo table
  
  
    $delimiter = ",";
    $filename = "Userslist" . date('Ymd') . ".csv"; // Create file name
        header('Content-Disposition: attachment; filename="' . $filename . '";');
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
      
    //set column headers
    $fields = array('User Id', 'Name','Phno','Email','Password');
    fputcsv($f, $fields, $delimiter);
      
    //output each row of the data, format line as csv and write to file pointer
    while($row = mysqli_fetch_array($query)){
         
        $lineData = array($row['id'], $row['name'], $row['phno'] , $row['email'], $row['password']);
        fputcsv($f, $lineData, $delimiter);
    }
      
    //move back to beginning of file
    fseek($f, 0);
      
    //set headers to download file rather than displayed
    
  
      
    //output all remaining data on a file pointer
    fpassthru($f);
  
 

?>