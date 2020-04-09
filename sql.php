<?php
$create_sql = "CREATE TABLE IF NOT EXISTS Job_Predict".
                       "(Job_Id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,".
                       "Job_Name VARCHAR(30) NOT NULL,Skill_Set VARCHAR(80) NOT NULL);";

$insert_sql = "INSERT INTO Job_Predict (Job_Name,Skill_Set) ".
                              "VALUES ('Nodejs Developer','MYSQL JAVASCRIPT NODE ExpressJS');";

$retreive_sql = "SELECT * from Job_Predict;";

?>