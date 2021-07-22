
function generatedetails()
{ 	
	jQuery(".section").remove();
	console.log(jQuery("#selectman").val());
	var tabs = jQuery("#selectman").val(); 
	var uniqueNames = [];
	jQuery.each(tabs, function(i, el){
	    if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
	});
	console.log(uniqueNames);

	uniqueNames.forEach(element => {
	console.log(element);
	  jQuery(".tabs").append('<div class="section"><button class="accordion">'+element+'</button><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="designurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Images</label><input type="file" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div>');
	});
}

