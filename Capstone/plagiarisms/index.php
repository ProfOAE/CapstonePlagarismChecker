<!DOCTYPE html>
<html>
<head>
  	<title>Plagiarism Checker System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
  
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    form {border: 3px solid #f1f1f1;}

    fileToUpload {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }
    .container {
      padding: 16px;
    }
    input {
      border-radius: 4px;
      height: 30px;
      width: 40%;
    }
    textarea {
      width: 40%;
      height: 150px;
      border-radius: 4px;
    }
</style>

<body>
  <div class="container col-md-4 p-6">
  <form action="upload.php" method="post" enctype="multipart/form-data">
      <label for="uname"><b>Select the file you want to check for plagiarism:</b></label>
      <input type="file" name="fileToUpload" id="fileToUpload" required><br><br>
      <input type="text" name="author" id="author" placeholder="Enter document name" required><br><br>
      <input type="text" name="author" id="author" placeholder="Enter Authors name" required><br><br>
      <textarea>Enter Description</textarea>
      <button type="submit" name="submit" value="Upload Project">Upload</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
    </div>
    </div>
  </div>
  </form>
  </div>
</body>
</html>

