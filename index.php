<?php require('assets/includes/inc_head_content.php');?>

<div class="headerNav">
	<div class="mainNav">
		<ul>
			<li><a class="scroll" href="#0">Home</a></li>
			<li><a class="scroll" href="#1">Members</a></li>
			<li><a class="scroll" href="#2">Contact Us</a></li>
		</ul>
	</div>
</div>
<main>
	<div id="0" class="cdFixedBg cdBg-1">
		<div class="container">
			<div class="logoContainer">
				<h1>&lt;ohNoes&gt;</h1>
				<h2>a pointless clan website</h2>
			</div>
		</div>	
	</div>

	<div class="cdScrollingBg cdColor-1">
		<div class="container">
			<div class="cdContainer">
				<div class="lachdanan">
					<h2>Lachdanan's Scroll</h2>
					<p>My name is Lachdanan, and I am cursed. Once the captain of King Leoric's army, I lived only to honor my land and my king. No man has a greater love for his king than I had for mine, even as I drove my blade through his dark and corrupted heart.</p>
					<p>It was Lazarus - of that I am certain. He alone had the king's ear and whispered dark and evil magics into it, instilling the notion of an imminent attack by Westmarch. Afraid to speak against the archbishop, the councillors nodded their empty heads in agreement and sent us off to die.</p>
					<p>When we returned from our horrific defeat in Westmarch, my beloved king lost all pertense of sanity. He seethed with rage, spitting curses upon us as traitors. With great sorrow I ran him through.</p>
					<p>I will forever live in anguish for my last attempt to honor my king. As we lay him to rest in his burial chamber, he manifested as a hideous skeletal demon. Gorash and my other knights were overcome at once, but I fought on.</p>
					<p>And now I wander, cursed by my once-beloved king. Evil gnaws at my bones, and I cannot risk putting my beloved Tristram in danger should I fail to contain that which tears at me. I must venture down into the labyrinth to die alone.</p>
				</div>
				<div class="leoric">
					<h2>Leoric's Journal</h2>
					<p>We have just arrived in Tristram, and I must say I'm a bit dismayed. This place is a backwater filled with serfs and an ancient broken down monastery, hardly fit for the king of Khanduras! I cannot fathom why Lazarus was so intent on this becoming our new seat of power.</p>
					<p>A fetid, pallid malaise has fallen over the manor we now call home. Young Albrecht seems to be enjoying himself in our new home, however. Perhaps I am simply suffering from an imbalance of humors brought on by the recent change of clime.</p>
					<p>I am convinced that some malevolent being is attempting to wrest control of my thoughts away from me. Voices direct me to horrendous acts, and there are times when I seem unable to control my body. Lazarus knows, this is certain. He looks at me strangely when he thinks me otherwise disposed.</p>
					<p>Though my council begs me to reconsider, I will continue with the executions of those I find guilty of plotting against the kingdom. Perhaps they fear my eye will fall on them and discover their heinous, treasonous plans as well. Lazarus is the only one I can still trust.</p>
					<p>I have finally rid myself of the dark influence seeking to subdue me, and now I see things as they truly are. This conspiracy among the insolent townsfolk to weaken me by stealing Albrecht away will not stand! Perhaps the heads of their women and children on pikes will bring them clarity...</p>
				</div>
			</div>
		</div>
	</div>

	<div id="1" class="cdFixedBg cdBg-2 scroll">

		<div class="container">
			<div class="logoContainer">
				<h1 class="memberHeader">&lt;Members&gt;</h1>
			</div>
		</div>	
	</div>


	<div class="cdScrollingBg cdColor-2">
		<div class="container">
			<div class="cdContainer">
				<div class="bioContainer">
					<?php require('assets/includes/mou_api.php');?>
					<h3>Mou</h3>
					<div class="row">
						<div class="col two info">
							<p>Battle Tag: 
								<span class="bioSpan"><?php echo $mouBattleTag;?></span>
							</p>
							<p>Last Hero Played: 
								<span class="bioSpan"><?php echo $mouHeroName;?></span>
							</p>
							<p>Hardcore Paragon Points:  
								<span class="bioSPan"><?php echo $mouHCpara;?></span>
							</p>
							<p>Hardcore Seasonal Paragon Points:  
								<span class="bioSPan"><?php echo $mouHCSpara;?></span>
							</p>

						</div>
						<div class="col two"><img src="assets/images/leaderMonk.jpg" alt=""></div>
					</div>
				</div>
				<div class="bioContainer">
					<?php require("assets/includes/zee_api.php");?>
					<h3>Zee</h3>
					<div class="row">
						<div class="col two info">
							<p>Battle Tag: 
								<span class="bioSpan"><?php echo $zeeBattleTag;?></span>
							</p>
							<p>Last Hero Played: 
								<span class="bioSPan"><?php echo $zeeHeroName;?></span>
							</p>
							<p>Hardcore Paragon Points:  
								<span class="bioSPan"><?php echo $zeeHCpara;?></span>
							</p>
							<p>Hardcore Seasonal Paragon Points:  
								<span class="bioSPan"><?php echo $zeeHCSpara;?></span>
							</p>

						</div>
						<div class="col two"><img src="assets/images/zeeDH.jpg" alt=""></div>
					</div>
				</div>
				<div class="bioContainer">
					<?php require('assets/includes/mac_api.php');?>
					<h3>Mac</h3>
				    <div class="row">
						<div class="col two info">
							<p>Battle Tag: 
								<span class="bioSpan"><?php echo $macBattleTag;?></span>
							</p>
							<p>Last Hero Played: 
								<span class="bioSPan"><?php echo $macHeroName;?></span>
							</p>
							<p>Hardcore Paragon Points:  
								<span class="bioSPan"><?php echo $macHCpara;?></span>
							</p>
							<p>Hardcore Seasonal Paragon Points:  
								<span class="bioSPan"><?php echo $macHCSpara;?></span>
							</p>

						</div>
						<div class="col two"><img src="assets/images/macWD.jpg" alt=""></div>
					</div>
				</div>
				<div class="bioContainer">
				<?php require('assets/includes/trev_api.php');?>
					<h3>DeathSlap</h3>
					<div class="row">
						<div class="col two info">
							<p>Battle Tag: 
								<span class="bioSpan"><?php echo $trevBattleTag;?></span>
							</p>
							<p>Last Hero Played: 
								<span class="bioSPan"><?php echo $trevHeroName;?></span>
							</p>
							<p>Hardcore Paragon Points:  
								<span class="bioSPan"><?php echo $trevHCpara;?></span>
							</p>
							<p>Hardcore Seasonal Paragon Points:  
								<span class="bioSPan"><?php echo $trevHCSpara;?></span>
							</p>
						</div>
						<div class="col two"><img src="assets/images/trevCS.jpg" alt=""></div>
					</div>
				</div>
				<div class="bioContainer">
					<h3>iCmaZ</h3>
					<div class="row">
						<div class="col two">
							<div class="row">
								<div class="col one"><span>Name: </span>Josh</div>
							</div>
							<div class="row">
								<div class="col one"><span>Info: </span>Josh plays Starcraft.</div>
							</div>

						</div>
						<div class="col two"><img src="assets/images/joshcat.jpg" alt=""></div>
					</div>
				</div>
				<div class="bioContainer">
					<h3>Harbinger</h3>
					<div class="row">
						<div class="col two"><p>You're going back for the Countess, aren't you? We're rescuing ya. Please, Don-Bot&hellip; look into your hard drive, and open your mercy file!</p>
						<p>Kids have names? How much did you make me? Ask her how her day was. Take me to your leader! Bender, being God isn't easy. If you do too much, people get dependent on you, and if you do nothing, they lose hope. You have to use a light touch. Like a safecracker, or a pickpocket. And I'd do it again! And perhaps a third time! But that would be it.</p>
						<p>I videotape every customer that comes in here, so that I may blackmail them later. Throw her in the brig. I suppose I could part with 'one' and still be feared&hellip; I saw you with those two "ladies of the evening" at Elzars. Explain that. The key to victory is discipline, and that means a well made bed. You will practice until you can make your bed in your sleep.</p>
						<p>I'm a thing. You're going to do his laundry? Have you ever tried just turning off the TV, sitting down with your children, and hitting them? Negative, bossy meat creature! Your best is an idiot!</p></div>
						<div class="col two"><img class="shadow" src="assets/images/harbWZ.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="2" class="cdFixedBg cdBg-3">
		<div class="container">
			<div class="logoContainer">
				<h1 class="contactHeader inset-text">&lt;Contact Us&gt;</h1>
			</div>
		</div>	
	</div>

	<div class="cdScrollingBg cdColor-3">
		<div class="container">
			<p>One does not simply contact us - Ain't nobody got time for that.</p>
		</div>
	</div>

</main>

<?php require('assets/includes/inc_scripts.php');?>