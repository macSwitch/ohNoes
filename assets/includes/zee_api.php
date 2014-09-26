
 <?php
    $json_string_zee = file_get_contents("https://eu.api.battle.net/d3/profile/zubei-2653/?locale=en_GB&apikey=mgqy8nb6nfktdw39q5mm7de2jwjpqcc7");
     $parsed_json_zee = json_decode($json_string_zee);
     $zeeBattleTag = $parsed_json_zee->{'battleTag'};
     $zeeLastPlayed = $parsed_json_zee->{'lastHeroPlayed'};
     $zeeHeroName = "x";
     $zeeHCpara = $parsed_json_zee->{'paragonLevelHardcore'};
     $zeeHCSpara = $parsed_json_zee->{'paragonLevelSeasonHardcore'};

	$zeeHeroID_0 = $parsed_json_zee->{'heroes'}[0]->{'id'};
     $zeeHeroID_1 = $parsed_json_zee->{'heroes'}[1]->{'id'};
     $zeeHeroID_2 = $parsed_json_zee->{'heroes'}[2]->{'id'};
     $zeeHeroID_3 = $parsed_json_zee->{'heroes'}[3]->{'id'};
     $zeeHeroID_4 = $parsed_json_zee->{'heroes'}[4]->{'id'};
     $zeeHeroID_5 = $parsed_json_zee->{'heroes'}[5]->{'id'};
     $zeeHeroID_6 = $parsed_json_zee->{'heroes'}[6]->{'id'};
     $zeeHeroID_7 = $parsed_json_zee->{'heroes'}[7]->{'id'};
     $zeeHeroID_8 = $parsed_json_zee->{'heroes'}[8]->{'id'};
     $zeeHeroID_0 = $parsed_json_zee->{'heroes'}[9]->{'id'};
     $zeeHeroID_10 = $parsed_json_zee->{'heroes'}[10]->{'id'};

     if ($zeeLastPlayed === $zeeHeroID_0) { 
     	$q = 0;
     	// $zeeHeroName = $parsed_json->{'heroes'}[0]->{'name'};
     } else if ($zeeLastPlayed === $zeeHeroID_1) { 
     	$q = 1;
     } else if ($zeeLastPlayed === $zeeHeroID_2) { 
     	$q = 2;
     } else if ($zeeLastPlayed === $zeeHeroID_3) { 
     	$q = 3;
     } else {
     	$q = 111;
     };

     $zeeHeroName = $parsed_json_zee->{'heroes'}[$q]->{'name'};

 ?>