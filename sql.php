<?php
$ create_sql = "CREATE TABLE IF NOT EXISTS Job_Predict".
                       "(Job_Id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,".
                       "Job_Name VARCHAR(30) NOT NULL,Skill_Set VARCHAR(80) NOT NULL);";

$ INSERT INTO Job_Predict (Job_Name,Skill_Set) VALUES ('Nodejs Developer','MYSQL JAVASCRIPT NODE ExpressJS');
$ INSERT INTO Job_Predict (Job_Name,Skill_Set) VALUES ('Python Developer','Python,ML');
$ INSERT INTO Job_Predict (Job_Name,Skill_Set) VALUES ('Cloud Engineer','AWS,Azure,Gcloud');
$ INSERT INTO Job_Predict (Job_Name,Skill_Set) VALUES ('Solution Architecture','MongoDB,Python');
$ INSERT INTO Job_Predict (Job_Name,Skill_Set) VALUES ('JAVA Developer','JAVA,AngularJS,NodeJS');
$ INSERT INTO Job_Predict (Job_Name,Skill_Set) VALUES ('Manager','Multilingual');

$ retreive_sql = "SELECT * from Job_Predict;";

?>
