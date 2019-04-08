<?php
// Start the session
//create form and echo out the input with PHP
// Add the stripe-through function using j-query
// Add and retake stripe-through function with j-query/also use console.log to 
//create and array where the to-do items will be stored.
session_start();
?>

<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<html>
<body>
<h1>My To Do List</h1>

<!--My form where you can add to the shopping list and -->
<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" name="toDoList">
<button>Add</button>
</form>

<script>
$(document).ready(function(){
    var itemStriped=0;
    $("li").click(function(){
    if(itemStriped==0){
        $(this).css("text-decoration","line-through");
        itemStriped=1;
        console.log(itemStriped);
    }else{ 
        $(this).css("text-decoration","none");
        itemStriped=0;
        console.log(itemStriped);
    }
    });
});
</script>


<?php

// add the items posted in an array. Then put them in a list and call the function with a session variable. 

if(isset($_POST['toDoList'])){
if(!(isset($_SESSION['toDoItems']))){
 $_SESSION['toDoItems']=array();
 $_SESSION['toDoItems'][]=$_POST['toDoList'];
 echo"<ul>";
 foreach ($_SESSION['toDoItems'] as $item){
 echo "<li>".$item."</li>";
    }
 echo "</ul>";  
 var_dump($_SESSION['toDoItems']);
}else{
    $_SESSION['toDoItems'][]=$_POST['toDoList'];
};
    echo"<ul>";
    foreach ($_SESSION['toDoItems'] as $item){
    echo "<li>".$item."</li>";
       }
    echo "</ul>";   
    var_dump($_SESSION['toDoItems']);

}


?>



</body>
</html>