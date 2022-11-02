<?php

//includ global config if needed for db configuration 
//require($_SERVER['DOCUMENT_ROOT']."/config.php");

/*
 * DatabaseUtils.php - A class of simple database utilities.
 *
 * Performs CRUD operations using PDO (MySQL) prepared statements.
 *
 * Author: bencentra (https://gist.github.com/bencentra/92228e1f4139436c4153)
 * Examples: http://bencentra.com/code/2014/11/13/simple-database-class-php.html 
 */
class DatabaseUtils
{

    // Database connection object
    private $pdo;

    // Create a PDO object and connect to the database
    public function __construct($DBName = '', $DBHost = '', $DBUser = '', $DBPass = '')
    {
        //global $DBName,$DBHost,$DBUser,$DBPass;
        try {

            /* $dbName = 'dbname';
            $dbHost = '127.0.0.1';
            $dbUser = 'root';
            $dbPass = 'anand'; */
            
            
            // Instantiate the PDO object
            $this->pdo = new PDO(
                // Use MySQL database driver
                "mysql:dbname=$DBName;host=$DBHost", $DBUser, $DBPass, 
                // Set some options
                array(
                    // Return rows found, not changed, during inserts/updates
                    PDO::MYSQL_ATTR_FOUND_ROWS => true,
                    // Emulate prepares, in case the database doesn't support it
                    PDO::ATTR_EMULATE_PREPARES => true,
                    // Have errors get reported as exceptions, easier to catch
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    // Return associative arrays, good for JSON encoding
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ));
            
            $this->pdo->exec("set names 'utf8'");
        } catch (PDOException $e) {
            die('Database Connection Failed: ' . $e->getMessage());
        }
    }

    // Perform a SELECT query
    public function select($sql, $data = array())
    {
        try {
            // Prepare the SQL statement
            $stmt = $this->pdo->prepare($sql);
            // Execute the statement
            if ($stmt->execute($data)) {
                // Return the selected data as an assoc array
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (Exception $e) {
            print_r($e->getMessage());
            return false;
        }
    }

    // Perform an INSERT query
    public function insert($sql, $data = array())
    {
        try {
            // Prepare the SQL statement
            $stmt = $this->pdo->prepare($sql);
            //print_r($stmt);
            // Execute the statement
            if ($stmt->execute($data)) {
                //$stmt->debugDumpParams();
                // Return the number of rows affected
                return $stmt->rowCount();
            } else {
                //print_r($this->pdo->errorInfo());
                //die('ppppppppppppppp');
                return false;
            }
        } catch (Exception $e) {
            print_r($e->getMessage());
            return false;
        }
    }

    // Perform an UPDATE query
    public function update($sql, $data = array())
    {
        return $this->insert($sql, $data);
    }

    // Perform a REPLACE query
    public function replace($sql, $data = array())
    {
        return $this->replace($sql, $data);
    }

    // Perform a DELETE query
    public function delete($sql, $data = array())
    {
        return $this->insert($sql, $data);
    }

    // Get the ID of the last row inserted
    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
}

?>
