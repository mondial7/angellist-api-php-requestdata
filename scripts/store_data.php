<?php

    // Check parameters
    if(empty($_POST['url']) || empty($_POST['access_token']) || empty($_POST['filename']) || empty($_POST['type'])) die("Some parameter is empty.");

    if($_POST['type'] == "post"){
        // Post request
        
        // Check for parameters
        if(empty($_POST['parameters'])) die("No parameters set for the post request.");
        
        // Send the request
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => $_POST['parameters']
            )
        );
        $context  = stream_context_create($options);
        $data = file_get_contents($_POST['url'], false, $context);
    } else {
        // Get request
        $data = file_get_contents($_POST['url']."&access_token=".$_POST['access_token']);
    }
    
    // Handle errors
    if(!data) die("It was not possible to get the data from ".$_POST['url']);
    
    
    // Initialize object to store data
    require_once 'StoreData.php';
    $store = new StoreData();
    
    $default_dir = "../data/";
    
    // Store response
    echo $store->storeData($default_dir.$_POST['filename'], $data);

?>