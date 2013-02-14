var Base = function() { };

Base.prototype =
{
	init: function()
	{
		console.log('Base JS initialized...');

		// Message popup
		if (typeof message_popup !== 'undefined')
		{
			this.showMessagePopup(message_popup.title, message_popup.message);
		}

		if (DEBUG)
		{
			console.log('BASE_URL: ' + BASE_URL);
		}
	},

	showMessagePopup: function(title, message)
	{
		alert('# ' + title + ' #\n' + message);
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