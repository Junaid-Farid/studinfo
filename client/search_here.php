<?php include("header.php");?>

<!---auto complete search box---->
<script type="text/javascript">
function findmatch(){
	if (window.XMLHttpRequest)	{
		xmlhttp = new XMLHttpRequest();
		
	} else {
		
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById('results').innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open('GET', 'search.inc.php?search_text='+document.search.search_text.value, true);
	xmlhttp.send();
}

</script>


<!--end auto complete--->
   <style type="text/css">
.bs-example{
	font-family: sans-serif;
	position: relative;
	margin: 50px;
}
.typeahead, .tt-query, .tt-hint {
	border: 2px solid #CCCCCC;
	border-radius: 8px;
	font-size: 24px;
	height: 30px;
	line-height: 30px;
	outline: medium none;
	padding: 8px 12px;
	width: 396px;
}
.typeahead {
	background-color: #FFFFFF;
}
.typeahead:focus {
	border: 2px solid #0097CF;
}
.tt-query {
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
	color: #999999;
}
.tt-dropdown-menu {
	background-color: #FFFFFF;
	border: 1px solid rgba(0, 0, 0, 0.2);
	border-radius: 8px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	margin-top: 12px;
	padding: 8px 0;
	width: 422px;
}
.tt-suggestion {
	font-size: 24px;
	line-height: 24px;
	padding: 3px 20px;
}
.tt-suggestion.tt-is-under-cursor {
	background-color: #0097CF;
	color: #FFFFFF;
}
.tt-suggestion p {
	margin: 0;
}
</style>
<div class="content" style="width:305.816">
			<div class="container">
				<div class="book">
					<div class="col-md-8 content-top">
						
                        <div class=".col-md-6">
    <div class="panel panel-default">
    <div class="bs-example">
					<form id="search" name="search">
						<input placeholder="Search Activity" type="text" id="search_text" name="search_text" onKeyUp="findmatch();">
						<input type="submit" value="">
					</form><!--auto complete results--->
                   
                  </div>
                  </div>
                    <!-- end auto complete results--->
			</div>
                        <!--auto complete result--->
		          	 <div id="results">
                     
                     
                    </div>
		       
               <!-- end auto complete result--->
					</div>
					<div class="col-md-4 "></div><span style="margin:1px; padding:1px;"></span>
                    
                    
                    
					<div class="clearfix"> </div>
                    
				</div>
               
                
				<!---->
				<div class="book-top">					
					
						<div class="container">
					
					
					
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="grid-bottom">
		 <div class="container">
			 
			 
</div>

<?php include("footer.php"); ?>