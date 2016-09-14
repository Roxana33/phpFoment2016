<?php

    if (empty($_GET["num1"]) || empty($_GET["num2"]))
		{
        echo "Todo está vacío";
    } 
	else {
        $_GET["num1"] + $_GET["num2"];
    }

?>