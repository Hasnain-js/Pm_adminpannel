<?php
require "conn.php" ;
$query = "SELECT id , name , email , subject , category , message , date FROM contact " ;
$result = $conection->query($query);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<tr>
    <td class="">
        
        <!-- used in label input tag checked="" -->
        <label><input type="checkbox" name="check[]" class="i-checks" value = <?php echo $row["id"] ; ?> ></label>
        
    </td>
    <td><?php echo $row["name"] ; ?> <span class="label label-info"><?php echo $row["category"] ; ?></span></td>
    <td><a href="#" data-toggle="modal" data-target="#modal<?php echo $row["id"] ;?>" onclick = "modal('<?php echo $row['id'] ;?>')">
            <?php echo $row["subject"] ; ?>.</a></td>

    <td class="text-right mail-date"><?php $date= new DateTime($row['date']) ; echo $date->format('Y-m-d / l'); ?></td>
</tr>
<?php 
    }
    }
    else {
		echo "0 results";
	}
	mysqli_close($conection);
    ?>