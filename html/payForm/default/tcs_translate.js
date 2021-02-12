function TcsTranslate() {
    this._lang = 'ru', this.defLng = 'ru', this._inition = !1, this._url = '', this._lngCol = [], this._idx = -1, this._defCol = [], this._process = !1, this._eventLoad = null
}
var __TcsTCnst = {
    und: '"url" not defined!'
};
TcsTranslate.prototype._find = function(t) {
    for (var e = -1, n = 0, s = this._lngCol.length; n < s; n++)
        if (this._lngCol[n].code == t) {
            e = n;
            break
        }
    return e
}, TcsTranslate.prototype._get = function(t) {
    t = t || this._lang;
    var e = this,
        n = $.Deferred(),
        s = e._find(t);
    if (-1 == s) {
        if (e._process)
            for (var r = 0, o = e._defCol.length; r < o; r++)
                if (e._defCol[r].code == t) return e._defCol[r].pDef;
        e._process = !0;
        var i = e._url + 'tcs_' + t + '.json';
        e._defCol.push({
            pDef: n,
            code: t,
            url: i
        }), $.getJSON(i, function(s, r) {
            if ('success' == r) {
                for (var o = 0, l = e._defCol.length; o < l; o++)
                    if (e._defCol[o].code == t) {
                        e._defCol.splice(o, 1);
                        break
                    }
                e._process = e._defCol.length > 0;
                var a = e._lngCol.push({
                    code: t,
                    trnslt: s,
                    url: i
                }) - 1;
                n.resolve(a), e._eventLoad.trigger('TcsTranslateLoadDict', a)
            } else n.reject(-1)
        })
    } else n.resolve(s);
    return n
}, TcsTranslate.prototype.init = function(t, e) {
    if (!this._inition) {
        if (t && (this._lang = t), !e) throw new Error(__TcsTCnst.und);
        this._url = e, this._eventLoad = $('#tcs-translate'), this._inition = !0
    }
}, TcsTranslate.prototype.apply = function(t) {
    var e = this;
    if (!e._inition) throw new Error(__TcsTCnst.und);
    t || (t = e._lang), e._get(t).then(function(t) {
        e._idx = t;
        var n = $('[tl-make]'),
            s = e._lngCol[e._idx].trnslt;
        n.each(function(t, e) {
            var n = $(e);
            for (var r in n[0].dataset) switch (r) {
                case 'tlText':
                    n.text(s[n[0].dataset[r]]);
                    break;
                default:
                    'tlAttr' == r.substr(0, 6) && n.attr(r.substr(6).toLowerCase(), s[n[0].dataset[r]])
            }
        })
    }, function(t) {
        throw t
    })
};