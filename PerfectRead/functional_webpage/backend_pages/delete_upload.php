<?php 


                include '../include_pages/database_connection.php';
                $sql="UPDATE `upload` SET `status`=0 WHERE `upload_id`=$uid";
                $stmt = $conn->prepare($sql); 
                $stmt->execute();