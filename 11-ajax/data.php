<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$first = $_POST['first'];
	$last = $_POST['last'];

}
?>
{
    "first": <?php echo $first?>,
    "last": <?php echo $last?>,
}
