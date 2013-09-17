$(function()
{
	if ( DEBUG )
	{
		console.log('~ Resolve.co ~');
	}

	if ( !_.isUndefined(window.alert_popup) )
	{
		show_alert(alert_popup.title, alert_popup.message);
	}
});

function show_alert(title, message, callback)
{
	bootbox.alert('<strong>' + title + '</strong><p>' + message + '</p>', callback);
}

function show_confirm(title, message, callback)
{
	bootbox.confirm('<strong>' + title + '</strong><p>' + message + '</p>', callback);
}