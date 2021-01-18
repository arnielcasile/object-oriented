<?php

class Connection
{
    private $servername;
    private $database;
    private $username;
    private $password;

    public function connect_database()
    {

        $this->set_server("localhost");
        $servername = $this->get_server();

        $this->set_database("enrollment_sys");
        $database = $this->get_database();

        $this->set_username("root");
        $username = $this->get_username();

        $this->set_password("");
        $password = $this->get_password();

        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        return $conn;
    }

    // getters and setters for username
    public function set_username($username)
    {
        $this->username = $username;
    }
    public function get_username()
    {
        return $this->username;
    }

    // getters and setters for username
    public function set_password($password)
    {
        $this->password = $password;
    }
    public function get_password()
    {
        return $this->password;
    }

    // getters and setters for username
    public function set_database($database)
    {
        $this->database = $database;
    }
    public function get_database()
    {
        return $this->database;
    }

    // getters and setters for username
    public function set_server($servername)
    {
        $this->servername = $servername;
    }
    public function get_server()
    {
        return $this->servername;
    }
}
