<?php
// Start the session
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
   var itemDone=0;
    $("li").click(function(){
  if(itemDone==0){
       $(this).css("text-decoration","line-through");
       itemDone=1;
       console.log(itemDone);
  }else{
      $(this).css("text-decoration","none");
      itemDone=0;
       console.log(itemDone);
  }
    });
  });
</script>


<?php


//Putting all the items in the text field underneath each other in a list.
if($_POST){
    echo "<br>"  ."\n<ul>\n<li>"    . $_POST["toDoList"]    ."\n<li>\n<ul>" ;
   
   }

?>



</body>
</html>