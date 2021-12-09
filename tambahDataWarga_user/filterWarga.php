<!DOCTYPE html>
<html>
<head>
  <title>PHP Retrieve Data from MySQL using Drop Down Menu</title>
</head>
<body>

<form action="prosesFilter.php" method= "post">
  City:
  <select name="id_warga" >
    <option disabled selected>-- Select City --</option>
    <?php
        include "../crudManageUser/config.php";  // Using database connection file here
        
                          
                          
                              
                              $query = mysqli_query($koneksi,"SELECT * FROM warga " ); 
                          
                          if($query){
                          while($data = mysqli_fetch_array($query)){
                            echo "<option value='". $data['id_warga'] ."'>" .$data['nama'] ."</option>";
                          
                            } 
                        }
    ?>  
  </select>
  <button type="submit" class="btn btn-primary" >Simpan</button>
</form>

</body>
</html>