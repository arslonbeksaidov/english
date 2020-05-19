/**
 * Created by Муза on 20.04.14.
 */
$(document).ready(
    function(){

        /** Login Form **/
        $("#createLoginWindow").on('click', function(){
            $.Dialog({
                shadow: true,
                overlay: false,
                draggable: true,
                icon: '<span class="icon-bus"></span>',
                title: 'Draggable window',
                width: 500,
                padding: 10,
                content: 'This Window is draggable by caption.',
                onShow: function(){
                    var content = '<form id="login-form" action="/login">' +
                        '<label>Логин</label>' +
                        '<div class="input-control text"><input type="text" name="login"><button class="btn-clear"></button></div>' +
                        '<label>Пароль</label>'+
                        '<div class="input-control password"><input type="password" name="password"><button class="btn-reveal"></button></div>' +
                        '<div class="input-control checkbox"><label><input type="checkbox" name="c1" checked/><span class="check"></span>Запомнить меня</label></div>'+
                        '<div class="form-actions">' +
                        '<button class="button primary">Вход в систему</button>&nbsp;'+
                        '<button class="button" type="button" onclick="$.Dialog.close()">Отмена</button> '+
                        '</div>'+
                        '</form>';

                    $.Dialog.title("Вход для пользователей");
                    $.Dialog.content(content);
                }

            });
        });



    }
);