<?php
    class StoreData {
        
        // constructor
        function __construct() {}
     
        // destructor
        function __destruct() {}
        
        /*
         *  Check the name of the file in order not to override an existing file
         */
        private function checkFilepath($fp){
            if(file_exists($fp.".json")) return $this->checkFilepath($fp."x");
            return  $fp;
        }
        
        /**
         *  Receive a file path and json data to store on that file
         */
        public function storeData($filepath,$data){
            // Check if parameters are set
            if(empty($filepath) || empty($data)) return "! No parameters set";  
            // Define the file
            $file = $this->checkFilepath($filepath).".json";
            // Write data on the file
            if(file_put_contents($file,$data)) return "File correctly saved as: ".$file."\nReload the page to see the link below.";
            return "Error, file not saved";
        }        
        
    }

?>