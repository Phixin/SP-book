var objHomeNews 	= [];
var objHomeFeatures = [];

var objShop			= [];

function callThisURL(url, cat)
{

	var jqxhr = $.getJSON( url, function(success) 
	{
		if(cat == "HOME")
		{
			for(var i=0 ; i<success.news.length; i++)
			{
				objHomeNews 	= success.news;
				objHomeFeatures = success.features;
				
				if((i+1) == success.news.length)
					finishHome(objHomeNews, objHomeFeatures);

			}
		}

		else if(cat == "SHOP")
		{
			objShop 	= success;
			
			for(var i=0 ; i<success.length; i++)
			{	
				if((i+1) == success.length)
					finishShop(objShop);
				
			}
			
		}
	  	
	})
	.done(function() 
	{
	   	console.log( "second success" );
	})
	  	.fail(function() 
	{
	   	console.log( "error" );
	});
	 
	// Perform other work here ...
	 
	// Set another completion function for the request above
	jqxhr.complete(function() 
	{
	  	console.log( "second complete" );
	});
}