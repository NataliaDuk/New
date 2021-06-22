<?php
?>
<form action="?type=Table&action=edit&id=<?=$this->data["id"]?>"  method="post">
    <?php
    foreach ($this->data["row"] as $field => $value) {
        echo $this->data["comments"][$field]."<br>";
        echo "<input name='$field' value='$value'><br>";
    }    ?>
    <input type="submit" value="ok" class="btn btn-primary">
</form>
