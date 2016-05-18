<html>
    <head>
        <script src="./assets/js/helper.js"></script>
        <script src="./assets/js/main.js"></script>
        <title>AngelList API - Request data</title>
        <style>
            body{margin:0;padding:0;background:#f2f2f2;text-align:center;color:#567;font-family:sans-serif;padding-top:20px;}
            div{width:90%;max-width:500px;background:#fbfbfb;margin:10px auto;padding:15px;border-radius:3px;text-align:left;}
            input[type=submit]{background:#444;color:#fff;margin:5px;cursor:pointer;}
            input{border:none;border-radius:3px;background:#fff;padding:5px;}
            a{color:#567;text-decoration:none;font-style:italic;}
        </style>
    </head>
    <body>
        <h2>AngelList API - Request data</h2>
        <div>
            <label>FILENAME</label>
            <input type="text" id="filename" placeholder="FILENAME">
        </div>
        <div>
            <label>TOKEN</label>
            <input type="text" id="token">
        </div>
        <div>
            <h4>GET REQUEST</h4>
            <form onsubmit="return getData('get');">
                <input type="url" id="get_url" placeholder="GET URL"><br>
                <input type="submit" value="REQUEST DATA">
            </form>
        </div>
        <div>
            <h4>POST REQUEST</h4>
            <form onsubmit="return getData('post');">
                <input type="url" id="post_url" placeholder="POST URL">
                <input type="text" id="post_parameters" placeholder="POST PARAMETERS"><br>
                <input type="submit" value="REQUEST DATA">
            </form>
        </div>
        
        <div>
            <h4>Current datasets</h4>
            <?php
                // List all current files
                $files = scandir("./data/");
                foreach($files as $file){
                    if($file != "." && $file != ".."){ ?>
                        <p><a href="./data/<?php echo $file;?>" target="_blank"><?php echo $file;?></a></p>   
                    <?php }
                }
            ?>
        </div>
    </body>
</html>