var About = function() { };

About.prototype =
{
	base: null,

	init: function(base)
	{
		var inst = this;

		inst.base = base;

		$('#tabs').tabs({
			beforeActivate: function(event, ui)
			{
				var selected_tab = ui.newPanel.attr('id');

				if (selected_tab === 'tab_1')
				{
					// Do AJAX request
					inst.base.get('/about/ajax/my_first_ajax_request', { data: 'my data' }, function(result) {
						console.log(result);
					});
				}
				else if (selected_tab === 'tab_2')
				{
				}
			}
		});

		console.log('About JS initialized...');
	}
};

$about = new About();

$(document).ready(function()
{
	$about.init($base);
});