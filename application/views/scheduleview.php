	<MAIN>
		<DIV>
			<img src="<?php echo base_url(); ?>assets/images/yogalounge.jpg" alt="yoga mat" height="300" width="900">
		</DIV>
		<h2> Yoga Schedule </h2>
			<p>Mats, blocks, and blankets provided. Please arrive 10 minutes before your class begins. Relax
			   in our Serenity Lounge before or after your class.</p>
			 <div class ="indent">
				<?php foreach($daysfirst as $row){?>
					
					<h3><?=$row->daysname?></h3>
						<ul>
							<?php foreach($gettimefirst as $row){?>
							<li><?=$row->time?>&nbsp;<?=$row->classname?></li>
							<?php }?> 
						</ul>			
				<?php }?> 
				
				<?php foreach($dayssecond as $row){?>
					
					<h3><?=$row->daysname?></h3>
					<ul>
							<?php foreach($gettimesecond as $row){?>
							<li><?=$row->time?>&nbsp;<?=$row->classname?></li>
							<?php }?> 
						</ul>
			
				<?php }?>
		 
		 
		 </div>
		 </MAIN>		
		