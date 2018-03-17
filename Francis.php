
<?php
class Francis{
 /**
     * Simple message responder.
     * author: Steven Ly
     * @param String $input 
     * @return String  Response
     */
	function yo($input){
	$input=  str_replace(" ","",$input);//I remove white spaces

		if (ctype_upper( $input) ) {//if all upper case
	    
				  return 'Chill!';	
		} //end 1st IF

		elseif (substr($input, -1) == '?' ){//check if end with '?''
			 
			 $input= str_replace('?', '', $input);//remove '?'

			 if(ctype_upper( $input)){ //if all upper case 
				  return 'Chill!';
			  }
			 else{
				  return 'Sure.'; 
			 }
		} 
		elseif(substr($input, -1) == '!'){//check if  end with '!'

			  $input= str_replace('!', '', $input);//remove '!'

			  if(ctype_upper( $input)){ //if all upper case 
				  return 'Chill!';
			  }
			  elseif(ctype_alpha($input)&&!ctype_upper( $input)){//if all alphabet
			  		 return 'Whatevs.';
			  }
			  elseif(preg_match('/[^A-Za-z0-9]/', $input)||preg_match('/[0-9]+/', $input)) {//check contains nums or special characters

			  		 return 'Chill!';
			  }
			}
		
		elseif(empty($input)||strlen($input)==0){// check if empty or lenght is zero
			
			 return 'See if I care!';
		}
		else{
			 return 'Whatevs.';
		}

	}// end function yo
}

?>

