<?php
class Francis{
 /**
     * Simple message responder.
     *
     * @param String $input 
     * @return String  Response
     */
	function yo($input){
	$input=  str_replace(" ","",$input);//I remove white spaces

	if (ctype_upper( $input) ) {//if all upper case
    
			  return 'Chill!';	
	} //end 1st IF

	elseif (substr($input, -1) == '?' ){//check if string end with '?''
		 $input= str_replace('?', '', $input);//remove '?'

		 if(ctype_upper( $input)){ //if all upper case 
			  return 'Chill!';
		  }
		
		 else{
			  return 'Sure.'; 
		 }
	} 
	elseif(substr($input, -1) == '!'){//check if string end with '!'

		  $input= str_replace('!', '', $input);//remove '!'

		  if(ctype_upper( $input)){ //if all upper case 
			  return 'Chill!';
		  }
		  elseif(ctype_alpha($input)&&!ctype_upper( $input)){//if all alphabet
		  		 return 'Whatevs.';
		  }
		  elseif(preg_match('/[^A-Za-z0-9]/', $input)||preg_match('/[0-9]+/', $input)) {//check contains num or special character

		  		 return 'Chill!';
		  }
		}
	
	elseif(empty($input)||strlen($input)==0){
		
		 return 'See if I care!';
	}

	else{
		 return 'Whatevs.';
	}


	}// end function yo
}



/*	//Check if ends with '.' or have line break or only check last character if it is number ( bc each digit separated by comma)
	elseif (substr($input, -1) == '.' ||strpos($input, "\n") !== FALSE||is_numeric(substr($input, -1))){
		  return 'Whatevs.';
	}
	//check empty string or lenght of string is zero
	elseif(empty($input)||strlen($input)==0){
		
		 return 'See if I care!';
	}
	elseif(preg_match('/[^A-Za-z0-9]/', $input)||
		preg_match('/[0-9]+/', $input)|| (substr($input, -1) != '?' ))// check contains special characters or numbers  
		 {	
		  return 'Chill!';
		 }*/

?>

