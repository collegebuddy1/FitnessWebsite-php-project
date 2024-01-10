<?php
include "includes/db.php";

$class_id=$_GET['class_id'];
                        $sql = "SELECT * FROM `classes` WHERE class_id = $class_id";
                        $result = mysqli_query($connect, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $class_id = $row['class_id'];
                            $title = $row['name'];
                            $image = $row['image'];
                            $time_from = $row['time_from'];
                            $days = $row['days'];
                            $des = $row['description'];
                            $price = $row['price'];
                            $trainer_id = $row['class_trainer_id'];
                            $cv=$row['cv'];
                        }

                        function read_file_docx($filename){  
                            $striped_content = '';  
                            $content = '';  
                            if(!$filename || !file_exists($filename)) return false;  
                            $zip = zip_open($filename);  
                            if (!$zip || is_numeric($zip)) return false;  
                            while ($zip_entry = zip_read($zip)) {  
                            if (zip_entry_open($zip, $zip_entry) == FALSE) continue;  
                            if (zip_entry_name($zip_entry) != "word/document.xml") continue;  
                            $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));  
                            zip_entry_close($zip_entry);  
                            }// end while  
                            zip_close($zip);  
                            $content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);  
                            $content = str_replace('</w:r></w:p>', "\r\n", $content);  
                            $striped_content = strip_tags($content);  
                            return $striped_content;  
                       }  
                       
                       
                           


                       
                      
                       $filename = "$cv";// or /var/www/html/file.docx  
                       $content = read_file_docx($filename);  
                       if($content !== false) {  
                            echo nl2br($content); 
                           
                       }  
                        else {  
                            echo 'Couldn\'t the file. Please check that file.';  
                   
                    
                    
                    
                        }
                    
                            ?>
<!-- read pdf -->
<a href="<?=$cv?>" class="embed">pdf</a>


<!-- <script>
$('a.embed').gdocsViewer({ width: 400, height: 500 });

</script> -->