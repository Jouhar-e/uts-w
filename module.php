<?php

    class DB{
        private $host = "192.168.0.102";
        private $user = "admin";
        private $pass = "admin";
        private $database = "data-uts";
        private $koneksi;

        public function __construct()
        {
            $this->koneksi = $this->koneksiDB();
        }
        
        public function koneksiDB(){
            $koneksi = mysqli_connect($this->host,$this->user,$this->pass,$this->database);
            return $koneksi;
        }

        public function getData($sql){
            $result = mysqli_query($this->koneksi,$sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            if (!empty($data)) {
                return $data;
            }
        }
      
        public function getValue($sql){
            $result = mysqli_query($this->koneksi,$sql);
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
        
        public function getCount($sql){
            $result = mysqli_query($this->koneksi,$sql);
            $count = mysqli_num_rows($result);
            return $count;
        }

        public function exc($sql){
            $result =  mysqli_query($this->koneksi,$sql);
        }

        function dialog($msg) {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }

    }

?>