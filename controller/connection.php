<?php

 class Connection{

	protected $db_host = "localhost";
	protected $db_name = "Ferretti";
	protected $db_username = "root";
	protected $db_pass = "";        
        private $result;
        protected $rows = array();

	private $connection;

	public function open_connection(){
            $this->connection = new mysqli($this->db_host, $this->db_username, $this->db_pass, $this->db_name);
            $this->connection->set_charset("utf8");
                
            if($this->connection->connect_errno){
                echo "hubo un error";
            }
	}
	
	public function close_connection(){
            $this->connection->close();
	}
        
        public function execute_query(){
            
            $this->open_connection();
            $this->result = $this->connection->query("SELECT * FROM users WHERE username='".$_GET['username']. 
                    "' and password='".$_GET["password"]."' LIMIT 1;"); //devuelve un objeto mysqli_result            
            $this->close_connection();    
            
            if ($this->result->num_rows == 0){
                session_start();
                $_SESSION["error_de_log"] = "Error";
                header("Location: ../view/ingresar.php");
            }
            
            if($this->result->num_rows > 0){
                session_start();
                $_SESSION["log"] = "autorizado";
                header("Location: ../view/index.php");
            }
            
            while($fila = $this->result->fetch_array(MYSQLI_NUM)){                
                echo "<h3 style='color: blue;'>Usuario: </h3>";
                echo "id: ". $fila[1] . '<br>';
                echo $this->result->num_rows;
              
            }
           
        }       

}

$modelo = new Connection();
$modelo->execute_query();


//$modelo->get_results_from_query();




?>

