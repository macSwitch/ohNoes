
 <?php
    $json_string_mac = file_get_contents("https://eu.api.battle.net/d3/profile/mac-2679/?locale=en_GB&apikey=mgqy8nb6nfktdw39q5mm7de2jwjpqcc7");
     $parsed_json_mac = json_decode($json_string_mac);
     $macBattleTag = $parsed_json_mac->{'battleTag'};
     $macLastPlayed = $parsed_json_mac->{'lastHeroPlayed'};
     $macHeroName = "x";
     $macHCpara = $parsed_json_mac->{'paragonLevelHardcore'};
     $macHCSpara = $parsed_json_mac->{'paragonLevelSeasonHardcore'};

	 $macHeroID_0 = $parsed_json_mac->{'heroes'}[0]->{'id'};
     $macHeroID_1 = $parsed_json_mac->{'heroes'}[1]->{'id'};
     $macHeroID_2 = $parsed_json_mac->{'heroes'}[2]->{'id'};
     $macHeroID_3 = $parsed_json_mac->{'heroes'}[3]->{'id'};
     $macHeroID_4 = $parsed_json_mac->{'heroes'}[4]->{'id'};
     $macHeroID_5 = $parsed_json_mac->{'heroes'}[5]->{'id'};
     $macHeroID_6 = $parsed_json_mac->{'heroes'}[6]->{'id'};
     $macHeroID_7 = $parsed_json_mac->{'heroes'}[7]->{'id'};
     $macHeroID_8 = $parsed_json_mac->{'heroes'}[8]->{'id'};
     $macHeroID_0 = $parsed_json_mac->{'heroes'}[9]->{'id'};
     $macHeroID_10 = $parsed_json_mac->{'heroes'}[10]->{'id'};

     if ($macLastPlayed === $macHeroID_0) { 
     	$q = "eee";
     	// $macHeroName = $parsed_json->{'heroes'}[0]->{'name'};
     } else if ($macLastPlayed === $macHeroID_1) { 
     	$q = 1;
     } else if ($macLastPlayed === $macHeroID_2) { 
     	$q = 2;
     } else if ($macLastPlayed === $macHeroID_3) { 
     	$q = 3;
     } else {
     	$q = 111;
     };

     $macHeroName = $parsed_json_mac->{'heroes'}[$q]->{'name'};

 ?>