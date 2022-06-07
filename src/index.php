

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CONVERTER</title>
    <style>
.button {
    padding: 15px 25px;
    font-size: 24px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: #fff;
    background-color: #04AA6D;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
/* #userInput{
    width: 60%;
    height: 100px;
    margin: 10px;
} */
span{
    font-size: larger;
}
#btn{
    margin-left: 90px;
}
    </style>
</head>
<body>
    <div class="main">
        <form action="" method="GET">
        <span>Text Area</span> <textarea name="myInput" id="userInput" value="<?php $sentence ? $sentence : '';?>" rows="4"></textarea>

          <!-- <input type="text" name="myInput" id="userInput"> <br> -->

          <div id="btn">
              <input type="submit" class="button" onclick="changeContent()" value="UpperCase" name="entryUpper">
    
              <input type="submit" class="button" onclick="changeContent()"  value="LowerCase" name="entryLower">

          </div>

        </form>
    </div>

    <?php   
$sentence = $_GET['myInput'];
// print_r($sentence);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Something posted
  echo '<div class="out" name="output">
  <h1>Summary</h1>
</div>';
    if (isset($_GET['entryUpper'])) {
        // print_r($_GET['myInput']);
        echo strtoupper("this is upper case :"." ".$sentence);
        $sentence = strtoupper($sentence);
    } else {
        echo strtolower("this is lower case :"." ".$sentence);
        $sentence = strtolower($sentence); 
      // Assume btnSubmit 
    }
  }

    echo "<br>";
    echo "number of words is :";
    echo str_word_count($sentence);

    echo "<br>";

    // print_r($sentence);
    
    echo "<br>";
    echo "number of characters is :";
    echo strlen($sentence);
    echo "<br>";

    // print_r($sentence);



?>
      <script>
        var x = '<?php echo $sentence ?>';
        console.log(x);
        document.getElementById("userInput").innerHTML= x;
    </script>;

</body>
</html>