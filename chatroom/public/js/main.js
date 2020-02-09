
$(document).ready(function(){
    $.ajax({
        
    });
});

    var obj = {
        name: "Jiayu",
        sendTime: "2020-02-02 15:17:35",
        content: "Hello",
    };
    var userObj = {
        name: "Jiayu"
    };

    var userListController = {
        appendUser : function(user){
            
            $("<li>").append($("<a>").attr("href","#").text(user.name)).appendTo("ul.friends");
        }
    };
    userListController.appendUser(userObj);

    var messageBoxController = {
        appendMessage: function(msg){
            $("ul.message-box").append(
                $("<li>").append(
                    $("<p>").css("font-weight","bold").append(
                        msg.name + " "
                        ).append(
                            $("<small>").css("color","grey").html(msg.sendTime)
                            )
                ).append(
                    $("<p>").html(msg.content)
                )
            );
        },
    };
    messageBoxController.appendMessage(obj);



    $('button[id="send"]').click(function(){
        $.ajax({
            url : "MessageController.php",
            method : "POST",
            data: {
                package : {
                    content : $("textarea#package").text(),
                    actionType: "sendText",
                }
            },
            dataType: "json",
        }).done(function(res){
            alert("sent");
        });
    });

    $('#loginForm').submit(function(){
        
    });