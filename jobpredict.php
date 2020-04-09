<!DOCTYPE html>
<html>
    <head>
        <title>Job Search</title>
    <link rel = "stylesheet" type = "text/css" href = "jobpredict.css" />
</head>
    <body>
        <div id="login-box" >
              <h1 align="center">Job Search</h1>
              <form name="myform" action="jobpredict.php" method="post" />
              <input type="text" class= "center-block" name="skill1" placeholder="SKILL 1"  required />
              <input type="text" class= "center-block" name="skill2" placeholder="SKILL 2"  required />
              <input type="text" class= "center-block" name="skill3" placeholder="SKILL 3"  required />
              <input type="text" class= "center-block" name="skill4" placeholder="SKILL 4"  required/>
              <input type="submit" class= "center-block" name="signup_submit" value="Search" />
              </form>
            </div> 
            <?php
                include "db.php";
                include "sql.php";
                $skill_1 = strtolower($_POST["skill1"]);
                $skill_2 = strtolower($_POST["skill2"]); 
                $skill_3 = strtolower($_POST["skill3"]); 
                $skill_4 = strtolower($_POST["skill4"]);
                
                $skill_set = array($skill_1,$skill_2,$skill_3,$skill_4);
                
                $connection->query($create_sql);
               // $connection->query($insert_sql);
                $result = mysqli_query($connection,$retreive_sql);
                $i=null;
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    
                    $skills = strtolower($row["Skill_Set"]);
                    $Job    = $row["Job_Name"];
                   
                    echo(strpos($skills,"mysql"));
                    if((strpos($skills,$skill_1))!==false && strpos($skills,$skill_2)!==false  && strpos($skills,$skill_3)!==false  &&strpos($skills,$skill_4)!==false ){
                         $i=$Job;
                    }
                }
                if($i==null){
                    echo"<script>alert('Unable To Find Any Jobs')</script>";
                }else{
                    $j = strtoupper($i);
                    echo"<script>alert('You Are Suitable for $j')</script>";
                }
                mysqli_close($connection);
            ?>
           
    </body>
    
</html>    
