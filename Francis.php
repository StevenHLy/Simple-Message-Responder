<?php
class Francis{
 /**
     * Simple message responder.
     * Author: Steven Ly
     * @param String $input 
     * @return String  Response
     */
	function yo($input){
		//remove white spaces
		$input=  str_replace(" ","",$input);
		// Answers 'Chill!' if you yell at him using all capital letters
		if (ctype_upper( $input) ) {
	    
				  return 'Chill!';	
		} 
		//first check if string ends with '?''
		//then check if string contains all uppercase: Answers 'Chill!'
		//otherwise: Answers 'Sure.'
		elseif (substr($input, -1) == '?' ){
			 
			 $input= str_replace('?', '', $input);//remove '?'
			 if(ctype_upper( $input)){ 
				  return 'Chill!';
			  }
			 else{
				  return 'Sure.'; 
			 }
		} 
		//Check if string ends with '!'
		//then check if string contains all uppercase: Answers 'Chill!'
		//then check if string contains all all alphabet and not all uppercase: Answers 'Whatevs.'
		//then check if string contains nums or special characters: Answers 'Chill!'
		elseif(substr($input, -1) == '!'){
			  $input= str_replace('!', '', $input);//remove '!'
			  if(ctype_upper( $input)){
				  return 'Chill!';
			  }
			  elseif(ctype_alpha($input)&&!ctype_upper( $input)){
			  		 return 'Whatevs.';
			  }
			  elseif(preg_match('/[^A-Za-z0-9]/', $input)||preg_match('/[0-9]+/', $input)) {
			  		 return 'Chill!';
			  }
		}
		//Check if string ends with empty String or lenght is zero 
		//then Says 'See if I Care!'
		elseif(empty($input)||strlen($input)==0){
			
			 return 'See if I care!';
		}
		//If string does not match all cases above: Answers 'Whatevs.'
		else{
			 return 'Whatevs.';
		}
	}// end function yo
  }//end class Francis
?>
