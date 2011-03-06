<?php /* Add this to your Drupal Theme Template */ ?>

<?php

//Function to add Auto-Updating Copyright Date
function yourthemenamehere_copyrightdate($copyrightText, $copyrightSeperator, $copyrightDate) {
	//Set Variables
	$output = '';
	$copyrightCurrentDate = Date('Y');
  		
  	$output = $copyrightText . $copyrightDate;
  	
  	//Has the website outlasted a year? TEST IT!	
  	if ($copyrightDate != $copyrightCurrentDate) {
 		$output .= $copyrightSeperator . $copyrightCurrentDate;
  		};

	return $output;
}


?> 