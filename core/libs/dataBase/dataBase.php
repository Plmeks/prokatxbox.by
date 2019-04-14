<?php
	class DataBase extends PDO {
		function __construct(){
            $dsn = constant('DB_TYPE') .":" ."host=" .constant('DB_HOST') .";" ."dbname=" .constant('DB_NAME') .";" ."charset=utf8";
            $user = constant('DB_USER');
            $password = constant('DB_PASSWORD');

            try {
                parent::__construct($dsn, $user, $password);
                // Fot showing exceptions
                parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                parent::setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch(PDOException $e){
                //die("Connection failed: " . $e->getMessage());
                echo "Connection failed: " . $e->getMessage();
            }

		}
	}