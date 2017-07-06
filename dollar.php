 <?php
function fn(){
  $x = "_POST";
  $z = $x;
  return $z;
}

echo "dari fungsi<br/>";
var_dump( fn());

echo "<br/>manual<br/>";
$x='_POST';
var_dump( $$x)

?>
<form method='post' action='#' name='frm'>
<input type='text' value='ini text' name='text'></input>
<button type='submit' name='submit' value='submit'>Submit</button>
</form>

