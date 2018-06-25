$(function(){
    $('#greet').click(function(){
    	if(!$('#user').val() || !$('#message').val()) return;
        $.get('http://192.168.10.10/bbs.php', {
			user: $('#user').val(),
			userid: $('#userid').val(),
			message: $('#message').val(),
			friendid: $('#friendid').val(),
        	mode: "0"
        }, function(data){
        	$('#result').html(data);
        });
    });
    loadLog();
    logAll();
});

function loadLog(){
	$.get('http://192.168.10.10/bbs.php', {
		mode: "1",
		friendid: $('#friendid').val(),
		userid: $('#userid').val(),
    }, function(data){
    	$('#result').html(data);
    });
}

function logAll(){
	setTimeout(function(){
		loadLog();
		logAll();
	},5000); 
}

