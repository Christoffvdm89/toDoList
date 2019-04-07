<?php
// Start the session
//create form and echo out the input with PHP
// Add the stripe-through function using j-query
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
    $("li").click(function(){
        $(this).css("text-shadow","2px 2px #ff0000");
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