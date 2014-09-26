
 <?php
    $json_string_trev = file_get_contents("https://eu.api.battle.net/d3/profile/DeathSlap-2978/?locale=en_GB&apikey=mgqy8nb6nfktdw39q5mm7de2jwjpqcc7");
     $parsed_json_trev = json_decode($json_string_trev);
     $trevBattleTag = $parsed_json_trev->{'battleTag'};
     $trevLastPlayed = $parsed_json_trev->{'lastHeroPlayed'};
     $trevHeroName = "x";
     $trevHCpara = $parsed_json_trev->{'paragonLevelHardcore'};
     $trevHCSpara = $parsed_json_trev->{'paragonLevelSeasonHardcore'};

	$trevHeroID_0 = $parsed_json_trev->{'heroes'}[0]->{'id'};
     $trevHeroID_1 = $parsed_json_trev->{'heroes'}[1]->{'id'};
     $trevHeroID_2 = $parsed_json_trev->{'heroes'}[2]->{'id'};
     $trevHeroID_3 = $parsed_json_trev->{'heroes'}[3]->{'id'};
     $trevHeroID_4 = $parsed_json_trev->{'heroes'}[4]->{'id'};
     $trevHeroID_5 = $parsed_json_trev->{'heroes'}[5]->{'id'};
     $trevHeroID_6 = $parsed_json_trev->{'heroes'}[6]->{'id'};
     $trevHeroID_7 = $parsed_json_trev->{'heroes'}[7]->{'id'};
     $trevHeroID_8 = $parsed_json_trev->{'heroes'}[8]->{'id'};
     $trevHeroID_0 = $parsed_json_trev->{'heroes'}[9]->{'id'};
     $trevHeroID_10 = $parsed_json_trev->{'heroes'}[10]->{'id'};

     if ($trevLastPlayed === $trevHeroID_0) { 
     	$q = 0;
     	// $trevHeroName = $parsed_json->{'heroes'}[0]->{'name'};
     } else if ($trevLastPlayed === $trevHeroID_1) { 
     	$q = 1;
     } else if ($trevLastPlayed === $trevHeroID_2) { 
     	$q = 2;
     } else if ($trevLastPlayed === $trevHeroID_3) { 
     	$q = 3;
     } else {
     	$q = 111;
     };

     $trevHeroName = $parsed_json_trev->{'heroes'}[$q]->{'name'};

 ?>