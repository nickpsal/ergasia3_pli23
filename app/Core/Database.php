<?php    
    trait Database {
        // Private property to hold the database connection
        private $pdo;
        // Private method to connect to the database if needed
        private function connect() {
            // Check if the database connection has already been established
            if (!$this->pdo) {
                try {
                    // Construct the connection string using constants defined elsewhere
                    $string = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;

                    // Create a new PDO object with the connection string and login credentials
                    $this->pdo = new PDO($string, DB_USER, DB_PASS);

                    // Set error reporting mode to exceptions
                    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    // If an exception is thrown while connecting, throw a new exception with a custom error message
                    throw new Exception("Database connection failed: " . $e->getMessage());
                }
            }
            // Return the database connection object
            return $this->pdo;
        }

        // Public method to execute queries on the database
        public function query($query, $query_data = []) {
            // Record the time at which the query started
            $start_time = microtime(true);
            // Establish a connection to the database
            $con = $this->connect();
            try {
                // Prepare the SQL query
                $stm = $con->prepare($query);
                // Execute the query with any bound parameters
                $check = $stm->execute($query_data);
                // If the query failed to execute, throw a new exception with the error information
                if (!$check) {
                    throw new Exception("Query execution failed: " . implode(" ", $stm->errorInfo()));
                }
                // Fetch all results and return as an array of objects
                $result = $stm->fetchAll(PDO::FETCH_OBJ);
                return $result;
            } catch (PDOException $e) {
                // If an exception is thrown while executing the query, throw a new exception with a custom error message
                throw new Exception("Query execution failed: " . $e->getMessage());
            } finally {
                // Record the time at which the query ended
                $end_time = microtime(true);
                // Calculate the execution time in milliseconds
                $execution_time = ($end_time - $start_time) * 1000;
                // Log the query and execution time to the server's error log
                $log_message = $query . " [" . number_format($execution_time, 2) . " ms]";
                error_log($log_message);
            }
        }
    }
