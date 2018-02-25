<?php
   include 'connect.php';
   $query = "SELECT * FROM chatting ORDER BY id DESC ";
   $runcommand = $db->query($query);
   while($row =$runcommand->fetch_array()):
?>
<div class="chat_msg">
    <span style="color:green;"> <?php echo $row['name']; ?> </span> :
    <span style="color:brown;"> <?php echo $row['message']; ?> </span>
    <span style="float:right;"> <?php echo formatDate($row['time']); ?> </span>
</div>


<?php endwhile; ?>