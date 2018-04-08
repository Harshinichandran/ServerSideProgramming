	<MAIN>
		<DIV>
			<img src="<?php echo base_url(); ?>assets/images/yogamat.jpg" alt="yoga mat" height="300" width="900">
		</DIV>
		<H2>Yoga Classes</H2>
		<DL>
		 <?php foreach($classes as $row){?>
					
			<DT><B><?=$row->classname?>	</B></DT>
			<DD> <?=$row->description?></DD>
		 <?php }?> 
        </DL>
	</MAIN>		
		