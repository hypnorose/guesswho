<?php
	
	if(isset($_POST['option'])){
		echo $_POST['option'];
        
	}
    else{
        header("Location:option_panel.html");	
        exit();
    }





?>