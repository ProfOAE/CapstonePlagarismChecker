<?php
    if(isset($_POST["submit"])) {
        $file_name = $_FILES['fileToUpload']['name'];
        $file_size =$_FILES['fileToUpload']['size'];
        $file_type=$_FILES['fileToUpload']['type'];
        $file_tmp = $_FILES["fileToUpload"]["tmp_name"];
        if($file_tmp !== false) {
            move_uploaded_file($file_tmp,'C:/xampp/htdocs/Capstone/plagiarisms/'.$file_name);		
            $path = "C:/xampp/htdocs/Capstone/plagiarisms/sss.py";
            $api = exec($path);
            //$result = file_get_contents($api);
            $json_data = json_decode($api,true);}}
    if(isset($_POST['delete']))
            {
                unlink("C:/xampp/htdocs/Capstone/plagiarisms/".$_POST['delete']);
            }

?>

<center><h1> Plagiasim Checker </h1></center>
<table class='styled-table'>
            <thead>
                <tr>
                    <th>Title </th>
                    <th>Precentage Plagiarised(%)</th>
                    <th>Delete File</th>
                </tr>
            </thead>

<?php
    $message = exec("python C:/xampp/htdocs/Capstone/plagiarisms/sss.py");
    $json_data = json_decode($message,true);
    foreach($json_data as $key => $value){
        $value=$value*100;
        echo "
            <tbody>
                <tr>
                    <td class='title'>$key</td>
                    <td class='per'>$value</td>
                    <td class='del'><form method='post'><input name='delete' type='submit' value='Delete Now!'></form></td>
                </tr>
            </tbody>
        ";
    }  
?>
</table> 

<!DOCTYPE html>
<html lang="en">
  <head>
      <style>
          h1 {
              background: red;
          }
          .title {
              width: 80%
          }
          .per {
                width: 10%;
                color: red;
            }
          .der {
                width: 10%;
                color: white;
            }

          .styled-table {
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                font-family: sans-serif;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
        .styled-table tbody tr.active-row:last-of-type {
            border-bottom: 2px solid #009879;
        }   
      </style>

    <title>Emma's Capstone Plagiarism</title>
  </head>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous">
	</script>
  <body>
	 