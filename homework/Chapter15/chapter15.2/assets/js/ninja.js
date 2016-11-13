'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Ninja = function () {
    function Ninja(name) {
        _classCallCheck(this, Ninja);

        this.name = name;
    }

    _createClass(Ninja, [{
        key: 'announce',
        value: function announce() {
            alert('Ninja ' + this.name + ' is here!');

            // equivalent to:
            // alert('Ninja turtle ' + this.name + ' is here!')
        }
    }]);

    return Ninja;
}();

new Ninja('Leonardo').announce();