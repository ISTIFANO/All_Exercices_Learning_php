<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>click etude</title>
    <style>
        h3{
            text-aline: center;
        } 
         #bore{
            border: 3px solid  ;
            border-radius: 9 px;
            border-color:red;
            width:400px ;
            height: 500px;
            margin-right:auto;
            margin-left:auto;
         }
         button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
   
    
}

button:hover {
    background-color: #ec0000;
}

         
    </style>
</head>


<body>
    <div id="bore">
        <h3> check language that you know   </h3>
   <form  method="get">
   <input type="checkbox" name="html" id="hhh">
   <label for="checkbox">html</label><br>
   <input type="checkbox" name="css" id="html">
<label for="checkbox">css</label><br>
<input type="checkbox" name="js" id="html">
<label for="checkbox">javascript</label><br>
<input type="checkbox" name="c" id="html">
<label for="checkbox">c</label><br>
<input type="checkbox" name="react" id="html">
<label for="checkbox">react</label><br>
<input type="checkbox" name="jsone" id="html">
<label for="checkbox">json</label><br>
<label for="text">ecrire</label>
<input type="text" name="text" id="">

<button >submit</button>
   </form>
   
   </div>
   <script>
 count x= document.getElementById("html");
    function checkresult() {
        if (x.checked){
            return 
        }
           
    }
   </script>
   <
   <?php 
   if(isset($_GET["jsone"]) &&  isset($_GET["js"]) && isset($_GET["html"])&& isset($_GET["react"])&& isset($_GET["c"])&& isset($_GET["css"])
    ) {
    // print_r($_GET["jsone"]);
echo "your anser is", $_GET["jsone"],   $_GET["html"], $_GET["react"], $_GET["css"], $_GET["css"], $_GET["c"], $_GET["js"];
   }
   if (isset($_GET["text"])){
    echo "your text is", $_GET["text"];
   }




?>
</body>
</html>
