var $vgc = jQuery.noConflict();
var $seq = jQuery.noConflict();
var $acc = jQuery.noConflict();
var $bxs = jQuery.noConflict();
var $fsd = jQuery.noConflict();
var $$ = jQuery.noConflict();

var $frm = jQuery.noConflict();
var VGC = {};

var Utils = (function () {

    var Utils = function () {

        var me = this;

        this.parseUrl = function (url) {
            var a = document.createElement('a');
            a.href = url;
            return a;
        };

        this.isEmail = function (email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        };

        this.normalizePhoneNumber = function (val) {
            var phone = this.getNumber(val);
            var filter = /^\d{10,15}$/;
            if (filter.test(phone)) {
                return phone;
            } else {
                return false;
            }
        };

        this.getNumber = function (val) {
            return val.replace(/\D+/g, '');
        };

        this.setCookie = function (key, value) {
            var expires = new Date();
            expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
            document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
        };
        this.getCookie = function (key) {
            var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
            return keyValue ? keyValue[2] : null;
        };

        this.isEmpty = function (str) {
            return (!str || 0 === str.length);
        };
        this.isBlank = function (str) {
            return (!str || /^\s*$/.test(str));
        };

    };

    return Utils;

})();
VGC.Utils = new Utils();
