<?php 
    class DriveCoolerDB
    {
        const DSN = "mysql:host=localhost;dbname=drivecooler";
        const USER = "root";
        const PASSWD = "";

        //haal alle trainingen van een user op
        function GetTrainingByUser($userId){		
            $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

            $statement = $pdo->prepare("SELECT * FROM `usertraing` WHERE `userId` = :userId");  
            
            $statement->bindValue(":userId", $userId, PDO::PARAM_INT);

            $statement->execute(); 
            
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            return $rows;
        }

        //haal alle trainingen  op
        function GetAllTraining(){		
            $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

            $statement = $pdo->prepare("SELECT * FROM `training`");  

            $statement->execute(); 
            
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            return $rows;
        }

        //haal 1 training op 
        function GetTraining($trainingId){		
            $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

            $statement = $pdo->prepare("SELECT * FROM `training` WHERE `id` = :trainingId");  

            $statement->bindValue(":trainingId", $trainingId, PDO::PARAM_INT);

            $statement->execute(); 
            
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            return $rows;
        }

        //haal 1 user op 
        function GetUser($userId){		
            $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

            $statement = $pdo->prepare("SELECT * FROM `user` WHERE `id`= :userId");  
            
            $statement->bindValue(":userId", $userId, PDO::PARAM_INT);

            $statement->execute(); 
            
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            return $rows;
        }
        
        //haal alle users op
        function GetUsers(){		
            $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

            $statement = $pdo->prepare("SELECT * FROM `user`");  

            $statement->execute(); 
            
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            return $rows;
        }

        //haal 1 user op 
        function GetRatingByUser($userId){		
            $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

            $statement = $pdo->prepare("SELECT * FROM `ratings` WHERE `userId` = :userId");  
            
            $statement->bindValue(":userId", $userId, PDO::PARAM_INT);

            $statement->execute(); 
            
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            return $rows;
        }
    }
?>