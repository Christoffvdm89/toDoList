<?php
// Start the session
//create form and echo out the input with PHP
// Add the stripe-through function using j-query
// Add and retake stripe-through function with j-query/also use console.log to 
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
        $(this).css("text-shadow","2px 2px #ff0000");
        itemStriped=1;
        console.log(itemStriped);
    }else{ 
        $(this).css("text-shadow","none");
        itemStriped=0;
        console.log(itemStriped);
    }
    });
});
</script>


<?php



//Putting all the items in the text field underneath each other in a list.
if($_POST){
    echo "<br>"  ."\n<ul>\n<li>"    . $_POST["toDoList"]   ;
   
   }

?>



</body>
</html>