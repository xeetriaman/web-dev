<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $color = $_POST['color'];
} else {
    $name = "Harry";
}



?>
<h1>Hello
    <?php echo $name ?>. Your favourite color is
    <?php echo $color ?>
</h1>

<form method="post" action="form.php">
    <label>Name:</label>
    <input type="text" name="name" />

    <label>Color:</label>
    <input type="text" name="color" />

    <button type="submit">Submit</button>
</form>