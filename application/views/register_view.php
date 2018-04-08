<?php echo form_open("Register");?>
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
  <TD><?php echo form_label('* Password:'); ?></TD>
  <TD><?php echo form_password(array('id' => 'Password', 'name' => 'Password')); ?></TD>
   <TD><?php echo form_error('Password'); ?></span></TD>

</TR>

   <TR>
	<TD><?php echo form_label('* Phone:'); ?></TD>
	<TD><?php echo form_input(array('id' => 'Phone', 'name' => 'Phone')); ?></TD>
	<TD><?php echo form_error('Phone'); ?></span></TD>
  </TR>

  <TR>
	<TD><?php echo form_label('* Address:'); ?></TD>
	<TD><?php echo form_textarea(array( 'id' => 'Address', 'name' => 'Address', 'rows'=>2, 'cols'=>20)); ?></TD>
	<TD><?php echo form_error('Address'); ?></span></TD>
  </TR>

  <TR>
  	<TD><?php echo form_label('* Type of Class:'); ?></TD>
   <TD>
    <select name="Class">
    <option value="Gentle Hatha Yoga" <?php echo set_select('Class', 'Gentle Hatha Yoga', TRUE); ?> >Gentle Hatha Yoga</option>
    <option value="Vinyasa Yoga" <?php echo set_select('Class', 'Vinyasa Yoga', TRUE); ?> >Vinyasa Yoga</option>
    <option value="Restorative Yoga" <?php echo set_select('Class', 'Restorative Yoga', TRUE); ?> >Restorative Yoga</option>
   </select>
	</TD>
	<TD><?php echo form_error('Class'); ?></span></TD>
	</TR>

  <TR>
    <TD><?php echo form_label('* Schedule:'); ?></TD>
   <TD>
    <select name="Schedule">
    <option value="Monday - Friday" <?php echo set_select('Schedule', 'Monday - Friday', TRUE); ?> >Monday - Friday</option>
    <option value="Saturday And Sunday" <?php echo set_select('Schedule', 'Saturday And Sunday', TRUE); ?> >Saturday And Sunday</option>
    </select>
  </TD>
  <TD><?php echo form_error('Schedule'); ?></span></TD>
  </TR>

  <TR>
    <TD><?php echo form_label('* Time:'); ?></TD>
   <TD>
    <select name="Time">
    <option value="9:00am" <?php echo set_select('Time', '9:00am', TRUE); ?> >9:00am</option>
     <option value="10:30am" <?php echo set_select('Time', '10:30am', TRUE); ?> >10:30am</option>
      <option value="5:30pm" <?php echo set_select('Time', '5:30pm', TRUE); ?> >5:30pm</option>
       <option value="7:00pm" <?php echo set_select('Time', '7:00pm', TRUE); ?> >7:00pm</option>
        <option value="10:20am" <?php echo set_select('Time', '10:20am', TRUE); ?> >10:30am</option>
         <option value="Noon" <?php echo set_select('Time', 'Noon', TRUE); ?> >Noon</option>
          <option value="1:30pm" <?php echo set_select('Time', '1:30pm', TRUE); ?> >1:30pm</option>
           <option value="3:00pm" <?php echo set_select('Time', '3:00pm', TRUE); ?> >3:00pm</option>
            <option value="5:20pm" <?php echo set_select('Time', '5:20pm', TRUE); ?> >5:30pm</option>
       </select>
  </TD>
  <TD><?php echo form_error('Class'); ?></span></TD>
  </TR>

	  <TR><TD></TD>
<TD> <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>

       </TD></TR>
        <?php echo form_close(); ?>
<TD></TD><TD></TD><TD></TD> 
</TABLE>

</FORM>
</MAIN>
