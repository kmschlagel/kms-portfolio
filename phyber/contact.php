<?php include 'header.php'; ?>
   
 <div id="page" class="clearfix">
 
	<div id="left_column">
        <h4>Hours</h4>
        <ul>
            <li>M-F: 9am - 5pm</li>
            <li>Sat: 10am - 4pm</li>
            <li>Sun: Noon - 4pm</li>
        </ul>
        <br />
        <h4>Call or Write</h4>
        <ul>
            <li>394 Grand Ave.</li>
            <li>Saint Paul, MN 55102</li>
            <li>651-656-9878</li>
        </ul>
    </div> <!--/#left_column-->

	<div id="right_column" class="clearfix"> 
        <h2>Contact Us</h2> 
        
        <form class="jqtransform" id="the_form" name="the_form" action="sendmail.php" method="post" onsubmit="return checkform();">
        <fieldset>
        <ol>
            <li>*all fields required</li>
            <li><label for="name">Full Name</label>
            <input type="text" name="name" id="name" autocomplete="off"/>
            </li>
          
            <li><label for="email">Email</label>
            <input type="text" name="email" id="email" autocomplete="off"/>
            </li>
            
            <li><label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" autocomplete="off" />
            </li>
            
            <li><label for="comments" id="lblnotes" class="field">Your Message:</label>
            <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
            </li>
           
            <li><label for="submit">&nbsp;</label>
            <button type="submit" id="submit">Send</button> 
            </li>
        </ol>
        </fieldset>
        </form>
	</div> <!--end right column-->
</div><!--/#page-->   
   
<?php include 'footer.php'; ?>
  