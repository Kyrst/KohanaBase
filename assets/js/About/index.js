var About = function() { };

About.prototype =
{
	base: null,

	init: function(base)
	{
		this.base = base;

		$('#tabs').tabs();

		console.log('About JS initialized...');
	}
};

$about = new About();

$(document).ready(function()
{
	$about.init($base);
});