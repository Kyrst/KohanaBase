var Base = function() { };

Base.prototype =
{
	init: function()
	{
		console.log('Base JS initialized...');

		if (DEBUG)
		{
			console.log('BASE_URL: ' + BASE_URL);
		}
	}
};

$base = new Base();

$(document).ready(function()
{
	$base.init();
});

$(window).load(function()
{
});