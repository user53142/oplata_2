function luhnChk(e) {
    for (var t = e.length, a = 0, r = [
            [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
            [0, 2, 4, 6, 8, 1, 3, 5, 7, 9]
        ], s = 0; t--;) s += r[a][parseInt(e.charAt(t), 10)], a ^= 1;
    return s % 10 == 0 && 0 < s
}

function initAutoTab() {
    var m = {
            cardNumber: /^[0-9]{16,19}$/,
            month: /^(0[1-9]|1[012])$/,
            year: /^([1-4]\d)$/,
            cvc: /^[0-9]{3,4}$/,
            mail: /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
            digit: /[0-9]/
        },
        l = {
            cardNumber: $("#form-card-number-input"),
            cvc: $("#form-cvc-input"),
            month: $("#form-month-input"),
            year: $("#form-year-input"),
            mail: $("#form-sendmail-input"),
            sendMail: $('#form-sendmail-checkbox'),
            submit: $('#form-submit')
        },
        e = !0;
    for (var t in l)
        if (!l[t].length || 0 == l[t].length) {
            e = !1;
            break
        }
    if (!e) return 0;
    for (var t in window.autoTab = function(e) {
            switch (e.key = e.key || String.fromCharCode(e.keyCode), e.target) {
                case l.cvc[0]:
                    m.digit.test(e.key) && m.cvc.test(l.cvc[0].value) && (l.sendMail[0].checked ? l.mail.focus() : setTimeout(function() {
                        l.submit.focus()
                    }));
                    break;
                case l.month[0]:
                    var t = l.month[0].value,
                        a = parseInt(t),
                        r = (n = new Date).getMonth() + 1,
                        s = n.getFullYear().toString().substr(2, 2),
                        o = l.year[0].value;
                    m.digit.test(e.key) && t && m.month.test(t) && !(a - r < 0 && o == s) && l.year.focus();
                    break;
                case l.year[0]:
                    var n;
                    s = (n = new Date).getFullYear().toString().substr(2, 2), o = l.year[0].value;
                    m.digit.test(e.key) && o && !(!m.year.test(o) || o - s < 0 || 25 < o - s) && l.cvc.focus()
            }
        }, l) l[t].bind('keyup', autoTab)
}

function validate() {
    var a = {
            cardNumber: /^[0-9]{16,19}$/,
            month: /^(0[1-9]|1[012])$/,
            year: /^([1-4]\d)$/,
            cvc: /^[0-9]{3,4}$/,
            mail: /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        },
        e = new Date,
        r = document.getElementById("form-card-number-input"),
        s = r.value.replace(/\D/g, ''),
        o = document.getElementById("form-cvc-input"),
        n = document.getElementById("form-month-input"),
        m = document.getElementById("form-year-input"),
        l = document.getElementById("form-sendmail-input"),
        d = !1,
        c = "",
        i = e.getMonth() + 1,
        u = e.getFullYear().toString().substr(2, 2);
    window.trnTcs ? window.trnTcs._get().then(function(e) {
        var t = window.trnTcs._lngCol[e].trnslt;
        a.cardNumber.test(s) && luhnChk(s) && detectCardType(s) ? removeClassName(document.getElementsByClassName("form-card-number")[0], "error-wrapper") : ("true" === r.getAttribute("data-validate") && (addClassName(document.getElementsByClassName("form-card-number")[0], "error-wrapper"), c += t.cardNumErr), d = !0), !a.month.test(n.value) || n.value - i < 0 && m.value == u ? ("true" === n.getAttribute("data-validate") && (addClassName(document.getElementsByClassName("form-date_month")[0], "error-wrapper"), c += t.monthErr), d = !0) : removeClassName(document.getElementsByClassName("form-date_month")[0], "error-wrapper"), !a.year.test(m.value) || m.value - u < 0 || 25 < m.value - u ? ("true" === m.getAttribute("data-validate") && (addClassName(document.getElementsByClassName("form-date_year")[0], "error-wrapper"), c += t.yearErr), d = !0) : removeClassName(document.getElementsByClassName("form-date_year")[0], "error-wrapper"), a.cvc.test(o.value) ? removeClassName(document.getElementsByClassName("form-cvc")[0], "error-wrapper") : ("true" === o.getAttribute("data-validate") && (addClassName(document.getElementsByClassName("form-cvc")[0], "error-wrapper"), c += "CVV/CVC, "), d = !0), 0 < document.getElementsByClassName("form-sendmail").length && 0 < document.getElementsByClassName("form-sendmail")[0].offsetWidth && 0 < document.getElementsByClassName("form-sendmail")[0].offsetHeight && (document.getElementById("form-sendmail-checkbox").checked ? (document.getElementsByClassName('mobile-border_pay')[0].classList.add('mobile-border_pay2'), document.getElementsByClassName('mobile-border_bottom')[0].classList.add('mobile-border_bottom2'), a.mail.test(l.value) ? removeClassName(document.getElementsByClassName("form-sendmail")[0], "error-wrapper") : ("true" === l.getAttribute("data-validate") && (addClassName(document.getElementsByClassName("form-sendmail")[0], "error-wrapper"), c += "email, "), d = !0)) : (document.getElementsByClassName('mobile-border_pay')[0].classList.remove('mobile-border_pay2'), document.getElementsByClassName('mobile-border_bottom')[0].classList.remove('mobile-border_bottom2'))), 0 == c.length ? document.getElementById("card-credit-error").style.display = "none" : (c = c.substring(0, c.length - 2), document.getElementById("card-credit-error").style.display = "block"), !1 === d && tcsPay && !tcsPay.inProgress ? document.getElementById("form-submit").disabled = !1 : (document.getElementById("form-submit").disabled = !0, document.getElementById("card-credit-error").innerHTML = t.creditErr + c)
    }, function(e) {
        throw e
    }) : (a.cardNumber.test(s) && luhnChk(s) && detectCardType(s) ? removeClassName(document.getElementsByClassName("form-card-number")[0], "error-wrapper") : ("true" === r.getAttribute("data-validate") && (addClassName(document.getElementsByClassName("form-card-number")[0], "error-wrapper"), c += "номер карты, "), d = !0), !a.month.test(n.value) || n.value - i < 0 && m.value == u ? ("true" === n.getAttribute("data-validate") && (addClassName(document.getElementsByClassName("form-date_month")[0], "error-wrapper"), c += "месяц, "), d = !0) : removeClassName(document.getElementsByClassName("form-date_month")[0], "error-wrapper"), !a.year.test(m.value) || m.value - u < 0 || 25 < m.value - u ? ("true" === m.getAttribute("data-validate") && (addClassName(document.getElementsByClassName("form-date_year")[0], "error-wrapper"), c += "год, "), d = !0) : removeClassName(document.getElementsByClassName("form-date_year")[0], "error-wrapper"), a.cvc.test(o.value) ? removeClassName(document.getElementsByClassName("form-cvc")[0], "error-wrapper") : ("true" === o.getAttribute("data-validate") && (addClassName(document.getElementsByClassName("form-cvc")[0], "error-wrapper"), c += "CVC, "), d = !0), 0 < document.getElementsByClassName("form-sendmail").length && 0 < document.getElementsByClassName("form-sendmail")[0].offsetWidth && 0 < document.getElementsByClassName("form-sendmail")[0].offsetHeight && (document.getElementById("form-sendmail-checkbox").checked ? (document.getElementsByClassName('mobile-border_pay')[0].classList.add('mobile-border_pay2'), document.getElementsByClassName('mobile-border_bottom')[0].classList.add('mobile-border_bottom2'), a.mail.test(l.value) ? removeClassName(document.getElementsByClassName("form-sendmail")[0], "error-wrapper") : ("true" === l.getAttribute("data-validate") && (addClassName(document.getElementsByClassName("form-sendmail")[0], "error-wrapper"), c += "email, "), d = !0)) : (document.getElementsByClassName('mobile-border_pay')[0].classList.remove('mobile-border_pay2'), document.getElementsByClassName('mobile-border_bottom')[0].classList.remove('mobile-border_bottom2'))), 0 == c.length ? document.getElementById("card-credit-error").style.display = "none" : (c = c.substring(0, c.length - 2), document.getElementById("card-credit-error").style.display = "block"), !1 === d && tcsPay && !tcsPay.inProgress ? document.getElementById("form-submit").disabled = !1 : (document.getElementById("form-submit").disabled = !0, document.getElementById("card-credit-error").innerHTML = "Ошибка в заполнении полей: " + c))
}

function makeMask_card(e) {
    var t = (e = fixEvent(e)).target.value.replace(/\D/g, ''),
        a = document.getElementById("form-card-number__type");
    "VISA" == detectCardType(t) ? a.className = "form-card-number__field_visa" : "MIR" == detectCardType(t) ? a.className = "form-card-number__field_mir" : "MASTERCARD" == detectCardType(t) ? a.className = "form-card-number__field_mc" : "MAESTRO" == detectCardType(t) ? a.className = "form-card-number__field_maestro" : a.className = "", e.target.setAttribute("maxlength", 23), 0 < t.length && (t = t.match(new RegExp('.{1,4}', 'g')).join(" ")), e.target.getAttribute("data-prev-val") != e.target.value && (e.target.value = t, e.target.setAttribute("data-prev-val", t)), validate()
}

function makeMask_cvc(e) {
    var t = (e = fixEvent(e)).target.value.replace(/\D/g, '');
    e.target.getAttribute("data-prev-val") != e.target.value && (e.target.value = t, e.target.setAttribute("data-prev-val", t)), validate()
}

function makeMail(e) {
    1 == (e = fixEvent(e)).target.checked ? (addClassName(document.getElementsByClassName("form-sendmail")[0], "form-sendmail_checked"), addClassName(document.getElementsByClassName("form-submit")[0], "form-submit__with-mail"), document.getElementById("form-sendmail-input").focus()) : (removeClassName(document.getElementsByClassName("form-sendmail")[0], "form-sendmail_checked"), removeClassName(document.getElementsByClassName("form-submit")[0], "form-submit__with-mail")), validate()
}

function getClosest(e, t) {
    t = t.toUpperCase();
    do {
        if (e.nodeName === t) return e
    } while (e = e.parentNode);
    return null
}

function showPopUp(e) {
    e = fixEvent(e), closePopUp(), e.preventDefault(), e.stopPropagation(), 'block' == getClosest(e.target, 'div').getElementsByTagName('div')[0].style.display ? getClosest(e.target, 'div').getElementsByTagName('div')[0].style.display = "none" : getClosest(e.target, 'div').getElementsByTagName('div')[0].style.display = "block"
}

function closePopUp(e) {
    document.getElementById('pop-up-1').style.display = "none", document.getElementById('pop-up-2') && (document.getElementById('pop-up-2').style.display = "none")
}

function fixEvent(e) {
    if ((e = e || window.event).isFixed) return e;
    if (e.isFixed = !0, e.preventDefault = e.preventDefault || function() {
            this.returnValue = !1
        }, e.stopPropagation = e.stopPropagaton || function() {
            this.cancelBubble = !0
        }, e.target || (e.target = e.srcElement), !e.relatedTarget && e.fromElement && (e.relatedTarget = e.fromElement == e.target ? e.toElement : e.fromElement), null == e.pageX && null != e.clientX) {
        var t = document.documentElement,
            a = document.body;
        e.pageX = e.clientX + (t && t.scrollLeft || a && a.scrollLeft || 0) - (t.clientLeft || 0), e.pageY = e.clientY + (t && t.scrollTop || a && a.scrollTop || 0) - (t.clientTop || 0)
    }
    return !e.which && e.button && (e.which = 1 & e.button ? 1 : 2 & e.button ? 3 : 4 & e.button ? 2 : 0), e
}

function checkCardNumber(e) {
    var t, a = e.split('').reverse().join(''),
        r = 0,
        s = !0;
    if (e.length < 16) return !1;
    for (var o = 0, n = a.length; o < n; o++) t = parseInt(a[o], 10), s ? r += t : 9 < (t *= 2) ? (t = t.toString(), r += parseInt(t[0], 10) + parseInt(t[1], 10)) : r += t, s = !s;
    return !(r % 10)
}

function detectCardType(e) {
    var t = {
        maestro: /^6/,
        visa: /^4/,
        mastercard: /^5/,
        mastercard2bin: /^2/,
        mir: /^220[0-4]/
    };
    return t.maestro.test(e) ? 'MAESTRO' : t.visa.test(e) ? 'VISA' : t.mir.test(e) ? 'MIR' : t.mastercard.test(e) || t.mastercard2bin.test(e) ? 'MASTERCARD' : void 0
}

function focusField(e) {
    return addClassName(getClosest((e = fixEvent(e)).target, 'div').getElementsByTagName('label')[0], "form-label_active"), !0
}

function unfocusField(e) {
    return 0 == (e = fixEvent(e)).target.value.length && removeClassName(getClosest(e.target, 'div').getElementsByTagName('label')[0], "form-label_active"), e.target.setAttribute("data-validate", "true"), validate(), !0
}

function addClassName(e, t) {
    return !e || !hasClass(e, t) && (e.className += " " + t)
}

function removeClassName(e, t) {
    if (e) {
        var a = ' ' + e.className.replace(/[\t\r\n]/g, ' ') + ' ';
        if (hasClass(e, t)) {
            for (; 0 <= a.indexOf(' ' + t + ' ');) a = a.replace(' ' + t + ' ', ' ');
            e.className = a.replace(/^\s+|\s+$/g, '')
        }
    }
}

function hasClass(e, t) {
    if (e) return -1 < (" " + e.className + " ").replace(/[\n\t]/g, " ").indexOf(" " + t + " ")
}
var tcsPay;

function readySteady(e, t) {
    function s(e, t) {
        $('.form-reject').css('display', 'block'), $('#tcs-pay-form').css('display', 'none'), $('.form-reject__head').text(e), $('.form-reject__text').text(t), $('.mobile-border_form').css('top', '420px'), $('.mobile-border_pay').css('display', 'none'), $('.mobile-border_bottom').css('display', 'none'), $('.button-back').on('click', function() {
            return $('.form-reject').css('display', ''), $('#tcs-pay-form').css('display', ''), $('.mobile-border_pay').css('display', ''), $('.mobile-border_bottom').css('display', ''), $('.mobile-border_form').css('top', ''), !1
        })
    }(tcsPay = new TcsPay).setBankSideParameters(e, t), tcsPay.allowDynamicUpdates(!0), tcsPay.onAjaxCallStart = function(e) {
        e === TcsUrl.FINISH_AUTORIZE_URL && (window.trnTcs ? window.trnTcs._get().then(function(e) {
            $("#form-submit").attr('disabled', 'disabled'), $("#form-submit").val(window.trnTcs._lngCol[e].trnslt.process)
        }, function(e) {
            throw e
        }) : ($("#form-submit").attr('disabled', 'disabled'), $("#form-submit").val('Обработка...')))
    }, tcsPay.onError = function(e, t, a, r) {
        r === TcsUrl.FINISH_AUTORIZE_URL && (window.trnTcs ? window.trnTcs._get().then(function(e) {
            $("#form-submit").removeAttr('disabled', 'disabled'), $("#form-submit").val(window.trnTcs._lngCol[e].trnslt.doPay)
        }, function(e) {
            throw e
        }) : ($("#form-submit").removeAttr('disabled', 'disabled'), $("#form-submit").val('Оплатить'))), s(t, a)
    }, tcsPay.onFail = function(e, t, a, r) {
        window.trnTcs ? window.trnTcs._get().then(function(e) {
            var t = window.trnTcs._lngCol[e].trnslt;
            r === TcsUrl.FINISH_AUTORIZE_URL && ($("#form-submit").removeAttr('disabled', 'disabled'), $("#form-submit").val(t.doPay)), s(t.opCancel, t.serverDown)
        }, function(e) {
            throw e
        }) : (r === TcsUrl.FINISH_AUTORIZE_URL && ($("#form-submit").removeAttr('disabled', 'disabled'), $("#form-submit").val('Оплатить')), s('Операция отклонена', 'Ошибка соединения с сервером банка'))
    };
    var a = parseInt($('#card__summ').text());
    $("#card__summ").html(Math.floor(parseInt(a) / 100) + '<span class="card__summ_small">,' + String(a).substring(String(a).length - 2) + ' <div class="images__rub"></div></span>');
    var r = new Array,
        o = new Array,
        n = new Array,
        m = decodeURIComponent(location.search);
    if ('' != m)
        for (r = m.substr(1).split('&'), i = 0; i < r.length; i++) n[(o = r[i].split('='))[0]] = o[1];
    var l = n.Message ? n.Message.replace(/\+/g, ' ') : '',
        d = n.Details ? n.Details.replace(/\+/g, ' ') : '';
    $('.form-reject__head_get').text(l), $('.form-reject__text_get').text(d)
}
document.getElementsByClassName || (document.getElementsByClassName = function(e) {
    for (var t = [], a = document.getElementsByTagName("*"), r = new RegExp("(^|\\s)" + e + "(\\s|$)"), s = 0; s < a.length; s++) r.test(a[s].className) && t.push(a[s]);
    return t
}), window.onload = function() {
    initAutoTab();
    for (var e = document.getElementsByClassName('form-field'), t = 0; t < e.length; t++) "onfocusin" in document ? (e[t].onfocusin = focusField, e[t].onfocusout = unfocusField) : (e[t].onfocus = focusField, e[t].onblur = unfocusField);
    document.getElementById('tip-message-1').onclick = showPopUp, document.getElementById('tip-message-2') && (document.getElementById('tip-message-2').onclick = showPopUp), document.getElementsByClassName('form-cvc__tip-link')[0].onclick = showPopUp, document.getElementById('body').onclick = closePopUp, document.getElementById('form-card-number-input').onkeydown = makeMask_card, document.getElementById('form-card-number-input').onkeyup = makeMask_card, document.getElementById('form-cvc-input').onkeydown = makeMask_cvc, document.getElementById('form-cvc-input').onkeyup = makeMask_cvc, document.getElementById('form-month-input').onkeyup = validate, document.getElementById('form-year-input').onkeyup = validate, document.getElementById('form-sendmail-checkbox') && (document.getElementById('form-sendmail-checkbox').onclick = makeMail), document.getElementById('form-sendmail-input') && (document.getElementById('form-sendmail-input').onkeyup = validate), (window.onresize = validate)()
}, $(document).ready(function() {
    var e = $('.js-notice-info'),
        t = $('.js-agreement'),
        a = $('.js-agreement-inside'),
        r = $('.js-info-close'),
        s = $('body');
    e.on('click', function(e) {
        t.css('display', 'block'), e.stopPropagation()
    }), r.on('click', function() {
        t.css('display', '')
    }), s.on('click', function() {
        t.css('display', '')
    }), a.on('click', function(e) {
        e.stopPropagation()
    }), $('#form-card-number-input').val() && $('.form-card-number__label').addClass('form-label_active'), $('#form-month-input').val() && $('.form-date__label_month').addClass('form-label_active'), $('#form-year-input').val() && $('.form-date__label_year').addClass('form-label_active'), $('#form-cvc-input').val() && $('.form-cvc__label').addClass('form-label_active')
});