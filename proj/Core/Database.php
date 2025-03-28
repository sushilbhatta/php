<?php
namespace Core;
use PDO;

class Database{
    public $connection;
    public $statement;
    // __construct ensures  that the everytime the server runs the new instance of query is not created
    // since  without __construct the  PDO is created which might cause the perfomanace issues.
    public function __construct($config, $username = 'root', $password = 'root')
    {


        // *http_build_query is used to build the query string from the provided dataset of array.
        // *first argument is the data from which the string will be build,2nd argument is queryprefix, and third argument is argument seperator 
        // *here insted of "&" to seperate the query params we can pass third  optional parameter to  choose custom seperator (;) for our use case to refactor.
        // *we need to buiid this string=> mysql:host=localhost;port=3306;dbname=DBNAME;charset=utf8mb4
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $param = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($param);
       return $this;
    }
   
    function get(){
        return $this->statement->fetchAll();
    }
    
    public function find(){
        return $this->statement->fetch();
    }

    public function findOrFail(){
        $result=$this->find();

            if(!$result){
                abort();

            }
    return $result;
    }
}