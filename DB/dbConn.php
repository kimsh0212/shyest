<?php
/**
 * Created by PhpStorm.
 * User: gimseunghwan
 * Date: 2018. 3. 14.
 * Time: PM 5:40
 */
    class DBConn {

        private $db_user;
        private $db_password;
        private $db_nm;
        private $db_host;
        private $db_port;
        private $db_charset;
        private $db_link;


        public function DBConn($host, $user, $password, $db, $port, $charset){
            $this->db_host = $host;
            $this->db_user = $user;
            $this->db_password = $password;
            $this->db_port = $port;
            $this->db_charset = $charset;
            $this->db_nm = $db;
        }
        public function db_conn(){
            $link = mysqli_connect($this->db_host, $this->db_user, $this->db_password, $this->db_nm, $this->db_port);

            if($link->connect_errno){
                echo $link->connect_error;
            }

            if(!$link->set_charset($this->db_charset)){
                echo "Database Change Charset Error : ".$link->connect_error;
            }

            $this->db_link = $link;
        }

        public function select_one($query){
            $result = $this->db_link->query($query) or die ($this->_connect->error);
            $in = 0;
            while($row = $result->fetch_array()){
                $return_data[$in] = $row;
                $in++;
            }

            $this->db_link->close();
            return $result;
        }
    }
?>