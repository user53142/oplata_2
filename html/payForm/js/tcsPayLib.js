function TcsPay() {
    this.inProgress = !1, this.dynamicUpdateCallback = function(e, t) {
        $("#card__summ").html(Math.floor(parseInt(t.amount) / 100) + '<span class="card__summ_small">,' + String(t.amount).substring(String(t.amount).length - 2) + ' <div class="images__rub"></div></span>');
        var a = e.find(".description-container"),
            r = e.find(".order-id-container");
        a.text(t.description), r.text(t.orderId)
    }
}
TcsParameters = {
    TERMINAL_KEY: "TerminalKey",
    IP: "IP",
    TOKEN: "Token",
    ERROR_CODE: "ErrorCode",
    MESSAGE: "Message",
    DETAILS: "Details",
    SUCCESS: "success",
    PAYMENT_URL: "PaymentURL",
    AMOUNT: "Amount",
    ORDER_ID: "OrderId",
    PAYMENT_ID: "PaymentId",
    MD: "MD",
    PAREQ: "PaReq",
    ACSURL: "ACSUrl",
    TERM_URL: "TermUrl",
    DESCRIPTION: "Description",
    PAY_FORM: "PayForm",
    DATA: "DATA",
    CUSTOMER_KEY: "CustomerKey",
    CURRENCY: "Currency",
    PAN: "PAN",
    EXP_DATE: "ExpDate",
    CARD_HOLDER: "CardHolder",
    CVV: "CVV",
    INFO_EMAIL: "InfoEmail",
    SEND_EMAIL: "SendEmail",
    CARD_DATA: "CardData",
    RECURRENT: "Recurrent",
    BILL: "isBill"
}, TcsConstants = {
    CARD_DATA_PAIR_SEPARATOR: ";",
    INIT_DATA_PAIR_SEPARATOR: "|",
    CARD_DATA_KEY_VALUE_SEPARATOR: "=",
    INIT_DATA_KEY_VALUE_SEPARATOR: "=",
    PAY_FORM_ID: "tcs-pay-form",
    CONNECTION_TIMEOUT_MS: 6e4
}, TcsUrl = {
    CONTEXT_URL: "https://securepay.tinkoff.ru/rest/",
    WEBSOCKET_CONTEXT_URL: "wss://securepay.tinkoff.ru/socket/"
}, TcsUrl.INIT_URL = TcsUrl.CONTEXT_URL + "Init", TcsUrl.FINISH_AUTORIZE_URL = TcsUrl.CONTEXT_URL + "FinishAuthorize", TcsUrl.SUBMIT_3DS_URL = TcsUrl.CONTEXT_URL + "Submit3DSAuthorization", TcsUrl.UPDATE_INIT_URL = TcsUrl.WEBSOCKET_CONTEXT_URL + "dynamicUpdate", TcsPay.prototype.setMerchantSideParameters = function(e) {
    this.amount = e.amount, this.orderId = e.orderId, this.description = e.description, this.currency = e.currency, this.payForm = e.payForm, this.customerKey = e.customerKey, this.data = e.data, this.payType = e.payType, this.terminalKey = e.terminalKey, this.terminalPassword = e.terminalPassword, this.rcaPublicKey = e.rcaPublicKey, this.no3dsOnSuccess = e.no3dsOnSuccess, this.recurrent = e.recurrent, this.bill = e.bill;
    var t = $("#" + TcsConstants.PAY_FORM_ID),
        a = this;
    t && t.bind('submit', function(e) {
        a.merchantFormSubmit(), e.preventDefault()
    })
}, TcsPay.prototype.setGenerateTokenFunction = function(e) {
    this.generateToken = e
}, TcsPay.prototype.allowDynamicUpdates = function(e) {
    this.allowDynamicUpdates = e
}, TcsPay.prototype.setUpdateCallback = function(e) {
    this.dynamicUpdateCallback = e
}, TcsPay.prototype.closeDynamicUpdateSession = function() {
    this.updateParamsSocket && this.updateParamsSocket.close()
}, TcsPay.prototype.setBankSideParameters = function(e, a) {
    this.terminalKey = e, this.paymentId = a;
    var r = $("#" + TcsConstants.PAY_FORM_ID),
        n = this;
    if (r) {
        if (n.allowDynamicUpdates) try {
            var s = new WebSocket(TcsUrl.UPDATE_INIT_URL);
            (n.updateParamsSocket = s).onmessage = function(e) {
                var t = JSON.parse(e.data);
                t && (n.dynamicUpdateCallback(r, t), s.send('A' + a))
            }, s.onopen = function(e) {
                s.send('S' + a), console.log("Registered for updates " + a)
            }, $(window).on("beforeunload", function() {
                n.closeDynamicUpdateSession()
            })
        } catch (e) {
            n.updateParamsSocket = null
        }
        r.submit(function(e) {
            n.bankFormSubmit(), e.preventDefault()
        })
    }
}, TcsPay.prototype.merchantFormSubmit = function() {
    var t = this;
    this.getIp(function() {
        t.init(function(e) {
            t.paymentId = e[TcsParameters.PAYMENT_ID], t.merchantFormFinishAuthorize()
        })
    })
}, TcsPay.prototype.merchantFormFinishAuthorize = function() {
    var s = this,
        e = $("#" + TcsConstants.PAY_FORM_ID),
        t = this.getCardData(e),
        a = this.encryptCardData(t),
        r = e.find('#form-sendmail-checkbox').prop("checked"),
        n = e.find('#form-sendmail-input').val(),
        i = {
            TerminalKey: this.terminalKey,
            PaymentId: this.paymentId,
            SendEmail: r,
            InfoEmail: n,
            CardData: a
        };
    if (this.ip && (i[TcsParameters.IP] = this.ip), !this.terminalPassword) throw "terminalPassword must be set";
    if (!this.generateToken) throw "Generate token function not found";

    function o(e) {
        var t = e[TcsParameters.PAREQ],
            a = e[TcsParameters.MD],
            r = e[TcsParameters.ACSURL];
        if (t && a && r) {
            var n = {};
            n[TcsParameters.MD] = a, n[TcsParameters.PAREQ] = t, n[TcsParameters.TERM_URL] = TcsUrl.SUBMIT_3DS_URL, s.redirectWithForm(r, n)
        } else {
            if (!s.no3dsOnSuccess) throw "Authorize success handler not found";
            s.no3dsOnSuccess(e)
        }
    }
    this.generateToken(i, function(e) {
        i[TcsParameters.TOKEN] = e, s.ajaxCall(TcsUrl.FINISH_AUTORIZE_URL, i, o, "json")
    })
}, TcsPay.prototype.bankFormSubmit = function() {
    var e = $("#" + TcsConstants.PAY_FORM_ID),
        t = this.getCardData(e),
        a = e.find('#form-sendmail-checkbox').prop("checked"),
        r = e.find('#form-sendmail-input').val(),
        n = "Unknown OS"; - 1 != navigator.appVersion.indexOf("Win") && (n = "Windows"), -1 != navigator.appVersion.indexOf("Mac") && (n = "MacOS"), -1 != navigator.appVersion.indexOf("X11") && (n = "UNIX"), -1 != navigator.appVersion.indexOf("Linux") && (n = "Linux");
    var s = "Unknown";

    function i(e, t) {
        for (var a = "" + e; a.length < t;) a = '0' + a;
        return a
    }
    var o = (new Date).getTimezoneOffset();
    o = (o < 0 ? '+' : '-') + i(parseInt(Math.abs(o / 60), 10), 2) + i(Math.abs(o % 60), 2);
    var c = window.navigator.userLanguage || window.navigator.language,
        T = '';
    navigator.userAgent && (T += "|userAgent=" + navigator.userAgent.replace('<', '(').replace('>', ')')), n && (T += "|os=" + n), T += "|browser=" + s, T += "|screenSize=" + screen.width + "x" + screen.height, o && (T += "|timezone=" + o), c && (T += "|language=" + c);
    var m = window.location !== window.parent.location ? document.referrer : document.location.href; - 1 !== m.indexOf('?') && (m = m.substring(0, m.indexOf('?'))), '|' === (T += "|iframe_url=" + encodeURIComponent(m)).charAt(0) && (T = T.substr(1));
    var d = {
        TerminalKey: this.terminalKey,
        PaymentId: this.paymentId,
        SendEmail: a,
        CardData: t,
        DATA: T
    };
    r && document.getElementById("form-sendmail-checkbox").checked && (d.InfoEmail = r), this.ajaxCall(TcsUrl.FINISH_AUTORIZE_URL, d, function(e) {
        var t = $('<div />').html(e),
            a = t.find('form[name="redirectForm"]');
        if (a.length) $(document.body).append(a), a.submit();
        else {
            var r = t.find('script');
            r.length ? $(document.body).append(r) : alert("Form 'redirectForm' not found")
        }
    })
}, TcsPay.prototype.init = function(t) {
    var a = this,
        e = this.concatenateData(this.data, TcsConstants.INIT_DATA_KEY_VALUE_SEPARATOR, TcsConstants.INIT_DATA_PAIR_SEPARATOR, !0),
        r = {
            TerminalKey: this.terminalKey,
            Amount: this.amount,
            OrderId: this.orderId,
            Description: this.description,
            Currency: this.currency,
            PayForm: this.payForm,
            CustomerKey: this.customerKey,
            DATA: e,
            PayType: this.payType
        };
    this.ip && (r[TcsParameters.IP] = this.ip), this.recurrent && (r[TcsParameters.RECURRENT] = "Y"), this.bill && (r[TcsParameters.BILL] = "Y"), this.generateToken ? this.generateToken(r, function(e) {
        r[TcsParameters.TOKEN] = e, a.ajaxCall(TcsUrl.INIT_URL, r, t, "json")
    }) : a.ajaxCall(TcsUrl.INIT_URL, r, t, "json")
}, TcsPay.prototype.redirectWithForm = function(e, t) {
    var a = $('<form />');
    a.prop('action', e), a.prop('method', 'post'), $.each(t, function(e, t) {
        a.append($('<input type="hidden"/>').prop('name', e).val(t))
    }), $(document.body).append(a), a.submit()
}, TcsPay.prototype.getCardData = function(e) {
    var t = e.find("#form-card-number-input").val(),
        a = e.find("#form-month-input").val(),
        r = e.find("#form-year-input").val();
    a = ("0" + a).slice(-2), r = ("0" + r).slice(-2);
    var n = e.find("#form-cvc-input").val(),
        s = e.find("#form-cardholder-input").val(),
        i = {};
    return i[TcsParameters.PAN] = t.replace(/\s+/g, ''), i[TcsParameters.EXP_DATE] = a + r, s && (i[TcsParameters.CARD_HOLDER] = s), i[TcsParameters.CVV] = n, this.concatenateData(i, TcsConstants.CARD_DATA_KEY_VALUE_SEPARATOR, TcsConstants.CARD_DATA_PAIR_SEPARATOR, !1)
}, TcsPay.prototype.encryptCardData = function(e) {
    var t = new JSEncrypt;
    return t.setPublicKey(this.rcaPublicKey), t.encrypt(e)
}, TcsPay.prototype.concatenateData = function(e, r, n, s) {
    var i = "";
    return $.each(e, function(e, t) {
        var a = e + r + (s ? encodeURIComponent(t) : t);
        i && (i += n), i += a
    }), i
}, TcsPay.prototype.onFail = function(e, t, a, r) {
    r === TcsUrl.FINISH_AUTORIZE_URL && $("#form-submit").removeAttr('disabled', 'disabled'), alert("Ошибка соединения с сервером банка")
}, TcsPay.prototype.onError = function(e, t, a, r) {
    r === TcsUrl.FINISH_AUTORIZE_URL && $("#form-submit").removeAttr('disabled', 'disabled'), alert("Ошибка (" + e + "): " + t + " " + a)
}, TcsPay.prototype.onAjaxCallStart = function(e) {
    e === TcsUrl.FINISH_AUTORIZE_URL && $("#form-submit").attr('disabled', 'disabled')
}, TcsPay.prototype.onAjaxCallFinish = function(e) {}, TcsPay.prototype.getIp = function(e) {
    e()
}, TcsPay.prototype.ajaxCall = function(n, e, s, t, a) {
    var i = this;
    this.inProgress || (this.inProgress = !0, this.onAjaxCallStart(n), $.ajax({
        type: a || "POST",
        url: n,
        data: e,
        timeout: TcsConstants.CONNECTION_TIMEOUT_MS,
        success: function(e, t, a) {
            if (i.inProgress = !1, i.isBusinessError(a)) {
                var r = $.parseJSON(a.responseText);
                i.onError(r[TcsParameters.ERROR_CODE], r[TcsParameters.MESSAGE], r[TcsParameters.DETAILS], n)
            } else i.onAjaxCallFinish(n), s(e, t, a)
        },
        error: function(e, t, a) {
            if (i.inProgress = !1, i.isBusinessError(e)) {
                var r = $.parseJSON(e.responseText);
                i.onError(r[TcsParameters.ERROR_CODE], r[TcsParameters.MESSAGE], r[TcsParameters.DETAILS], n)
            } else i.onFail(e, t, a, n)
        },
        dataType: t || null
    }))
}, TcsPay.prototype.isBusinessError = function(e) {
    if (-1 < (e.getResponseHeader("content-type") || "").indexOf('json') && "0" !== $.parseJSON(e.responseText)[TcsParameters.ERROR_CODE]) return !0;
    return !1
};