<?php
// Start the session
//create form and echo out the input with PHP
// Add the stripe-through function using j-query
// Add and retake stripe-through function with j-query/also use console.log to 
//create and array where the to-do items will be stored.
// Add css to the function
session_start();
?>

<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--Add link's to style sheet page and also link to google fonds -->
<link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<html>
<body>
<!--Putting header, image and form in div's so that that an be styled -->
<div id ="h1"><h1>Christoff's to do List</h1></div>
<div id="image">
<img src="images/christoffcamping2.jpg" alt="">
</div>

<div id="form">

<!--My form where you can add to the shopping list and -->
<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" name="toDoList">
<button>Add</button>
</form>

<script>
$(document).ready(function(){
    var itemStriped=0;
    $("li").click(function(){
        var jqCheck=$(this).index();
        console.log(jqCheck);
    if(itemStriped==0){
    $(this).css("text-decoration","line-through");
    sessionStorage.setItem($(this).index(),1);
    itemStriped=1;
    console.log(itemStriped);
    }else{ 
        $(this).css("text-decoration","none");
        itemStriped=0;
        sessionStorage.setItem($(this).index(),0);
        console.log(itemStriped);
    }
    });
    $('li').each(function(i){
    if(sessionStorage.getItem(i)==1){
      $(this).css("text-decoration","line-through");
    }
 });
});
</script>


<?php

// add the items posted in an array. Then put them in a list and call the function with a session variable. 
//creating a function for the echoing out of the list for the toDoList so that code won't be repeated.

if(isset($_POST['toDoList'])){
if(!(isset($_SESSION['toDoItems']))){
 $_SESSION['toDoItems']=array();
 $_SESSION['toDoItems'][]=$_POST['toDoList'];
 updateList();
}else{
    $_SESSION['toDoItems'][]=$_POST['toDoList'];
    updateList();
};
}

function updateList(){
    echo"<ul>";
    foreach ($_SESSION['toDoItems'] as $item){
    echo "<li>".$item."</li>";
       }
    echo "</ul>";  
    // var_dump is used as a debugging tool , so will be commented out if not needed 
    //var_dump($_SESSION['toDoItems']);  
}


?>

</div>

</body>
</html>