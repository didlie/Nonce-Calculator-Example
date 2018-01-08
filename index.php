<?php
/******* free to use, free to sell, free to change, per developer/owner *****/
/***** MIT License **********************************************************/

set_time_limit(300);//required for long calculation times

include "functions.php";//include the functions

$difficulty = 5;//number of zeros that begin the successful hash result

nonce_calculator($difficulty);
