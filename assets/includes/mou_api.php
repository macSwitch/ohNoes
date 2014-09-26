
 <?php
    $json_string_mou = file_get_contents("https://eu.api.battle.net/d3/profile/mou-2289/?locale=en_GB&apikey=mgqy8nb6nfktdw39q5mm7de2jwjpqcc7");
     $parsed_json_mou = json_decode($json_string_mou);
     $mouBattleTag = $parsed_json_mou->{'battleTag'};
     $mouLastPlayed = $parsed_json_mou->{'lastHeroPlayed'};
     $mouHeroName = "x";
     $mouHCpara = $parsed_json_mou->{'paragonLevelHardcore'};
     $mouHCSpara = $parsed_json_mou->{'paragonLevelSeasonHardcore'};

	$mouHeroID_0 = $parsed_json_mou->{'heroes'}[0]->{'id'};
     $mouHeroID_1 = $parsed_json_mou->{'heroes'}[1]->{'id'};
     $mouHeroID_2 = $parsed_json_mou->{'heroes'}[2]->{'id'};
     $mouHeroID_3 = $parsed_json_mou->{'heroes'}[3]->{'id'};
     $mouHeroID_4 = $parsed_json_mou->{'heroes'}[4]->{'id'};
     $mouHeroID_5 = $parsed_json_mou->{'heroes'}[5]->{'id'};
     $mouHeroID_6 = $parsed_json_mou->{'heroes'}[6]->{'id'};
     $mouHeroID_7 = $parsed_json_mou->{'heroes'}[7]->{'id'};
     $mouHeroID_8 = $parsed_json_mou->{'heroes'}[8]->{'id'};
     $mouHeroID_0 = $parsed_json_mou->{'heroes'}[9]->{'id'};
     $mouHeroID_10 = $parsed_json_mou->{'heroes'}[10]->{'id'};

     if ($mouLastPlayed === $mouHeroID_0) { 
     	$q = 0;
     	// $mouHeroName = $parsed_json->{'heroes'}[0]->{'name'};
     } else if ($mouLastPlayed === $mouHeroID_1) { 
     	$q = 1;
     } else if ($mouLastPlayed === $mouHeroID_2) { 
     	$q = 2;
     } else if ($mouLastPlayed === $mouHeroID_3) { 
     	$q = 3;
     } else if ($mouLastPlayed === $mouHeroID_4) { 
          $q = 4;
     } else if ($mouLastPlayed === $mouHeroID_5) { 
          $q = 5;
     } else if ($mouLastPlayed === $mouHeroID_6) { 
          $q = 6;
     } else if ($mouLastPlayed === $mouHeroID_7) { 
          $q = 7;
     } else if ($mouLastPlayed === $mouHeroID_8) { 
          $q = 8;
     } else if ($mouLastPlayed === $mouHeroID_9) { 
          $q = 9;
     } else if ($mouLastPlayed === $mouHeroID_10) { 
          $q = 10;
     } else if ($mouLastPlayed === $mouHeroID_11) { 
          $q = 11;
     } else if ($mouLastPlayed === $mouHeroID_12) { 
          $q = 12;
     };

     $mouHeroName = $parsed_json_mou->{'heroes'}[$q]->{'name'};

 ?>