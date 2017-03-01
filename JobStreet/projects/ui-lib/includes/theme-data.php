<?php
function BuildMenu($style,$theme,$com){
	switch ($theme){
		case "siva":
			$component=array("Templates","Header & Footer","Components","Navigation","Cards","Facet","Loader","Job Listing","Resume","Action Bar");break;
		case "myjs":
			$component=array("Templates","Header & Footer","Cards","Tab","Section","Side Navigation","Resume Preview","Edit Resume");break;
	}

	if($style=="list"){
		foreach($component as $item){
			echo "<li><a href=\"".$theme."/".slug($item).".php\"";
				if($item==$com){echo " class=\"active\"";}
			echo ">".$item."</a></li>";
		}
	}
	else{
		foreach($component as $item)
		echo "<option value=\"".$theme."/".slug($item).".php\">".$item."</option>";
	}
}

function slug($str){
	$tmp = str_replace(' ','-',$str);
	$tmp = preg_replace('/[^A-Za-z0-9\-]/','',$tmp);
	$tmp = preg_replace('/-+/','-',$tmp);
	$tmp = strtolower($tmp);
	return $tmp;
}

function BuildTemplates($theme,$com) {
	switch ($theme){
		case "siva":
			$component=array(
				"Basic Template",
				"Job Listing",
				"Top bar with Facet",
				"Top bar with Accordion Facet",
				"Top bar with Action bar",
				"Top bar with back button (in mobile view)",
				"Cards (3 Columns)",
				"Cards (2 Columns)",
				"Resume",
				"Resume (Talent Search)",
				"Resume for retrieved (Talent Search)",
				"Talent Search (Landing page) with contact us",
				"Talent Search (No matches found)",
				"Retrieved Resumes",
				"Retrieved Resumes (No retrieved resumes)",
				"User Management",
				"Credit Balance",
				"Order Detail",
				"Success Updated",
				"Matching from Job Ad",
				"Welcome Siva"
			);
			break;
		case "myjs":
			$component=array(
				"Basic Template",
				"Homepage",
				"Job Search",
				"Resume Preview",
				"Edit Resume",
				"Edit LiNa Profile",
				"Interview Request",
				"Online Application",
				"Homepage Confirmation Alert",
				"Referral Confirmation",
				"Referral Friend List",
				"Error Page 404",
				"Job Invitation - Interested",
				"Job Invitation - Declined",
				"Job Invitation - Success Respond",
				"Job Invitation Expired"
			);
			break;
	}
	
	foreach($component as $item) {
		echo "<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">";
			echo '<figure class="thumbnail">';
            	echo "<div class='action-btn animate'>";
                    echo "<a href=\"../examples/" . $theme . "/" .slug($item).".html\" class='icon-download x2 download-btn animate' title='Download' download href='#name' ></a>";
				    echo "<a href=\"../examples/" . $theme . "/" .slug($item).".html\" target=\"_blank\" class='icon-eye-opened x2 preview-btn animate' title='Preview' href='#name'></a>";
                echo "</div>";
				echo "<a href=\"../examples/" . $theme . "/" .slug($item).".html\" target=\"_blank\">";
					echo "<img src=\"../images/" .$theme. "/" . slug($item) . ".png\" title=\"".$item."\">";
				echo "</a>";
				echo "<figcaption>".$item."</figcaption>";
			echo '</figure>';
		echo "</div>";
	}
}
?>
