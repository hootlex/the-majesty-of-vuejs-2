"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Ninja =
/*#__PURE__*/
function () {
  function Ninja(name) {
    _classCallCheck(this, Ninja);

    this.name = name;
  }

  _createClass(Ninja, [{
    key: "announce",
    value: function announce() {
      alert("\u041D\u0438\u043D\u0434\u0437\u044F ".concat(this.name, " \u0437\u0434\u0435\u0441\u044C!")); // эквивалентно этому:
      // alert('Черепашка-ниндзя ' + this.name + ' здесь!')
    }
  }]);

  return Ninja;
}();

new Ninja('Леонардо').announce();