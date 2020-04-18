$(function () {

    openWindow();
    verifyCloseClick();

    function openWindow() {
        $('.btn').click(function (e) {
            e.stopPropagation();
            $('.bg').fadeIn();
        });
    }

    function verifyCloseClick() {

        var el = $('body, .close-btn');

        el.click(function () {
            $('.bg').fadeOut();
        });

        $('.form').click(function (e) {
            e.stopPropagation();
        });
    }

    function redBorderAlert(local_alert) {
        local_alert = 'input[name=' + local_alert + ']';

        $(local_alert).css('border', '2px solid red');
        $(local_alert).val('Campo inválido!');
        // $(local_alert).data('invalido','true');
    }

    function resetBorderAlert(el) {

        el.css('border', '1px solid #ccc');
        el.val('');
        // $(local_alert).data('invalido','true');
    }

    function verifyName(name) {
        if (name == '') {
            return false;
        } else {
            var amount = name.split(' ').length;
            var splitStr = name.split(' ');

            if (amount >= 2) {
                for (var i = 0; i < amount; i++) {
                    if (splitStr[i].match(/^[A-Z]{1}[a-z]{1,}$/)) {
                    } else {
                        return false;
                    }
                }
            } else {
                return false;
            }
        }
    }

    function verifyEmail(email) {
        if (email == '') {
            return false;
        }

        if (email.match(/^([A-Za-z0-9-_.]{1,})+@+([a-z.]{1,})$/) == null) {
            return false;
        }
    }

    function verifyPhone(phone) {
        if (phone == '') {
            return false;
        }

        if (phone.match(/^\([0-9]{2}\)[0-9]{4}-[0-9]{4}$/) == null) {
            return false;
        }
    }

    $('input[type=text]').focus(function () {
        resetBorderAlert($(this));
    });

    $('form#form1').submit(function () {

        var name = $('input[name=name]').val();
        var email = $('input[name=email]').val();
        var phone = $('input[name=phone]').val();

        if (verifyName(name) == false) {
            redBorderAlert('name');
            return false;
        } else if (verifyEmail(email) == false) {
            redBorderAlert('email');
            return false;
        } else if (verifyPhone(phone) == false) {
            redBorderAlert('phone');
            return false;
        } else {
            alert('formulario foi enviado com sucesso')
        }
    });

});
