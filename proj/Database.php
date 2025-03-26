<?php
class Database
{
    public $connection;
    public function __construct($config, $username = 'root', $password = '')
    {


        //http_build_quey is used to build the query string from the provided dataset
        // here insted of & to seperate the query params we can pass third  optional parameter to  choose custom seperator (;) for our use case to refactor.
        // mysql:host=localhost;port=3306.....
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $param = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($param);
        return $statement;
    }
}