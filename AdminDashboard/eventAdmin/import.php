<?php
// Include the database configuration file
include 'connection.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL1 = 'uploads/'.$row["file_name1"];
        $imageURL2 = 'uploads/'.$row["file_name2"];
        $imageURL3 = 'uploads/'.$row["file_name3"];
?>
    <img src="<?php echo $imageURL1; ?>" alt="" />
    <img src="<?php echo $imageURL2; ?>" alt="" />
    <img src="<?php echo $imageURL3; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>