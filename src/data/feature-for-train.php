<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 0.2b
 */

//
// Database `technoli_mydb`
//

// `technoli_mydb`.`features`
$traits = [  "extraversion", "agreeableness", "conscientiousness", "neuroticism", "openness"];
$features = array(
  array('uid' => '100000184531749','extraversion' => '2.5','agreeableness' => '2.77778','conscientiousness' => '2.77778','neuroticism' => '2.5','openness' => '1.8'),
  array('uid' => '100000966526483','extraversion' => '4.625','agreeableness' => '4.33333','conscientiousness' => '4','neuroticism' => '2.625','openness' => '4.5'),
  array('uid' => '100000807245444','extraversion' => '2.375','agreeableness' => '3.55556','conscientiousness' => '2.66667','neuroticism' => '4','openness' => '3.6'),
  array('uid' => '1360550593','extraversion' => '3.5','agreeableness' => '3.66667','conscientiousness' => '2','neuroticism' => '2.25','openness' => '4.3'),
  array('uid' => '100001108193506','extraversion' => '2','agreeableness' => '4.33333','conscientiousness' => '2.66667','neuroticism' => '3','openness' => '3.3'),
  array('uid' => '100006599203697','extraversion' => '1.875','agreeableness' => '4.22222','conscientiousness' => '3','neuroticism' => '4.125','openness' => '3.3'),
  array('uid' => '659368463','extraversion' => '2.25','agreeableness' => '4.66667','conscientiousness' => '3.55556','neuroticism' => '3.375','openness' => '3.8'),
  array('uid' => '100001468972444','extraversion' => '2.875','agreeableness' => '4.44444','conscientiousness' => '3.88889','neuroticism' => '3','openness' => '3.9'),
  array('uid' => '100002083630229','extraversion' => '3.25','agreeableness' => '3.88889','conscientiousness' => '2.77778','neuroticism' => '2.125','openness' => '4.2'),
  array('uid' => '100003363377993','extraversion' => '3.625','agreeableness' => '3.22222','conscientiousness' => '3.77778','neuroticism' => '2.75','openness' => '4'),
  array('uid' => '100000745663429','extraversion' => '4','agreeableness' => '3.77778','conscientiousness' => '3.44444','neuroticism' => '2.25','openness' => '3.7'),
  array('uid' => '100003470353128','extraversion' => '3.75','agreeableness' => '3.77778','conscientiousness' => '2.88889','neuroticism' => '2.375','openness' => '3.8'),
  array('uid' => '100003271962779','extraversion' => '3.875','agreeableness' => '4.22222','conscientiousness' => '3.88889','neuroticism' => '1.625','openness' => '3.3'),
  array('uid' => '100001324430179','extraversion' => '2.375','agreeableness' => '3.88889','conscientiousness' => '3','neuroticism' => '2.625','openness' => '4.2'),
  array('uid' => '100001322059096','extraversion' => '4.125','agreeableness' => '4.33333','conscientiousness' => '3.77778','neuroticism' => '1.875','openness' => '4.6'),
  array('uid' => '100006927158741','extraversion' => '4.375','agreeableness' => '4.66667','conscientiousness' => '3.88889','neuroticism' => '1.625','openness' => '3.9')
);

/*$list=["uid","extraversion","agreeableness","conscientiousness","neuroticism","openness"];
$traits=["uid"=>[],"extraversion"=>[],"agreeableness"=>[],"conscientiousness"=>[],"neuroticism"=>[],"openness"=>[]];

foreach($features as $f)
{
	foreach($list as $l)
	{
		array_push($traits[$l],$f[$l]);
	}
}*/
//print_r($feature);



$like_category=["Non-profit organization", "Website", "Community", "Education", "Journalist", "Computers/internet website", "Politician", "Political organization", "Organization", "Tv channel", "App page", "Media/news/publishing", "Non-governmental organization (ngo)", "Community organization", "News/media website", "Political party", "Local business", "Public figure", "Education website", "Entertainment website", "Magazine", "Company", "School", "Just for fun", "Entertainer", "Product/service", "Interest", "Computers", "Studio", "Computers/technology", "Software", "Cause", "Personal blog", "Religion", "Electronics", "University", "Book", "Games/toys", "Tv show", "Movie", "Government organization", "Food/beverages", "Travel/leisure", "Professional sports team", "Cars", "Radio station", "Recreation/sports website", "Fictional character", "Author", "Telecommunication", "Camera/photo", "Music chart", "Clothing", "Athlete", "Retail and consumer merchandise", "Video game", "Book series", "Music", "Musician/band", "Book genre", "Actor/director", "Teacher", "Artist", "Society/culture website", "Writer", "Personal website", "News personality", "Public places", "Consulting/business services", "Sports league", "Education/work status", "Outdoor gear/sporting goods", "Automobiles and parts", "Sports/recreation/activities", "Restaurant/cafe", "Food", "Sports venue", "Movie character", "Government official", "Arts/humanities website", "Bank/financial institution", "Sport", "City", "Song", "Internet/software", "Household supplies", "Attractions/things to do", "Record label", "Comedian", "Arts/entertainment/nightlife", "Airport", "Science website", "Doctor", "Waterfall", "Album", "Bar", "Health/beauty", "Regional website", "Reference website", "Musical genre", "Tv", "Tv/movie award", "Health/medical/pharmaceuticals", "Food/grocery", "Business person", "Jewelry/watches", "Professional services", "Amateur sports team", "Shopping/retail", "Library", "Movie theater", "Literary editor", "Other", "Monarch", "Tv network", "Aerospace/defense", "Publisher", "Work position", "Book store", "Language", "Tv genre", "Small business", "Music video", "Community/government", "Church/religious organization", "Teens/kids website", "Country", "Field of study", "Movie general", "Profession", "Legal/law", "Automotive", "Real estate", "Pet services", "Engineering/construction", "Home improvement", "Home/garden website", "Transport/freight", "Tours/sightseeing", "Hotel", "Chef", "Vitamins/supplements", "Phone/tablet", "Local/travel website", "Business services", "Neighborhood", "Government website", "Hospital/clinic", "Health/wellness website", "Landmark", "Diseases", ];

$inputs=array();
foreach($features as $f)
{
	//array_push($inputs,array("uid"=>$f["uid"]));
	$inputs[$f["uid"]]=[];
}
foreach($features as $in)
{
	$id=$in['uid'];
	print $id;
	$file=fopen($id.".data","r");
	if($file!=NULL)
	{
		$data=unserialize(fread($file,filesize($id.'.data')));
		fclose($file);

		$gender=$data['gender'];
		$groups=$data["groups"];
		$friends=$data["friends"];
		$likes=$data['likes'];
		$status=$data['statuses'];
		$lc_fraction=[];

		foreach($like_category as $c)
		{
			$lc_fraction[$c]=0;
		}

		foreach($likes["data"] as $like)
		{
			$lc_fraction[$like['category']]+=1;
		}

		$group_count=count($groups["data"]);
		$like_count=count($likes["data"]);
		$sgf_count=0;
		$ogf_count=0;
		foreach($friends["data"] as $friend)
		{
			if(isset($friend['gender'])&&$friend['gender']==$gender)
			{
				$sgf_count+=1;
			}
			else
				$ogf_count+=1;
		}
		$status_count=count($status['data']);
		// find categorywise likes
		
		
		
		$inputs[$id]['friend_count']=($ogf_count+$sgf_count)/5000;
		$inputs[$id]['sgf/tf']=$sgf_count/($sgf_count+$ogf_count);
		$inputs[$id]['ogf/tf']=$ogf_count/($sgf_count+$ogf_count);
		$inputs[$id]['sgf/ogf'] = $sgf_count / $ogf_count ;
		$inputs[$id]['group_count']=$group_count/5000;
		$inputs[$id]['like_count']=$like_count/5000;
		$inputs[$id]['status_count']=$status_count/5000;
		foreach($like_category as $lc)
		{
			$inputs[$id][$lc.'/total_likes'] = $lc_fraction[$lc]/$like_count;
		}
	}
	else
	{
		print "unable to open file\n";
	}
}
	
//print_r($inputs);
$out="outputs = {";
foreach($features as $f)
{
	$out=$out."'".$f['uid']."' : (";
	foreach($traits as $t)
	{
		$out = $out.$f[$t].", ";
	}
	$out = $out.'), ';
}
$out=$out."}\n";

$in="inputs = {";
foreach($features as $f)
{
	$id=$f['uid'];
	$in=$in."'".$id."' : (";
	/*
			$inputs[$id]['friend_count']=($ogf_count+$sgf_count)/5000;
		$inputs[$id]['sgf/tf']=$sgf_count/($sgf_count+$ogf_count);
		$inputs[$id]['ogf/tf']=$ogf_count/($sgf_count+$ogf_count);
		$inputs[$id]['sgf/ogf'] = $sgf_count / $ogf_count ;
		$inputs[$id]['group_count']=$group_count/5000;
		$inputs[$id]['like_count']=$like_count/5000;
		$inputs[$id]['status_count']=$status_count/5000;
		foreach($like_category as $lc)
		{
			$inputs[$id][$lc.'/total_likes'] = $lc_fraction[$lc]/$like_count;
		}
	*/
	$in = $in.$inputs[$id]['friend_count'].", ";
	$in = $in.$inputs[$id]['sgf/tf'].", ";
	$in = $in.$inputs[$id]['ogf/tf'].", ";
	$in = $in.$inputs[$id]['sgf/ogf'].", ";
	$in = $in.$inputs[$id]['group_count'].", ";
	$in = $in.$inputs[$id]['like_count'].", ";
	$in = $in.$inputs[$id]['status_count'].", ";
	foreach($like_category as $lc)
	{
		$in = $in.$inputs[$id][$lc.'/total_likes'].", ";
	}
	$in = $in."), \ "."\n";
}
$in=$in."}\n";



print $out;
print $in;