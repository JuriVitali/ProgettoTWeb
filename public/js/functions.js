function getMessages(authUserId, selectedUserId){
    
    var usersId;
    
    function sendAjaxReq() {
        $.ajax({
            method: 'GET',
            url: url,
            data: usersId,
            dataType: "json",
            success: function (data) {
                var messages = JSON.parse(data.responseText);
                $('#message_container').html('');
                messages.forEach(message => {
                    if (message.destinatario === authUserId){
                        $('#message_container').append('');
                    }
                    else {
                        $('#message_container').append('');
                    }
                });
            },
            error: function (data) {
                alert(data.status);
            }
            //contentType: "application/json; charset=utf-8",
            //processData: false
        });
    }
    
    //$('#message_container').html('');
    url = "{{ route('show_messages_locatore') }}";
    user1 = {userId_1: authUserId};
    user2 = {userId_2: authUserId};
    
    usersId = JSON.stringify([user1, user2]);
    //users = JSON.stringify([User, selectedUser]); 
    alert(usersId);
    sendAjaxReq();
    
}
