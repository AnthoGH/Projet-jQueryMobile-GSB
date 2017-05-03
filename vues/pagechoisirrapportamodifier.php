<div data-role = "page" id = "pagechoisirrapportamodifier">
<?php
    include "vues/entetepageavecboutons.html";
?>
    
    
    <div data-role = "content"> 
        <h3>Modifier un rapport</h3>
	     <div class= "ui-field-content">			
				<label for = "date" > Date de la visite </label>
				<input type="date" name="date" id = "date" value="" />
			</div>
			<div data-role="main" class="ui-content">
				    <ul data-role="listview">			      
				    </ul>
			</div>
   
    </div> <!-- /fin content -->
<?php    
    include "vues/piedpage.html";
?>
</div><!-- /fin page -->
