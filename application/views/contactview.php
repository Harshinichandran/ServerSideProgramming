<?php echo form_open("Contact");?>
<MAIN> 
<H2>Contact Path of Light Yoga Studio </H2>
<P> Required information is marked with an asterisk (*). </P>
<TABLE CLASS="reg">
  <TR>
	<TD><?php echo form_label('* Name:'); ?></TD>
	<TD><?php echo form_input(array('id' => 'Name', 'name' => 'Name')); ?></TD>
	 <TD><?php echo form_error('Name'); ?></span></TD>

</TR>

  <TR>
	<TD><?php echo form_label('* Email:'); ?></TD>
	<TD><?php echo form_input(array('id' => 'Email', 'name' => 'Email')); ?></TD>
	<TD><?php echo form_error('Email'); ?></span></TD>
  </TR>

   <TR>
	<TD><?php echo form_label('* Comments:'); ?></TD>
	<TD><?php echo form_textarea(array( 'id' => 'Comments', 'name' => 'Comments', 'rows'=>2, 'cols'=>20)); ?></TD>
	<TD><?php echo form_error('Comments'); ?></span></TD>
  </TR>
  <TR><TD></TD>
<TD> <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>

       </TD></TR>
        <?php echo form_close(); ?>
<TD></TD><TD></TD><TD></TD> 
</TABLE>
</FORM>
</MAIN>
