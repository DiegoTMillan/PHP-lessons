<?php
class Database {
    private $conn, $result;
    function __construct($host, $user, $password, $db)
    {
        $this -> conn = new mysqli($host, $user, $password, $db);
        if ($this ->conn -> connect_error) {
            die('fatal error connecting to database');
        }
        // print 'successfully connected';
    }
    function setQuery($query){
       $this -> result = $this -> conn ->query($query);
       if (!$this->result) {
          die('Error in query');
       }
    }
    function generateRows(...$params)
    {
        $numRows = $this -> result -> num_rows;
        for ($i=0; $i < $numRows; $i++) { 
            $row = $this -> result -> fetch_array(MYSQLI_ASSOC);
            print '<tr>';
            foreach ($params as $value) {
                print '<td>' . htmlspecialchars($row[$value]) . '</td>';
            }
            print '</tr>';
        }
        $this -> result->close();
        $this ->conn -> close ();
    }
    function insertData ($table, $types, $data, ...$params)
    {
        $query= 'INSERT into ' . $table . ' set '; 
        $formattedParams = implode(',', $params);
        $query .= $formattedParams;
        // print $query;
        $stmt = $this -> conn ->stmt_init();
        $stmt -> prepare($query);
        if ($stmt === false) {
            die('prepare has failed' . $this->conn->error);
        }
        $this-> result = $stmt -> bind_param($types, $data['name'],$data['countrycode'],$data['district'],$data['population']);
        if ($this -> result === false) {
            die('bind_param has failed');
        }
        $this->result=$stmt->execute();
        if ($this -> result === false) {
            die('execute has failed' . $stmt->error);
        }
        $stmt->close();
        // $this ->conn -> close (); 
    } 
        function updateData ($table, $types, $data, $field, $id)
        {
            $query= 'UPDATE' . $table . ' set ' . $field . ' where id=?' ; 
            // print $query;
            $stmt = $this -> conn ->stmt_init();
            $stmt -> prepare($query);
            if ($stmt === false) {
                die('prepare has failed' . $this->conn->error);
            }
            $this-> result = $stmt -> bind_param($types, $data, $id);
            if ($this -> result === false) {
                die('bind_param has failed');
            }
            $this->result=$stmt->execute();
            if ($this -> result === false) {
                die('execute has failed' . $stmt->error);
            }
            $stmt->close();
            // $this ->conn -> close ();
        } 

        function deleteData ($table, $types, $id)
        {
            $query= 'DELETE FROM' . $table  . ' where id=?' ;
            // print $query;
            $stmt = $this -> conn ->stmt_init();
            $stmt -> prepare($query);
            if ($stmt === false) {
                die('prepare has failed' . $this->conn->error);
            }
            $this-> result = $stmt -> bind_param($types, $id);
            if ($this -> result === false) {
                die('bind_param has failed');
            }
            $this->result=$stmt->execute();
            if ($this -> result === false) {
                die('execute has failed' . $stmt->error);
            }
            $stmt->close();
            // $this ->conn -> close (); 
        }
}
