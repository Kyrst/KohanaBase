var Base = function() { };

Base.prototype =
{
	// Dialog
	DEFAULT_DIALOG_WIDTH: 320,
	DEFAULT_DIALOG_HEIGHT: 200,

	$dialog: null,

	init: function()
	{
		var inst = this;

		// Help button
		$('#help_button').click(function() {
			inst.showDialog(
				'Help',
				'This is just to demonstrate usage of custom dialog buttons.',
				400,
				200,
				[ { text: 'OK', click: function() { $(this).dialog('close') } } ],
				false, // Modal
				true, // Close on overlay click
				false // Close icon
			);
		});

		// Dialog
		inst.$dialog = $('#dialog');
		inst.$dialog.dialog({
			autoOpen: false,
			width: inst.DEFAULT_DIALOG_WIDTH, height: inst.DEFAULT_DIALOG_HEIGHT,
			modal: true,
			draggable: false, resizable: false
		});

		// Message popup
		if (typeof message_popup !== 'undefined')
		{
			inst.showDialog(
				message_popup.title,
				message_popup.message,
				inst.DEFAULT_DIALOG_WIDTH, inst.DEFAULT_DIALOG_HEIGHT,
				(typeof message_popup.buttons !== 'undefined' ? eval(message_popup.buttons) : null),
				true, // Modal
				true, // Close on overlay click,
				true // Close icon
			);
		}

		// Debug
		if (DEBUG)
		{
			console.log('BASE_URL: ' + BASE_URL);
			console.log('Base JS initialized...');
		}
	},

	showDialog: function(title, message, width, height, buttons, modal, close_on_overlay_click, close_icon)
	{
		var inst = this;

		var is_modal = false;

		if (typeof buttons !== 'undefined')
			inst.$dialog.dialog('option', 'buttons', buttons);

		if (typeof width !== 'undefined')
			inst.$dialog.dialog('option', 'width', width);

		if (typeof height !== 'undefined')
			inst.$dialog.dialog('option', 'height', height);

		if (typeof modal !== 'undefined') {
			if (modal === true)
				is_modal = true;

			inst.$dialog.dialog('option', 'modal', modal);
		}

		if (typeof close_icon !== 'undefined' && close_icon === false)
			inst.$dialog.parent().children().children('.ui-dialog-titlebar-close').hide();

		inst.$dialog.dialog('option', 'title', title);
		inst.$dialog.html(message);

		// Open dialog
		inst.$dialog.dialog('open');

		// Remove focus from button
		$('.ui-dialog :button').blur();

		if (typeof close_on_overlay_click !== 'undefined' && close_on_overlay_click === true && is_modal)
			$('.ui-widget-overlay').on('click', function() { inst.$dialog.dialog('close'); });
	},

	get: function(url, data, callback)
	{
		this.ajax('GET', url, data, callback);
	},

	post: function(url, data, callback)
	{
		this.ajax('POST', url, data, callback);
	},

	ajax: function(type, url, data, callback)
	{
		console.log('AJAX request:\nType: ' + type + '\nURL: ' + url);

		$.ajax({
			url: url,
			data: data,
			type: type
		}).done(function(result) {
			callback(result);
		});
	}
};

$base = new Base();

// Before DOM loaded
$(document).ready(function()
{
	$base.init();
});

// After DOM loaded
$(window).load(function()
{
});