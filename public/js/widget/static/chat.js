! function(n) {
  var r = {};

  function o(t) {
    if (r[t]) return r[t].exports;
    var e = r[t] = {
      i: t,
      l: !1,
      exports: {}
    };
    return n[t].call(e.exports, e, e.exports, o), e.l = !0, e.exports
  }
  o.m = n, o.c = r, o.d = function(t, e, n) {
    o.o(t, e) || Object.defineProperty(t, e, {
      enumerable: !0,
      get: n
    })
  }, o.r = function(t) {
    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
      value: "Module"
    }), Object.defineProperty(t, "__esModule", {
      value: !0
    })
  }, o.t = function(e, t) {
    if (1 & t && (e = o(e)), 8 & t) return e;
    if (4 & t && "object" == typeof e && e && e.__esModule) return e;
    var n = Object.create(null);
    if (o.r(n), Object.defineProperty(n, "default", {
        enumerable: !0,
        value: e
      }), 2 & t && "string" != typeof e)
      for (var r in e) o.d(n, r, function(t) {
        return e[t]
      }.bind(null, r));
    return n
  }, o.n = function(t) {
    var e = t && t.__esModule ? function() {
      return t.default
    } : function() {
      return t
    };
    return o.d(e, "a", e), e
  }, o.o = function(t, e) {
    return Object.prototype.hasOwnProperty.call(t, e)
  }, o.p = "", o(o.s = 39)
}([function(t, e, n) {
  t.exports = n(22)
}, function(t, e) {
  function c(t, e, n, r, o, i, s) {
    try {
      var a = t[i](s),
        c = a.value
    } catch (t) {
      return void n(t)
    }
    a.done ? e(c) : Promise.resolve(c).then(r, o)
  }
  t.exports = function(a) {
    return function() {
      var t = this,
        s = arguments;
      return new Promise(function(e, n) {
        var r = a.apply(t, s);

        function o(t) {
          c(r, e, n, o, i, "next", t)
        }

        function i(t) {
          c(r, e, n, o, i, "throw", t)
        }
        o(void 0)
      })
    }
  }
}, function(t, e, n) {
  var o = n(10);
  t.exports = function(e) {
    for (var t = 1; t < arguments.length; t++) {
      var n = null != arguments[t] ? arguments[t] : {},
        r = Object.keys(n);
      "function" == typeof Object.getOwnPropertySymbols && (r = r.concat(Object.getOwnPropertySymbols(n).filter(function(t) {
        return Object.getOwnPropertyDescriptor(n, t).enumerable
      }))), r.forEach(function(t) {
        o(e, t, n[t])
      })
    }
    return e
  }
}, function(t, e, n) {
  "use strict";
  n.d(e, "b", function() {
    return s
  }), n.d(e, "c", function() {
    return a
  }), n.d(e, "a", function() {
    return c
  });
  var r = n(6),
    o = "object" === ("undefined" == typeof console ? "undefined" : n.n(r)()(console)),
    i = function(t) {
      return "[researchfreelancer.com] - %s ".replace("%s", t)
    },
    s = function(t) {
      var e = !(1 < arguments.length && void 0 !== arguments[1]) || arguments[1];
      return o && console.error(e ? i(t) : t), !1
    },
    a = function(t) {
      return o && console.warn(i(t)), !1
    },
    c = function(t) {
      throw i(t)
    }
}, function(t, e, n) {
  "use strict";

  function r(t, e) {
    return t + e
  }
  n.d(e, "a", function() {
    return s
  }), n.d(e, "b", function() {
    return a
  }), n.d(e, "c", function() {
    return c
  }), n.d(e, "d", function() {
    return i
  }), n.d(e, "e", function() {
    return u
  }), n.d(e, "f", function() {
    return l
  }), n.d(e, "g", function() {
    return f
  }), n.d(e, "h", function() {
    return p
  }), n.d(e, "i", function() {
    return d
  }), n.d(e, "j", function() {
    return h
  });
  var o = {}.hasOwnProperty;

  function i(t, e) {
    return o.call(e, t)
  }
  Array.isArray;

  function s(e, n) {
    return Object.keys(n).forEach(function(t) {
      e(n[t], t)
    })
  }

  function a(t) {
    return t.reduce(function(t, e) {
      var n = e[0],
        r = e[1];
      return t[n] = r, t
    }, {})
  }

  function c() {
    return Math.random().toString(36).substring(2)
  }

  function u() {}

  function l(t) {
    var e, n = !1;
    return function() {
      return n ? e : (n = !0, e = t.apply(void 0, arguments))
    }
  }

  function f(n, r) {
    return Object.keys(r).reduce(function(t, e) {
      return t[n(r[e]) ? 0 : 1][e] = r[e], t
    }, [{}, {}])
  }

  function p(t, n) {
    return t.reduce(function(t, e) {
      return t[e] = n[e], t
    }, {})
  }

  function d(t) {
    return t.reduce(r, 0)
  }
  var h = function(e) {
    return Object.keys(e).map(function(t) {
      return [t, e[t]]
    })
  }
}, function(t, To, e) {
  "use strict";
  (function(t, e) {
    var g = Object.freeze({});

    function M(t) {
      return null == t
    }

    function D(t) {
      return null != t
    }

    function O(t) {
      return !0 === t
    }

    function T(t) {
      return "string" == typeof t || "number" == typeof t || "symbol" == typeof t || "boolean" == typeof t
    }

    function R(t) {
      return null !== t && "object" == typeof t
    }
    var n = Object.prototype.toString;

    function c(t) {
      return "[object Object]" === n.call(t)
    }

    function r(t) {
      return "[object RegExp]" === n.call(t)
    }

    function o(t) {
      var e = parseFloat(String(t));
      return 0 <= e && Math.floor(e) === e && isFinite(t)
    }

    function i(t) {
      return null == t ? "" : "object" == typeof t ? JSON.stringify(t, null, 2) : String(t)
    }

    function z(t) {
      var e = parseFloat(t);
      return isNaN(e) ? t : e
    }

    function a(t, e) {
      for (var n = Object.create(null), r = t.split(","), o = 0; o < r.length; o++) n[r[o]] = !0;
      return e ? function(t) {
        return n[t.toLowerCase()]
      } : function(t) {
        return n[t]
      }
    }
    a("slot,component", !0);
    var u = a("key,ref,slot,slot-scope,is");

    function l(t, e) {
      if (t.length) {
        var n = t.indexOf(e);
        if (-1 < n) return t.splice(n, 1)
      }
    }
    var s = Object.prototype.hasOwnProperty;

    function f(t, e) {
      return s.call(t, e)
    }

    function p(e) {
      var n = Object.create(null);
      return function(t) {
        return n[t] || (n[t] = e(t))
      }
    }
    var d = /-(\w)/g,
      h = p(function(t) {
        return t.replace(d, function(t, e) {
          return e ? e.toUpperCase() : ""
        })
      }),
      v = p(function(t) {
        return t.charAt(0).toUpperCase() + t.slice(1)
      }),
      m = /\B([A-Z])/g,
      _ = p(function(t) {
        return t.replace(m, "-$1").toLowerCase()
      });
    var y = Function.prototype.bind ? function(t, e) {
      return t.bind(e)
    } : function(n, r) {
      function t(t) {
        var e = arguments.length;
        return e ? 1 < e ? n.apply(r, arguments) : n.call(r, t) : n.call(r)
      }
      return t._length = n.length, t
    };

    function w(t, e) {
      e = e || 0;
      for (var n = t.length - e, r = new Array(n); n--;) r[n] = t[n + e];
      return r
    }

    function b(t, e) {
      for (var n in e) t[n] = e[n];
      return t
    }

    function $(t) {
      for (var e = {}, n = 0; n < t.length; n++) t[n] && b(e, t[n]);
      return e
    }

    function x(t, e, n) {}
    var k = function(t, e, n) {
        return !1
      },
      C = function(t) {
        return t
      };

    function S(e, n) {
      if (e === n) return !0;
      var t = R(e),
        r = R(n);
      if (!t || !r) return !t && !r && String(e) === String(n);
      try {
        var o = Array.isArray(e),
          i = Array.isArray(n);
        if (o && i) return e.length === n.length && e.every(function(t, e) {
          return S(t, n[e])
        });
        if (e instanceof Date && n instanceof Date) return e.getTime() === n.getTime();
        if (o || i) return !1;
        var s = Object.keys(e),
          a = Object.keys(n);
        return s.length === a.length && s.every(function(t) {
          return S(e[t], n[t])
        })
      } catch (t) {
        return !1
      }
    }

    function E(t, e) {
      for (var n = 0; n < t.length; n++)
        if (S(t[n], e)) return n;
      return -1
    }

    function N(t) {
      var e = !1;
      return function() {
        e || (e = !0, t.apply(this, arguments))
      }
    }
    var A = "data-server-rendered",
      j = ["component", "directive", "filter"],
      I = ["beforeCreate", "created", "beforeMount", "mounted", "beforeUpdate", "updated", "beforeDestroy", "destroyed", "activated", "deactivated", "errorCaptured"],
      P = {
        optionMergeStrategies: Object.create(null),
        silent: !1,
        productionTip: !1,
        devtools: !1,
        performance: !1,
        errorHandler: null,
        warnHandler: null,
        ignoredElements: [],
        keyCodes: Object.create(null),
        isReservedTag: k,
        isReservedAttr: k,
        isUnknownElement: k,
        getTagNamespace: x,
        parsePlatformTagName: C,
        mustUseProp: k,
        async: !0,
        _lifecycleHooks: I
      };

    function L(t, e, n, r) {
      Object.defineProperty(t, e, {
        value: n,
        enumerable: !!r,
        writable: !0,
        configurable: !0
      })
    }
    var H = /[^\w.$]/;
    var B, F = "__proto__" in {},
      U = "undefined" != typeof window,
      V = "undefined" != typeof WXEnvironment && !!WXEnvironment.platform,
      q = V && WXEnvironment.platform.toLowerCase(),
      W = U && window.navigator.userAgent.toLowerCase(),
      G = W && /msie|trident/.test(W),
      Y = W && 0 < W.indexOf("msie 9.0"),
      X = W && 0 < W.indexOf("edge/"),
      J = (W && W.indexOf("android"), W && /iphone|ipad|ipod|ios/.test(W) || "ios" === q),
      K = (W && /chrome\/\d+/.test(W), {}.watch),
      Q = !1;
    if (U) try {
      var Z = {};
      Object.defineProperty(Z, "passive", {
        get: function() {
          Q = !0
        }
      }), window.addEventListener("test-passive", null, Z)
    } catch (t) {}
    var tt = function() {
        return void 0 === B && (B = !U && !V && void 0 !== t && (t.process && "server" === t.process.env.VUE_ENV)), B
      },
      et = U && window.__VUE_DEVTOOLS_GLOBAL_HOOK__;

    function nt(t) {
      return "function" == typeof t && /native code/.test(t.toString())
    }
    var rt, ot = "undefined" != typeof Symbol && nt(Symbol) && "undefined" != typeof Reflect && nt(Reflect.ownKeys);
    rt = "undefined" != typeof Set && nt(Set) ? Set : function() {
      function t() {
        this.set = Object.create(null)
      }
      return t.prototype.has = function(t) {
        return !0 === this.set[t]
      }, t.prototype.add = function(t) {
        this.set[t] = !0
      }, t.prototype.clear = function() {
        this.set = Object.create(null)
      }, t
    }();
    var it = x,
      st = 0,
      at = function() {
        this.id = st++, this.subs = []
      };
    at.prototype.addSub = function(t) {
      this.subs.push(t)
    }, at.prototype.removeSub = function(t) {
      l(this.subs, t)
    }, at.prototype.depend = function() {
      at.target && at.target.addDep(this)
    }, at.prototype.notify = function() {
      var t = this.subs.slice();
      for (var e = 0, n = t.length; e < n; e++) t[e].update()
    }, at.target = null;
    var ct = [];

    function ut(t) {
      ct.push(t), at.target = t
    }

    function lt() {
      ct.pop(), at.target = ct[ct.length - 1]
    }
    var ft = function(t, e, n, r, o, i, s, a) {
        this.tag = t, this.data = e, this.children = n, this.text = r, this.elm = o, this.ns = void 0, this.context = i, this.fnContext = void 0, this.fnOptions = void 0, this.fnScopeId = void 0, this.key = e && e.key, this.componentOptions = s, this.componentInstance = void 0, this.parent = void 0, this.raw = !1, this.isStatic = !1, this.isRootInsert = !0, this.isComment = !1, this.isCloned = !1, this.isOnce = !1, this.asyncFactory = a, this.asyncMeta = void 0, this.isAsyncPlaceholder = !1
      },
      pt = {
        child: {
          configurable: !0
        }
      };
    pt.child.get = function() {
      return this.componentInstance
    }, Object.defineProperties(ft.prototype, pt);
    var dt = function(t) {
      void 0 === t && (t = "");
      var e = new ft;
      return e.text = t, e.isComment = !0, e
    };

    function ht(t) {
      return new ft(void 0, void 0, void 0, String(t))
    }

    function vt(t) {
      var e = new ft(t.tag, t.data, t.children && t.children.slice(), t.text, t.elm, t.context, t.componentOptions, t.asyncFactory);
      return e.ns = t.ns, e.isStatic = t.isStatic, e.key = t.key, e.isComment = t.isComment, e.fnContext = t.fnContext, e.fnOptions = t.fnOptions, e.fnScopeId = t.fnScopeId, e.asyncMeta = t.asyncMeta, e.isCloned = !0, e
    }
    var mt = Array.prototype,
      gt = Object.create(mt);
    ["push", "pop", "shift", "unshift", "splice", "sort", "reverse"].forEach(function(i) {
      var s = mt[i];
      L(gt, i, function() {
        for (var t = [], e = arguments.length; e--;) t[e] = arguments[e];
        var n, r = s.apply(this, t),
          o = this.__ob__;
        switch (i) {
          case "push":
          case "unshift":
            n = t;
            break;
          case "splice":
            n = t.slice(2)
        }
        return n && o.observeArray(n), o.dep.notify(), r
      })
    });
    var _t = Object.getOwnPropertyNames(gt),
      yt = !0;

    function wt(t) {
      yt = t
    }
    var bt = function(t) {
      var e;
      this.value = t, this.dep = new at, this.vmCount = 0, L(t, "__ob__", this), Array.isArray(t) ? (F ? (e = gt, t.__proto__ = e) : function(t, e, n) {
        for (var r = 0, o = n.length; r < o; r++) {
          var i = n[r];
          L(t, i, e[i])
        }
      }(t, gt, _t), this.observeArray(t)) : this.walk(t)
    };

    function $t(t, e) {
      var n;
      if (R(t) && !(t instanceof ft)) return f(t, "__ob__") && t.__ob__ instanceof bt ? n = t.__ob__ : yt && !tt() && (Array.isArray(t) || c(t)) && Object.isExtensible(t) && !t._isVue && (n = new bt(t)), e && n && n.vmCount++, n
    }

    function xt(n, t, r, e, o) {
      var i = new at,
        s = Object.getOwnPropertyDescriptor(n, t);
      if (!s || !1 !== s.configurable) {
        var a = s && s.get,
          c = s && s.set;
        a && !c || 2 !== arguments.length || (r = n[t]);
        var u = !o && $t(r);
        Object.defineProperty(n, t, {
          enumerable: !0,
          configurable: !0,
          get: function() {
            var t = a ? a.call(n) : r;
            return at.target && (i.depend(), u && (u.dep.depend(), Array.isArray(t) && function t(e) {
              for (var n = void 0, r = 0, o = e.length; r < o; r++)(n = e[r]) && n.__ob__ && n.__ob__.dep.depend(), Array.isArray(n) && t(n)
            }(t))), t
          },
          set: function(t) {
            var e = a ? a.call(n) : r;
            t === e || t != t && e != e || a && !c || (c ? c.call(n, t) : r = t, u = !o && $t(t), i.notify())
          }
        })
      }
    }

    function kt(t, e, n) {
      if (Array.isArray(t) && o(e)) return t.length = Math.max(t.length, e), t.splice(e, 1, n), n;
      if (e in t && !(e in Object.prototype)) return t[e] = n;
      var r = t.__ob__;
      return t._isVue || r && r.vmCount ? n : r ? (xt(r.value, e, n), r.dep.notify(), n) : t[e] = n
    }

    function Ct(t, e) {
      if (Array.isArray(t) && o(e)) t.splice(e, 1);
      else {
        var n = t.__ob__;
        t._isVue || n && n.vmCount || f(t, e) && (delete t[e], n && n.dep.notify())
      }
    }
    bt.prototype.walk = function(t) {
      for (var e = Object.keys(t), n = 0; n < e.length; n++) xt(t, e[n])
    }, bt.prototype.observeArray = function(t) {
      for (var e = 0, n = t.length; e < n; e++) $t(t[e])
    };
    var St = P.optionMergeStrategies;

    function Et(t, e) {
      if (!e) return t;
      for (var n, r, o, i = Object.keys(e), s = 0; s < i.length; s++) r = t[n = i[s]], o = e[n], f(t, n) ? r !== o && c(r) && c(o) && Et(r, o) : kt(t, n, o);
      return t
    }

    function Ot(n, r, o) {
      return o ? function() {
        var t = "function" == typeof r ? r.call(o, o) : r,
          e = "function" == typeof n ? n.call(o, o) : n;
        return t ? Et(t, e) : e
      } : r ? n ? function() {
        return Et("function" == typeof r ? r.call(this, this) : r, "function" == typeof n ? n.call(this, this) : n)
      } : r : n
    }

    function Tt(t, e) {
      var n = e ? t ? t.concat(e) : Array.isArray(e) ? e : [e] : t;
      return n ? function(t) {
        for (var e = [], n = 0; n < t.length; n++) - 1 === e.indexOf(t[n]) && e.push(t[n]);
        return e
      }(n) : n
    }

    function At(t, e, n, r) {
      var o = Object.create(t || null);
      return e ? b(o, e) : o
    }
    St.data = function(t, e, n) {
      return n ? Ot(t, e, n) : e && "function" != typeof e ? t : Ot(t, e)
    }, I.forEach(function(t) {
      St[t] = Tt
    }), j.forEach(function(t) {
      St[t + "s"] = At
    }), St.watch = function(t, e, n, r) {
      if (t === K && (t = void 0), e === K && (e = void 0), !e) return Object.create(t || null);
      if (!t) return e;
      var o = {};
      for (var i in b(o, t), e) {
        var s = o[i],
          a = e[i];
        s && !Array.isArray(s) && (s = [s]), o[i] = s ? s.concat(a) : Array.isArray(a) ? a : [a]
      }
      return o
    }, St.props = St.methods = St.inject = St.computed = function(t, e, n, r) {
      if (!t) return e;
      var o = Object.create(null);
      return b(o, t), e && b(o, e), o
    }, St.provide = Ot;
    var jt = function(t, e) {
      return void 0 === e ? t : e
    };

    function It(n, r, o) {
      if ("function" == typeof r && (r = r.options), function(t, e) {
          var n = t.props;
          if (n) {
            var r, o, i = {};
            if (Array.isArray(n))
              for (r = n.length; r--;) "string" == typeof(o = n[r]) && (i[h(o)] = {
                type: null
              });
            else if (c(n))
              for (var s in n) o = n[s], i[h(s)] = c(o) ? o : {
                type: o
              };
            t.props = i
          }
        }(r), function(t, e) {
          var n = t.inject;
          if (n) {
            var r = t.inject = {};
            if (Array.isArray(n))
              for (var o = 0; o < n.length; o++) r[n[o]] = {
                from: n[o]
              };
            else if (c(n))
              for (var i in n) {
                var s = n[i];
                r[i] = c(s) ? b({
                  from: i
                }, s) : {
                  from: s
                }
              }
          }
        }(r), function(t) {
          var e = t.directives;
          if (e)
            for (var n in e) {
              var r = e[n];
              "function" == typeof r && (e[n] = {
                bind: r,
                update: r
              })
            }
        }(r), !r._base && (r.extends && (n = It(n, r.extends, o)), r.mixins))
        for (var t = 0, e = r.mixins.length; t < e; t++) n = It(n, r.mixins[t], o);
      var i, s = {};
      for (i in n) a(i);
      for (i in r) f(n, i) || a(i);

      function a(t) {
        var e = St[t] || jt;
        s[t] = e(n[t], r[t], o, t)
      }
      return s
    }

    function Pt(t, e, n, r) {
      if ("string" == typeof n) {
        var o = t[e];
        if (f(o, n)) return o[n];
        var i = h(n);
        if (f(o, i)) return o[i];
        var s = v(i);
        return f(o, s) ? o[s] : o[n] || o[i] || o[s]
      }
    }

    function Lt(t, e, n, r) {
      var o = e[t],
        i = !f(n, t),
        s = n[t],
        a = Rt(Boolean, o.type);
      if (-1 < a)
        if (i && !f(o, "default")) s = !1;
        else if ("" === s || s === _(t)) {
        var c = Rt(String, o.type);
        (c < 0 || a < c) && (s = !0)
      }
      if (void 0 === s) {
        s = function(t, e, n) {
          if (!f(e, "default")) return;
          var r = e.default;
          0;
          if (t && t.$options.propsData && void 0 === t.$options.propsData[n] && void 0 !== t._props[n]) return t._props[n];
          return "function" == typeof r && "Function" !== Mt(e.type) ? r.call(t) : r
        }(r, o, t);
        var u = yt;
        wt(!0), $t(s), wt(u)
      }
      return s
    }

    function Mt(t) {
      var e = t && t.toString().match(/^\s*function (\w+)/);
      return e ? e[1] : ""
    }

    function Dt(t, e) {
      return Mt(t) === Mt(e)
    }

    function Rt(t, e) {
      if (!Array.isArray(e)) return Dt(e, t) ? 0 : -1;
      for (var n = 0, r = e.length; n < r; n++)
        if (Dt(e[n], t)) return n;
      return -1
    }

    function zt(t, e, n) {
      if (e)
        for (var r = e; r = r.$parent;) {
          var o = r.$options.errorCaptured;
          if (o)
            for (var i = 0; i < o.length; i++) try {
              if (!1 === o[i].call(r, t, e, n)) return
            } catch (t) {
              Nt(t, r, "errorCaptured hook")
            }
        }
      Nt(t, e, n)
    }

    function Nt(t, e, n) {
      if (P.errorHandler) try {
        return P.errorHandler.call(null, t, e, n)
      } catch (t) {
        Ht(t, null, "config.errorHandler")
      }
      Ht(t, e, n)
    }

    function Ht(t, e, n) {
      if (!U && !V || "undefined" == typeof console) throw t;
      console.error(t)
    }
    var Bt, Ft, Ut = [],
      Vt = !1;

    function qt() {
      Vt = !1;
      for (var t = Ut.slice(0), e = Ut.length = 0; e < t.length; e++) t[e]()
    }
    var Wt = !1;
    if (void 0 !== e && nt(e)) Ft = function() {
      e(qt)
    };
    else if ("undefined" == typeof MessageChannel || !nt(MessageChannel) && "[object MessageChannelConstructor]" !== MessageChannel.toString()) Ft = function() {
      setTimeout(qt, 0)
    };
    else {
      var Gt = new MessageChannel,
        Yt = Gt.port2;
      Gt.port1.onmessage = qt, Ft = function() {
        Yt.postMessage(1)
      }
    }
    if ("undefined" != typeof Promise && nt(Promise)) {
      var Xt = Promise.resolve();
      Bt = function() {
        Xt.then(qt), J && setTimeout(x)
      }
    } else Bt = Ft;

    function Jt(t, e) {
      var n;
      if (Ut.push(function() {
          if (t) try {
            t.call(e)
          } catch (t) {
            zt(t, e, "nextTick")
          } else n && n(e)
        }), Vt || (Vt = !0, Wt ? Ft() : Bt()), !t && "undefined" != typeof Promise) return new Promise(function(t) {
        n = t
      })
    }
    var Kt = new rt;

    function Qt(t) {
      ! function t(e, n) {
        var r, o;
        var i = Array.isArray(e);
        if (!i && !R(e) || Object.isFrozen(e) || e instanceof ft) return;
        if (e.__ob__) {
          var s = e.__ob__.dep.id;
          if (n.has(s)) return;
          n.add(s)
        }
        if (i)
          for (r = e.length; r--;) t(e[r], n);
        else
          for (o = Object.keys(e), r = o.length; r--;) t(e[o[r]], n)
      }(t, Kt), Kt.clear()
    }
    var Zt, te = p(function(t) {
      var e = "&" === t.charAt(0),
        n = "~" === (t = e ? t.slice(1) : t).charAt(0),
        r = "!" === (t = n ? t.slice(1) : t).charAt(0);
      return {
        name: t = r ? t.slice(1) : t,
        once: n,
        capture: r,
        passive: e
      }
    });

    function ee(t) {
      function o() {
        var t = arguments,
          e = o.fns;
        if (!Array.isArray(e)) return e.apply(null, arguments);
        for (var n = e.slice(), r = 0; r < n.length; r++) n[r].apply(null, t)
      }
      return o.fns = t, o
    }

    function ne(t, e, n, r, o, i) {
      var s, a, c, u;
      for (s in t) a = t[s], c = e[s], u = te(s), M(a) || (M(c) ? (M(a.fns) && (a = t[s] = ee(a)), O(u.once) && (a = t[s] = o(u.name, a, u.capture)), n(u.name, a, u.capture, u.passive, u.params)) : a !== c && (c.fns = a, t[s] = c));
      for (s in e) M(t[s]) && r((u = te(s)).name, e[s], u.capture)
    }

    function re(t, e, n) {
      var r;
      t instanceof ft && (t = t.data.hook || (t.data.hook = {}));
      var o = t[e];

      function i() {
        n.apply(this, arguments), l(r.fns, i)
      }
      M(o) ? r = ee([i]) : D(o.fns) && O(o.merged) ? (r = o).fns.push(i) : r = ee([o, i]), r.merged = !0, t[e] = r
    }

    function oe(t, e, n, r, o) {
      if (D(e)) {
        if (f(e, n)) return t[n] = e[n], o || delete e[n], !0;
        if (f(e, r)) return t[n] = e[r], o || delete e[r], !0
      }
      return !1
    }

    function ie(t) {
      return T(t) ? [ht(t)] : Array.isArray(t) ? function t(e, n) {
        var r = [];
        var o, i, s, a;
        for (o = 0; o < e.length; o++) M(i = e[o]) || "boolean" == typeof i || (s = r.length - 1, a = r[s], Array.isArray(i) ? 0 < i.length && (se((i = t(i, (n || "") + "_" + o))[0]) && se(a) && (r[s] = ht(a.text + i[0].text), i.shift()), r.push.apply(r, i)) : T(i) ? se(a) ? r[s] = ht(a.text + i) : "" !== i && r.push(ht(i)) : se(i) && se(a) ? r[s] = ht(a.text + i.text) : (O(e._isVList) && D(i.tag) && M(i.key) && D(n) && (i.key = "__vlist" + n + "_" + o + "__"), r.push(i)));
        return r
      }(t) : void 0
    }

    function se(t) {
      return D(t) && D(t.text) && !1 === t.isComment
    }

    function ae(t, e) {
      return (t.__esModule || ot && "Module" === t[Symbol.toStringTag]) && (t = t.default), R(t) ? e.extend(t) : t
    }

    function ce(t) {
      return t.isComment && t.asyncFactory
    }

    function ue(t) {
      if (Array.isArray(t))
        for (var e = 0; e < t.length; e++) {
          var n = t[e];
          if (D(n) && (D(n.componentOptions) || ce(n))) return n
        }
    }

    function le(t, e) {
      Zt.$on(t, e)
    }

    function fe(t, e) {
      Zt.$off(t, e)
    }

    function pe(e, n) {
      var r = Zt;
      return function t() {
        null !== n.apply(null, arguments) && r.$off(e, t)
      }
    }

    function de(t, e, n) {
      Zt = t, ne(e, n || {}, le, fe, pe), Zt = void 0
    }

    function he(t, e) {
      var n = {};
      if (!t) return n;
      for (var r = 0, o = t.length; r < o; r++) {
        var i = t[r],
          s = i.data;
        if (s && s.attrs && s.attrs.slot && delete s.attrs.slot, i.context !== e && i.fnContext !== e || !s || null == s.slot)(n.default || (n.default = [])).push(i);
        else {
          var a = s.slot,
            c = n[a] || (n[a] = []);
          "template" === i.tag ? c.push.apply(c, i.children || []) : c.push(i)
        }
      }
      for (var u in n) n[u].every(ve) && delete n[u];
      return n
    }

    function ve(t) {
      return t.isComment && !t.asyncFactory || " " === t.text
    }

    function me(t, e) {
      e = e || {};
      for (var n = 0; n < t.length; n++) Array.isArray(t[n]) ? me(t[n], e) : e[t[n].key] = t[n].fn;
      return e
    }
    var ge = null;

    function _e(t) {
      var e = ge;
      return ge = t,
        function() {
          ge = e
        }
    }

    function ye(t) {
      for (; t && (t = t.$parent);)
        if (t._inactive) return !0;
      return !1
    }

    function we(t, e) {
      if (e) {
        if (t._directInactive = !1, ye(t)) return
      } else if (t._directInactive) return;
      if (t._inactive || null === t._inactive) {
        t._inactive = !1;
        for (var n = 0; n < t.$children.length; n++) we(t.$children[n]);
        be(t, "activated")
      }
    }

    function be(e, n) {
      ut();
      var t = e.$options[n];
      if (t)
        for (var r = 0, o = t.length; r < o; r++) try {
          t[r].call(e)
        } catch (t) {
          zt(t, e, n + " hook")
        }
      e._hasHookEvent && e.$emit("hook:" + n), lt()
    }
    var $e = [],
      xe = [],
      ke = {},
      Ce = !1,
      Se = !1,
      Ee = 0;

    function Oe() {
      var t, e;
      for (Se = !0, $e.sort(function(t, e) {
          return t.id - e.id
        }), Ee = 0; Ee < $e.length; Ee++)(t = $e[Ee]).before && t.before(), e = t.id, ke[e] = null, t.run();
      var n = xe.slice(),
        r = $e.slice();
      Ee = $e.length = xe.length = 0, Ce = Se = !(ke = {}),
        function(t) {
          for (var e = 0; e < t.length; e++) t[e]._inactive = !0, we(t[e], !0)
        }(n),
        function(t) {
          var e = t.length;
          for (; e--;) {
            var n = t[e],
              r = n.vm;
            r._watcher === n && r._isMounted && !r._isDestroyed && be(r, "updated")
          }
        }(r), et && P.devtools && et.emit("flush")
    }
    var Te = 0,
      Ae = function(t, e, n, r, o) {
        this.vm = t, o && (t._watcher = this), t._watchers.push(this), r ? (this.deep = !!r.deep, this.user = !!r.user, this.lazy = !!r.lazy, this.sync = !!r.sync, this.before = r.before) : this.deep = this.user = this.lazy = this.sync = !1, this.cb = n, this.id = ++Te, this.active = !0, this.dirty = this.lazy, this.deps = [], this.newDeps = [], this.depIds = new rt, this.newDepIds = new rt, this.expression = "", "function" == typeof e ? this.getter = e : (this.getter = function(t) {
          if (!H.test(t)) {
            var n = t.split(".");
            return function(t) {
              for (var e = 0; e < n.length; e++) {
                if (!t) return;
                t = t[n[e]]
              }
              return t
            }
          }
        }(e), this.getter || (this.getter = x)), this.value = this.lazy ? void 0 : this.get()
      };
    Ae.prototype.get = function() {
      var t;
      ut(this);
      var e = this.vm;
      try {
        t = this.getter.call(e, e)
      } catch (t) {
        if (!this.user) throw t;
        zt(t, e, 'getter for watcher "' + this.expression + '"')
      } finally {
        this.deep && Qt(t), lt(), this.cleanupDeps()
      }
      return t
    }, Ae.prototype.addDep = function(t) {
      var e = t.id;
      this.newDepIds.has(e) || (this.newDepIds.add(e), this.newDeps.push(t), this.depIds.has(e) || t.addSub(this))
    }, Ae.prototype.cleanupDeps = function() {
      for (var t = this.deps.length; t--;) {
        var e = this.deps[t];
        this.newDepIds.has(e.id) || e.removeSub(this)
      }
      var n = this.depIds;
      this.depIds = this.newDepIds, this.newDepIds = n, this.newDepIds.clear(), n = this.deps, this.deps = this.newDeps, this.newDeps = n, this.newDeps.length = 0
    }, Ae.prototype.update = function() {
      this.lazy ? this.dirty = !0 : this.sync ? this.run() : function(t) {
        var e = t.id;
        if (null == ke[e]) {
          if (ke[e] = !0, Se) {
            for (var n = $e.length - 1; Ee < n && $e[n].id > t.id;) n--;
            $e.splice(n + 1, 0, t)
          } else $e.push(t);
          Ce || (Ce = !0, Jt(Oe))
        }
      }(this)
    }, Ae.prototype.run = function() {
      if (this.active) {
        var t = this.get();
        if (t !== this.value || R(t) || this.deep) {
          var e = this.value;
          if (this.value = t, this.user) try {
            this.cb.call(this.vm, t, e)
          } catch (t) {
            zt(t, this.vm, 'callback for watcher "' + this.expression + '"')
          } else this.cb.call(this.vm, t, e)
        }
      }
    }, Ae.prototype.evaluate = function() {
      this.value = this.get(), this.dirty = !1
    }, Ae.prototype.depend = function() {
      for (var t = this.deps.length; t--;) this.deps[t].depend()
    }, Ae.prototype.teardown = function() {
      if (this.active) {
        this.vm._isBeingDestroyed || l(this.vm._watchers, this);
        for (var t = this.deps.length; t--;) this.deps[t].removeSub(this);
        this.active = !1
      }
    };
    var je = {
      enumerable: !0,
      configurable: !0,
      get: x,
      set: x
    };

    function Ie(t, e, n) {
      je.get = function() {
        return this[e][n]
      }, je.set = function(t) {
        this[e][n] = t
      }, Object.defineProperty(t, n, je)
    }

    function Pe(t) {
      t._watchers = [];
      var e = t.$options;
      e.props && function(n, r) {
        var o = n.$options.propsData || {},
          i = n._props = {},
          s = n.$options._propKeys = [];
        n.$parent && wt(!1);
        var t = function(t) {
          s.push(t);
          var e = Lt(t, r, o, n);
          xt(i, t, e), t in n || Ie(n, "_props", t)
        };
        for (var e in r) t(e);
        wt(!0)
      }(t, e.props), e.methods && function(t, e) {
        t.$options.props;
        for (var n in e) t[n] = "function" != typeof e[n] ? x : y(e[n], t)
      }(t, e.methods), e.data ? function(t) {
        var e = t.$options.data;
        c(e = t._data = "function" == typeof e ? function(t, e) {
          ut();
          try {
            return t.call(e, e)
          } catch (t) {
            return zt(t, e, "data()"), {}
          } finally {
            lt()
          }
        }(e, t) : e || {}) || (e = {});
        var n = Object.keys(e),
          r = t.$options.props,
          o = (t.$options.methods, n.length);
        for (; o--;) {
          var i = n[o];
          0, r && f(r, i) || (void 0, 36 !== (s = (i + "").charCodeAt(0)) && 95 !== s && Ie(t, "_data", i))
        }
        var s;
        $t(e, !0)
      }(t) : $t(t._data = {}, !0), e.computed && function(t, e) {
        var n = t._computedWatchers = Object.create(null),
          r = tt();
        for (var o in e) {
          var i = e[o],
            s = "function" == typeof i ? i : i.get;
          0, r || (n[o] = new Ae(t, s || x, x, Le)), o in t || Me(t, o, i)
        }
      }(t, e.computed), e.watch && e.watch !== K && function(t, e) {
        for (var n in e) {
          var r = e[n];
          if (Array.isArray(r))
            for (var o = 0; o < r.length; o++) ze(t, n, r[o]);
          else ze(t, n, r)
        }
      }(t, e.watch)
    }
    var Le = {
      lazy: !0
    };

    function Me(t, e, n) {
      var r = !tt();
      je.set = "function" == typeof n ? (je.get = r ? De(e) : Re(n), x) : (je.get = n.get ? r && !1 !== n.cache ? De(e) : Re(n.get) : x, n.set || x), Object.defineProperty(t, e, je)
    }

    function De(e) {
      return function() {
        var t = this._computedWatchers && this._computedWatchers[e];
        if (t) return t.dirty && t.evaluate(), at.target && t.depend(), t.value
      }
    }

    function Re(t) {
      return function() {
        return t.call(this, this)
      }
    }

    function ze(t, e, n, r) {
      return c(n) && (n = (r = n).handler), "string" == typeof n && (n = t[n]), t.$watch(e, n, r)
    }

    function Ne(e, t) {
      if (e) {
        for (var n = Object.create(null), r = ot ? Reflect.ownKeys(e).filter(function(t) {
            return Object.getOwnPropertyDescriptor(e, t).enumerable
          }) : Object.keys(e), o = 0; o < r.length; o++) {
          for (var i = r[o], s = e[i].from, a = t; a;) {
            if (a._provided && f(a._provided, s)) {
              n[i] = a._provided[s];
              break
            }
            a = a.$parent
          }
          if (!a)
            if ("default" in e[i]) {
              var c = e[i].default;
              n[i] = "function" == typeof c ? c.call(t) : c
            } else 0
        }
        return n
      }
    }

    function He(t, e) {
      var n, r, o, i, s;
      if (Array.isArray(t) || "string" == typeof t)
        for (n = new Array(t.length), r = 0, o = t.length; r < o; r++) n[r] = e(t[r], r);
      else if ("number" == typeof t)
        for (n = new Array(t), r = 0; r < t; r++) n[r] = e(r + 1, r);
      else if (R(t))
        for (i = Object.keys(t), n = new Array(i.length), r = 0, o = i.length; r < o; r++) s = i[r], n[r] = e(t[s], s, r);
      return D(n) || (n = []), n._isVList = !0, n
    }

    function Be(t, e, n, r) {
      var o, i = this.$scopedSlots[t];
      o = i ? (n = n || {}, r && (n = b(b({}, r), n)), i(n) || e) : this.$slots[t] || e;
      var s = n && n.slot;
      return s ? this.$createElement("template", {
        slot: s
      }, o) : o
    }

    function Fe(t) {
      return Pt(this.$options, "filters", t) || C
    }

    function Ue(t, e) {
      return Array.isArray(t) ? -1 === t.indexOf(e) : t !== e
    }

    function Ve(t, e, n, r, o) {
      var i = P.keyCodes[e] || n;
      return o && r && !P.keyCodes[e] ? Ue(o, r) : i ? Ue(i, t) : r ? _(r) !== e : void 0
    }

    function qe(r, o, i, s, a) {
      if (i)
        if (R(i)) {
          var c;
          Array.isArray(i) && (i = $(i));
          var t = function(e) {
            if ("class" === e || "style" === e || u(e)) c = r;
            else {
              var t = r.attrs && r.attrs.type;
              c = s || P.mustUseProp(o, t, e) ? r.domProps || (r.domProps = {}) : r.attrs || (r.attrs = {})
            }
            var n = h(e);
            e in c || n in c || (c[e] = i[e], a && ((r.on || (r.on = {}))["update:" + n] = function(t) {
              i[e] = t
            }))
          };
          for (var e in i) t(e)
        } else;
      return r
    }

    function We(t, e) {
      var n = this._staticTrees || (this._staticTrees = []),
        r = n[t];
      return r && !e || Ye(r = n[t] = this.$options.staticRenderFns[t].call(this._renderProxy, null, this), "__static__" + t, !1), r
    }

    function Ge(t, e, n) {
      return Ye(t, "__once__" + e + (n ? "_" + n : ""), !0), t
    }

    function Ye(t, e, n) {
      if (Array.isArray(t))
        for (var r = 0; r < t.length; r++) t[r] && "string" != typeof t[r] && Xe(t[r], e + "_" + r, n);
      else Xe(t, e, n)
    }

    function Xe(t, e, n) {
      t.isStatic = !0, t.key = e, t.isOnce = n
    }

    function Je(t, e) {
      if (e)
        if (c(e)) {
          var n = t.on = t.on ? b({}, t.on) : {};
          for (var r in e) {
            var o = n[r],
              i = e[r];
            n[r] = o ? [].concat(o, i) : i
          }
        } else;
      return t
    }

    function Ke(t) {
      t._o = Ge, t._n = z, t._s = i, t._l = He, t._t = Be, t._q = S, t._i = E, t._m = We, t._f = Fe, t._k = Ve, t._b = qe, t._v = ht, t._e = dt, t._u = me, t._g = Je
    }

    function Qe(t, e, n, i, r) {
      var s, a = r.options;
      f(i, "_uid") ? (s = Object.create(i))._original = i : i = (s = i)._original;
      var o = O(a._compiled),
        c = !o;
      this.data = t, this.props = e, this.children = n, this.parent = i, this.listeners = t.on || g, this.injections = Ne(a.inject, i), this.slots = function() {
        return he(n, i)
      }, o && (this.$options = a, this.$slots = this.slots(), this.$scopedSlots = t.scopedSlots || g), a._scopeId ? this._c = function(t, e, n, r) {
        var o = cn(s, t, e, n, r, c);
        return o && !Array.isArray(o) && (o.fnScopeId = a._scopeId, o.fnContext = i), o
      } : this._c = function(t, e, n, r) {
        return cn(s, t, e, n, r, c)
      }
    }

    function Ze(t, e, n, r, o) {
      var i = vt(t);
      return i.fnContext = n, i.fnOptions = r, e.slot && ((i.data || (i.data = {})).slot = e.slot), i
    }

    function tn(t, e) {
      for (var n in e) t[h(n)] = e[n]
    }
    Ke(Qe.prototype);
    var en = {
        init: function(t, e) {
          if (t.componentInstance && !t.componentInstance._isDestroyed && t.data.keepAlive) {
            var n = t;
            en.prepatch(n, n)
          } else {
            (t.componentInstance = function(t, e) {
              var n = {
                  _isComponent: !0,
                  _parentVnode: t,
                  parent: e
                },
                r = t.data.inlineTemplate;
              D(r) && (n.render = r.render, n.staticRenderFns = r.staticRenderFns);
              return new t.componentOptions.Ctor(n)
            }(t, ge)).$mount(e ? t.elm : void 0, e)
          }
        },
        prepatch: function(t, e) {
          var n = e.componentOptions;
          ! function(t, e, n, r, o) {
            var i = !!(o || t.$options._renderChildren || r.data.scopedSlots || t.$scopedSlots !== g);
            if (t.$options._parentVnode = r, t.$vnode = r, t._vnode && (t._vnode.parent = r), t.$options._renderChildren = o, t.$attrs = r.data.attrs || g, t.$listeners = n || g, e && t.$options.props) {
              wt(!1);
              for (var s = t._props, a = t.$options._propKeys || [], c = 0; c < a.length; c++) {
                var u = a[c],
                  l = t.$options.props;
                s[u] = Lt(u, l, e, t)
              }
              wt(!0), t.$options.propsData = e
            }
            n = n || g;
            var f = t.$options._parentListeners;
            t.$options._parentListeners = n, de(t, n, f), i && (t.$slots = he(o, r.context), t.$forceUpdate())
          }(e.componentInstance = t.componentInstance, n.propsData, n.listeners, e, n.children)
        },
        insert: function(t) {
          var e, n = t.context,
            r = t.componentInstance;
          r._isMounted || (r._isMounted = !0, be(r, "mounted")), t.data.keepAlive && (n._isMounted ? ((e = r)._inactive = !1, xe.push(e)) : we(r, !0))
        },
        destroy: function(t) {
          var e = t.componentInstance;
          e._isDestroyed || (t.data.keepAlive ? function t(e, n) {
            if (!(n && (e._directInactive = !0, ye(e)) || e._inactive)) {
              e._inactive = !0;
              for (var r = 0; r < e.$children.length; r++) t(e.$children[r]);
              be(e, "deactivated")
            }
          }(e, !0) : e.$destroy())
        }
      },
      nn = Object.keys(en);

    function rn(t, e, n, r, o) {
      if (!M(t)) {
        var i = n.$options._base;
        if (R(t) && (t = i.extend(t)), "function" == typeof t) {
          var s, a, c, u, l, f, p;
          if (M(t.cid) && void 0 === (t = function(e, n, t) {
              if (O(e.error) && D(e.errorComp)) return e.errorComp;
              if (D(e.resolved)) return e.resolved;
              if (O(e.loading) && D(e.loadingComp)) return e.loadingComp;
              if (!D(e.contexts)) {
                var r = e.contexts = [t],
                  o = !0,
                  i = function(t) {
                    for (var e = 0, n = r.length; e < n; e++) r[e].$forceUpdate();
                    t && (r.length = 0)
                  },
                  s = N(function(t) {
                    e.resolved = ae(t, n), o ? r.length = 0 : i(!0)
                  }),
                  a = N(function(t) {
                    D(e.errorComp) && (e.error = !0, i(!0))
                  }),
                  c = e(s, a);
                return R(c) && ("function" == typeof c.then ? M(e.resolved) && c.then(s, a) : D(c.component) && "function" == typeof c.component.then && (c.component.then(s, a), D(c.error) && (e.errorComp = ae(c.error, n)), D(c.loading) && (e.loadingComp = ae(c.loading, n), 0 === c.delay ? e.loading = !0 : setTimeout(function() {
                  M(e.resolved) && M(e.error) && (e.loading = !0, i(!1))
                }, c.delay || 200)), D(c.timeout) && setTimeout(function() {
                  M(e.resolved) && a(null)
                }, c.timeout))), o = !1, e.loading ? e.loadingComp : e.resolved
              }
              e.contexts.push(t)
            }(s = t, i, n))) return a = s, c = e, u = n, l = r, f = o, (p = dt()).asyncFactory = a, p.asyncMeta = {
            data: c,
            context: u,
            children: l,
            tag: f
          }, p;
          e = e || {}, gn(t), D(e.model) && function(t, e) {
            var n = t.model && t.model.prop || "value",
              r = t.model && t.model.event || "input";
            (e.props || (e.props = {}))[n] = e.model.value;
            var o = e.on || (e.on = {}),
              i = o[r],
              s = e.model.callback;
            D(i) ? (Array.isArray(i) ? -1 === i.indexOf(s) : i !== s) && (o[r] = [s].concat(i)) : o[r] = s
          }(t.options, e);
          var d = function(t, e, n) {
            var r = e.options.props;
            if (!M(r)) {
              var o = {},
                i = t.attrs,
                s = t.props;
              if (D(i) || D(s))
                for (var a in r) {
                  var c = _(a);
                  oe(o, s, a, c, !0) || oe(o, i, a, c, !1)
                }
              return o
            }
          }(e, t);
          if (O(t.options.functional)) return function(t, e, n, r, o) {
            var i = t.options,
              s = {},
              a = i.props;
            if (D(a))
              for (var c in a) s[c] = Lt(c, a, e || g);
            else D(n.attrs) && tn(s, n.attrs), D(n.props) && tn(s, n.props);
            var u = new Qe(n, s, o, r, t),
              l = i.render.call(null, u._c, u);
            if (l instanceof ft) return Ze(l, n, u.parent, i);
            if (Array.isArray(l)) {
              for (var f = ie(l) || [], p = new Array(f.length), d = 0; d < f.length; d++) p[d] = Ze(f[d], n, u.parent, i);
              return p
            }
          }(t, d, e, n, r);
          var h = e.on;
          if (e.on = e.nativeOn, O(t.options.abstract)) {
            var v = e.slot;
            e = {}, v && (e.slot = v)
          }! function(t) {
            for (var e = t.hook || (t.hook = {}), n = 0; n < nn.length; n++) {
              var r = nn[n],
                o = e[r],
                i = en[r];
              o === i || o && o._merged || (e[r] = o ? on(i, o) : i)
            }
          }(e);
          var m = t.options.name || o;
          return new ft("vue-component-" + t.cid + (m ? "-" + m : ""), e, void 0, void 0, void 0, n, {
            Ctor: t,
            propsData: d,
            listeners: h,
            tag: o,
            children: r
          }, s)
        }
      }
    }

    function on(n, r) {
      var t = function(t, e) {
        n(t, e), r(t, e)
      };
      return t._merged = !0, t
    }
    var sn = 1,
      an = 2;

    function cn(t, e, n, r, o, i) {
      return (Array.isArray(n) || T(n)) && (o = r, r = n, n = void 0), O(i) && (o = an),
        function(t, e, n, r, o) {
          if (D(n) && D(n.__ob__)) return dt();
          D(n) && D(n.is) && (e = n.is);
          if (!e) return dt();
          0;
          Array.isArray(r) && "function" == typeof r[0] && ((n = n || {}).scopedSlots = {
            default: r[0]
          }, r.length = 0);
          o === an ? r = ie(r) : o === sn && (r = function(t) {
            for (var e = 0; e < t.length; e++)
              if (Array.isArray(t[e])) return Array.prototype.concat.apply([], t);
            return t
          }(r));
          var i, s;
          if ("string" == typeof e) {
            var a;
            s = t.$vnode && t.$vnode.ns || P.getTagNamespace(e), i = P.isReservedTag(e) ? new ft(P.parsePlatformTagName(e), n, r, void 0, void 0, t) : n && n.pre || !D(a = Pt(t.$options, "components", e)) ? new ft(e, n, r, void 0, void 0, t) : rn(a, n, t, r, e)
          } else i = rn(e, n, t, r);
          return Array.isArray(i) ? i : D(i) ? (D(s) && function t(e, n, r) {
            e.ns = n;
            "foreignObject" === e.tag && (r = !(n = void 0));
            if (D(e.children))
              for (var o = 0, i = e.children.length; o < i; o++) {
                var s = e.children[o];
                D(s.tag) && (M(s.ns) || O(r) && "svg" !== s.tag) && t(s, n, r)
              }
          }(i, s), D(n) && function(t) {
            R(t.style) && Qt(t.style);
            R(t.class) && Qt(t.class)
          }(n), i) : dt()
        }(t, e, n, r, o)
    }
    var un, ln, fn, pn, dn, hn, vn, mn = 0;

    function gn(t) {
      var e = t.options;
      if (t.super) {
        var n = gn(t.super);
        if (n !== t.superOptions) {
          t.superOptions = n;
          var r = function(t) {
            var e, n = t.options,
              r = t.sealedOptions;
            for (var o in n) n[o] !== r[o] && (e || (e = {}), e[o] = n[o]);
            return e
          }(t);
          r && b(t.extendOptions, r), (e = t.options = It(n, t.extendOptions)).name && (e.components[e.name] = t)
        }
      }
      return e
    }

    function _n(t) {
      this._init(t)
    }

    function yn(t) {
      t.cid = 0;
      var s = 1;
      t.extend = function(t) {
        t = t || {};
        var e = this,
          n = e.cid,
          r = t._Ctor || (t._Ctor = {});
        if (r[n]) return r[n];
        var o = t.name || e.options.name;
        var i = function(t) {
          this._init(t)
        };
        return ((i.prototype = Object.create(e.prototype)).constructor = i).cid = s++, i.options = It(e.options, t), i.super = e, i.options.props && function(t) {
          var e = t.options.props;
          for (var n in e) Ie(t.prototype, "_props", n)
        }(i), i.options.computed && function(t) {
          var e = t.options.computed;
          for (var n in e) Me(t.prototype, n, e[n])
        }(i), i.extend = e.extend, i.mixin = e.mixin, i.use = e.use, j.forEach(function(t) {
          i[t] = e[t]
        }), o && (i.options.components[o] = i), i.superOptions = e.options, i.extendOptions = t, i.sealedOptions = b({}, i.options), r[n] = i
      }
    }

    function wn(t) {
      return t && (t.Ctor.options.name || t.tag)
    }

    function bn(t, e) {
      return Array.isArray(t) ? -1 < t.indexOf(e) : "string" == typeof t ? -1 < t.split(",").indexOf(e) : !!r(t) && t.test(e)
    }

    function $n(t, e) {
      var n = t.cache,
        r = t.keys,
        o = t._vnode;
      for (var i in n) {
        var s = n[i];
        if (s) {
          var a = wn(s.componentOptions);
          a && !e(a) && xn(n, i, r, o)
        }
      }
    }

    function xn(t, e, n, r) {
      var o = t[e];
      !o || r && o.tag === r.tag || o.componentInstance.$destroy(), t[e] = null, l(n, e)
    }
    _n.prototype._init = function(t) {
      var e, n, r, o, i = this;
      i._uid = mn++, i._isVue = !0, t && t._isComponent ? function(t, e) {
          var n = t.$options = Object.create(t.constructor.options),
            r = e._parentVnode;
          n.parent = e.parent;
          var o = (n._parentVnode = r).componentOptions;
          n.propsData = o.propsData, n._parentListeners = o.listeners, n._renderChildren = o.children, n._componentTag = o.tag, e.render && (n.render = e.render, n.staticRenderFns = e.staticRenderFns)
        }(i, t) : i.$options = It(gn(i.constructor), t || {}, i),
        function(t) {
          var e = t.$options,
            n = e.parent;
          if (n && !e.abstract) {
            for (; n.$options.abstract && n.$parent;) n = n.$parent;
            n.$children.push(t)
          }
          t.$parent = n, t.$root = n ? n.$root : t, t.$children = [], t.$refs = {}, t._watcher = null, t._inactive = null, t._directInactive = !1, t._isMounted = !1, t._isDestroyed = !1, t._isBeingDestroyed = !1
        }((i._renderProxy = i)._self = i),
        function(t) {
          t._events = Object.create(null), t._hasHookEvent = !1;
          var e = t.$options._parentListeners;
          e && de(t, e)
        }(i),
        function(o) {
          o._vnode = null, o._staticTrees = null;
          var t = o.$options,
            e = o.$vnode = t._parentVnode,
            n = e && e.context;
          o.$slots = he(t._renderChildren, n), o.$scopedSlots = g, o._c = function(t, e, n, r) {
            return cn(o, t, e, n, r, !1)
          }, o.$createElement = function(t, e, n, r) {
            return cn(o, t, e, n, r, !0)
          };
          var r = e && e.data;
          xt(o, "$attrs", r && r.attrs || g, null, !0), xt(o, "$listeners", t._parentListeners || g, null, !0)
        }(i), be(i, "beforeCreate"), (n = Ne((e = i).$options.inject, e)) && (wt(!1), Object.keys(n).forEach(function(t) {
          xt(e, t, n[t])
        }), wt(!0)), Pe(i), (o = (r = i).$options.provide) && (r._provided = "function" == typeof o ? o.call(r) : o), be(i, "created"), i.$options.el && i.$mount(i.$options.el)
    }, un = _n, ln = {
      get: function() {
        return this._data
      }
    }, fn = {
      get: function() {
        return this._props
      }
    }, Object.defineProperty(un.prototype, "$data", ln), Object.defineProperty(un.prototype, "$props", fn), un.prototype.$set = kt, un.prototype.$delete = Ct, un.prototype.$watch = function(t, e, n) {
      var r = this;
      if (c(e)) return ze(r, t, e, n);
      (n = n || {}).user = !0;
      var o = new Ae(r, t, e, n);
      if (n.immediate) try {
        e.call(r, o.value)
      } catch (t) {
        zt(t, r, 'callback for immediate watcher "' + o.expression + '"')
      }
      return function() {
        o.teardown()
      }
    }, dn = /^hook:/, (pn = _n).prototype.$on = function(t, e) {
      var n = this;
      if (Array.isArray(t))
        for (var r = 0, o = t.length; r < o; r++) n.$on(t[r], e);
      else(n._events[t] || (n._events[t] = [])).push(e), dn.test(t) && (n._hasHookEvent = !0);
      return n
    }, pn.prototype.$once = function(t, e) {
      var n = this;

      function r() {
        n.$off(t, r), e.apply(n, arguments)
      }
      return r.fn = e, n.$on(t, r), n
    }, pn.prototype.$off = function(t, e) {
      var n = this;
      if (!arguments.length) return n._events = Object.create(null), n;
      if (Array.isArray(t)) {
        for (var r = 0, o = t.length; r < o; r++) n.$off(t[r], e);
        return n
      }
      var i, s = n._events[t];
      if (!s) return n;
      if (!e) return n._events[t] = null, n;
      for (var a = s.length; a--;)
        if ((i = s[a]) === e || i.fn === e) {
          s.splice(a, 1);
          break
        } return n
    }, pn.prototype.$emit = function(e) {
      var n = this,
        t = n._events[e];
      if (t) {
        t = 1 < t.length ? w(t) : t;
        for (var r = w(arguments, 1), o = 0, i = t.length; o < i; o++) try {
          t[o].apply(n, r)
        } catch (t) {
          zt(t, n, 'event handler for "' + e + '"')
        }
      }
      return n
    }, (hn = _n).prototype._update = function(t, e) {
      var n = this,
        r = n.$el,
        o = n._vnode,
        i = _e(n);
      n._vnode = t, n.$el = o ? n.__patch__(o, t) : n.__patch__(n.$el, t, e, !1), i(), r && (r.__vue__ = null), n.$el && (n.$el.__vue__ = n), n.$vnode && n.$parent && n.$vnode === n.$parent._vnode && (n.$parent.$el = n.$el)
    }, hn.prototype.$forceUpdate = function() {
      this._watcher && this._watcher.update()
    }, hn.prototype.$destroy = function() {
      var t = this;
      if (!t._isBeingDestroyed) {
        be(t, "beforeDestroy"), t._isBeingDestroyed = !0;
        var e = t.$parent;
        !e || e._isBeingDestroyed || t.$options.abstract || l(e.$children, t), t._watcher && t._watcher.teardown();
        for (var n = t._watchers.length; n--;) t._watchers[n].teardown();
        t._data.__ob__ && t._data.__ob__.vmCount--, t._isDestroyed = !0, t.__patch__(t._vnode, null), be(t, "destroyed"), t.$off(), t.$el && (t.$el.__vue__ = null), t.$vnode && (t.$vnode.parent = null)
      }
    }, Ke((vn = _n).prototype), vn.prototype.$nextTick = function(t) {
      return Jt(t, this)
    }, vn.prototype._render = function() {
      var e, n = this,
        t = n.$options,
        r = t.render,
        o = t._parentVnode;
      o && (n.$scopedSlots = o.data.scopedSlots || g), n.$vnode = o;
      try {
        e = r.call(n._renderProxy, n.$createElement)
      } catch (t) {
        zt(t, n, "render"), e = n._vnode
      }
      return e instanceof ft || (e = dt()), e.parent = o, e
    };
    var kn, Cn, Sn, En = [String, RegExp, Array],
      On = {
        KeepAlive: {
          name: "keep-alive",
          abstract: !0,
          props: {
            include: En,
            exclude: En,
            max: [String, Number]
          },
          created: function() {
            this.cache = Object.create(null), this.keys = []
          },
          destroyed: function() {
            for (var t in this.cache) xn(this.cache, t, this.keys)
          },
          mounted: function() {
            var t = this;
            this.$watch("include", function(e) {
              $n(t, function(t) {
                return bn(e, t)
              })
            }), this.$watch("exclude", function(e) {
              $n(t, function(t) {
                return !bn(e, t)
              })
            })
          },
          render: function() {
            var t = this.$slots.default,
              e = ue(t),
              n = e && e.componentOptions;
            if (n) {
              var r = wn(n),
                o = this.include,
                i = this.exclude;
              if (o && (!r || !bn(o, r)) || i && r && bn(i, r)) return e;
              var s = this.cache,
                a = this.keys,
                c = null == e.key ? n.Ctor.cid + (n.tag ? "::" + n.tag : "") : e.key;
              s[c] ? (e.componentInstance = s[c].componentInstance, l(a, c), a.push(c)) : (s[c] = e, a.push(c), this.max && a.length > parseInt(this.max) && xn(s, a[0], a, this._vnode)), e.data.keepAlive = !0
            }
            return e || t && t[0]
          }
        }
      };
    kn = _n, Sn = {
      get: function() {
        return P
      }
    }, Object.defineProperty(kn, "config", Sn), kn.util = {
      warn: it,
      extend: b,
      mergeOptions: It,
      defineReactive: xt
    }, kn.set = kt, kn.delete = Ct, kn.nextTick = Jt, kn.options = Object.create(null), j.forEach(function(t) {
      kn.options[t + "s"] = Object.create(null)
    }), b((kn.options._base = kn).options.components, On), kn.use = function(t) {
      var e = this._installedPlugins || (this._installedPlugins = []);
      if (-1 < e.indexOf(t)) return this;
      var n = w(arguments, 1);
      return n.unshift(this), "function" == typeof t.install ? t.install.apply(t, n) : "function" == typeof t && t.apply(null, n), e.push(t), this
    }, kn.mixin = function(t) {
      return this.options = It(this.options, t), this
    }, yn(kn), Cn = kn, j.forEach(function(n) {
      Cn[n] = function(t, e) {
        return e ? ("component" === n && c(e) && (e.name = e.name || t, e = this.options._base.extend(e)), "directive" === n && "function" == typeof e && (e = {
          bind: e,
          update: e
        }), this.options[n + "s"][t] = e) : this.options[n + "s"][t]
      }
    }), Object.defineProperty(_n.prototype, "$isServer", {
      get: tt
    }), Object.defineProperty(_n.prototype, "$ssrContext", {
      get: function() {
        return this.$vnode && this.$vnode.ssrContext
      }
    }), Object.defineProperty(_n, "FunctionalRenderContext", {
      value: Qe
    }), _n.version = "2.5.22";
    var Tn = a("style,class"),
      An = a("input,textarea,option,select,progress"),
      jn = a("contenteditable,draggable,spellcheck"),
      In = a("allowfullscreen,async,autofocus,autoplay,checked,compact,controls,declare,default,defaultchecked,defaultmuted,defaultselected,defer,disabled,enabled,formnovalidate,hidden,indeterminate,inert,ismap,itemscope,loop,multiple,muted,nohref,noresize,noshade,novalidate,nowrap,open,pauseonexit,readonly,required,reversed,scoped,seamless,selected,sortable,translate,truespeed,typemustmatch,visible"),
      Pn = "http://www.w3.org/1999/xlink",
      Ln = function(t) {
        return ":" === t.charAt(5) && "xlink" === t.slice(0, 5)
      },
      Mn = function(t) {
        return Ln(t) ? t.slice(6, t.length) : ""
      },
      Dn = function(t) {
        return null == t || !1 === t
      };

    function Rn(t) {
      for (var e = t.data, n = t, r = t; D(r.componentInstance);)(r = r.componentInstance._vnode) && r.data && (e = zn(r.data, e));
      for (; D(n = n.parent);) n && n.data && (e = zn(e, n.data));
      return function(t, e) {
        if (D(t) || D(e)) return Nn(t, Hn(e));
        return ""
      }(e.staticClass, e.class)
    }

    function zn(t, e) {
      return {
        staticClass: Nn(t.staticClass, e.staticClass),
        class: D(t.class) ? [t.class, e.class] : e.class
      }
    }

    function Nn(t, e) {
      return t ? e ? t + " " + e : t : e || ""
    }

    function Hn(t) {
      return Array.isArray(t) ? function(t) {
        for (var e, n = "", r = 0, o = t.length; r < o; r++) D(e = Hn(t[r])) && "" !== e && (n && (n += " "), n += e);
        return n
      }(t) : R(t) ? function(t) {
        var e = "";
        for (var n in t) t[n] && (e && (e += " "), e += n);
        return e
      }(t) : "string" == typeof t ? t : ""
    }
    var Bn = {
        svg: "http://www.w3.org/2000/svg",
        math: "http://www.w3.org/1998/Math/MathML"
      },
      Fn = a("html,body,base,head,link,meta,style,title,address,article,aside,footer,header,h1,h2,h3,h4,h5,h6,hgroup,nav,section,div,dd,dl,dt,figcaption,figure,picture,hr,img,li,main,ol,p,pre,ul,a,b,abbr,bdi,bdo,br,cite,code,data,dfn,em,i,kbd,mark,q,rp,rt,rtc,ruby,s,samp,small,span,strong,sub,sup,time,u,var,wbr,area,audio,map,track,video,embed,object,param,source,canvas,script,noscript,del,ins,caption,col,colgroup,table,thead,tbody,td,th,tr,button,datalist,fieldset,form,input,label,legend,meter,optgroup,option,output,progress,select,textarea,details,dialog,menu,menuitem,summary,content,element,shadow,template,blockquote,iframe,tfoot"),
      Un = a("svg,animate,circle,clippath,cursor,defs,desc,ellipse,filter,font-face,foreignObject,g,glyph,image,line,marker,mask,missing-glyph,path,pattern,polygon,polyline,rect,switch,symbol,text,textpath,tspan,use,view", !0),
      Vn = function(t) {
        return Fn(t) || Un(t)
      };
    var qn = Object.create(null);
    var Wn = a("text,number,password,search,email,tel,url");
    var Gn = Object.freeze({
        createElement: function(t, e) {
          var n = document.createElement(t);
          return "select" !== t || e.data && e.data.attrs && void 0 !== e.data.attrs.multiple && n.setAttribute("multiple", "multiple"), n
        },
        createElementNS: function(t, e) {
          return document.createElementNS(Bn[t], e)
        },
        createTextNode: function(t) {
          return document.createTextNode(t)
        },
        createComment: function(t) {
          return document.createComment(t)
        },
        insertBefore: function(t, e, n) {
          t.insertBefore(e, n)
        },
        removeChild: function(t, e) {
          t.removeChild(e)
        },
        appendChild: function(t, e) {
          t.appendChild(e)
        },
        parentNode: function(t) {
          return t.parentNode
        },
        nextSibling: function(t) {
          return t.nextSibling
        },
        tagName: function(t) {
          return t.tagName
        },
        setTextContent: function(t, e) {
          t.textContent = e
        },
        setStyleScope: function(t, e) {
          t.setAttribute(e, "")
        }
      }),
      Yn = {
        create: function(t, e) {
          Xn(e)
        },
        update: function(t, e) {
          t.data.ref !== e.data.ref && (Xn(t, !0), Xn(e))
        },
        destroy: function(t) {
          Xn(t, !0)
        }
      };

    function Xn(t, e) {
      var n = t.data.ref;
      if (D(n)) {
        var r = t.context,
          o = t.componentInstance || t.elm,
          i = r.$refs;
        e ? Array.isArray(i[n]) ? l(i[n], o) : i[n] === o && (i[n] = void 0) : t.data.refInFor ? Array.isArray(i[n]) ? i[n].indexOf(o) < 0 && i[n].push(o) : i[n] = [o] : i[n] = o
      }
    }
    var Jn = new ft("", {}, []),
      Kn = ["create", "activate", "update", "remove", "destroy"];

    function Qn(t, e) {
      return t.key === e.key && (t.tag === e.tag && t.isComment === e.isComment && D(t.data) === D(e.data) && function(t, e) {
        if ("input" !== t.tag) return !0;
        var n, r = D(n = t.data) && D(n = n.attrs) && n.type,
          o = D(n = e.data) && D(n = n.attrs) && n.type;
        return r === o || Wn(r) && Wn(o)
      }(t, e) || O(t.isAsyncPlaceholder) && t.asyncFactory === e.asyncFactory && M(e.asyncFactory.error))
    }

    function Zn(t, e, n) {
      var r, o, i = {};
      for (r = e; r <= n; ++r) D(o = t[r].key) && (i[o] = r);
      return i
    }
    var tr = {
      create: er,
      update: er,
      destroy: function(t) {
        er(t, Jn)
      }
    };

    function er(t, e) {
      (t.data.directives || e.data.directives) && function(e, n) {
        var t, r, o, i = e === Jn,
          s = n === Jn,
          a = rr(e.data.directives, e.context),
          c = rr(n.data.directives, n.context),
          u = [],
          l = [];
        for (t in c) r = a[t], o = c[t], r ? (o.oldValue = r.value, or(o, "update", n, e), o.def && o.def.componentUpdated && l.push(o)) : (or(o, "bind", n, e), o.def && o.def.inserted && u.push(o));
        if (u.length) {
          var f = function() {
            for (var t = 0; t < u.length; t++) or(u[t], "inserted", n, e)
          };
          i ? re(n, "insert", f) : f()
        }
        l.length && re(n, "postpatch", function() {
          for (var t = 0; t < l.length; t++) or(l[t], "componentUpdated", n, e)
        });
        if (!i)
          for (t in a) c[t] || or(a[t], "unbind", e, e, s)
      }(t, e)
    }
    var nr = Object.create(null);

    function rr(t, e) {
      var n, r, o, i = Object.create(null);
      if (!t) return i;
      for (n = 0; n < t.length; n++)(r = t[n]).modifiers || (r.modifiers = nr), (i[(o = r, o.rawName || o.name + "." + Object.keys(o.modifiers || {}).join("."))] = r).def = Pt(e.$options, "directives", r.name);
      return i
    }

    function or(e, n, r, t, o) {
      var i = e.def && e.def[n];
      if (i) try {
        i(r.elm, e, r, t, o)
      } catch (t) {
        zt(t, r.context, "directive " + e.name + " " + n + " hook")
      }
    }
    var ir = [Yn, tr];

    function sr(t, e) {
      var n = e.componentOptions;
      if (!(D(n) && !1 === n.Ctor.options.inheritAttrs || M(t.data.attrs) && M(e.data.attrs))) {
        var r, o, i = e.elm,
          s = t.data.attrs || {},
          a = e.data.attrs || {};
        for (r in D(a.__ob__) && (a = e.data.attrs = b({}, a)), a) o = a[r], s[r] !== o && ar(i, r, o);
        for (r in (G || X) && a.value !== s.value && ar(i, "value", a.value), s) M(a[r]) && (Ln(r) ? i.removeAttributeNS(Pn, Mn(r)) : jn(r) || i.removeAttribute(r))
      }
    }

    function ar(t, e, n) {
      -1 < t.tagName.indexOf("-") ? cr(t, e, n) : In(e) ? Dn(n) ? t.removeAttribute(e) : (n = "allowfullscreen" === e && "EMBED" === t.tagName ? "true" : e, t.setAttribute(e, n)) : jn(e) ? t.setAttribute(e, Dn(n) || "false" === n ? "false" : "true") : Ln(e) ? Dn(n) ? t.removeAttributeNS(Pn, Mn(e)) : t.setAttributeNS(Pn, e, n) : cr(t, e, n)
    }

    function cr(e, t, n) {
      if (Dn(n)) e.removeAttribute(t);
      else {
        if (G && !Y && ("TEXTAREA" === e.tagName || "INPUT" === e.tagName) && "placeholder" === t && !e.__ieph) {
          var r = function(t) {
            t.stopImmediatePropagation(), e.removeEventListener("input", r)
          };
          e.addEventListener("input", r), e.__ieph = !0
        }
        e.setAttribute(t, n)
      }
    }
    var ur = {
      create: sr,
      update: sr
    };

    function lr(t, e) {
      var n = e.elm,
        r = e.data,
        o = t.data;
      if (!(M(r.staticClass) && M(r.class) && (M(o) || M(o.staticClass) && M(o.class)))) {
        var i = Rn(e),
          s = n._transitionClasses;
        D(s) && (i = Nn(i, Hn(s))), i !== n._prevClass && (n.setAttribute("class", i), n._prevClass = i)
      }
    }
    var fr, pr = {
        create: lr,
        update: lr
      },
      dr = "__r",
      hr = "__c";

    function vr(e, n, r) {
      var o = fr;
      return function t() {
        null !== n.apply(null, arguments) && gr(e, t, r, o)
      }
    }

    function mr(t, e, n, r) {
      var o;
      e = (o = e)._withTask || (o._withTask = function() {
        Wt = !0;
        try {
          return o.apply(null, arguments)
        } finally {
          Wt = !1
        }
      }), fr.addEventListener(t, e, Q ? {
        capture: n,
        passive: r
      } : n)
    }

    function gr(t, e, n, r) {
      (r || fr).removeEventListener(t, e._withTask || e, n)
    }

    function _r(t, e) {
      if (!M(t.data.on) || !M(e.data.on)) {
        var n = e.data.on || {},
          r = t.data.on || {};
        fr = e.elm,
          function(t) {
            if (D(t[dr])) {
              var e = G ? "change" : "input";
              t[e] = [].concat(t[dr], t[e] || []), delete t[dr]
            }
            D(t[hr]) && (t.change = [].concat(t[hr], t.change || []), delete t[hr])
          }(n), ne(n, r, mr, gr, vr, e.context), fr = void 0
      }
    }
    var yr = {
      create: _r,
      update: _r
    };

    function wr(t, e) {
      if (!M(t.data.domProps) || !M(e.data.domProps)) {
        var n, r, o, i, s = e.elm,
          a = t.data.domProps || {},
          c = e.data.domProps || {};
        for (n in D(c.__ob__) && (c = e.data.domProps = b({}, c)), a) M(c[n]) && (s[n] = "");
        for (n in c) {
          if (r = c[n], "textContent" === n || "innerHTML" === n) {
            if (e.children && (e.children.length = 0), r === a[n]) continue;
            1 === s.childNodes.length && s.removeChild(s.childNodes[0])
          }
          if ("value" === n) {
            var u = M(s._value = r) ? "" : String(r);
            i = u, (o = s).composing || "OPTION" !== o.tagName && ! function(t, e) {
              var n = !0;
              try {
                n = document.activeElement !== t
              } catch (t) {}
              return n && t.value !== e
            }(o, i) && ! function(t, e) {
              var n = t.value,
                r = t._vModifiers;
              if (D(r)) {
                if (r.lazy) return !1;
                if (r.number) return z(n) !== z(e);
                if (r.trim) return n.trim() !== e.trim()
              }
              return n !== e
            }(o, i) || (s.value = u)
          } else s[n] = r
        }
      }
    }
    var br = {
        create: wr,
        update: wr
      },
      $r = p(function(t) {
        var n = {},
          r = /:(.+)/;
        return t.split(/;(?![^(]*\))/g).forEach(function(t) {
          if (t) {
            var e = t.split(r);
            1 < e.length && (n[e[0].trim()] = e[1].trim())
          }
        }), n
      });

    function xr(t) {
      var e = kr(t.style);
      return t.staticStyle ? b(t.staticStyle, e) : e
    }

    function kr(t) {
      return Array.isArray(t) ? $(t) : "string" == typeof t ? $r(t) : t
    }
    var Cr, Sr = /^--/,
      Er = /\s*!important$/,
      Or = function(t, e, n) {
        if (Sr.test(e)) t.style.setProperty(e, n);
        else if (Er.test(n)) t.style.setProperty(e, n.replace(Er, ""), "important");
        else {
          var r = Ar(e);
          if (Array.isArray(n))
            for (var o = 0, i = n.length; o < i; o++) t.style[r] = n[o];
          else t.style[r] = n
        }
      },
      Tr = ["Webkit", "Moz", "ms"],
      Ar = p(function(t) {
        if (Cr = Cr || document.createElement("div").style, "filter" !== (t = h(t)) && t in Cr) return t;
        for (var e = t.charAt(0).toUpperCase() + t.slice(1), n = 0; n < Tr.length; n++) {
          var r = Tr[n] + e;
          if (r in Cr) return r
        }
      });

    function jr(t, e) {
      var n = e.data,
        r = t.data;
      if (!(M(n.staticStyle) && M(n.style) && M(r.staticStyle) && M(r.style))) {
        var o, i, s = e.elm,
          a = r.staticStyle,
          c = r.normalizedStyle || r.style || {},
          u = a || c,
          l = kr(e.data.style) || {};
        e.data.normalizedStyle = D(l.__ob__) ? b({}, l) : l;
        var f = function(t, e) {
          var n, r = {};
          if (e)
            for (var o = t; o.componentInstance;)(o = o.componentInstance._vnode) && o.data && (n = xr(o.data)) && b(r, n);
          (n = xr(t.data)) && b(r, n);
          for (var i = t; i = i.parent;) i.data && (n = xr(i.data)) && b(r, n);
          return r
        }(e, !0);
        for (i in u) M(f[i]) && Or(s, i, "");
        for (i in f)(o = f[i]) !== u[i] && Or(s, i, null == o ? "" : o)
      }
    }
    var Ir = {
        create: jr,
        update: jr
      },
      Pr = /\s+/;

    function Lr(e, t) {
      if (t && (t = t.trim()))
        if (e.classList) - 1 < t.indexOf(" ") ? t.split(Pr).forEach(function(t) {
          return e.classList.add(t)
        }) : e.classList.add(t);
        else {
          var n = " " + (e.getAttribute("class") || "") + " ";
          n.indexOf(" " + t + " ") < 0 && e.setAttribute("class", (n + t).trim())
        }
    }

    function Mr(e, t) {
      if (t && (t = t.trim()))
        if (e.classList) - 1 < t.indexOf(" ") ? t.split(Pr).forEach(function(t) {
          return e.classList.remove(t)
        }) : e.classList.remove(t), e.classList.length || e.removeAttribute("class");
        else {
          for (var n = " " + (e.getAttribute("class") || "") + " ", r = " " + t + " "; 0 <= n.indexOf(r);) n = n.replace(r, " ");
          (n = n.trim()) ? e.setAttribute("class", n): e.removeAttribute("class")
        }
    }

    function Dr(t) {
      if (t) {
        if ("object" != typeof t) return "string" == typeof t ? Rr(t) : void 0;
        var e = {};
        return !1 !== t.css && b(e, Rr(t.name || "v")), b(e, t), e
      }
    }
    var Rr = p(function(t) {
        return {
          enterClass: t + "-enter",
          enterToClass: t + "-enter-to",
          enterActiveClass: t + "-enter-active",
          leaveClass: t + "-leave",
          leaveToClass: t + "-leave-to",
          leaveActiveClass: t + "-leave-active"
        }
      }),
      zr = U && !Y,
      Nr = "transition",
      Hr = "animation",
      Br = "transition",
      Fr = "transitionend",
      Ur = "animation",
      Vr = "animationend";
    zr && (void 0 === window.ontransitionend && void 0 !== window.onwebkittransitionend && (Br = "WebkitTransition", Fr = "webkitTransitionEnd"), void 0 === window.onanimationend && void 0 !== window.onwebkitanimationend && (Ur = "WebkitAnimation", Vr = "webkitAnimationEnd"));
    var qr = U ? window.requestAnimationFrame ? window.requestAnimationFrame.bind(window) : setTimeout : function(t) {
      return t()
    };

    function Wr(t) {
      qr(function() {
        qr(t)
      })
    }

    function Gr(t, e) {
      var n = t._transitionClasses || (t._transitionClasses = []);
      n.indexOf(e) < 0 && (n.push(e), Lr(t, e))
    }

    function Yr(t, e) {
      t._transitionClasses && l(t._transitionClasses, e), Mr(t, e)
    }

    function Xr(e, t, n) {
      var r = Kr(e, t),
        o = r.type,
        i = r.timeout,
        s = r.propCount;
      if (!o) return n();
      var a = o === Nr ? Fr : Vr,
        c = 0,
        u = function() {
          e.removeEventListener(a, l), n()
        },
        l = function(t) {
          t.target === e && ++c >= s && u()
        };
      setTimeout(function() {
        c < s && u()
      }, i + 1), e.addEventListener(a, l)
    }
    var Jr = /\b(transform|all)(,|$)/;

    function Kr(t, e) {
      var n, r = window.getComputedStyle(t),
        o = (r[Br + "Delay"] || "").split(", "),
        i = (r[Br + "Duration"] || "").split(", "),
        s = Qr(o, i),
        a = (r[Ur + "Delay"] || "").split(", "),
        c = (r[Ur + "Duration"] || "").split(", "),
        u = Qr(a, c),
        l = 0,
        f = 0;
      return e === Nr ? 0 < s && (n = Nr, l = s, f = i.length) : e === Hr ? 0 < u && (n = Hr, l = u, f = c.length) : f = (n = 0 < (l = Math.max(s, u)) ? u < s ? Nr : Hr : null) ? n === Nr ? i.length : c.length : 0, {
        type: n,
        timeout: l,
        propCount: f,
        hasTransform: n === Nr && Jr.test(r[Br + "Property"])
      }
    }

    function Qr(n, t) {
      for (; n.length < t.length;) n = n.concat(n);
      return Math.max.apply(null, t.map(function(t, e) {
        return Zr(t) + Zr(n[e])
      }))
    }

    function Zr(t) {
      return 1e3 * Number(t.slice(0, -1).replace(",", "."))
    }

    function to(n, t) {
      var r = n.elm;
      D(r._leaveCb) && (r._leaveCb.cancelled = !0, r._leaveCb());
      var e = Dr(n.data.transition);
      if (!M(e) && !D(r._enterCb) && 1 === r.nodeType) {
        for (var o = e.css, i = e.type, s = e.enterClass, a = e.enterToClass, c = e.enterActiveClass, u = e.appearClass, l = e.appearToClass, f = e.appearActiveClass, p = e.beforeEnter, d = e.enter, h = e.afterEnter, v = e.enterCancelled, m = e.beforeAppear, g = e.appear, _ = e.afterAppear, y = e.appearCancelled, w = e.duration, b = ge, $ = ge.$vnode; $ && $.parent;) b = ($ = $.parent).context;
        var x = !b._isMounted || !n.isRootInsert;
        if (!x || g || "" === g) {
          var k = x && u ? u : s,
            C = x && f ? f : c,
            S = x && l ? l : a,
            E = x && m || p,
            O = x && "function" == typeof g ? g : d,
            T = x && _ || h,
            A = x && y || v,
            j = z(R(w) ? w.enter : w);
          0;
          var I = !1 !== o && !Y,
            P = ro(O),
            L = r._enterCb = N(function() {
              I && (Yr(r, S), Yr(r, C)), L.cancelled ? (I && Yr(r, k), A && A(r)) : T && T(r), r._enterCb = null
            });
          n.data.show || re(n, "insert", function() {
            var t = r.parentNode,
              e = t && t._pending && t._pending[n.key];
            e && e.tag === n.tag && e.elm._leaveCb && e.elm._leaveCb(), O && O(r, L)
          }), E && E(r), I && (Gr(r, k), Gr(r, C), Wr(function() {
            Yr(r, k), L.cancelled || (Gr(r, S), P || (no(j) ? setTimeout(L, j) : Xr(r, i, L)))
          })), n.data.show && (t && t(), O && O(r, L)), I || P || L()
        }
      }
    }

    function eo(t, e) {
      var n = t.elm;
      D(n._enterCb) && (n._enterCb.cancelled = !0, n._enterCb());
      var r = Dr(t.data.transition);
      if (M(r) || 1 !== n.nodeType) return e();
      if (!D(n._leaveCb)) {
        var o = r.css,
          i = r.type,
          s = r.leaveClass,
          a = r.leaveToClass,
          c = r.leaveActiveClass,
          u = r.beforeLeave,
          l = r.leave,
          f = r.afterLeave,
          p = r.leaveCancelled,
          d = r.delayLeave,
          h = r.duration,
          v = !1 !== o && !Y,
          m = ro(l),
          g = z(R(h) ? h.leave : h);
        0;
        var _ = n._leaveCb = N(function() {
          n.parentNode && n.parentNode._pending && (n.parentNode._pending[t.key] = null), v && (Yr(n, a), Yr(n, c)), _.cancelled ? (v && Yr(n, s), p && p(n)) : (e(), f && f(n)), n._leaveCb = null
        });
        d ? d(y) : y()
      }

      function y() {
        _.cancelled || (!t.data.show && n.parentNode && ((n.parentNode._pending || (n.parentNode._pending = {}))[t.key] = t), u && u(n), v && (Gr(n, s), Gr(n, c), Wr(function() {
          Yr(n, s), _.cancelled || (Gr(n, a), m || (no(g) ? setTimeout(_, g) : Xr(n, i, _)))
        })), l && l(n, _), v || m || _())
      }
    }

    function no(t) {
      return "number" == typeof t && !isNaN(t)
    }

    function ro(t) {
      if (M(t)) return !1;
      var e = t.fns;
      return D(e) ? ro(Array.isArray(e) ? e[0] : e) : 1 < (t._length || t.length)
    }

    function oo(t, e) {
      !0 !== e.data.show && to(e)
    }
    var io = function(t) {
      var r, e, m = {},
        n = t.modules,
        g = t.nodeOps;
      for (r = 0; r < Kn.length; ++r)
        for (m[Kn[r]] = [], e = 0; e < n.length; ++e) D(n[e][Kn[r]]) && m[Kn[r]].push(n[e][Kn[r]]);

      function i(t) {
        var e = g.parentNode(t);
        D(e) && g.removeChild(e, t)
      }

      function _(t, e, n, r, o, i, s) {
        if (D(t.elm) && D(i) && (t = i[s] = vt(t)), t.isRootInsert = !o, ! function(t, e, n, r) {
            var o = t.data;
            if (D(o)) {
              var i = D(t.componentInstance) && o.keepAlive;
              if (D(o = o.hook) && D(o = o.init) && o(t, !1), D(t.componentInstance)) return d(t, e), l(n, t.elm, r), O(i) && function(t, e, n, r) {
                for (var o, i = t; i.componentInstance;)
                  if (i = i.componentInstance._vnode, D(o = i.data) && D(o = o.transition)) {
                    for (o = 0; o < m.activate.length; ++o) m.activate[o](Jn, i);
                    e.push(i);
                    break
                  } l(n, t.elm, r)
              }(t, e, n, r), !0
            }
          }(t, e, n, r)) {
          var a = t.data,
            c = t.children,
            u = t.tag;
          D(u) ? (t.elm = t.ns ? g.createElementNS(t.ns, u) : g.createElement(u, t), f(t), h(t, c, e), D(a) && v(t, e)) : O(t.isComment) ? t.elm = g.createComment(t.text) : t.elm = g.createTextNode(t.text), l(n, t.elm, r)
        }
      }

      function d(t, e) {
        D(t.data.pendingInsert) && (e.push.apply(e, t.data.pendingInsert), t.data.pendingInsert = null), t.elm = t.componentInstance.$el, y(t) ? (v(t, e), f(t)) : (Xn(t), e.push(t))
      }

      function l(t, e, n) {
        D(t) && (D(n) ? g.parentNode(n) === t && g.insertBefore(t, e, n) : g.appendChild(t, e))
      }

      function h(t, e, n) {
        if (Array.isArray(e))
          for (var r = 0; r < e.length; ++r) _(e[r], n, t.elm, null, !0, e, r);
        else T(t.text) && g.appendChild(t.elm, g.createTextNode(String(t.text)))
      }

      function y(t) {
        for (; t.componentInstance;) t = t.componentInstance._vnode;
        return D(t.tag)
      }

      function v(t, e) {
        for (var n = 0; n < m.create.length; ++n) m.create[n](Jn, t);
        D(r = t.data.hook) && (D(r.create) && r.create(Jn, t), D(r.insert) && e.push(t))
      }

      function f(t) {
        var e;
        if (D(e = t.fnScopeId)) g.setStyleScope(t.elm, e);
        else
          for (var n = t; n;) D(e = n.context) && D(e = e.$options._scopeId) && g.setStyleScope(t.elm, e), n = n.parent;
        D(e = ge) && e !== t.context && e !== t.fnContext && D(e = e.$options._scopeId) && g.setStyleScope(t.elm, e)
      }

      function w(t, e, n, r, o, i) {
        for (; r <= o; ++r) _(n[r], i, t, e, !1, n, r)
      }

      function b(t) {
        var e, n, r = t.data;
        if (D(r))
          for (D(e = r.hook) && D(e = e.destroy) && e(t), e = 0; e < m.destroy.length; ++e) m.destroy[e](t);
        if (D(e = t.children))
          for (n = 0; n < t.children.length; ++n) b(t.children[n])
      }

      function $(t, e, n, r) {
        for (; n <= r; ++n) {
          var o = e[n];
          D(o) && (D(o.tag) ? (s(o), b(o)) : i(o.elm))
        }
      }

      function s(t, e) {
        if (D(e) || D(t.data)) {
          var n, r = m.remove.length + 1;
          for (D(e) ? e.listeners += r : e = function(t, e) {
              function n() {
                0 == --n.listeners && i(t)
              }
              return n.listeners = e, n
            }(t.elm, r), D(n = t.componentInstance) && D(n = n._vnode) && D(n.data) && s(n, e), n = 0; n < m.remove.length; ++n) m.remove[n](t, e);
          D(n = t.data.hook) && D(n = n.remove) ? n(t, e) : e()
        } else i(t.elm)
      }

      function x(t, e, n, r) {
        for (var o = n; o < r; o++) {
          var i = e[o];
          if (D(i) && Qn(t, i)) return o
        }
      }

      function k(t, e, n, r, o, i) {
        if (t !== e) {
          D(e.elm) && D(r) && (e = r[o] = vt(e));
          var s = e.elm = t.elm;
          if (O(t.isAsyncPlaceholder)) D(e.asyncFactory.resolved) ? E(t.elm, e, n) : e.isAsyncPlaceholder = !0;
          else if (O(e.isStatic) && O(t.isStatic) && e.key === t.key && (O(e.isCloned) || O(e.isOnce))) e.componentInstance = t.componentInstance;
          else {
            var a, c = e.data;
            D(c) && D(a = c.hook) && D(a = a.prepatch) && a(t, e);
            var u = t.children,
              l = e.children;
            if (D(c) && y(e)) {
              for (a = 0; a < m.update.length; ++a) m.update[a](t, e);
              D(a = c.hook) && D(a = a.update) && a(t, e)
            }
            M(e.text) ? D(u) && D(l) ? u !== l && function(t, e, n, r, o) {
              for (var i, s, a, c = 0, u = 0, l = e.length - 1, f = e[0], p = e[l], d = n.length - 1, h = n[0], v = n[d], m = !o; c <= l && u <= d;) M(f) ? f = e[++c] : M(p) ? p = e[--l] : Qn(f, h) ? (k(f, h, r, n, u), f = e[++c], h = n[++u]) : Qn(p, v) ? (k(p, v, r, n, d), p = e[--l], v = n[--d]) : Qn(f, v) ? (k(f, v, r, n, d), m && g.insertBefore(t, f.elm, g.nextSibling(p.elm)), f = e[++c], v = n[--d]) : (Qn(p, h) ? (k(p, h, r, n, u), m && g.insertBefore(t, p.elm, f.elm), p = e[--l]) : (M(i) && (i = Zn(e, c, l)), M(s = D(h.key) ? i[h.key] : x(h, e, c, l)) ? _(h, r, t, f.elm, !1, n, u) : Qn(a = e[s], h) ? (k(a, h, r, n, u), e[s] = void 0, m && g.insertBefore(t, a.elm, f.elm)) : _(h, r, t, f.elm, !1, n, u)), h = n[++u]);
              l < c ? w(t, M(n[d + 1]) ? null : n[d + 1].elm, n, u, d, r) : d < u && $(0, e, c, l)
            }(s, u, l, n, i) : D(l) ? (D(t.text) && g.setTextContent(s, ""), w(s, null, l, 0, l.length - 1, n)) : D(u) ? $(0, u, 0, u.length - 1) : D(t.text) && g.setTextContent(s, "") : t.text !== e.text && g.setTextContent(s, e.text), D(c) && D(a = c.hook) && D(a = a.postpatch) && a(t, e)
          }
        }
      }

      function C(t, e, n) {
        if (O(n) && D(t.parent)) t.parent.data.pendingInsert = e;
        else
          for (var r = 0; r < e.length; ++r) e[r].data.hook.insert(e[r])
      }
      var S = a("attrs,class,staticClass,staticStyle,key");

      function E(t, e, n, r) {
        var o, i = e.tag,
          s = e.data,
          a = e.children;
        if (r = r || s && s.pre, e.elm = t, O(e.isComment) && D(e.asyncFactory)) return e.isAsyncPlaceholder = !0;
        if (D(s) && (D(o = s.hook) && D(o = o.init) && o(e, !0), D(o = e.componentInstance))) return d(e, n), !0;
        if (D(i)) {
          if (D(a))
            if (t.hasChildNodes())
              if (D(o = s) && D(o = o.domProps) && D(o = o.innerHTML)) {
                if (o !== t.innerHTML) return !1
              } else {
                for (var c = !0, u = t.firstChild, l = 0; l < a.length; l++) {
                  if (!u || !E(u, a[l], n, r)) {
                    c = !1;
                    break
                  }
                  u = u.nextSibling
                }
                if (!c || u) return !1
              }
          else h(e, a, n);
          if (D(s)) {
            var f = !1;
            for (var p in s)
              if (!S(p)) {
                f = !0, v(e, n);
                break
              }! f && s.class && Qt(s.class)
          }
        } else t.data !== e.text && (t.data = e.text);
        return !0
      }
      return function(t, e, n, r) {
        if (!M(e)) {
          var o, i = !1,
            s = [];
          if (M(t)) i = !0, _(e, s);
          else {
            var a = D(t.nodeType);
            if (!a && Qn(t, e)) k(t, e, s, null, null, r);
            else {
              if (a) {
                if (1 === t.nodeType && t.hasAttribute(A) && (t.removeAttribute(A), n = !0), O(n) && E(t, e, s)) return C(e, s, !0), t;
                o = t, t = new ft(g.tagName(o).toLowerCase(), {}, [], void 0, o)
              }
              var c = t.elm,
                u = g.parentNode(c);
              if (_(e, s, c._leaveCb ? null : u, g.nextSibling(c)), D(e.parent))
                for (var l = e.parent, f = y(e); l;) {
                  for (var p = 0; p < m.destroy.length; ++p) m.destroy[p](l);
                  if (l.elm = e.elm, f) {
                    for (var d = 0; d < m.create.length; ++d) m.create[d](Jn, l);
                    var h = l.data.hook.insert;
                    if (h.merged)
                      for (var v = 1; v < h.fns.length; v++) h.fns[v]()
                  } else Xn(l);
                  l = l.parent
                }
              D(u) ? $(0, [t], 0, 0) : D(t.tag) && b(t)
            }
          }
          return C(e, s, i), e.elm
        }
        D(t) && b(t)
      }
    }({
      nodeOps: Gn,
      modules: [ur, pr, yr, br, Ir, U ? {
        create: oo,
        activate: oo,
        remove: function(t, e) {
          !0 !== t.data.show ? eo(t, e) : e()
        }
      } : {}].concat(ir)
    });
    Y && document.addEventListener("selectionchange", function() {
      var t = document.activeElement;
      t && t.vmodel && ho(t, "input")
    });
    var so = {
      inserted: function(t, e, n, r) {
        "select" === n.tag ? (r.elm && !r.elm._vOptions ? re(n, "postpatch", function() {
          so.componentUpdated(t, e, n)
        }) : ao(t, e, n.context), t._vOptions = [].map.call(t.options, lo)) : ("textarea" === n.tag || Wn(t.type)) && (t._vModifiers = e.modifiers, e.modifiers.lazy || (t.addEventListener("compositionstart", fo), t.addEventListener("compositionend", po), t.addEventListener("change", po), Y && (t.vmodel = !0)))
      },
      componentUpdated: function(t, e, n) {
        if ("select" === n.tag) {
          ao(t, e, n.context);
          var r = t._vOptions,
            o = t._vOptions = [].map.call(t.options, lo);
          if (o.some(function(t, e) {
              return !S(t, r[e])
            }))(t.multiple ? e.value.some(function(t) {
            return uo(t, o)
          }) : e.value !== e.oldValue && uo(e.value, o)) && ho(t, "change")
        }
      }
    };

    function ao(t, e, n) {
      co(t, e, n), (G || X) && setTimeout(function() {
        co(t, e, n)
      }, 0)
    }

    function co(t, e, n) {
      var r = e.value,
        o = t.multiple;
      if (!o || Array.isArray(r)) {
        for (var i, s, a = 0, c = t.options.length; a < c; a++)
          if (s = t.options[a], o) i = -1 < E(r, lo(s)), s.selected !== i && (s.selected = i);
          else if (S(lo(s), r)) return void(t.selectedIndex !== a && (t.selectedIndex = a));
        o || (t.selectedIndex = -1)
      }
    }

    function uo(e, t) {
      return t.every(function(t) {
        return !S(t, e)
      })
    }

    function lo(t) {
      return "_value" in t ? t._value : t.value
    }

    function fo(t) {
      t.target.composing = !0
    }

    function po(t) {
      t.target.composing && (t.target.composing = !1, ho(t.target, "input"))
    }

    function ho(t, e) {
      var n = document.createEvent("HTMLEvents");
      n.initEvent(e, !0, !0), t.dispatchEvent(n)
    }

    function vo(t) {
      return !t.componentInstance || t.data && t.data.transition ? t : vo(t.componentInstance._vnode)
    }
    var mo = {
        model: so,
        show: {
          bind: function(t, e, n) {
            var r = e.value,
              o = (n = vo(n)).data && n.data.transition,
              i = t.__vOriginalDisplay = "none" === t.style.display ? "" : t.style.display;
            r && o ? (n.data.show = !0, to(n, function() {
              t.style.display = i
            })) : t.style.display = r ? i : "none"
          },
          update: function(t, e, n) {
            var r = e.value;
            !r != !e.oldValue && ((n = vo(n)).data && n.data.transition ? (n.data.show = !0, r ? to(n, function() {
              t.style.display = t.__vOriginalDisplay
            }) : eo(n, function() {
              t.style.display = "none"
            })) : t.style.display = r ? t.__vOriginalDisplay : "none")
          },
          unbind: function(t, e, n, r, o) {
            o || (t.style.display = t.__vOriginalDisplay)
          }
        }
      },
      go = {
        name: String,
        appear: Boolean,
        css: Boolean,
        mode: String,
        type: String,
        enterClass: String,
        leaveClass: String,
        enterToClass: String,
        leaveToClass: String,
        enterActiveClass: String,
        leaveActiveClass: String,
        appearClass: String,
        appearActiveClass: String,
        appearToClass: String,
        duration: [Number, String, Object]
      };

    function _o(t) {
      var e = t && t.componentOptions;
      return e && e.Ctor.options.abstract ? _o(ue(e.children)) : t
    }

    function yo(t) {
      var e = {},
        n = t.$options;
      for (var r in n.propsData) e[r] = t[r];
      var o = n._parentListeners;
      for (var i in o) e[h(i)] = o[i];
      return e
    }

    function wo(t, e) {
      if (/\d-keep-alive$/.test(e.tag)) return t("keep-alive", {
        props: e.componentOptions.propsData
      })
    }
    var bo = function(t) {
        return t.tag || ce(t)
      },
      $o = function(t) {
        return "show" === t.name
      },
      xo = {
        name: "transition",
        props: go,
        abstract: !0,
        render: function(t) {
          var e = this,
            n = this.$slots.default;
          if (n && (n = n.filter(bo)).length) {
            0;
            var r = this.mode;
            0;
            var o = n[0];
            if (function(t) {
                for (; t = t.parent;)
                  if (t.data.transition) return !0
              }(this.$vnode)) return o;
            var i = _o(o);
            if (!i) return o;
            if (this._leaving) return wo(t, o);
            var s = "__transition-" + this._uid + "-";
            i.key = null == i.key ? i.isComment ? s + "comment" : s + i.tag : T(i.key) ? 0 === String(i.key).indexOf(s) ? i.key : s + i.key : i.key;
            var a, c, u = (i.data || (i.data = {})).transition = yo(this),
              l = this._vnode,
              f = _o(l);
            if (i.data.directives && i.data.directives.some($o) && (i.data.show = !0), f && f.data && (a = i, (c = f).key !== a.key || c.tag !== a.tag) && !ce(f) && (!f.componentInstance || !f.componentInstance._vnode.isComment)) {
              var p = f.data.transition = b({}, u);
              if ("out-in" === r) return this._leaving = !0, re(p, "afterLeave", function() {
                e._leaving = !1, e.$forceUpdate()
              }), wo(t, o);
              if ("in-out" === r) {
                if (ce(i)) return l;
                var d, h = function() {
                  d()
                };
                re(u, "afterEnter", h), re(u, "enterCancelled", h), re(p, "delayLeave", function(t) {
                  d = t
                })
              }
            }
            return o
          }
        }
      },
      ko = b({
        tag: String,
        moveClass: String
      }, go);

    function Co(t) {
      t.elm._moveCb && t.elm._moveCb(), t.elm._enterCb && t.elm._enterCb()
    }

    function So(t) {
      t.data.newPos = t.elm.getBoundingClientRect()
    }

    function Eo(t) {
      var e = t.data.pos,
        n = t.data.newPos,
        r = e.left - n.left,
        o = e.top - n.top;
      if (r || o) {
        t.data.moved = !0;
        var i = t.elm.style;
        i.transform = i.WebkitTransform = "translate(" + r + "px," + o + "px)", i.transitionDuration = "0s"
      }
    }
    delete ko.mode;
    var Oo = {
      Transition: xo,
      TransitionGroup: {
        props: ko,
        beforeMount: function() {
          var r = this,
            o = this._update;
          this._update = function(t, e) {
            var n = _e(r);
            r.__patch__(r._vnode, r.kept, !1, !0), r._vnode = r.kept, n(), o.call(r, t, e)
          }
        },
        render: function(t) {
          for (var e = this.tag || this.$vnode.data.tag || "span", n = Object.create(null), r = this.prevChildren = this.children, o = this.$slots.default || [], i = this.children = [], s = yo(this), a = 0; a < o.length; a++) {
            var c = o[a];
            if (c.tag)
              if (null != c.key && 0 !== String(c.key).indexOf("__vlist")) i.push(c), ((n[c.key] = c).data || (c.data = {})).transition = s;
              else;
          }
          if (r) {
            for (var u = [], l = [], f = 0; f < r.length; f++) {
              var p = r[f];
              p.data.transition = s, p.data.pos = p.elm.getBoundingClientRect(), n[p.key] ? u.push(p) : l.push(p)
            }
            this.kept = t(e, null, u), this.removed = l
          }
          return t(e, null, i)
        },
        updated: function() {
          var t = this.prevChildren,
            r = this.moveClass || (this.name || "v") + "-move";
          t.length && this.hasMove(t[0].elm, r) && (t.forEach(Co), t.forEach(So), t.forEach(Eo), this._reflow = document.body.offsetHeight, t.forEach(function(t) {
            if (t.data.moved) {
              var n = t.elm,
                e = n.style;
              Gr(n, r), e.transform = e.WebkitTransform = e.transitionDuration = "", n.addEventListener(Fr, n._moveCb = function t(e) {
                e && e.target !== n || e && !/transform$/.test(e.propertyName) || (n.removeEventListener(Fr, t), n._moveCb = null, Yr(n, r))
              })
            }
          }))
        },
        methods: {
          hasMove: function(t, e) {
            if (!zr) return !1;
            if (this._hasMove) return this._hasMove;
            var n = t.cloneNode();
            t._transitionClasses && t._transitionClasses.forEach(function(t) {
              Mr(n, t)
            }), Lr(n, e), n.style.display = "none", this.$el.appendChild(n);
            var r = Kr(n);
            return this.$el.removeChild(n), this._hasMove = r.hasTransform
          }
        }
      }
    };
    _n.config.mustUseProp = function(t, e, n) {
      return "value" === n && An(t) && "button" !== e || "selected" === n && "option" === t || "checked" === n && "input" === t || "muted" === n && "video" === t
    }, _n.config.isReservedTag = Vn, _n.config.isReservedAttr = Tn, _n.config.getTagNamespace = function(t) {
      return Un(t) ? "svg" : "math" === t ? "math" : void 0
    }, _n.config.isUnknownElement = function(t) {
      if (!U) return !0;
      if (Vn(t)) return !1;
      if (t = t.toLowerCase(), null != qn[t]) return qn[t];
      var e = document.createElement(t);
      return -1 < t.indexOf("-") ? qn[t] = e.constructor === window.HTMLUnknownElement || e.constructor === window.HTMLElement : qn[t] = /HTMLUnknownElement/.test(e.toString())
    }, b(_n.options.directives, mo), b(_n.options.components, Oo), _n.prototype.__patch__ = U ? io : x, _n.prototype.$mount = function(t, e) {
      return t = t && U ? function(t) {
        if ("string" != typeof t) return t;
        var e = document.querySelector(t);
        return e || document.createElement("div")
      }(t) : void 0, r = t, o = e, (n = this).$el = r, n.$options.render || (n.$options.render = dt), be(n, "beforeMount"), new Ae(n, function() {
        n._update(n._render(), o)
      }, x, {
        before: function() {
          n._isMounted && !n._isDestroyed && be(n, "beforeUpdate")
        }
      }, !0), o = !1, null == n.$vnode && (n._isMounted = !0, be(n, "mounted")), n;
      var n, r, o
    }, U && setTimeout(function() {
      P.devtools && et && et.emit("init", _n)
    }, 0), To.a = _n
  }).call(this, e(25), e(31).setImmediate)
}, function(e, t) {
  function n(t) {
    return (n = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
      return typeof t
    } : function(t) {
      return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
    })(t)
  }

  function r(t) {
    return "function" == typeof Symbol && "symbol" === n(Symbol.iterator) ? e.exports = r = function(t) {
      return n(t)
    } : e.exports = r = function(t) {
      return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : n(t)
    }, r(t)
  }
  e.exports = r
}, function(t) {
  t.exports = {
    polyfillUrl: 'http://researchfreelancer.loc/js/widget/polyfill.js',
    apiUrl: "https://api.researchfreelancer.loc",
    iframeUrl: 'http://researchfreelancer.loc/js/widget/chat.html',
    cdnUrl: 'http://researchfreelancer.loc/js/widget',
    storagePrefix: "__be"
  }
}, function(t, e, n) {
  "use strict";
  n.d(e, "a", function() {
    return r
  });
  var r = function() {}
}, function(t, e, n) {
  var s = n(24);
  t.exports = function(t, e) {
    if (null == t) return {};
    var n, r, o = s(t, e);
    if (Object.getOwnPropertySymbols) {
      var i = Object.getOwnPropertySymbols(t);
      for (r = 0; r < i.length; r++) n = i[r], 0 <= e.indexOf(n) || Object.prototype.propertyIsEnumerable.call(t, n) && (o[n] = t[n])
    }
    return o
  }
}, function(t, e) {
  t.exports = function(t, e, n) {
    return e in t ? Object.defineProperty(t, e, {
      value: n,
      enumerable: !0,
      configurable: !0,
      writable: !0
    }) : t[e] = n, t
  }
}, function(t, e, n) {
  "use strict";
  var c = n(4);

  function h() {
    return (h = Object.assign || function(t) {
      for (var e = 1; e < arguments.length; e++) {
        var n = arguments[e];
        for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (t[r] = n[r])
      }
      return t
    }).apply(this, arguments)
  }
  var u = function(e) {
    return new Promise(function(t) {
      t(e())
    })
  };

  function r() {
    return (r = Object.assign || function(t) {
      for (var e = 1; e < arguments.length; e++) {
        var n = arguments[e];
        for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (t[r] = n[r])
      }
      return t
    }).apply(this, arguments)
  }
  var o = function(r) {
      return r = r || Object.create(null), {
        on: function(t, e) {
          (r[t] || (r[t] = [])).push(e)
        },
        off: function(t, e) {
          r[t] && r[t].splice(r[t].indexOf(e) >>> 0, 1)
        },
        emit: function(e, n) {
          (r[e] || []).slice().map(function(t) {
            t(n)
          }), (r["*"] || []).slice().map(function(t) {
            t(e, n)
          })
        }
      }
    },
    b = function() {
      var n = Object.create(null),
        i = o(n);
      return r({}, i, {
        off: function(t, e) {
          t ? i.off(t, e) : Object.keys(n).forEach(function(t) {
            delete n[t]
          })
        },
        once: function(r, o) {
          i.on(r, function t(e, n) {
            i.off(r, t), o(e, n)
          })
        }
      })
    };

  function p(t, e) {
    if (null == t) return {};
    var n, r, o = {},
      i = Object.keys(t);
    for (r = 0; r < i.length; r++) n = i[r], 0 <= e.indexOf(n) || (o[n] = t[n]);
    return o
  }
  document.documentElement.currentStyle;

  function d(t) {
    var e = t.parentNode;
    e && e.removeChild(t)
  }
  n.d(e, "a", function() {
    return U
  }), n.d(e, "b", function() {
    return q
  }), n.d(e, "c", function() {
    return Y
  });
  var v = function(r) {
    return function(e) {
      return function(t, n) {
        0 === t && e(0, function(t, e) {
          n(t, 1 === t ? r(e) : e)
        })
      }
    }
  };
  var i = function(s) {
    return void 0 === s && (s = {}),
      function(t) {
        "function" == typeof s && (s = {
          next: s
        });
        var n, e = s,
          r = e.next,
          o = e.error,
          i = e.complete;
        t(0, function(t, e) {
          0 === t && (n = e), 1 === t && r && r(e), 1 !== t && 0 !== t || n(1), 2 === t && !e && i && i(), 2 === t && e && o && o(e)
        });
        return function() {
          n && n(2)
        }
      }
  };

  function m(n) {
    return new Promise(function(t, e) {
      var a;
      i({
        next: t,
        error: e,
        complete: function() {
          var t = new Error("No elements in sequence.");
          t.code = "NO_ELEMENTS", e(t)
        }
      })((a = n, function(t, n) {
        if (0 === t) {
          var r, o, i = !1,
            s = !1;
          a(0, function(t, e) {
            return 0 === t ? (r = e, void n(0, function(t, e) {
              2 === t && (s = !0), r(t, e)
            })) : 1 === t ? (i = !0, o = e, void r(1)) : void(2 === t && !e && i && (n(1, o), s) || n(t, e))
          })
        }
      }))
    })
  }
  var $ = function(o) {
      return function(e) {
        return function(t, n) {
          var r;
          0 === t && e(0, function(t, e) {
            0 === t ? n(t, r = e) : 1 === t ? o(e) ? n(t, e) : r(1) : n(t, e)
          })
        }
      }
    },
    x = function(r) {
      return function(t) {
        var n;
        t(0, function(t, e) {
          0 === t && (n = e), 1 === t && r(e), 1 !== t && 0 !== t || n(1)
        })
      }
    };

  function k(n) {
    return void 0 === n && (n = -1),
      function(e) {
        return function(t, r) {
          if (0 === t) {
            var o, i = !1,
              s = n,
              a = function(t, e) {
                o(t, e)
              };
            ! function n() {
              e(0, function(t, e) {
                return 0 === t ? (o = e, i ? void a(1) : (i = !0, void r(0, a))) : 2 === t && e && 0 !== s ? (s--, void n()) : void r(t, e)
              })
            }()
          }
        }
      }
  }
  var C = function(e) {
      var c, u = [];
      return function(t, s) {
        if (0 === t) {
          u.push(s);
          var a = function(t, e) {
            if (2 === t) {
              var n = u.indexOf(s); - 1 < n && u.splice(n, 1), u.length || c(2)
            } else c(t, e)
          };
          1 !== u.length ? s(0, a) : e(0, function(t, e) {
            if (0 === t) c = e, s(0, a);
            else {
              var n = u.slice(0),
                r = Array.isArray(n),
                o = 0;
              for (n = r ? n : n[Symbol.iterator]();;) {
                var i;
                if (r) {
                  if (o >= n.length) break;
                  i = n[o++]
                } else {
                  if ((o = n.next()).done) break;
                  i = o.value
                }
                i(t, e)
              }
            }
            2 === t && (u = [])
          })
        }
      }
    },
    S = function(s) {
      return function(e) {
        return function(t, n) {
          if (0 === t) {
            var r, o = 0;
            e(0, function(t, e) {
              0 === t ? (r = e, n(0, i)) : 1 === t ? o < s && (o++, n(t, e), o === s && (n(2), r(2))) : n(t, e)
            })
          }

          function i(t, e) {
            o < s && r(t, e)
          }
        }
      }
    },
    l = {},
    E = function(a) {
      return function(e) {
        return function(t, n) {
          if (0 === t) {
            var r, o, i = !1,
              s = l;
            e(0, function(t, e) {
              if (0 === t) return r = e, a(0, function(t, e) {
                if (0 !== t) return 1 === t ? (s = void 0, o(2), r(2), void(i && n(2))) : void(2 === t && (o = null, e && (s = e, r(2), i && n(t, e))));
                (o = e)(1)
              }), i = !0, n(0, function(t, e) {
                s === l && (2 === t && o && o(2), r(t, e))
              }), void(s !== l && n(2, s));
              2 === t && o(2), n(t, e)
            })
          }
        }
      }
    };

  function O(a) {
    return function(e) {
      return function(t, n) {
        if (0 === t) {
          var r, o, i = a instanceof Date;
          e(0, function(t, e) {
            if (0 === t) return r = e, s(i ? a - Date.now() : a), void n(0, function(t, e) {
              2 === t && clearTimeout(o), r(t, e)
            });
            2 === t ? clearTimeout(o) : 1 !== t || i || (clearTimeout(o), s(a)), n(t, e)
          })
        }

        function s(t) {
          o = setTimeout(function() {
            r(2);
            var t = new Error("Timeout.");
            t.code = "TIMEOUT", n(2, t)
          }, t)
        }
      }
    }
  }
  var s = "@@livechat/postmessenger",
    T = "handshake",
    g = "response",
    a = function(e) {
      return function(t, r) {
        if (0 === t) {
          var o, i, s = !1;
          e(0, function(t, e) {
            if (0 === t) o = e, r(0, a);
            else if (1 === t) {
              var n = e;
              i && i(2), n(0, function(t, e) {
                0 === t ? (i = e)(1) : 1 === t ? r(1, e) : 2 === t && e ? (o(2), r(2, e)) : 2 === t && (s ? r(2) : (i = void 0, o(1)))
              })
            } else 2 === t && e ? (i && i(2), r(2, e)) : 2 === t && (i ? s = !0 : r(2))
          })
        }

        function a(t, e) {
          1 === t && (i || o)(1, e), 2 === t && (i && i(2), o(2))
        }
      }
    };

  function f(r) {
    return function(t, e) {
      if (0 === t) {
        var n = !1;
        e(0, function(t) {
          2 === t && (n = !0)
        }), n || e(2, r || new Error)
      }
    }
  }
  var _ = function(o, i, s) {
      return function(t, e) {
        if (0 === t) {
          var n = !1,
            r = function(t) {
              e(1, t)
            };
          e(0, function(t) {
            2 === t && (n = !0, o.removeEventListener(i, r, s))
          }), n || o.addEventListener(i, r, s)
        }
      }
    },
    y = function(t) {
      return !!t.data && t.data[s]
    },
    A = Object(c.f)(function() {
      return C(v(function(t) {
        return t.data.origin = t.origin, t.data
      })($(y)(_(window, "message"))))
    });

  function j(e) {
    return function(t) {
      return a(v(e)(t))
    }
  }
  var w = 0,
    I = function(t, n, r) {
      return a((o = function() {
        var e = w++;
        return r.request = e, n(r), S(1)(j(function(t) {
          if (!t.data.error) return r = function() {
              return t.data.result
            },
            function(t, e) {
              if (0 === t) {
                var n = !1;
                e(0, function(t) {
                  2 === t && (n = !0)
                }), e(1, r()), n || e(2)
              }
            };
          var r, e = t.data.result,
            n = e.real,
            o = e.error;
          if (!n) return f(o);
          var i = new Error(o.message);
          return Object(c.d)("code", o) && (i.code = o.code), f(i)
        })($(function(t) {
          return t.type === g && t.request === e
        })(t)))
      }, function(t, e) {
        if (0 === t) {
          var n = !1;
          e(0, function(t) {
            2 === t && (n = !0)
          }), e(1, o()), n || e(2)
        }
      }));
      var o
    },
    P = function(t, o, i, s, e) {
      return void 0 === e && (e = null), h({}, t, {
        call: function(t) {
          for (var e = arguments.length, n = new Array(1 < e ? e - 1 : 0), r = 1; r < e; r++) n[r - 1] = arguments[r];
          return m(I(o, s, i("call", {
            method: t,
            args: n
          })))
        },
        emit: function(t, e) {
          s(i("emit", {
            event: t,
            arg: e
          }))
        },
        data: e
      })
    };
  var L = function() {
    var a = [];
    return function(t, e) {
      if (0 === t) {
        var n = e;
        a.push(n), n(0, function(t) {
          if (2 === t) {
            var e = a.indexOf(n); - 1 < e && a.splice(e, 1)
          }
        })
      } else
        for (var r, o = a.slice(0), i = 0, s = o.length; i < s; i++) r = o[i], -1 < a.indexOf(r) && r(t, e)
    }
  };

  function M() {
    var e = L();
    return [e, function() {
      var t = new Error("Destroyed.");
      t.code = "DESTROYED", e(2, t)
    }]
  }
  var D = function(t, e, n, r) {
      var o;
      return (o = {
        "@@livechat/postmessenger": !0
      }).owner = t, o.instance = e, o.type = n, o.data = r, o
    },
    R = function(o, i, s, a) {
      return function(r) {
        switch (r.type) {
          case "call":
            return void u(function() {
              var t = r.data,
                e = t.method,
                n = t.args;
              return a[e].apply(o, n)
            }).then(function(t) {
              r.type = g, r.data = {
                error: !1,
                result: t
              }, s(r)
            }, function(t) {
              var e;
              r.type = g, t instanceof Error ? (e = {
                real: !0,
                error: {
                  message: t.message
                }
              }, Object(c.d)("code", t) && (e.error.code = t.code)) : e = {
                real: !1,
                error: t
              }, r.data = {
                error: !0,
                result: e
              }, s(r)
            });
          case "emit":
            var t = r.data,
              e = t.event,
              n = t.arg;
            return void i(e, n);
          default:
            return
        }
      }
    },
    z = function(t) {
      return Object(c.g)(function(t) {
        return "function" == typeof t
      }, t)
    },
    N = Object(c.c)(),
    H = 0,
    B = function(t) {
      var e = document.createElement("a");
      return e.href = t, e.origin ? "null" === e.origin ? "*" : e.origin : (4 < e.protocol.length ? e.protocol : window.location.protocol) + "//" + (e.host.length ? "80" === e.port || "443" === e.port ? e.hostname : e.host : window.location.host)
    };

  function F(t, e) {
    var n = t.frame,
      r = t.strictOrigin,
      o = void 0 === r || r;
    void 0 === e && (e = {});
    var i = z(e),
      s = i[0],
      a = i[1],
      c = M(),
      u = c[0],
      l = c[1],
      f = H++,
      p = n.contentWindow,
      d = o ? B(n.src) : "*",
      h = b(),
      v = function(t, e) {
        return D(N, f, t, e)
      },
      m = function(t) {
        p.postMessage(t, d)
      },
      g = C($(function(t) {
        return t.owner === N && t.instance === f
      })(E(u)(A()))),
      _ = P(h, g, v, m),
      y = C(S(1)(k(5)(O(500)(E(u)(I(g, m, v(T, a))))))),
      w = R(_, h.emit, m, s);
    return x(w)(j(function() {
      return g
    })(y)), {
      api: _,
      destroy: l,
      handshake$: y
    }
  }

  function U(d) {
    void 0 === d && (d = {});
    var t = S(1)(O(3e3)($(function(t) {
      return t.type === T
    })(A())));
    return {
      promise: m(v(function(t) {
        var n = t.instance,
          r = t.owner,
          e = t.origin,
          o = z(d),
          i = o[0],
          s = o[1],
          a = window.parent,
          c = b(),
          u = function(t) {
            a.postMessage(t, e)
          },
          l = $(function(t) {
            return t.owner === r
          })(A()),
          f = P(c, l, function(t, e) {
            return D(r, n, t, e)
          }, u, t.data),
          p = R(f, c.emit, u, i);
        return x(p)(l), u(h({}, t, {
          type: g,
          data: {
            error: !1,
            result: s
          }
        })), f
      })(t))
    }
  }
  var V = function(t, e) {
    var n = document.createElement("iframe");
    return t.appendChild(n), n.src = e, n
  };

  function q(t, e) {
    var n, r = t.container,
      o = t.url,
      i = p(t, ["container", "url"]),
      s = V(r, o),
      a = function() {
        d(s), n && n.destroy()
      };
    return {
      destroy: a,
      frame: s,
      promise: m(S(1)(v(function(t) {
        var e = n.api;
        return e.data = t, e.destroy = a, e.frame = s, e
      })(j(function() {
        return (n = F(h({}, i, {
          frame: s
        }), e)).handshake$
      })(_(s, "load")))))
    }
  }
  var W = function(o) {
      return function(t, e) {
        if (0 === t) {
          if ("function" != typeof o) return e(0, function() {}), void e(2);
          var n, r = !1;
          e(0, function(t) {
            r || (r = 2 === t) && "function" == typeof n && n()
          }), r || (n = o(function(t) {
            r || e(1, t)
          }, function(t) {
            r || void 0 === t || (r = !0, e(2, t))
          }, function() {
            r || (r = !0, e(2))
          }))
        }
      }
    },
    G = function(t) {
      if (t.frame) return t.frame;
      var e = t.container,
        n = t.url;
      return V(e, n)
    };

  function Y(t, c) {
    var u, e = t.onConnected,
      l = p(t, ["onConnected"]),
      n = !l.frame,
      f = G(l),
      r = M(),
      o = r[0],
      i = r[1],
      s = function() {
        n && d(f), u ? u.destroy() : i()
      };
    return x(function(t) {
      t.destroy = s, t.frame = f, e(t)
    })(E(o)(k()(j(function() {
      return W(function(t, e) {
        var n, r, o, i, s, a = (n = h({}, l, {
          frame: f
        }), r = F(n, c), o = r.api, i = r.destroy, s = r.handshake$, {
          destroy: i,
          promise: m(v(function(t) {
            return o.data = t, o.destroy = i, o
          })(s))
        });
        return a.promise.then(t, e), (u = a).destroy
      })
    })(_(f, "load"))))), {
      destroy: s,
      frame: f
    }
  }
}, function(t, e, n) {
  var r = n(34),
    o = n(35),
    i = n(36);
  t.exports = function(t) {
    return r(t) || o(t) || i()
  }
}, function(t, e, n) {
  "use strict";
  n.d(e, "a", function() {
    return r
  });
  var r = "EVENT_ERROR_PROPERTY"
}, function(t, e, n) {
  "use strict";
  n.d(e, "a", function() {
    return r
  });
  var r = "URL_CHANGED"
}, function(t, e, n) {
  "use strict";
  n.d(e, "a", function() {
    return r
  });
  var r = function(t) {
    var e, n;
    e = t, n = Object.assign(document.createElement("a"), {
      href: e
    }).hostname, Boolean(n && n === window.location.hostname) ? window.location.href = t : window.open(t, "_blank")
  }
}, function(t, e, n) {
  "use strict";
  n.d(e, "a", function() {
    return r
  });
  var r = function(t) {
    window.location.assign("tel:".concat(t))
  }
}, function(t, e, n) {
  var r = n(26),
    o = n(27),
    i = n(28);
  t.exports = function(t, e) {
    return r(t) || o(t, e) || i()
  }
}, function(t, e, n) {}, function(t, e) {
  t.exports = function(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
  }
}, function(t, e) {
  function r(t, e) {
    for (var n = 0; n < e.length; n++) {
      var r = e[n];
      r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
    }
  }
  t.exports = function(t, e, n) {
    return e && r(t.prototype, e), n && r(t, n), t
  }
}, , function(t, e, n) {
  var r = function() {
      return this || "object" == typeof self && self
    }() || Function("return this")(),
    o = r.regeneratorRuntime && 0 <= Object.getOwnPropertyNames(r).indexOf("regeneratorRuntime"),
    i = o && r.regeneratorRuntime;
  if (r.regeneratorRuntime = void 0, t.exports = n(23), o) r.regeneratorRuntime = i;
  else try {
    delete r.regeneratorRuntime
  } catch (t) {
    r.regeneratorRuntime = void 0
  }
}, function(I, t) {
  ! function(t) {
    "use strict";
    var c, e = Object.prototype,
      u = e.hasOwnProperty,
      n = "function" == typeof Symbol ? Symbol : {},
      o = n.iterator || "@@iterator",
      r = n.asyncIterator || "@@asyncIterator",
      i = n.toStringTag || "@@toStringTag",
      s = "object" == typeof I,
      a = t.regeneratorRuntime;
    if (a) s && (I.exports = a);
    else {
      (a = t.regeneratorRuntime = s ? I.exports : {}).wrap = y;
      var f = "suspendedStart",
        p = "suspendedYield",
        d = "executing",
        h = "completed",
        v = {},
        l = {};
      l[o] = function() {
        return this
      };
      var m = Object.getPrototypeOf,
        g = m && m(m(A([])));
      g && g !== e && u.call(g, o) && (l = g);
      var _ = x.prototype = b.prototype = Object.create(l);
      $.prototype = _.constructor = x, x.constructor = $, x[i] = $.displayName = "GeneratorFunction", a.isGeneratorFunction = function(t) {
        var e = "function" == typeof t && t.constructor;
        return !!e && (e === $ || "GeneratorFunction" === (e.displayName || e.name))
      }, a.mark = function(t) {
        return Object.setPrototypeOf ? Object.setPrototypeOf(t, x) : (t.__proto__ = x, i in t || (t[i] = "GeneratorFunction")), t.prototype = Object.create(_), t
      }, a.awrap = function(t) {
        return {
          __await: t
        }
      }, k(C.prototype), C.prototype[r] = function() {
        return this
      }, a.AsyncIterator = C, a.async = function(t, e, n, r) {
        var o = new C(y(t, e, n, r));
        return a.isGeneratorFunction(e) ? o : o.next().then(function(t) {
          return t.done ? t.value : o.next()
        })
      }, k(_), _[i] = "Generator", _[o] = function() {
        return this
      }, _.toString = function() {
        return "[object Generator]"
      }, a.keys = function(n) {
        var r = [];
        for (var t in n) r.push(t);
        return r.reverse(),
          function t() {
            for (; r.length;) {
              var e = r.pop();
              if (e in n) return t.value = e, t.done = !1, t
            }
            return t.done = !0, t
          }
      }, a.values = A, T.prototype = {
        constructor: T,
        reset: function(t) {
          if (this.prev = 0, this.next = 0, this.sent = this._sent = c, this.done = !1, this.delegate = null, this.method = "next", this.arg = c, this.tryEntries.forEach(O), !t)
            for (var e in this) "t" === e.charAt(0) && u.call(this, e) && !isNaN(+e.slice(1)) && (this[e] = c)
        },
        stop: function() {
          this.done = !0;
          var t = this.tryEntries[0].completion;
          if ("throw" === t.type) throw t.arg;
          return this.rval
        },
        dispatchException: function(n) {
          if (this.done) throw n;
          var r = this;

          function t(t, e) {
            return i.type = "throw", i.arg = n, r.next = t, e && (r.method = "next", r.arg = c), !!e
          }
          for (var e = this.tryEntries.length - 1; 0 <= e; --e) {
            var o = this.tryEntries[e],
              i = o.completion;
            if ("root" === o.tryLoc) return t("end");
            if (o.tryLoc <= this.prev) {
              var s = u.call(o, "catchLoc"),
                a = u.call(o, "finallyLoc");
              if (s && a) {
                if (this.prev < o.catchLoc) return t(o.catchLoc, !0);
                if (this.prev < o.finallyLoc) return t(o.finallyLoc)
              } else if (s) {
                if (this.prev < o.catchLoc) return t(o.catchLoc, !0)
              } else {
                if (!a) throw new Error("try statement without catch or finally");
                if (this.prev < o.finallyLoc) return t(o.finallyLoc)
              }
            }
          }
        },
        abrupt: function(t, e) {
          for (var n = this.tryEntries.length - 1; 0 <= n; --n) {
            var r = this.tryEntries[n];
            if (r.tryLoc <= this.prev && u.call(r, "finallyLoc") && this.prev < r.finallyLoc) {
              var o = r;
              break
            }
          }
          o && ("break" === t || "continue" === t) && o.tryLoc <= e && e <= o.finallyLoc && (o = null);
          var i = o ? o.completion : {};
          return i.type = t, i.arg = e, o ? (this.method = "next", this.next = o.finallyLoc, v) : this.complete(i)
        },
        complete: function(t, e) {
          if ("throw" === t.type) throw t.arg;
          return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && e && (this.next = e), v
        },
        finish: function(t) {
          for (var e = this.tryEntries.length - 1; 0 <= e; --e) {
            var n = this.tryEntries[e];
            if (n.finallyLoc === t) return this.complete(n.completion, n.afterLoc), O(n), v
          }
        },
        catch: function(t) {
          for (var e = this.tryEntries.length - 1; 0 <= e; --e) {
            var n = this.tryEntries[e];
            if (n.tryLoc === t) {
              var r = n.completion;
              if ("throw" === r.type) {
                var o = r.arg;
                O(n)
              }
              return o
            }
          }
          throw new Error("illegal catch attempt")
        },
        delegateYield: function(t, e, n) {
          return this.delegate = {
            iterator: A(t),
            resultName: e,
            nextLoc: n
          }, "next" === this.method && (this.arg = c), v
        }
      }
    }

    function y(t, e, n, r) {
      var i, s, a, c, o = e && e.prototype instanceof b ? e : b,
        u = Object.create(o.prototype),
        l = new T(r || []);
      return u._invoke = (i = t, s = n, a = l, c = f, function(t, e) {
        if (c === d) throw new Error("Generator is already running");
        if (c === h) {
          if ("throw" === t) throw e;
          return j()
        }
        for (a.method = t, a.arg = e;;) {
          var n = a.delegate;
          if (n) {
            var r = S(n, a);
            if (r) {
              if (r === v) continue;
              return r
            }
          }
          if ("next" === a.method) a.sent = a._sent = a.arg;
          else if ("throw" === a.method) {
            if (c === f) throw c = h, a.arg;
            a.dispatchException(a.arg)
          } else "return" === a.method && a.abrupt("return", a.arg);
          c = d;
          var o = w(i, s, a);
          if ("normal" === o.type) {
            if (c = a.done ? h : p, o.arg === v) continue;
            return {
              value: o.arg,
              done: a.done
            }
          }
          "throw" === o.type && (c = h, a.method = "throw", a.arg = o.arg)
        }
      }), u
    }

    function w(t, e, n) {
      try {
        return {
          type: "normal",
          arg: t.call(e, n)
        }
      } catch (t) {
        return {
          type: "throw",
          arg: t
        }
      }
    }

    function b() {}

    function $() {}

    function x() {}

    function k(t) {
      ["next", "throw", "return"].forEach(function(e) {
        t[e] = function(t) {
          return this._invoke(e, t)
        }
      })
    }

    function C(c) {
      var e;
      this._invoke = function(n, r) {
        function t() {
          return new Promise(function(t, e) {
            ! function e(t, n, r, o) {
              var i = w(c[t], c, n);
              if ("throw" !== i.type) {
                var s = i.arg,
                  a = s.value;
                return a && "object" == typeof a && u.call(a, "__await") ? Promise.resolve(a.__await).then(function(t) {
                  e("next", t, r, o)
                }, function(t) {
                  e("throw", t, r, o)
                }) : Promise.resolve(a).then(function(t) {
                  s.value = t, r(s)
                }, function(t) {
                  return e("throw", t, r, o)
                })
              }
              o(i.arg)
            }(n, r, t, e)
          })
        }
        return e = e ? e.then(t, t) : t()
      }
    }

    function S(t, e) {
      var n = t.iterator[e.method];
      if (n === c) {
        if (e.delegate = null, "throw" === e.method) {
          if (t.iterator.return && (e.method = "return", e.arg = c, S(t, e), "throw" === e.method)) return v;
          e.method = "throw", e.arg = new TypeError("The iterator does not provide a 'throw' method")
        }
        return v
      }
      var r = w(n, t.iterator, e.arg);
      if ("throw" === r.type) return e.method = "throw", e.arg = r.arg, e.delegate = null, v;
      var o = r.arg;
      return o ? o.done ? (e[t.resultName] = o.value, e.next = t.nextLoc, "return" !== e.method && (e.method = "next", e.arg = c), e.delegate = null, v) : o : (e.method = "throw", e.arg = new TypeError("iterator result is not an object"), e.delegate = null, v)
    }

    function E(t) {
      var e = {
        tryLoc: t[0]
      };
      1 in t && (e.catchLoc = t[1]), 2 in t && (e.finallyLoc = t[2], e.afterLoc = t[3]), this.tryEntries.push(e)
    }

    function O(t) {
      var e = t.completion || {};
      e.type = "normal", delete e.arg, t.completion = e
    }

    function T(t) {
      this.tryEntries = [{
        tryLoc: "root"
      }], t.forEach(E, this), this.reset(!0)
    }

    function A(e) {
      if (e) {
        var t = e[o];
        if (t) return t.call(e);
        if ("function" == typeof e.next) return e;
        if (!isNaN(e.length)) {
          var n = -1,
            r = function t() {
              for (; ++n < e.length;)
                if (u.call(e, n)) return t.value = e[n], t.done = !1, t;
              return t.value = c, t.done = !0, t
            };
          return r.next = r
        }
      }
      return {
        next: j
      }
    }

    function j() {
      return {
        value: c,
        done: !0
      }
    }
  }(function() {
    return this || "object" == typeof self && self
  }() || Function("return this")())
}, function(t, e) {
  t.exports = function(t, e) {
    if (null == t) return {};
    var n, r, o = {},
      i = Object.keys(t);
    for (r = 0; r < i.length; r++) n = i[r], 0 <= e.indexOf(n) || (o[n] = t[n]);
    return o
  }
}, function(t, e) {
  var n;
  n = function() {
    return this
  }();
  try {
    n = n || new Function("return this")()
  } catch (t) {
    "object" == typeof window && (n = window)
  }
  t.exports = n
}, function(t, e) {
  t.exports = function(t) {
    if (Array.isArray(t)) return t
  }
}, function(t, e) {
  t.exports = function(t, e) {
    var n = [],
      r = !0,
      o = !1,
      i = void 0;
    try {
      for (var s, a = t[Symbol.iterator](); !(r = (s = a.next()).done) && (n.push(s.value), !e || n.length !== e); r = !0);
    } catch (t) {
      o = !0, i = t
    } finally {
      try {
        r || null == a.return || a.return()
      } finally {
        if (o) throw i
      }
    }
    return n
  }
}, function(t, e) {
  t.exports = function() {
    throw new TypeError("Invalid attempt to destructure non-iterable instance")
  }
}, function(t) {
  t.exports = {
    en: {
      start_conversation_button: "Start Conversation",
      start_again: "Start the chat again",
      input_placeholder: "Type your message here",
      today: "Today",
      yesterday: "Yesterday",
      offline_information: "Your device seems to be offline",
      sending: "Sending",
      sending_error: "Sending error"
    },
    pl: {
      start_conversation_button: "Rozpocznij rozmowę",
      start_again: "Ponownie rozpocznij czat",
      input_placeholder: "Twoja wiadomość",
      today: "Dzisiaj",
      yesterday: "Wczoraj",
      offline_information: "Wystąpił problem z połączeniem",
      sending: "Wysyłanie",
      sending_error: "Błąd wysyłania"
    },
    fr: {
      start_conversation_button: "Démarrer la conversation",
      start_again: "Redémarrer le chat",
      input_placeholder: "Saisissez votre message ici",
      today: "Aujourd'hui",
      yesterday: "Hier",
      offline_information: "Votre appareil apparaît hors ligne",
      sending: "Envoi",
      sending_error: "Erreur d’envoi"
    },
    fi: {
      start_conversation_button: "Aloita keskustelu",
      start_again: "Aloita keskustelu uudelleen",
      input_placeholder: "Kirjoita viestisi tähän",
      today: "Tänään",
      yesterday: "Eilen",
      offline_information: "Laitteesi näyttää olevan offline-tilassa",
      sending: "lähettämällä",
      sending_error: "Lähetysvirhe"
    },
    es: {
      start_conversation_button: "Comenzar conversación",
      start_again: "Vuelve a iniciar el chat",
      input_placeholder: "Escribe tu mensaje aquí",
      today: "Hoy",
      yesterday: "Ayer",
      offline_information: "Tu dispositivo parece estar desconectado",
      sending: "Enviando",
      sending_error: "Error de envío"
    },
    de: {
      start_conversation_button: "Chat starten",
      start_again: "Chat neu starten",
      input_placeholder: "Deine Nachricht",
      today: "Heute",
      yesterday: "Gestern",
      offline_information: "Probleme mit der Verbindung",
      sending: "Senden",
      sending_error: "Sendefehler"
    },
    da: {
      start_conversation_button: "Start chatten",
      start_again: "Start chatten igen",
      input_placeholder: "Din besked",
      today: "I dag",
      yesterday: "I går",
      offline_information: "Der var et problem med din forbindelse",
      sending: "Sender",
      sending_error: "Sendefejl"
    },
    ru: {
      start_conversation_button: "Начать общение",
      start_again: "Начать сначала",
      input_placeholder: "Пишите сообщение сюда",
      today: "Сегодня",
      yesterday: "Вчера",
      offline_information: "Проблема с интернет-соединением",
      sending: "Отправка",
      sending_error: "Ошибка отправки"
    },
    it: {
      start_conversation_button: "Inizia",
      start_again: "Ricomincia",
      input_placeholder: "Scrivi qui",
      today: "Oggi",
      yesterday: "Ieri",
      offline_information: "Si è verificato un problema di connessione",
      sending: "Invio",
      sending_error: "Errore di invio"
    },
    sv: {
      start_conversation_button: "Starta en konversation",
      start_again: "Starta chatten igen",
      input_placeholder: "Skriv ditt meddelande här",
      today: "Idag",
      yesterday: "Igår",
      offline_information: "Din enhet verkar vara offline",
      sending: "Skickar",
      sending_error: "Fel när meddelande skulle skickas"
    },
    pt: {
      start_conversation_button: "Iniciar Conversa",
      start_again: "Iniciar o chat novamente",
      input_placeholder: "Digite sua mensagem aqui",
      today: "Hoje",
      yesterday: "Ontem",
      offline_information: "Seu dispositivo parece estar offline",
      sending: "Enviando",
      sending_error: "Erro ao enviar"
    }
  }
}, , function(t, o, i) {
  (function(t) {
    var e = void 0 !== t && t || "undefined" != typeof self && self || window,
      n = Function.prototype.apply;

    function r(t, e) {
      this._id = t, this._clearFn = e
    }
    o.setTimeout = function() {
      return new r(n.call(setTimeout, e, arguments), clearTimeout)
    }, o.setInterval = function() {
      return new r(n.call(setInterval, e, arguments), clearInterval)
    }, o.clearTimeout = o.clearInterval = function(t) {
      t && t.close()
    }, r.prototype.unref = r.prototype.ref = function() {}, r.prototype.close = function() {
      this._clearFn.call(e, this._id)
    }, o.enroll = function(t, e) {
      clearTimeout(t._idleTimeoutId), t._idleTimeout = e
    }, o.unenroll = function(t) {
      clearTimeout(t._idleTimeoutId), t._idleTimeout = -1
    }, o._unrefActive = o.active = function(t) {
      clearTimeout(t._idleTimeoutId);
      var e = t._idleTimeout;
      0 <= e && (t._idleTimeoutId = setTimeout(function() {
        t._onTimeout && t._onTimeout()
      }, e))
    }, i(32), o.setImmediate = "undefined" != typeof self && self.setImmediate || void 0 !== t && t.setImmediate || this && this.setImmediate, o.clearImmediate = "undefined" != typeof self && self.clearImmediate || void 0 !== t && t.clearImmediate || this && this.clearImmediate
  }).call(this, i(25))
}, function(t, e, n) {
  (function(t, h) {
    ! function(n, r) {
      "use strict";
      if (!n.setImmediate) {
        var o, i, e, s, t, a = 1,
          c = {},
          u = !1,
          l = n.document,
          f = Object.getPrototypeOf && Object.getPrototypeOf(n);
        f = f && f.setTimeout ? f : n, o = "[object process]" === {}.toString.call(n.process) ? function(t) {
          h.nextTick(function() {
            d(t)
          })
        } : function() {
          if (n.postMessage && !n.importScripts) {
            var t = !0,
              e = n.onmessage;
            return n.onmessage = function() {
              t = !1
            }, n.postMessage("", "*"), n.onmessage = e, t
          }
        }() ? (s = "setImmediate$" + Math.random() + "$", t = function(t) {
          t.source === n && "string" == typeof t.data && 0 === t.data.indexOf(s) && d(+t.data.slice(s.length))
        }, n.addEventListener ? n.addEventListener("message", t, !1) : n.attachEvent("onmessage", t), function(t) {
          n.postMessage(s + t, "*")
        }) : n.MessageChannel ? ((e = new MessageChannel).port1.onmessage = function(t) {
          d(t.data)
        }, function(t) {
          e.port2.postMessage(t)
        }) : l && "onreadystatechange" in l.createElement("script") ? (i = l.documentElement, function(t) {
          var e = l.createElement("script");
          e.onreadystatechange = function() {
            d(t), e.onreadystatechange = null, i.removeChild(e), e = null
          }, i.appendChild(e)
        }) : function(t) {
          setTimeout(d, 0, t)
        }, f.setImmediate = function(t) {
          "function" != typeof t && (t = new Function("" + t));
          for (var e = new Array(arguments.length - 1), n = 0; n < e.length; n++) e[n] = arguments[n + 1];
          var r = {
            callback: t,
            args: e
          };
          return c[a] = r, o(a), a++
        }, f.clearImmediate = p
      }

      function p(t) {
        delete c[t]
      }

      function d(t) {
        if (u) setTimeout(d, 0, t);
        else {
          var e = c[t];
          if (e) {
            u = !0;
            try {
              ! function(t) {
                var e = t.callback,
                  n = t.args;
                switch (n.length) {
                  case 0:
                    e();
                    break;
                  case 1:
                    e(n[0]);
                    break;
                  case 2:
                    e(n[0], n[1]);
                    break;
                  case 3:
                    e(n[0], n[1], n[2]);
                    break;
                  default:
                    e.apply(r, n)
                }
              }(e)
            } finally {
              p(t), u = !1
            }
          }
        }
      }
    }("undefined" == typeof self ? void 0 === t ? this : t : self)
  }).call(this, n(25), n(33))
}, function(t, e) {
  var n, r, o = t.exports = {};

  function i() {
    throw new Error("setTimeout has not been defined")
  }

  function s() {
    throw new Error("clearTimeout has not been defined")
  }

  function a(e) {
    if (n === setTimeout) return setTimeout(e, 0);
    if ((n === i || !n) && setTimeout) return n = setTimeout, setTimeout(e, 0);
    try {
      return n(e, 0)
    } catch (t) {
      try {
        return n.call(null, e, 0)
      } catch (t) {
        return n.call(this, e, 0)
      }
    }
  }! function() {
    try {
      n = "function" == typeof setTimeout ? setTimeout : i
    } catch (t) {
      n = i
    }
    try {
      r = "function" == typeof clearTimeout ? clearTimeout : s
    } catch (t) {
      r = s
    }
  }();
  var c, u = [],
    l = !1,
    f = -1;

  function p() {
    l && c && (l = !1, c.length ? u = c.concat(u) : f = -1, u.length && d())
  }

  function d() {
    if (!l) {
      var t = a(p);
      l = !0;
      for (var e = u.length; e;) {
        for (c = u, u = []; ++f < e;) c && c[f].run();
        f = -1, e = u.length
      }
      c = null, l = !1,
        function(e) {
          if (r === clearTimeout) return clearTimeout(e);
          if ((r === s || !r) && clearTimeout) return r = clearTimeout, clearTimeout(e);
          try {
            r(e)
          } catch (t) {
            try {
              return r.call(null, e)
            } catch (t) {
              return r.call(this, e)
            }
          }
        }(t)
    }
  }

  function h(t, e) {
    this.fun = t, this.array = e
  }

  function v() {}
  o.nextTick = function(t) {
    var e = new Array(arguments.length - 1);
    if (1 < arguments.length)
      for (var n = 1; n < arguments.length; n++) e[n - 1] = arguments[n];
    u.push(new h(t, e)), 1 !== u.length || l || a(d)
  }, h.prototype.run = function() {
    this.fun.apply(null, this.array)
  }, o.title = "browser", o.browser = !0, o.env = {}, o.argv = [], o.version = "", o.versions = {}, o.on = v, o.addListener = v, o.once = v, o.off = v, o.removeListener = v, o.removeAllListeners = v, o.emit = v, o.prependListener = v, o.prependOnceListener = v, o.listeners = function(t) {
    return []
  }, o.binding = function(t) {
    throw new Error("process.binding is not supported")
  }, o.cwd = function() {
    return "/"
  }, o.chdir = function(t) {
    throw new Error("process.chdir is not supported")
  }, o.umask = function() {
    return 0
  }
}, function(t, e) {
  t.exports = function(t) {
    if (Array.isArray(t)) {
      for (var e = 0, n = new Array(t.length); e < t.length; e++) n[e] = t[e];
      return n
    }
  }
}, function(t, e) {
  t.exports = function(t) {
    if (Symbol.iterator in Object(t) || "[object Arguments]" === Object.prototype.toString.call(t)) return Array.from(t)
  }
}, function(t, e) {
  t.exports = function() {
    throw new TypeError("Invalid attempt to spread non-iterable instance")
  }
}, function(t, e, n) {
  "use strict";
  var r = n(18);
  n.n(r).a
}, function(t, e) {}, function(t, e, n) {
  "use strict";
  n.r(e);
  var r = {};
  n.r(r), n.d(r, "is", function() {
    return ze
  }), n.d(r, "isNot", function() {
    return Ne
  }), n.d(r, "empty", function() {
    return He
  }), n.d(r, "contains", function() {
    return Be
  }), n.d(r, "notContains", function() {
    return Fe
  }), n.d(r, "greater", function() {
    return Ue
  }), n.d(r, "less", function() {
    return Ve
  }), n.d(r, "greaterOrEqual", function() {
    return qe
  }), n.d(r, "lessOrEqual", function() {
    return We
  }), n.d(r, "longer", function() {
    return Ge
  }), n.d(r, "shorter", function() {
    return Ye
  });
  var m = {};
  n.r(m), n.d(m, "timeOnWebsite", function() {
    return ln
  }), n.d(m, "timeOnCurrentPage", function() {
    return fn
  }), n.d(m, "currentPageAddress", function() {
    return pn
  }), n.d(m, "anyVisitedPageAddress", function() {
    return dn
  }), n.d(m, "userVisitedAtLeast", function() {
    return hn
  }), n.d(m, "userIsAFirstTimeVisitor", function() {
    return vn
  }), n.d(m, "userReturnedToYourWebsite", function() {
    return mn
  }), n.d(m, "customVariable", function() {
    return gn
  }), n.d(m, "referringWebsiteAddress", function() {
    return _n
  });
  var p = n(5),
    o = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return e("div", {
        attrs: {
          id: "app"
        }
      }, [e("chat")], 1)
    },
    i = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return this.initialized ? e("div", {
        attrs: {
          id: "chat"
        }
      }, [e("transition", {
        attrs: {
          appear: "",
          name: "slide",
          mode: "out-in"
        },
        on: {
          "after-enter": this.afterAnimation
        }
      }, [this.$_opened ? e("chat-window") : e("chat-button")], 1)], 1) : this._e()
    };
  i._withStripped = o._withStripped = !0;
  var s = n(0),
    y = n.n(s),
    a = n(1),
    w = n.n(a),
    c = n(2),
    b = n.n(c);
  var u = "undefined" != typeof window && window.__VUE_DEVTOOLS_GLOBAL_HOOK__;

  function l(e, n) {
    Object.keys(e).forEach(function(t) {
      return n(e[t], t)
    })
  }
  var f = function(t, e) {
      this.runtime = e, this._children = Object.create(null);
      var n = (this._rawModule = t).state;
      this.state = ("function" == typeof n ? n() : n) || {}
    },
    d = {
      namespaced: {
        configurable: !0
      }
    };
  d.namespaced.get = function() {
    return !!this._rawModule.namespaced
  }, f.prototype.addChild = function(t, e) {
    this._children[t] = e
  }, f.prototype.removeChild = function(t) {
    delete this._children[t]
  }, f.prototype.getChild = function(t) {
    return this._children[t]
  }, f.prototype.update = function(t) {
    this._rawModule.namespaced = t.namespaced, t.actions && (this._rawModule.actions = t.actions), t.mutations && (this._rawModule.mutations = t.mutations), t.getters && (this._rawModule.getters = t.getters)
  }, f.prototype.forEachChild = function(t) {
    l(this._children, t)
  }, f.prototype.forEachGetter = function(t) {
    this._rawModule.getters && l(this._rawModule.getters, t)
  }, f.prototype.forEachAction = function(t) {
    this._rawModule.actions && l(this._rawModule.actions, t)
  }, f.prototype.forEachMutation = function(t) {
    this._rawModule.mutations && l(this._rawModule.mutations, t)
  }, Object.defineProperties(f.prototype, d);
  var h = function(t) {
    this.register([], t, !1)
  };
  h.prototype.get = function(t) {
    return t.reduce(function(t, e) {
      return t.getChild(e)
    }, this.root)
  }, h.prototype.getNamespace = function(t) {
    var n = this.root;
    return t.reduce(function(t, e) {
      return t + ((n = n.getChild(e)).namespaced ? e + "/" : "")
    }, "")
  }, h.prototype.update = function(t) {
    ! function t(e, n, r) {
      0;
      n.update(r);
      if (r.modules)
        for (var o in r.modules) {
          if (!n.getChild(o)) return void 0;
          t(e.concat(o), n.getChild(o), r.modules[o])
        }
    }([], this.root, t)
  }, h.prototype.register = function(n, t, r) {
    var o = this;
    void 0 === r && (r = !0);
    var e = new f(t, r);
    0 === n.length ? this.root = e : this.get(n.slice(0, -1)).addChild(n[n.length - 1], e);
    t.modules && l(t.modules, function(t, e) {
      o.register(n.concat(e), t, r)
    })
  }, h.prototype.unregister = function(t) {
    var e = this.get(t.slice(0, -1)),
      n = t[t.length - 1];
    e.getChild(n).runtime && e.removeChild(n)
  };
  var v;
  var g = function(t) {
      var e = this;
      void 0 === t && (t = {}), !v && "undefined" != typeof window && window.Vue && O(window.Vue);
      var n = t.plugins;
      void 0 === n && (n = []);
      var r = t.strict;
      void 0 === r && (r = !1), this._committing = !1, this._actions = Object.create(null), this._actionSubscribers = [], this._mutations = Object.create(null), this._wrappedGetters = Object.create(null), this._modules = new h(t), this._modulesNamespaceMap = Object.create(null), this._subscribers = [], this._watcherVM = new v;
      var o = this,
        i = this.dispatch,
        s = this.commit;
      this.dispatch = function(t, e) {
        return i.call(o, t, e)
      }, this.commit = function(t, e, n) {
        return s.call(o, t, e, n)
      }, this.strict = r;
      var a, c = this._modules.root.state;
      C(this, c, [], this._modules.root), k(this, c), n.forEach(function(t) {
        return t(e)
      }), (void 0 !== t.devtools ? t.devtools : v.config.devtools) && (a = this, u && ((a._devtoolHook = u).emit("vuex:init", a), u.on("vuex:travel-to-state", function(t) {
        a.replaceState(t)
      }), a.subscribe(function(t, e) {
        u.emit("vuex:mutation", t, e)
      })))
    },
    _ = {
      state: {
        configurable: !0
      }
    };

  function $(e, n) {
    return n.indexOf(e) < 0 && n.push(e),
      function() {
        var t = n.indexOf(e); - 1 < t && n.splice(t, 1)
      }
  }

  function x(t, e) {
    t._actions = Object.create(null), t._mutations = Object.create(null), t._wrappedGetters = Object.create(null), t._modulesNamespaceMap = Object.create(null);
    var n = t.state;
    C(t, n, [], t._modules.root, !0), k(t, n, e)
  }

  function k(n, t, e) {
    var r = n._vm;
    n.getters = {};
    var o = n._wrappedGetters,
      i = {};
    l(o, function(t, e) {
      i[e] = function() {
        return t(n)
      }, Object.defineProperty(n.getters, e, {
        get: function() {
          return n._vm[e]
        },
        enumerable: !0
      })
    });
    var s = v.config.silent;
    v.config.silent = !0, n._vm = new v({
      data: {
        $$state: t
      },
      computed: i
    }), v.config.silent = s, n.strict && n._vm.$watch(function() {
      return this._data.$$state
    }, function() {}, {
      deep: !0,
      sync: !0
    }), r && (e && n._withCommit(function() {
      r._data.$$state = null
    }), v.nextTick(function() {
      return r.$destroy()
    }))
  }

  function C(c, n, r, t, o) {
    var e = !r.length,
      u = c._modules.getNamespace(r);
    if (t.namespaced && (c._modulesNamespaceMap[u] = t), !e && !o) {
      var i = S(n, r.slice(0, -1)),
        s = r[r.length - 1];
      c._withCommit(function() {
        v.set(i, s, t.state)
      })
    }
    var a, l, f, p, d, h = t.context = (a = c, f = r, d = {
      dispatch: (p = "" === (l = u)) ? a.dispatch : function(t, e, n) {
        var r = E(t, e, n),
          o = r.payload,
          i = r.options,
          s = r.type;
        return i && i.root || (s = l + s), a.dispatch(s, o)
      },
      commit: p ? a.commit : function(t, e, n) {
        var r = E(t, e, n),
          o = r.payload,
          i = r.options,
          s = r.type;
        i && i.root || (s = l + s), a.commit(s, o, i)
      }
    }, Object.defineProperties(d, {
      getters: {
        get: p ? function() {
          return a.getters
        } : function() {
          return n = a, o = {}, i = (r = l).length, Object.keys(n.getters).forEach(function(t) {
            if (t.slice(0, i) === r) {
              var e = t.slice(i);
              Object.defineProperty(o, e, {
                get: function() {
                  return n.getters[t]
                },
                enumerable: !0
              })
            }
          }), o;
          var n, r, o, i
        }
      },
      state: {
        get: function() {
          return S(a.state, f)
        }
      }
    }), d);
    t.forEachMutation(function(t, e) {
      var n, r, o, i;
      r = u + e, o = t, i = h, ((n = c)._mutations[r] || (n._mutations[r] = [])).push(function(t) {
        o.call(n, i.state, t)
      })
    }), t.forEachAction(function(t, e) {
      var o, n, i, s, r = t.root ? e : u + e,
        a = t.handler || t;
      n = r, i = a, s = h, ((o = c)._actions[n] || (o._actions[n] = [])).push(function(t, e) {
        var n, r = i.call(o, {
          dispatch: s.dispatch,
          commit: s.commit,
          getters: s.getters,
          state: s.state,
          rootGetters: o.getters,
          rootState: o.state
        }, t, e);
        return (n = r) && "function" == typeof n.then || (r = Promise.resolve(r)), o._devtoolHook ? r.catch(function(t) {
          throw o._devtoolHook.emit("vuex:error", t), t
        }) : r
      })
    }), t.forEachGetter(function(t, e) {
      ! function(t, e, n, r) {
        if (t._wrappedGetters[e]) return;
        t._wrappedGetters[e] = function(t) {
          return n(r.state, r.getters, t.state, t.getters)
        }
      }(c, u + e, t, h)
    }), t.forEachChild(function(t, e) {
      C(c, n, r.concat(e), t, o)
    })
  }

  function S(t, e) {
    return e.length ? e.reduce(function(t, e) {
      return t[e]
    }, t) : t
  }

  function E(t, e, n) {
    var r;
    return null !== (r = t) && "object" == typeof r && t.type && (n = e, t = (e = t).type), {
      type: t,
      payload: e,
      options: n
    }
  }

  function O(t) {
    v && t === v || function(t) {
      if (2 <= Number(t.version.split(".")[0])) t.mixin({
        beforeCreate: n
      });
      else {
        var e = t.prototype._init;
        t.prototype._init = function(t) {
          void 0 === t && (t = {}), t.init = t.init ? [n].concat(t.init) : n, e.call(this, t)
        }
      }

      function n() {
        var t = this.$options;
        t.store ? this.$store = "function" == typeof t.store ? t.store() : t.store : t.parent && t.parent.$store && (this.$store = t.parent.$store)
      }
    }(v = t)
  }
  _.state.get = function() {
    return this._vm._data.$$state
  }, _.state.set = function(t) {
    0
  }, g.prototype.commit = function(t, e, n) {
    var r = this,
      o = E(t, e, n),
      i = o.type,
      s = o.payload,
      a = (o.options, {
        type: i,
        payload: s
      }),
      c = this._mutations[i];
    c && (this._withCommit(function() {
      c.forEach(function(t) {
        t(s)
      })
    }), this._subscribers.forEach(function(t) {
      return t(a, r.state)
    }))
  }, g.prototype.dispatch = function(t, e) {
    var n = this,
      r = E(t, e),
      o = r.type,
      i = r.payload,
      s = {
        type: o,
        payload: i
      },
      a = this._actions[o];
    if (a) {
      try {
        this._actionSubscribers.filter(function(t) {
          return t.before
        }).forEach(function(t) {
          return t.before(s, n.state)
        })
      } catch (t) {
        0
      }
      return (1 < a.length ? Promise.all(a.map(function(t) {
        return t(i)
      })) : a[0](i)).then(function(t) {
        try {
          n._actionSubscribers.filter(function(t) {
            return t.after
          }).forEach(function(t) {
            return t.after(s, n.state)
          })
        } catch (t) {
          0
        }
        return t
      })
    }
  }, g.prototype.subscribe = function(t) {
    return $(t, this._subscribers)
  }, g.prototype.subscribeAction = function(t) {
    return $("function" == typeof t ? {
      before: t
    } : t, this._actionSubscribers)
  }, g.prototype.watch = function(t, e, n) {
    var r = this;
    return this._watcherVM.$watch(function() {
      return t(r.state, r.getters)
    }, e, n)
  }, g.prototype.replaceState = function(t) {
    var e = this;
    this._withCommit(function() {
      e._vm._data.$$state = t
    })
  }, g.prototype.registerModule = function(t, e, n) {
    void 0 === n && (n = {}), "string" == typeof t && (t = [t]), this._modules.register(t, e), C(this, this.state, t, this._modules.get(t), n.preserveState), k(this, this.state)
  }, g.prototype.unregisterModule = function(e) {
    var n = this;
    "string" == typeof e && (e = [e]), this._modules.unregister(e), this._withCommit(function() {
      var t = S(n.state, e.slice(0, -1));
      v.delete(t, e[e.length - 1])
    }), x(this)
  }, g.prototype.hotUpdate = function(t) {
    this._modules.update(t), x(this, !0)
  }, g.prototype._withCommit = function(t) {
    var e = this._committing;
    this._committing = !0, t(), this._committing = e
  }, Object.defineProperties(g.prototype, _);
  var T = L(function(o, t) {
      var n = {};
      return P(t).forEach(function(t) {
        var e = t.key,
          r = t.val;
        n[e] = function() {
          var t = this.$store.state,
            e = this.$store.getters;
          if (o) {
            var n = M(this.$store, "mapState", o);
            if (!n) return;
            t = n.context.state, e = n.context.getters
          }
          return "function" == typeof r ? r.call(this, t, e) : t[r]
        }, n[e].vuex = !0
      }), n
    }),
    A = L(function(i, t) {
      var n = {};
      return P(t).forEach(function(t) {
        var e = t.key,
          o = t.val;
        n[e] = function() {
          for (var t = [], e = arguments.length; e--;) t[e] = arguments[e];
          var n = this.$store.commit;
          if (i) {
            var r = M(this.$store, "mapMutations", i);
            if (!r) return;
            n = r.context.commit
          }
          return "function" == typeof o ? o.apply(this, [n].concat(t)) : n.apply(this.$store, [o].concat(t))
        }
      }), n
    }),
    j = L(function(r, t) {
      var o = {};
      return P(t).forEach(function(t) {
        var e = t.key,
          n = t.val;
        n = r + n, o[e] = function() {
          if (!r || M(this.$store, "mapGetters", r)) return this.$store.getters[n]
        }, o[e].vuex = !0
      }), o
    }),
    I = L(function(i, t) {
      var n = {};
      return P(t).forEach(function(t) {
        var e = t.key,
          o = t.val;
        n[e] = function() {
          for (var t = [], e = arguments.length; e--;) t[e] = arguments[e];
          var n = this.$store.dispatch;
          if (i) {
            var r = M(this.$store, "mapActions", i);
            if (!r) return;
            n = r.context.dispatch
          }
          return "function" == typeof o ? o.apply(this, [n].concat(t)) : n.apply(this.$store, [o].concat(t))
        }
      }), n
    });

  function P(e) {
    return Array.isArray(e) ? e.map(function(t) {
      return {
        key: t,
        val: t
      }
    }) : Object.keys(e).map(function(t) {
      return {
        key: t,
        val: e[t]
      }
    })
  }

  function L(n) {
    return function(t, e) {
      return "string" != typeof t ? (e = t, t = "") : "/" !== t.charAt(t.length - 1) && (t += "/"), n(t, e)
    }
  }

  function M(t, e, n) {
    return t._modulesNamespaceMap[n]
  }
  var D = {
      Store: g,
      install: O,
      version: "3.1.0",
      mapState: T,
      mapMutations: A,
      mapGetters: j,
      mapActions: I,
      createNamespacedHelpers: function(t) {
        return {
          mapState: T.bind(null, t),
          mapGetters: j.bind(null, t),
          mapMutations: A.bind(null, t),
          mapActions: I.bind(null, t)
        }
      }
    },
    R = {
      computed: b()({}, T({
        $_opened: function(t) {
          return t.$_session.opened
        }
      }), j(["$_conversationInitialized"])),
      methods: b()({}, I(["$_initializeSessionState", "$_initializeState"]))
    },
    z = {
      computed: b()({}, T({
        $_chatButton: function(t) {
          return t.configuration.chatButton
        }
      }))
    },
    N = {
      computed: b()({}, T({
        $_greeting: function(t) {
          return t.greeting
        }
      }), j(["$_theme"])),
      methods: b()({}, I(["$_openChat"]))
    },
    H = {
      computed: b()({}, j(["$_theme"]))
    },
    B = {
      computed: b()({}, T({
        $_greeting: function(t) {
          return t.greeting
        }
      }), j(["$_theme"])),
      methods: b()({}, I(["$_openChat"]))
    },
    F = {
      computed: b()({}, T({
        $_session: function(t) {
          return t.$_session
        },
        $_greeting: function(t) {
          return t.greeting
        },
        $_greetings: function(t) {
          return t.configuration.greetings || []
        }
      }), j(["$_conversationInitialized"])),
      methods: b()({}, A(["$_setGreeting"]), I(["$_openChat"]))
    },
    U = {
      computed: b()({}, T({
        $_configuration: function(t) {
          return t.configuration
        },
        $_moment: function(t) {
          return t.moment
        },
        $_online: function(t) {
          return t.online
        }
      }), j(["$_conversationInitialized", "$_theme", "$_mobile"])),
      methods: b()({}, I(["$_triggerChat"]))
    },
    V = {
      computed: b()({}, T({
        $_headerHeight: function(t) {
          return t.headerHeight
        }
      }), j(["$_chatEnded"]))
    },
    q = {
      computed: b()({}, j(["$_theme"])),
      methods: b()({}, I(["$_closeChat"]))
    },
    W = {
      computed: b()({}, j(["$_theme", "$_avatar"]), T({
        $_waiting: function(t) {
          return t.waiting
        },
        $_configuration: function(t) {
          return t.configuration
        }
      })),
      methods: b()({}, I(["$_triggerChat"]), A(["$_setConversationStarted"]))
    },
    G = {
      computed: b()({}, T({
        $_conversation: function(t) {
          return t.$_session.conversation
        },
        $_configuration: function(t) {
          return t.configuration
        },
        $_headerHeight: function(t) {
          return t.headerHeight
        },
        $_scrollTop: function(t) {
          return t.scrollTop
        }
      }), j(["$_theme", "$_avatar", "$_mobile"])),
      methods: b()({}, A(["$_setHeaderHeight"]))
    },
    Y = {
      computed: b()({}, T({
        $_waiting: function(t) {
          return t.waiting
        },
        $_online: function(t) {
          return t.online
        },
        $_message: function(t) {
          return t.$_session.message
        }
      }), j(["$_theme", "$_mobile"])),
      methods: b()({}, A(["$_setInputFocused", "$_setMessage"]), I(["$_chat"]))
    },
    X = {
      computed: b()({}, j(["$_theme", "$_mobile"])),
      methods: b()({}, I(["$_responseButton"]))
    },
    J = {
      computed: b()({}, T({
        $_executedButtons: function(t) {
          return t.$_session.executedButtons
        }
      }), j(["$_theme"])),
      methods: b()({}, I(["$_responseButton"]))
    },
    K = {
      computed: b()({}, T({
        $_sending: function(t) {
          return t.sending
        }
      }))
    },
    Q = {
      computed: b()({}, T({
        $_conversation: function(t) {
          return t.$_session.conversation
        },
        $_replies: function(t) {
          return t.$_session.replies
        },
        $_inputFocused: function(t) {
          return t.inputFocused
        },
        $_waiting: function(t) {
          return t.waiting
        },
        $_headerHeight: function(t) {
          return t.headerHeight
        },
        $_sending: function(t) {
          return t.sending
        },
        $_indicator: function(t) {
          return t.indicator
        }
      }), j(["$_theme", "$_mobile"])),
      methods: b()({}, A(["$_setScrollTop"]))
    },
    Z = {
      methods: b()({}, A(["$_openUrl"]))
    },
    tt = {
      computed: b()({}, T({
        $_moment: function(t) {
          return t.moment
        }
      }), j(["$_mobile"])),
      methods: b()({}, I(["$_closeMoment", "$_onMomentLoad", "$_chat"]), A(["$_setSessionAttributes"]))
    },
    et = {
      computed: b()({}, j(["$_avatar"]))
    },
    nt = {
      computed: b()({}, T({
        $_online: function(t) {
          return t.online
        }
      })),
      methods: b()({}, A(["$_setOnline"]))
    },
    rt = {
      computed: b()({}, j(["$_theme", "$_avatar"]))
    },
    ot = {
      computed: b()({}, j(["$_theme"])),
      methods: b()({}, I(["$_triggerChat"]), A(["$_startChatAgain"]))
    },
    it = {
      computed: b()({}, T({
        $_replies: function(t) {
          return t.$_session.replies
        }
      }))
    },
    st = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return "bar" === this.$_chatButton.theme ? e("theme-bar", {
        attrs: {
          text: this.$_chatButton.text
        }
      }) : "bubble" === this.$_chatButton.theme ? e("theme-bubble") : this._e()
    },
    at = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return e("div", {
        staticClass: "chat-button-theme-bar"
      }, [e("button-greeting"), this._v(" "), e("div", {
        staticClass: "chat-button",
        style: this.style.button,
        on: {
          click: this.$_openChat
        }
      }, [e("span", [this._v(this._s(this.text))])])], 1)
    },
    ct = function() {
      var t = this,
        e = t.$createElement,
        n = t._self._c || e;
      return n("transition", {
        attrs: {
          name: "greeting",
          appear: ""
        }
      }, [t.$_greeting ? n("div", {
        staticClass: "button-greeting"
      }, [n("div", {
        staticClass: "button-greeting-close",
        on: {
          click: t.closeGreeting
        }
      }, [n("close-icon")], 1), t._v(" "), n("div", {
        staticClass: "button-greeting-content-wrapper",
        on: {
          click: t.onGreetingClick
        }
      }, [n("div", {
        staticClass: "button-greeting-content"
      }, [
        [t._v(t._s(t.$_greeting))]
      ], 2)])]) : t._e()])
    };
  ct._withStripped = at._withStripped = st._withStripped = !0;
  var ut, lt, ft, pt, dt, ht, vt, mt, gt, _t = n(9),
    yt = n.n(_t),
    wt = function(t, e) {
      return t.catch(function() {
        throw e
      })
    },
    bt = function() {
      return +new Date
    },
    $t = function(t) {
      return 1e3 * t
    },
    xt = function() {
      var e = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : 0;
      return new Promise(function(t) {
        return setTimeout(t, e)
      })
    },
    kt = function() {
      var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : "test";
      try {
        return localStorage.setItem(t, t), localStorage.removeItem(t), !0
      } catch (t) {
        return !1
      }
    }(),
    Ct = function(t, e) {
      kt && localStorage.setItem(t, JSON.stringify(e))
    },
    St = function(t) {
      if (kt) {
        var e = localStorage[t];
        try {
          return JSON.parse(e)
        } catch (t) {
          return e
        }
      }
    },
    Et = function(t) {
      var e = "&".concat(location.search.substr(1)).split("&".concat(t, "="));
      return 2 === e.length ? decodeURIComponent(e.pop().split("&").shift()) : void 0
    },
    Ot = Et("id"),
    Tt = Et("branding"),
    At = "cb.visitor.".concat(Ot),
    jt = [422],
    It = function(t) {
      return 200 <= t && t <= 302
    },
    Pt = function(t, e) {
      return Object.assign(new Error(t || "Internal Server Error"), {
        code: e
      })
    },
    Lt = (ut = w()(y.a.mark(function t(n, e) {
      var r, o;
      return y.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            return r = e.retries, o = function() {
              var t = w()(y.a.mark(function t() {
                var e;
                return y.a.wrap(function(t) {
                  for (;;) switch (t.prev = t.next) {
                    case 0:
                      return t.next = 2, n();
                    case 2:
                      if (!((e = t.sent) instanceof Error)) {
                        t.next = 10;
                        break
                      }
                      if (e.code && jt.includes(e.code)) return t.abrupt("return", e);
                      t.next = 6;
                      break;
                    case 6:
                      if (0 < --r) return t.next = 9, xt(800);
                      t.next = 10;
                      break;
                    case 9:
                      return t.abrupt("return", o());
                    case 10:
                      return t.abrupt("return", e);
                    case 11:
                    case "end":
                      return t.stop()
                  }
                }, t, this)
              }));
              return function() {
                return t.apply(this, arguments)
              }
            }(), t.abrupt("return", o());
          case 3:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function(t, e) {
      return ut.apply(this, arguments)
    }),
    Mt = (lt = w()(y.a.mark(function t(e) {
      var n, r, o, i;
      return y.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            return t.prev = 0, t.next = 3, p.a.http.get(e);
          case 3:
            return n = t.sent, r = n.data, o = n.status, i = n.statusText, t.abrupt("return", It(o) ? r : Pt(i, o));
          case 10:
            return t.prev = 10, t.t0 = t.catch(0), t.abrupt("return", Pt(t.t0.statusText || t.t0.message, t.t0.status));
          case 13:
          case "end":
            return t.stop()
        }
      }, t, this, [
        [0, 10]
      ])
    })), function(t) {
      return lt.apply(this, arguments)
    }),
    Dt = (ft = w()(y.a.mark(function t(e, n, r) {
      var o, i, s, a, c, u, l, f;
      return y.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            if (o = Pe && Pe.$_session && Pe.$_session.token, i = {}, o && (i.headers = {
                Authorization: "Bearer ".concat(o)
              }), t.prev = 3, ["post", "put", "patch"].includes(e)) return t.next = 7, p.a.http[e](n, r, i);
            t.next = 10;
            break;
          case 7:
            t.t0 = t.sent, t.next = 13;
            break;
          case 10:
            return t.next = 12, p.a.http[e](n, Object.assign(i, r));
          case 12:
            t.t0 = t.sent;
          case 13:
            if (s = t.t0, a = s.data, c = s.status, u = s.statusText, a.status = a.status || {}, l = a.status.code || c, It(l)) {
              t.next = 21;
              break
            }
            return t.abrupt("return", Pt(a.status.details || u, l));
          case 21:
            return delete a.status, t.abrupt("return", a);
          case 25:
            return t.prev = 25, t.t1 = t.catch(3), f = t.t1.body && t.t1.body.status && t.t1.body.status.details, t.abrupt("return", Pt(f || t.t1.statusText || t.t1.message, t.t1.status));
          case 29:
          case "end":
            return t.stop()
        }
      }, t, this, [
        [3, 25]
      ])
    })), function(t, e, n) {
      return ft.apply(this, arguments)
    }),
    Rt = (pt = w()(y.a.mark(function t(e, n, r) {
      var o, i, s;
      return y.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            return t.next = 2, Lt(function() {
              return Ie("$_authorization")
            }, {
              retries: 3
            });
          case 2:
            if ((o = t.sent) instanceof Error) return t.abrupt("return", o);
            t.next = 5;
            break;
          case 5:
            return i = function() {
              return Dt(e, n, r)
            }, t.next = 8, i();
          case 8:
            if (!((s = t.sent) instanceof Error)) {
              t.next = 20;
              break
            }
            if (jt.includes(s.code)) return t.abrupt("return", s);
            t.next = 12;
            break;
          case 12:
            if (401 === s.code) return t.next = 15, Ie("$_authorization", {
              forceRefresh: !0
            });
            t.next = 18;
            break;
          case 15:
            if (t.sent instanceof Error) return t.abrupt("return", s);
            t.next = 18;
            break;
          case 18:
            t.next = 21;
            break;
          case 20:
            return t.abrupt("return", s);
          case 21:
            return t.next = 23, xt(800);
          case 23:
            return t.next = 25, Lt(i, {
              retries: 2
            });
          case 25:
            return t.abrupt("return", t.sent);
          case 26:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function(t, e, n) {
      return pt.apply(this, arguments)
    }),
    zt = {
      install: function(t) {
        t.prototype.$fetch = Mt, t.prototype.$request = Rt, t.prototype.$authorize = Dt
      }
    },
    Nt = n(10),
    Ht = n.n(Nt),
    Bt = n(12),
    Ft = n.n(Bt),
    Ut = n(7),
    Vt = n(3),
    qt = n(11),
    Wt = window === window.parent,
    Gt = n(8),
    Yt = n(13),
    Xt = function(t) {
      return Ht()({}, Yt.a, 401 === t.code ? "Unauthorized" : t.message)
    },
    Jt = {
      toggleChat: function(t) {
        Ie(t ? "$_openChat" : "$_closeChat")
      },
      showGreeting: function(t) {
        je("$_setGreeting", t)
      },
      hideGreeting: function() {
        je("$_setGreeting")
      },
      openMoment: function(t, e) {
        Ie("$_openMoment", {
          url: t,
          height: e
        })
      },
      closeMoment: function() {
        Ie("$_closeMoment")
      },
      resetSession: function() {
        je("$_resetSession")
      },
      endChat: function() {
        Le.$_conversationInitialized && je("$_endChat")
      },
      sendMessage: function(t) {
        var e = t.message,
          n = t.postback;
        Ie("$_chat", {
          message: e,
          postback: n
        })
      },
      triggerChat: function(t) {
        Ie("$_triggerChat", t)
      },
      setSessionAttributes: (vt = w()(y.a.mark(function t(e) {
        var n, r;
        return y.a.wrap(function(t) {
          for (;;) switch (t.prev = t.next) {
            case 0:
              if (Le.$_chatEnded) return t.abrupt("return", !1);
              t.next = 2;
              break;
            case 2:
              if (Le.$_conversationInitialized) {
                t.next = 5;
                break
              }
              return je("$_setSessionAttributes", e), t.abrupt("return", !0);
            case 5:
              return n = Pe.$_session.sessionId, t.next = 8, Rt("patch", "chat/me", {
                sessionId: n,
                attributes: e
              });
            case 8:
              if (!((r = t.sent) instanceof Error)) {
                t.next = 14;
                break
              }
              if (411 === r.code) return je("$_setSessionAttributes", e), t.abrupt("return", !0);
              t.next = 13;
              break;
            case 13:
              return t.abrupt("return", Xt(r));
            case 14:
              return je("$_extendExpirationTime"), Ie("$_setExpirationTimer"), t.abrupt("return", !0);
            case 17:
            case "end":
              return t.stop()
          }
        }, t, this)
      })), function(t) {
        return vt.apply(this, arguments)
      }),
      getUserData: (ht = w()(y.a.mark(function t() {
        var e;
        return y.a.wrap(function(t) {
          for (;;) switch (t.prev = t.next) {
            case 0:
              return t.next = 2, Rt("get", "chat/me");
            case 2:
              if ((e = t.sent) instanceof Error) return t.abrupt("return", Xt(e));
              t.next = 5;
              break;
            case 5:
              return t.abrupt("return", e);
            case 6:
            case "end":
              return t.stop()
          }
        }, t, this)
      })), function() {
        return ht.apply(this, arguments)
      }),
      updateUser: (dt = w()(y.a.mark(function t(e) {
        var n;
        return y.a.wrap(function(t) {
          for (;;) switch (t.prev = t.next) {
            case 0:
              return t.next = 2, Rt("put", "chat/me", e);
            case 2:
              if ((n = t.sent) instanceof Error) return t.abrupt("return", Xt(n));
              t.next = 5;
              break;
            case 5:
              return t.abrupt("return", !0);
            case 6:
            case "end":
              return t.stop()
          }
        }, t, this)
      })), function(t) {
        return dt.apply(this, arguments)
      })
    },
    Kt = (gt = w()(y.a.mark(function t() {
      return y.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            if (Wt) return mt = new Proxy({}, {
              get: function() {
                return Gt.a
              }
            }), t.abrupt("return", !0);
            t.next = 3;
            break;
          case 3:
            return t.prev = 3, t.next = 6, Object(qt.a)(Jt).promise;
          case 6:
            mt = t.sent, t.next = 12;
            break;
          case 9:
            return t.prev = 9, t.t0 = t.catch(3), t.abrupt("return", !1);
          case 12:
            return t.abrupt("return", !0);
          case 13:
          case "end":
            return t.stop()
        }
      }, t, this, [
        [3, 9]
      ])
    })), function() {
      return gt.apply(this, arguments)
    }),
    Qt = n(15),
    Zt = n(16),
    te = function(t) {
      var e = t.minutes,
        n = t.seconds,
        r = new Date;
      return e && r.setMinutes(r.getMinutes() + e), n && r.setSeconds(r.getSeconds() + n), r.getTime()
    },
    ee = n(19),
    ne = n.n(ee),
    re = n(20),
    oe = n.n(re),
    ie = n(17),
    se = n.n(ie),
    ae = n(29),
    ce = /^(\w+)/g.exec(navigator.language) || [],
    ue = se()(ce, 1)[0],
    le = ae[ue] ? ue : "en",
    fe = ae[le],
    pe = !(!window.Intl || !Intl.DateTimeFormat),
    de = function() {
      function t() {
        ne()(this, t)
      }
      return oe()(t, null, [{
        key: "getNowDate",
        value: function() {
          return new Date
        }
      }, {
        key: "getYesterdayDate",
        value: function() {
          return (t = new Date).setDate(t.getDate() - 1) && t;
          var t
        }
      }, {
        key: "isCurrentYear",
        value: function(t, e) {
          return t.getFullYear() === e.getFullYear()
        }
      }, {
        key: "compareDays",
        value: function(t, e) {
          return t.toDateString() === e.toDateString()
        }
      }, {
        key: "getTime",
        value: function(t) {
          if (pe) return new Intl.DateTimeFormat(le, {
            hour: "numeric",
            minute: "numeric"
          }).format(t);
          var e, n = t.getHours() % 12 || 12,
            r = (e = t.getMinutes()) < 10 ? "0" + e : e;
          return "".concat(n, ":").concat(r, " ").concat(12 <= n ? "PM" : "AM")
        }
      }, {
        key: "getDate",
        value: function(t) {
          var e = this.isCurrentYear(t, this.getNowDate());
          if (pe) return new Intl.DateTimeFormat(le, {
            day: "numeric",
            month: "short",
            year: e ? void 0 : "numeric"
          }).format(t);
          var n = t.getDate(),
            r = t.getMonth(),
            o = e ? "" : " ".concat(t.getFullYear());
          return "".concat(n, " ").concat(r).concat(o)
        }
      }, {
        key: "parse",
        value: function(t) {
          t = new Date(t);
          var e = this.getTime(t);
          return this.compareDays(t, this.getNowDate()) ? "".concat(fe.today, " ").concat(e) : this.compareDays(t, this.getYesterdayDate()) ? "".concat(fe.yesterday, " ").concat(e) : "".concat(this.getDate(), " ").concat(e)
        }
      }]), t
    }(),
    he = function() {
      return de.parse.apply(de, arguments)
    },
    ve = n(6),
    me = n.n(ve),
    ge = function() {
      function n(t, e) {
        ne()(this, n), this.sessionFactory = t, this.lifetimeParams = e, this.state = null, this.expirationTimer = null
      }
      return oe()(n, [{
        key: "_getFreshState",
        value: function() {
          return this.state = this.sessionFactory(), this.state
        }
      }, {
        key: "isSessionExpired",
        value: function(t) {
          return "number" != typeof t ? kt : t - +new Date <= 0
        }
      }, {
        key: "getSessionExpirationTime",
        value: function() {
          return te({
            minutes: 30
          })
        }
      }, {
        key: "resetSession",
        value: function() {
          var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : [],
            e = this._getFreshState(),
            n = St(At),
            r = [].concat(Ft()(this.lifetimeParams), Ft()(t));
          if ("object" === me()(n)) {
            var o = !0,
              i = !1,
              s = void 0;
            try {
              for (var a, c = r[Symbol.iterator](); !(o = (a = c.next()).done); o = !0) {
                var u = a.value;
                n.hasOwnProperty(u) && (e[u] = n[u])
              }
            } catch (t) {
              i = !0, s = t
            } finally {
              try {
                o || null == c.return || c.return()
              } finally {
                if (i) throw s
              }
            }
          }
          return Ct(At, e), e
        }
      }, {
        key: "restoreSession",
        value: function() {
          var t = this._getFreshState(),
            e = St(At);
          if ("object" === me()(e)) {
            if (this.isSessionExpired(e.sessionExpiresAt)) return this.resetSession();
            for (var n = Object.keys(t), r = 0; r < n.length; r++) {
              var o = n[r];
              e.hasOwnProperty(o) && (t[o] = e[o])
            }
          }
          return Ct(At, t), t
        }
      }, {
        key: "updateSession",
        value: function() {
          Ct(At, this.state)
        }
      }, {
        key: "clearExpirationTimer",
        value: function() {
          clearTimeout(this.expirationTimer)
        }
      }, {
        key: "setExpirationTimer",
        value: function(t, e) {
          if (!this.isSessionExpired(t)) {
            this.clearExpirationTimer();
            var n = t - bt();
            this.expirationTimer = setTimeout(e, n)
          }
        }
      }]), n
    }(),
    _e = n(14),
    ye = {
      text: "response-text",
      quickReplies: "response-quick-replies",
      image: "response-image",
      cards: "response-cards",
      card: "response-card",
      button: "response-button",
      user: "response-user",
      sending: "response-sending"
    };
  Ot || Object(Vt.a)("Incorrect ID");
  var we, be, $e, xe, ke, Ce, Se, Ee, Oe = new ge(function() {
      return {
        conversationStarted: !1,
        conversation: [],
        executedButtons: {},
        replies: [],
        opened: !1,
        message: "",
        customParameters: {},
        websiteTime: bt(),
        pageTime: bt(),
        sessionExpiresAt: Oe.getSessionExpirationTime(),
        sessionId: Math.random().toString(10),
        lastVisit: null,
        visitedPages: [],
        userId: null,
        token: null,
        tokenExpiresAt: null
      }
    }, ["lastVisit", "visitedPages", "userId", "token", "tokenExpiresAt"]),
    Te = {
      namespaced: !0,
      state: {
        $_session: Oe.restoreSession(),
        waiting: !1,
        online: !0,
        inputFocused: !1,
        configuration: {},
        greeting: "",
        headerHeight: 60,
        scrollTop: 0,
        moment: {
          url: null,
          height: null
        },
        indicator: !1,
        sending: {
          message: "",
          error: !1
        }
      },
      mutations: {
        $_setConfiguration: function(t, e) {
          "false" === Tt && (e.whiteLabel = !1), t.configuration = e
        },
        $_setWaiting: function(t, e) {
          t.waiting = e
        },
        $_setInputFocused: function(t, e) {
          t.inputFocused = e
        },
        $_setHeaderHeight: function(t, e) {
          t.headerHeight = e
        },
        $_setScrollTop: function(t, e) {
          t.scrollTop = e
        },
        $_setOnline: function(t, e) {
          t.online = e
        },
        $_setMoment: function(t, e) {
          t.moment = e
        },
        $_setGreeting: function(t) {
          var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : "";
          t.greeting = e
        },
        $_openUrl: function(t, e) {
          Wt ? Object(Qt.a)(e) : mt.call("openUrl", e)
        },
        $_setSending: function(t) {
          var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {},
            n = e.message,
            r = void 0 === n ? "" : n,
            o = e.error,
            i = void 0 !== o && o;
          t.sending = {
            message: r,
            error: i
          }
        },
        $_setIndicator: function(t, e) {
          t.indicator = e
        },
        $_extendExpirationTime: function(t) {
          t.$_session.sessionExpiresAt = Oe.getSessionExpirationTime(), Oe.updateSession()
        },
        $_resetSession: function(t) {
          t.$_session = Oe.resetSession()
        },
        $_startChatAgain: function(t) {
          t.$_session = Oe.resetSession(["opened"]), Oe.updateSession()
        },
        $_setConversation: function(t, e) {
          t.$_session.conversation = e, Oe.updateSession()
        },
        $_setReplies: function(t) {
          var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : [];
          t.$_session.replies !== e && (t.$_session.replies = e, Oe.updateSession())
        },
        $_setMessage: function(t, e) {
          t.$_session.message = e, Oe.updateSession()
        },
        $_setSessionAttributes: function(t, e) {
          t.$_session.customParameters = e, Oe.updateSession()
        },
        $_setOpened: function(t, e) {
          t.$_session.opened = e, Oe.updateSession()
        },
        $_setLastVisit: function(t) {
          t.$_session.lastVisit = bt(), Oe.updateSession()
        },
        $_setVisitedPages: function(t, e) {
          t.$_session.visitedPages.slice(-1)[0] !== e && (t.$_session.pageTime = bt(), t.$_session.visitedPages = [].concat(Ft()(t.$_session.visitedPages.slice(-49)), [e]), Oe.updateSession())
        },
        $_setAuthorization: function(t, e) {
          var n = e.userId,
            r = e.token,
            o = e.tokenExpiresAt;
          t.$_session.userId = n, t.$_session.token = r, t.$_session.tokenExpiresAt = o, Oe.updateSession()
        },
        $_endChat: function(t) {
          Oe.clearExpirationTimer(), t.$_session.sessionExpiresAt = 0, Oe.updateSession()
        },
        $_markButtonAsExecuted: function(t, e) {
          t.$_session.executedButtons = Object.assign({}, t.$_session.executedButtons, Ht()({}, e, !0)), Oe.updateSession()
        },
        $_setConversationStarted: function(t, e) {
          t.$_session.conversationStarted = e
        }
      },
      actions: {
        $_initializeState: (Ee = w()(y.a.mark(function t(e) {
          var n;
          return y.a.wrap(function(t) {
            for (;;) switch (t.prev = t.next) {
              case 0:
                return n = e.dispatch, t.next = 3, Kt();
              case 3:
                if (t.sent) {
                  t.next = 5;
                  break
                }
                return t.abrupt("return", Object(Vt.b)("Something went wrong"));
              case 5:
                return t.next = 7, n("$_loadConfig");
              case 7:
                if (t.sent) {
                  t.next = 9;
                  break
                }
                return t.abrupt("return", !1);
              case 9:
                return mt.call("frameInitialized"), t.abrupt("return", !0);
              case 11:
              case "end":
                return t.stop()
            }
          }, t, this)
        })), function(t) {
          return Ee.apply(this, arguments)
        }),
        $_loadConfig: (Se = w()(y.a.mark(function t(e) {
          var n, r;
          return y.a.wrap(function(t) {
            for (;;) switch (t.prev = t.next) {
              case 0:
                return n = e.commit, t.next = 3, this.$fetch("".concat(Ut.cdnUrl, "/").concat(Ot, "/settings.json"));
              case 3:
                if ((r = t.sent) instanceof Error) return t.abrupt("return", Object(Vt.b)("The configuration of the chat widget couldn't be loaded. Are you sure your integration still exists?"));
                t.next = 6;
                break;
              case 6:
                if (r.enabled) {
                  t.next = 8;
                  break
                }
                return t.abrupt("return", Object(Vt.c)("Chat widget is disabled"));
              case 8:
                return n("$_setConfiguration", r), t.abrupt("return", !0);
              case 10:
              case "end":
                return t.stop()
            }
          }, t, this)
        })), function(t) {
          return Se.apply(this, arguments)
        }),
        $_authorization: (Ce = w()(y.a.mark(function t(e) {
          var n, r, o, i, s, a, c, u, l = arguments;
          return y.a.wrap(function(t) {
            for (;;) switch (t.prev = t.next) {
              case 0:
                if (n = e.state, r = e.commit, e.dispatch, o = 1 < l.length && void 0 !== l[1] ? l[1] : {}, i = o.forceRefresh, s = !(void 0 !== i && i) && n.$_session.tokenExpiresAt && 0 < n.$_session.tokenExpiresAt - bt(), n.$_session.userId && n.$_session.token && s) return t.abrupt("return", !0);
                t.next = 5;
                break;
              case 5:
                if (!Wt) {
                  t.next = 9;
                  break
                }
                t.t0 = !1, t.next = 12;
                break;
              case 9:
                return t.next = 11, mt.call("getUserId");
              case 11:
                t.t0 = t.sent;
              case 12:
                return a = t.t0, t.next = 15, this.$authorize("post", "chat/authorize", {
                  client_id: Ot,
                  userId: a || n.$_session.userId || void 0
                });
              case 15:
                if ((c = t.sent) instanceof Error) return t.abrupt("return", c);
                t.next = 18;
                break;
              case 18:
                return u = {
                  userId: c.userId,
                  token: c.access_token,
                  tokenExpiresAt: te({
                    seconds: c.expires_in
                  })
                }, r("$_setAuthorization", u), t.abrupt("return", !0);
              case 21:
              case "end":
                return t.stop()
            }
          }, t, this)
        })), function(t) {
          return Ce.apply(this, arguments)
        }),
        $_extendSessionLife: (ke = w()(y.a.mark(function t(e) {
          var n, r;
          return y.a.wrap(function(t) {
            for (;;) switch (t.prev = t.next) {
              case 0:
                n = e.commit, r = e.dispatch, n("$_extendExpirationTime", null), r("$_setExpirationTimer");
              case 3:
              case "end":
                return t.stop()
            }
          }, t, this)
        })), function(t) {
          return ke.apply(this, arguments)
        }),
        $_chat: (xe = w()(y.a.mark(function t(e) {
          var n, r, o, i, s, a, c, u, l, f, p, d, h, v, m, g = this,
            _ = arguments;
          return y.a.wrap(function(t) {
            for (;;) switch (t.prev = t.next) {
              case 0:
                return n = e.state, r = e.commit, o = e.dispatch, i = e.getters, s = 1 < _.length && void 0 !== _[1] ? _[1] : {}, a = s.message || n.$_session.message, c = function() {
                  return !(!n.online || i.$_chatEnded || n.waiting || !(a || s.trigger || s.postback && s.postback.length || s.goto && s.goto.length)) && (r("$_setWaiting", !0), !0)
                }, u = function() {
                  var t = w()(y.a.mark(function t() {
                    var e;
                    return y.a.wrap(function(t) {
                      for (;;) switch (t.prev = t.next) {
                        case 0:
                          if (n.$_session.conversation.length) {
                            t.next = 6;
                            break
                          }
                          if (n.greeting) return e = {
                            fulfillment: [{
                              type: "text",
                              message: n.greeting
                            }]
                          }, t.next = 5, o("$_updateConversation", e);
                          t.next = 5;
                          break;
                        case 5:
                          mt.call("onStartConversation");
                        case 6:
                          r("$_setGreeting");
                        case 7:
                        case "end":
                          return t.stop()
                      }
                    }, t, this)
                  }));
                  return function() {
                    return t.apply(this, arguments)
                  }
                }(), l = function() {
                  var t = w()(y.a.mark(function t() {
                    return y.a.wrap(function(t) {
                      for (;;) switch (t.prev = t.next) {
                        case 0:
                          if (n.$_session.replies.length) return t.next = 3, xt(500);
                          t.next = 3;
                          break;
                        case 3:
                        case "end":
                          return t.stop()
                      }
                    }, t, this)
                  }));
                  return function() {
                    return t.apply(this, arguments)
                  }
                }(), f = function() {
                  return r("$_setWaiting", !1), r("$_setSending", {
                    message: a || "Something went wrong",
                    error: !0
                  }), !1
                }, p = function() {
                  var t = {
                      sessionId: n.$_session.sessionId,
                      storyId: n.configuration.storyId || void 0
                    },
                    e = n.$_session.customParameters;
                  return Wt || e.hasOwnProperty("default_url") || (e.default_url = n.$_session.visitedPages.slice(-1)[0]), Object.keys(e).length && (t.parameters = e), s.button && (t.button = s.button), s.trigger ? t.trigger = s.trigger : s.goto ? t.goto = s.goto : s.postback ? t.query = s.postback : (t.query = a, r("$_setMessage", "")), s.trigger || r("$_setSending", {
                    message: a
                  }), t
                }, d = function() {
                  var t = w()(y.a.mark(function t() {
                    var e, n;
                    return y.a.wrap(function(t) {
                      for (;;) switch (t.prev = t.next) {
                        case 0:
                          return e = p(), t.next = 3, g.$request("post", "chat", e);
                        case 3:
                          return n = t.sent, t.abrupt("return", !(n instanceof Error) && n.result);
                        case 5:
                        case "end":
                          return t.stop()
                      }
                    }, t, this)
                  }));
                  return function() {
                    return t.apply(this, arguments)
                  }
                }(), h = function() {
                  s.button && s.button.id && r("$_markButtonAsExecuted", s.button.id)
                }, v = function() {
                  var e = w()(y.a.mark(function t(e) {
                    return y.a.wrap(function(t) {
                      for (;;) switch (t.prev = t.next) {
                        case 0:
                          return e && mt.call("onMessage", e), r("$_setSessionAttributes", {}), s.goto ? e = b()({}, e, {
                            resolvedQuery: a
                          }) : s.postback && (e = b()({}, e, {
                            postback: s.postback,
                            resolvedQuery: a
                          })), r("$_setSending"), o("$_updateConversation", e).then(function() {
                            return r("$_setWaiting", !1)
                          }), t.abrupt("return", !!e.fulfillment);
                        case 6:
                        case "end":
                          return t.stop()
                      }
                    }, t, this)
                  }));
                  return function(t) {
                    return e.apply(this, arguments)
                  }
                }(), m = function() {
                  var t = w()(y.a.mark(function t() {
                    var e;
                    return y.a.wrap(function(t) {
                      for (;;) switch (t.prev = t.next) {
                        case 0:
                          if (c()) {
                            t.next = 2;
                            break
                          }
                          return t.abrupt("return", !1);
                        case 2:
                          return t.next = 4, u();
                        case 4:
                          return t.next = 6, l();
                        case 6:
                          return t.next = 8, d();
                        case 8:
                          if (e = t.sent) {
                            t.next = 11;
                            break
                          }
                          return t.abrupt("return", f());
                        case 11:
                          return r("$_setConversationStarted", !0), h(), o("$_extendSessionLife"), t.abrupt("return", v(e));
                        case 15:
                        case "end":
                          return t.stop()
                      }
                    }, t, this)
                  }));
                  return function() {
                    return t.apply(this, arguments)
                  }
                }(), t.abrupt("return", m());
              case 13:
              case "end":
                return t.stop()
            }
          }, t, this)
        })), function(t) {
          return xe.apply(this, arguments)
        }),
        $_executeButtonActions: ($e = w()(y.a.mark(function t(e, n) {
          var r, o;
          return y.a.wrap(function(t) {
            for (;;) switch (t.prev = t.next) {
              case 0:
                return r = e.state, t.next = 3, this.$request("post", "chat/button", {
                  sessionId: r.$_session.sessionId,
                  button: n
                });
              case 3:
                return o = t.sent, t.abrupt("return", !(o instanceof Error));
              case 5:
              case "end":
                return t.stop()
            }
          }, t, this)
        })), function(t, e) {
          return $e.apply(this, arguments)
        }),
        $_triggerChat: function(t) {
          return (0, t.dispatch)("$_chat", {
            trigger: 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : "welcome"
          })
        },
        $_responseButton: (be = w()(y.a.mark(function t(e, n) {
          var r, o, i, s, a, c, u, l, f;
          return y.a.wrap(function(t) {
            for (;;) switch (t.prev = t.next) {
              case 0:
                r = e.commit, o = e.dispatch, s = (i = n || {}).title, a = i.type, c = i.value, u = i.height, l = i.id, f = void 0 === l ? void 0 : l, t.t0 = a, t.next = "url" === t.t0 ? 5 : "webview" === t.t0 ? 8 : "phone" === t.t0 ? 11 : "goto" === t.t0 ? 19 : "postback" === t.t0 ? 20 : 21;
                break;
              case 5:
                return o("$_extendSessionLife"), f && r("$_markButtonAsExecuted", f), t.abrupt("return", r("$_openUrl", c));
              case 8:
                return o("$_extendSessionLife"), f && r("$_markButtonAsExecuted", f), t.abrupt("return", o("$_openMoment", {
                  url: c,
                  height: u
                }));
              case 11:
                if (Wt ? Object(Zt.a)(c) : mt.call("callNumber", c), f) return r("$_markButtonAsExecuted", f), t.next = 16, o("$_executeButtonActions", f);
                t.next = 18;
                break;
              case 16:
                if (!t.sent) {
                  t.next = 18;
                  break
                }
                o("$_extendSessionLife");
              case 18:
                return t.abrupt("return");
              case 19:
                return t.abrupt("return", o("$_chat", {
                  message: s,
                  goto: c,
                  button: f ? {
                    id: f,
                    title: s
                  } : void 0
                }));
              case 20:
                return t.abrupt("return", o("$_chat", {
                  message: s,
                  postback: c,
                  button: f ? {
                    id: f,
                    title: s
                  } : void 0
                }));
              case 21:
              case "end":
                return t.stop()
            }
          }, t, this)
        })), function(t, e) {
          return be.apply(this, arguments)
        }),
        $_onMomentLoad: function() {
          mt.call("onMomentLoad")
        },
        $_closeMoment: function(t) {
          var e = t.commit;
          mt.call("onMomentClose"), e("$_setMoment", {
            url: null,
            height: null
          })
        },
        $_openMoment: function(t, e) {
          var n = t.commit,
            r = t.state,
            o = e.url,
            i = e.height;
          r.online && (mt.call("onMomentOpen"), n("$_setMoment", {
            url: o,
            height: ["full", "tall", "compact"].includes(i) ? i : "full"
          }))
        },
        $_initializeSessionState: function(t) {
          var e = t.state,
            n = t.commit,
            r = t.dispatch;
          return window.addEventListener("beforeunload", function() {
            return n("$_setLastVisit")
          }), !!Wt || (e.$_session.opened && (mt.data.mobile ? n("$_setOpened", !1) : r("$_openChat", e.$_session.opened)), e.$_session.conversation.length && r("$_setExpirationTimer"), new Promise(function(e) {
            return mt.once(_e.a, function(t) {
              n("$_setVisitedPages", t), mt.on(_e.a, function(t) {
                return n("$_setVisitedPages", t)
              }), e()
            })
          }))
        },
        $_openChat: function(t) {
          (0, t.commit)("$_setOpened", !0), mt.call("onChatOpen", !0)
        },
        $_closeChat: function(t) {
          (0, t.commit)("$_setOpened", !1), mt.call("onChatClose", !1)
        },
        $_updateConversation: (we = w()(y.a.mark(function t(e, n) {
          var r, o, i, s, a, c, u, l, f, p, d, h;
          return y.a.wrap(function(t) {
            for (;;) switch (t.prev = t.next) {
              case 0:
                if (r = e.state, o = e.commit, e.dispatch, i = n.resolvedQuery, s = n.fulfillment, a = he(new Date), i) return c = {
                  type: "user",
                  date: a,
                  message: i
                }, o("$_setConversation", [].concat(Ft()(r.$_session.conversation), [c])), t.next = 8, xt(300);
                t.next = 8;
                break;
              case 8:
                l = !(u = !0), f = void 0, t.prev = 11, p = s[Symbol.iterator]();
              case 13:
                if (u = (d = p.next()).done) {
                  t.next = 34;
                  break
                }
                if ("widgetClose" === (h = d.value).type) return t.next = 18, xt(h.delay || 0);
                t.next = 20;
                break;
              case 18:
                return o("$_endChat"), t.abrupt("break", 34);
              case 20:
                if (ye[h.type]) {
                  t.next = 22;
                  break
                }
                return t.abrupt("continue", 31);
              case 22:
                return h.date = a, t.next = 25, xt(300);
              case 25:
                return o("$_setIndicator", !0), o("$_setConversation", [].concat(Ft()(r.$_session.conversation), [h])), t.next = 29, xt(h.delay || 0);
              case 29:
                o("$_setIndicator", !1), o("$_setReplies", "quickReplies" === h.type ? h.buttons : []);
              case 31:
                u = !0, t.next = 13;
                break;
              case 34:
                t.next = 40;
                break;
              case 36:
                t.prev = 36, t.t0 = t.catch(11), l = !0, f = t.t0;
              case 40:
                t.prev = 40, t.prev = 41, u || null == p.return || p.return();
              case 43:
                if (t.prev = 43, l) throw f;
                t.next = 46;
                break;
              case 46:
                return t.finish(43);
              case 47:
                return t.finish(40);
              case 48:
              case "end":
                return t.stop()
            }
          }, t, this, [
            [11, 36, 40, 48],
            [41, , 43, 47]
          ])
        })), function(t, e) {
          return we.apply(this, arguments)
        }),
        $_setExpirationTimer: function(t) {
          var e = t.state,
            n = t.commit;
          Oe.setExpirationTimer(e.$_session.sessionExpiresAt, function() {
            return n("$_endChat")
          })
        }
      },
      getters: {
        $_mobile: function() {
          return mt.data.mobile
        },
        $_avatar: function(t) {
          var e = t.configuration.company.avatar,
            n = e.enabled,
            r = e.url;
          return {
            exists: !!(n && r && r.length),
            enabled: n,
            url: r
          }
        },
        $_theme: function(t) {
          var e = t.configuration.colors;
          return {
            background: e.background,
            responseBackground: e.responseBackground,
            responseText: e.responseText,
            text: e.text,
            theme: e.theme,
            themeText: e.themeText
          }
        },
        $_conversationInitialized: function(t) {
          return t.$_session.conversationStarted || t.$_session.conversation.length
        },
        $_chatEnded: function(t) {
          return Oe.isSessionExpired(t.$_session.sessionExpiresAt)
        }
      }
    };
  p.a.use(D);
  var Ae = new D.Store(b()({
      strict: !1,
      plugins: [function(t) {
        return (e = t).$fetch = Mt, e.$request = Rt, void(e.$authorize = Dt);
        var e
      }]
    }, Te)),
    je = Ae.commit,
    Ie = Ae.dispatch,
    Pe = Ae.state,
    Le = Ae.getters,
    Me = Ae,
    De = function() {
      return Me.state.$_session
    },
    Re = function(t, e) {
      return Object.prototype.hasOwnProperty.call(t, e)
    },
    ze = function(t, e) {
      return t === e
    },
    Ne = function(t, e) {
      return t !== e
    },
    He = function(t) {
      return !!t
    },
    Be = function(t, e) {
      return t.includes(e)
    },
    Fe = function(t, e) {
      return !t.includes(e)
    },
    Ue = function(t, e) {
      return e < t
    },
    Ve = function(t, e) {
      return t < e
    },
    qe = function(t, e) {
      return e <= t
    },
    We = function(t, e) {
      return t <= e
    },
    Ge = function(t, e) {
      return t.length > e
    },
    Ye = function(t, e) {
      return t.length < e
    },
    Xe = function() {
      var e = !(0 < arguments.length && void 0 !== arguments[0]) || arguments[0];
      return new Promise(function(t) {
        return t(e)
      })
    },
    Je = function() {
      var e = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : 0;
      return new Promise(function(t) {
        return setTimeout(t, e, !0)
      })
    },
    Ke = function() {
      return Promise.reject()
    },
    Qe = function(t, e) {
      return t.includes(e) && Re(r, e)
    },
    Ze = function(t, e, n) {
      return r[t](e, n)
    },
    tn = ["greater"],
    en = ["greater"],
    nn = ["is", "isNot", "contains", "notContains"],
    rn = ["is", "isNot", "contains", "notContains"],
    on = ["is"],
    sn = ["is", "isNot"],
    an = ["is", "isNot"],
    cn = ["is", "isNot", "contains", "notContains", "greater", "less", "greaterOrEqual", "lessOrEqual", "longer", "shorter"],
    un = ["is", "isNot", "contains", "notContains"],
    ln = function(t, e) {
      if (!Qe(tn, e)) return Ke();
      var n = De().websiteTime,
        r = bt() - n,
        o = $t(t);
      return Ze(e, r, o) ? Xe() : Je(o - r)
    },
    fn = function(t, e) {
      if (Wt || !Qe(en, e)) return Ke();
      var n = De().pageTime,
        r = bt() - n,
        o = $t(t);
      return Ze(e, r, o) ? Xe() : Je(o - r)
    },
    pn = function(t, e) {
      if (Wt || !Qe(nn, e)) return Ke();
      var n = De().visitedPages.slice(-1)[0];
      return Ze(e, n, t) ? Xe() : Ke()
    },
    dn = function(e, n) {
      return Wt || !Qe(rn, n) ? Ke() : De().visitedPages.some(function(t) {
        return Ze(n, t, e)
      }) ? Xe() : Ke()
    },
    hn = function(t, e) {
      if (Wt || !Qe(on, e)) return Ke();
      var n = De().visitedPages;
      return Ze(e, n.length, t) ? Xe() : Ke()
    },
    vn = function(t, e) {
      if (Wt || !Qe(sn, e)) return Ke();
      var n = De().lastVisit;
      return Ze(e, !n, t) ? Xe() : Ke()
    },
    mn = function(t, e) {
      if (Wt || !Qe(an, e)) return Ke();
      var n = De().lastVisit,
        r = bt() - n >= 36e5 * 2;
      return Ze(e, r, t) ? Xe() : Ke()
    },
    gn = function(t, e, n) {
      var r = n.alias;
      if (Wt || !Qe(cn, e)) return Ke();
      var o = De().customParameters,
        i = Re(o, r) ? o[r] : "";
      return Ze(e, i, t) ? Xe() : Ke()
    },
    _n = function(t, e) {
      if (Wt || !Qe(un, e)) return Ke();
      var n = Wt ? document.referrer : mt.data.documentReferrer;
      return Ze(e, n, t) ? Xe() : Ke()
    },
    yn = function(t) {
      var e, n, r, o, i, s = t.message,
        a = t.rules,
        c = [s],
        u = !0,
        l = !1,
        f = void 0;
      try {
        for (var p, d = a[Symbol.iterator](); !(u = (p = d.next()).done); u = !0) {
          var h = p.value,
            v = (void 0, n = (e = h).type, r = e.value, o = e.rule, i = yt()(e, ["type", "value", "rule"]), "function" == typeof m[n] && m[n](r, o, i));
          if (!v) {
            c = [];
            break
          }
          c.push(v)
        }
      } catch (t) {
        l = !0, f = t
      } finally {
        try {
          u || null == d.return || d.return()
        } finally {
          if (l) throw f
        }
      }
      return new Promise(function(t, e) {
        return Promise.all(c).then(function() {
          return t(s)
        }).catch(e)
      })
    },
    wn = function(t) {
      return n = function e(n) {
        if (n.length < 1) return Promise.reject();
        var t = n.map(wt);
        return Promise.race(t).catch(function(t) {
          return n.splice(t, 1), e(n)
        })
      }(function(t) {
        var e = [],
          n = !0,
          r = !1,
          o = void 0;
        try {
          for (var i, s = t[Symbol.iterator](); !(n = (i = s.next()).done); n = !0) {
            var a = i.value;
            e.push(yn(a))
          }
        } catch (t) {
          r = !0, o = t
        } finally {
          try {
            n || null == s.return || s.return()
          } finally {
            if (r) throw o
          }
        }
        return e
      }(t)), {
        promise: new Promise(function(t, e) {
          r = e, Promise.resolve(n).then(t).catch(e)
        }),
        cancel: function() {
          r({
            canceled: !0
          })
        }
      };
      var n, r
    };

  function bn(t, e, n, r, o, i, s, a) {
    var c, u = "function" == typeof t ? t.options : t;
    if (e && (u.render = e, u.staticRenderFns = n, u._compiled = !0), r && (u.functional = !0), i && (u._scopeId = "data-v-" + i), s ? (c = function(t) {
        (t = t || this.$vnode && this.$vnode.ssrContext || this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) || "undefined" == typeof __VUE_SSR_CONTEXT__ || (t = __VUE_SSR_CONTEXT__), o && o.call(this, t), t && t._registeredComponents && t._registeredComponents.add(s)
      }, u._ssrRegister = c) : o && (c = a ? function() {
        o.call(this, this.$root.$options.shadowRoot)
      } : o), c)
      if (u.functional) {
        u._injectStyles = c;
        var l = u.render;
        u.render = function(t, e) {
          return c.call(e), l(t, e)
        }
      } else {
        var f = u.beforeCreate;
        u.beforeCreate = f ? [].concat(f, c) : [c]
      } return {
      exports: t,
      options: u
    }
  }
  var $n = bn({
    mixins: [F],
    data: function() {
      return {
        cancel: Gt.a
      }
    },
    watch: {
      "$_session.visitedPages": function() {
        this.setPromise()
      },
      "$_session.customParameters": function() {
        this.setPromise()
      }
    },
    methods: {
      closeGreeting: function() {
        this.$_setGreeting()
      },
      displayGreeting: function(t) {
        this.$_greeting || this.$_setGreeting(t)
      },
      onGreetingClick: function() {
        this.$_openChat()
      },
      setPromise: function() {
        if (!this.$_conversationInitialized && !this.$_greeting) {
          this.cancelPromise();
          var t = wn(this.$_greetings),
            e = t.promise,
            n = t.cancel;
          e.then(this.displayGreeting, Gt.a), this.cancel = n
        }
      },
      cancelPromise: function() {
        this.cancel(), this.cancel = Gt.a
      }
    },
    created: function() {
      this.setPromise()
    },
    beforeDestroy: function() {
      this.cancelPromise()
    }
  }, ct, [], !1, null, null, null);
  $n.options.__file = "src/chat/components/chat-button/button-greeting/button-greeting.vue";
  var xn = $n.exports,
    kn = bn({
      components: {
        "button-greeting": xn
      },
      mixins: [N],
      props: {
        text: {
          type: String,
          required: !0
        }
      },
      computed: {
        style: function() {
          return {
            button: {
              background: this.$_theme.theme,
              color: this.$_theme.themeText
            }
          }
        }
      },
      watch: {
        $_greeting: function() {
          this.updateFrameStyle()
        }
      },
      methods: {
        updateFrameStyle: function() {
          var t = this.$_greeting ? {
            width: "320px",
            height: "155px"
          } : {
            width: "300px",
            height: "60px"
          };
          mt.call("updateFrameStyle", t), mt.call("setMetaViewport", !1)
        }
      },
      created: function() {
        this.updateFrameStyle()
      }
    }, at, [], !1, null, null, null);
  kn.options.__file = "src/chat/components/chat-button/theme-bar/theme-bar.vue";
  var Cn = kn.exports,
    Sn = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return e("div", {
        staticClass: "chat-button-theme-bubble"
      }, [e("button-greeting"), this._v(" "), e("div", {
        staticClass: "chat-button",
        style: this.style.button,
        on: {
          click: this.$_openChat
        }
      }, [e("svg", {
        staticClass: "chat-icon",
        style: this.style.icon,
        attrs: {
          xmlns: "http://www.w3.org/2000/svg",
          viewBox: "0 0 20 20"
        }
      }, [e("path", {
        staticStyle: {
          fill: "none"
        },
        attrs: {
          d: "M9.37,1.34H10.8a8.2,8.2,0,0,1,0,16.39H9.37a10,10,0,0,1-2.68-.45c-.55-.15-2.23,1.81-2.63,1.36s.05-2.79-.41-3.23q-.28-.27-.54-.57A8.2,8.2,0,0,1,9.37,1.34Z"
        }
      }), this._v(" "), e("line", {
        staticStyle: {
          fill: "none",
          "stroke-linecap": "round"
        },
        attrs: {
          x1: "6.37",
          y1: "7.04",
          x2: "12.58",
          y2: "7.04"
        }
      }), this._v(" "), e("line", {
        staticStyle: {
          fill: "none",
          "stroke-linecap": "round"
        },
        attrs: {
          x1: "6.37",
          y1: "9.66",
          x2: "14.31",
          y2: "9.66"
        }
      }), this._v(" "), e("line", {
        staticStyle: {
          fill: "none",
          "stroke-linecap": "round"
        },
        attrs: {
          x1: "6.37",
          y1: "12.28",
          x2: "11.42",
          y2: "12.28"
        }
      })])])], 1)
    };
  Sn._withStripped = !0;
  var En = bn({
    components: {
      "button-greeting": xn
    },
    mixins: [B],
    computed: {
      style: function() {
        return {
          button: {
            background: this.$_theme.theme,
            color: this.$_theme.themeText
          },
          icon: {
            stroke: this.$_theme.themeText
          }
        }
      }
    },
    watch: {
      $_greeting: function() {
        this.updateFrameStyle()
      }
    },
    methods: {
      updateFrameStyle: function() {
        var t = this.$_greeting ? {
          width: "320px",
          height: "195px"
        } : {
          width: "100px",
          height: "100px"
        };
        mt.call("updateFrameStyle", t), mt.call("setMetaViewport", !1)
      }
    },
    created: function() {
      this.updateFrameStyle()
    }
  }, Sn, [], !1, null, null, null);
  En.options.__file = "src/chat/components/chat-button/theme-bubble/theme-bubble.vue";
  var On = bn({
    components: {
      "theme-bar": Cn,
      "theme-bubble": En.exports
    },
    mixins: [z]
  }, st, [], !1, null, null, null);
  On.options.__file = "src/chat/components/chat-button/chat-button.vue";
  var Tn = On.exports,
    An = function() {
      var t = this,
        e = t.$createElement,
        n = t._self._c || e;
      return n("div", {
        staticClass: "chat-window",
        class: {
          "chat-window-mobile": t.$_mobile, "chat-window-offline": !t.$_online
        }
      }, [n("div", {
        staticClass: "chat-window-wrapper",
        style: t.style.windowWrapper
      }, [t.$_configuration.welcomeScreen && !t.$_conversationInitialized ? n("window-start") : n("window-content"), t._v(" "), n("window-close"), t._v(" "), t.$_moment.url ? n("window-moment") : t._e()], 1), t._v(" "), n("window-offline"), t._v(" "), !t.$_mobile && t.$_configuration.whiteLabel ? n("window-powered") : t._e()], 1)
    },
    jn = function(t) {
      var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : .95;
      t = "#" === t.charAt(0) ? t.slice(1) : t;
      var n = new ArrayBuffer(4);
      new DataView(n).setUint32(0, parseInt(t, 16), !1);
      var r = new Uint8Array(n),
        o = r[1],
        i = r[2],
        s = r[3];
      return "rgba(".concat(o, ",").concat(i, ",").concat(s, ",").concat(e, ")")
    },
    In = function() {
      var t = this,
        e = t.$createElement,
        n = t._self._c || e;
      return n("transition", {
        attrs: {
          name: "fade"
        }
      }, [n("div", {
        staticClass: "window-start",
        style: t.style.content
      }, [n("div", {
        staticClass: "background",
        style: t.style.background
      }, [t.$_configuration.company.background.enabled && t.$_configuration.company.background.url.length ? n("lazy-img", {
        attrs: {
          src: t.$_configuration.company.background.url,
          cover: !0
        }
      }) : t._e(), t._v(" "), t.$_avatar.enabled ? n("div", {
        staticClass: "avatar-wrapper"
      }, [n("div", {
        staticClass: "avatar"
      }, [t.$_avatar.url.length ? n("lazy-img", {
        attrs: {
          src: t.$_avatar.url,
          backgroundSize: 60
        }
      }) : n("div", {
        staticClass: "avatar-default"
      })], 1), t._v(" "), n("div", {
        staticClass: "avatar-status"
      })]) : t._e()], 1), t._v(" "), n("div", {
        staticClass: "body"
      }, [n("div", {
        staticClass: "name"
      }, [t._v(t._s(t.$_configuration.company.name))]), t._v(" "), n("div", {
        staticClass: "social"
      }, [t.$_configuration.company.social.linkedin.length ? n("a", {
        staticClass: "icon",
        attrs: {
          target: "_blank",
          href: t.$_configuration.company.social.linkedin
        }
      }, [n("svg", {
        staticStyle: {
          "enable-background": "new 0 0 90 90"
        },
        style: t.style.socialIcon,
        attrs: {
          width: "20px",
          height: "20px",
          viewBox: "0 0 430.117 430.117",
          "xml:space": "preserve",
          xmlns: "http://www.w3.org/2000/svg",
          "xmlns:xlink": "http://www.w3.org/1999/xlink"
        }
      }, [n("path", {
        attrs: {
          d: "M430.117,261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707   c-25.473,0-40.632,17.142-47.301,33.724c-2.432,5.928-3.058,14.179-3.058,22.477V420.56h-92.219c0,0,1.242-251.285,0-277.32h92.21   v39.309c-0.187,0.294-0.43,0.611-0.606,0.896h0.606v-0.896c12.251-18.869,34.13-45.824,83.102-45.824   C384.633,136.724,430.117,176.361,430.117,261.543z M52.183,9.558C20.635,9.558,0,30.251,0,57.463   c0,26.619,20.038,47.94,50.959,47.94h0.616c32.159,0,52.159-21.317,52.159-47.94C103.128,30.251,83.734,9.558,52.183,9.558z    M5.477,420.56h92.184v-277.32H5.477V420.56z"
        }
      })])]) : t._e(), t._v(" "), t.$_configuration.company.social.facebook.length ? n("a", {
        staticClass: "icon",
        attrs: {
          target: "_blank",
          href: t.$_configuration.company.social.facebook
        }
      }, [n("svg", {
        staticStyle: {
          "enable-background": "new 0 0 90 90"
        },
        style: t.style.socialIcon,
        attrs: {
          width: "20px",
          height: "20px",
          viewBox: "0 0 430.113 430.114",
          "xml:space": "preserve",
          xmlns: "http://www.w3.org/2000/svg",
          "xmlns:xlink": "http://www.w3.org/1999/xlink"
        }
      }, [n("path", {
        attrs: {
          d: "M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805   c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354   c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"
        }
      })])]) : t._e(), t._v(" "), t.$_configuration.company.social.twitter.length ? n("a", {
        staticClass: "icon",
        attrs: {
          target: "_blank",
          href: t.$_configuration.company.social.twitter
        }
      }, [n("svg", {
        staticStyle: {
          "enable-background": "new 0 0 90 90"
        },
        style: t.style.socialIcon,
        attrs: {
          width: "20px",
          height: "20px",
          viewBox: "0 0 430.117 430.117",
          "xml:space": "preserve",
          xmlns: "http://www.w3.org/2000/svg",
          "xmlns:xlink": "http://www.w3.org/1999/xlink"
        }
      }, [n("path", {
        attrs: {
          d: "M381.384,198.639c24.157-1.993,40.543-12.975,46.849-27.876   c-8.714,5.353-35.764,11.189-50.703,5.631c-0.732-3.51-1.55-6.844-2.353-9.854c-11.383-41.798-50.357-75.472-91.194-71.404   c3.304-1.334,6.655-2.576,9.996-3.691c4.495-1.61,30.868-5.901,26.715-15.21c-3.5-8.188-35.722,6.188-41.789,8.067   c8.009-3.012,21.254-8.193,22.673-17.396c-12.27,1.683-24.315,7.484-33.622,15.919c3.36-3.617,5.909-8.025,6.45-12.769   C241.68,90.963,222.563,133.113,207.092,174c-12.148-11.773-22.915-21.044-32.574-26.192   c-27.097-14.531-59.496-29.692-110.355-48.572c-1.561,16.827,8.322,39.201,36.8,54.08c-6.17-0.826-17.453,1.017-26.477,3.178   c3.675,19.277,15.677,35.159,48.169,42.839c-14.849,0.98-22.523,4.359-29.478,11.642c6.763,13.407,23.266,29.186,52.953,25.947   c-33.006,14.226-13.458,40.571,13.399,36.642C113.713,320.887,41.479,317.409,0,277.828   c108.299,147.572,343.716,87.274,378.799-54.866c26.285,0.224,41.737-9.105,51.318-19.39   C414.973,206.142,393.023,203.486,381.384,198.639z"
        }
      })])]) : t._e()]), t._v(" "), n("div", {
        staticClass: "description"
      }, [t._v("\n                " + t._s(t.$_configuration.company.description) + "\n            ")]), t._v(" "), n("div", {
        staticClass: "button-wrapper"
      }, [n("div", {
        staticClass: "button",
        class: t.$_waiting ? "button-loading" : "button-default",
        style: t.style.button,
        on: {
          click: t.start
        }
      }, [t._v("\n                    " + t._s(t.translations.start_conversation_button) + "\n                ")]), t._v(" "), t.error && !t.$_waiting ? n("div", {
        staticClass: "start-error"
      }, [t._v("\n                    " + t._s(t.translations.offline_information) + "\n                ")]) : t._e()])])])])
    };
  In._withStripped = An._withStripped = !0;
  var Pn, Ln = "AUTO_ROLL",
    Mn = "SET_CONVERSATION_SCROLL",
    Dn = "SCROLL_CONVERSATION_DOWN",
    Rn = bn({
      mixins: [W],
      computed: {
        style: function() {
          var t = this.$_configuration.company.background;
          return {
            content: {
              color: this.$_theme.text,
              background: this.$_theme.background
            },
            background: {
              background: t.enabled && !t.url.length ? this.$_theme.theme : "transparent"
            },
            socialIcon: {
              fill: this.$_theme.text
            },
            button: this.$_waiting ? {
              borderLeftColor: this.$_theme.theme
            } : {
              background: this.$_theme.theme,
              color: this.$_theme.themeText
            }
          }
        }
      },
      data: function() {
        return {
          translations: fe,
          error: !1
        }
      },
      methods: {
        start: (Pn = w()(y.a.mark(function t() {
          return y.a.wrap(function(t) {
            for (;;) switch (t.prev = t.next) {
              case 0:
                if (this.$_waiting) return t.abrupt("return");
                t.next = 2;
                break;
              case 2:
                return this.error = !1, t.next = 5, this.$_triggerChat();
              case 5:
                if (t.sent) {
                  t.next = 7;
                  break
                }
                this.error = !0;
              case 7:
              case "end":
                return t.stop()
            }
          }, t, this)
        })), function() {
          return Pn.apply(this, arguments)
        })
      },
      destroyed: function() {
        this.$root.$emit(Ln, "increase")
      }
    }, In, [], !1, null, null, null);
  Rn.options.__file = "src/chat/components/chat-window/window-start/window-start.vue";
  var zn = Rn.exports,
    Nn = function() {
      var e = this,
        t = e.$createElement,
        n = e._self._c || t;
      return n("transition", {
        attrs: {
          name: "moment",
          appear: ""
        },
        on: {
          "after-enter": function(t) {
            e.isAnimating = !1
          },
          "after-leave": e.destroy
        }
      }, [n("div", {
        staticClass: "window-moment",
        class: {
          "window-moment-mobile": e.$_mobile
        }
      }, [n("div", {
        staticClass: "moment",
        class: e.$_moment.height
      }, [n("div", {
        staticClass: "header"
      }, [n("div", {
        staticClass: "favicon"
      }, [e.data.icon ? n("lazy-img", {
        staticClass: "icon",
        attrs: {
          backgroundSize: 30,
          src: e.data.icon
        }
      }) : e._e()], 1), e._v(" "), n("div", {
        staticClass: "title"
      }, [e._v(e._s(e.data.title))]), e._v(" "), n("div", {
        staticClass: "close",
        on: {
          click: e.close
        }
      }, [n("close-icon", {
        attrs: {
          title: "Close"
        }
      })], 1)]), e._v(" "), n("transition", {
        attrs: {
          name: "fade-slow"
        }
      }, [e.isMomentLoading || e.isAnimating ? n("div", {
        staticClass: "iframe-loader"
      }, [n("div", {
        staticClass: "loader"
      }, e._l(3, function(t) {
        return n("div")
      }), 0)]) : e._e()]), e._v(" "), n("div", {
        ref: "frameWrapper",
        staticClass: "frame-wrapper",
        class: {
          "frame-wrapper-ios": e.iOSDevice
        }
      })], 1)])])
    };
  Nn._withStripped = !0;
  var Hn = n(4),
    Bn = /(?:[^:]+:\/\/)?([^\/\s]+)/;
  var Fn = /.*\?(.+)/,
    Un = function(t) {
      var e, n, r = (e = t.match(Fn), (e ? "?" + e[1] : "").replace(/^\?/, ""));
      return n = (r || t).split("&").map(function(t) {
        return t.split("=").map(decodeURIComponent)
      }), Object(Hn.b)(n)
    };

  function Vn() {
    return (Vn = Object.assign || function(t) {
      for (var e = 1; e < arguments.length; e++) {
        var n = arguments[e];
        for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (t[r] = n[r])
      }
      return t
    }).apply(this, arguments)
  }
  var qn = ["allow-forms", "allow-pointer-lock", "allow-popups", "allow-popups-to-escape-sandbox", "allow-presentation", "allow-same-origin", "allow-scripts", "function" == typeof document.hasStorageAccess && "allow-storage-access-by-user-activation"].filter(Boolean).join(" "),
    Wn = function(t) {
      return "number" != typeof t || Number.isNaN(t) ? t : "" + t
    },
    Gn = function(t, e, n) {
      if (!e.length || e.length > n) throw new Error(t + " can not be empty and can only be " + n + " characters long.")
    },
    Yn = function(t, e) {
      return new Error('Attribute with key "' + t + '" is invalid. ' + e)
    },
    Xn = Hn.e,
    Jn = Object.freeze({
      sendMessage: function(t) {
        var e = t.text,
          n = t.postback;
        if ("string" != typeof(e = Wn(e))) throw new Error("`text` must be a string or a number.");
        if (e = e.trim(), Gn("`text`", e, 1024), void 0 !== n) {
          if ("string" != typeof n) throw new Error("`postback` must be a string.");
          Gn("`postback`", n, 1024)
        }
      },
      setAttributes: function(n) {
        if (!n || "object" != typeof n) throw new Error("`attributes` must be a plain object (with shape such as `{ key: 'value' }`).");
        var t = Object.keys(n);
        if (99 < t.length) throw new Error("The maximum number of attributes is 99.");
        t.forEach(function(t) {
          var e = Wn(n[t]);
          if (t = Wn(t), !/^[\w-]{1,128}$/.test(t)) throw Yn(t, "Key must be between 1-128 characters long and can only contain alpha-numeric, underscore and dash characters.");
          if ("string" != typeof e) throw Yn(t, "Value must be a string or a number.");
          Gn("Value", e, 1024)
        })
      },
      close: Xn
    }),
    Kn = function(t) {
      return n = "moment-title", Un(t)[n] || (e = t.match(Bn)) && e[1];
      var e, n
    };
  var Qn, Zn = function(t, n) {
      var e = Object.keys(n).reduce(function(t, e) {
          return t[e] = function() {
            Jn[e].apply(Jn, arguments), n[e].apply(n, arguments)
          }, t
        }, {}),
        r = Object(qt.c)(Vn({}, t, {
          strictOrigin: !1
        }), e),
        o = r.destroy,
        i = r.frame;
      return i.sandbox = qn, {
        destroy: o,
        frame: i,
        title: Kn(t.url)
      }
    },
    tr = bn({
      mixins: [tt],
      data: function() {
        return {
          iOSDevice: !!navigator.platform.match(/iPhone|iPad/),
          frameIntervalRef: null,
          frame: null,
          isMomentLoading: !0,
          isAnimating: !0,
          destroyMoment: null,
          data: {}
        }
      },
      methods: {
        initialization: (Qn = w()(y.a.mark(function t() {
          var e, n, r, o, i, s = this;
          return y.a.wrap(function(t) {
            for (;;) switch (t.prev = t.next) {
              case 0:
                e = {
                  container: this.$refs.frameWrapper,
                  url: this.$_moment.url,
                  onConnected: function(t) {
                    var e = t.data,
                      n = t.destroy;
                    e.title || (e.title = s.data.title), s.destroyMoment = n, s.data = e
                  }
                }, n = Zn(e, {
                  sendMessage: function(t) {
                    var e = t.text,
                      n = t.postback;
                    return s.$_chat({
                      message: e,
                      postback: n
                    })
                  },
                  setAttributes: function(t) {
                    return s.$_setSessionAttributes(t)
                  },
                  close: function() {
                    return s.close()
                  }
                }), r = n.destroy, o = n.title, i = n.frame, this.frame = i, this.destroyMoment = r, this.data = {
                  title: o
                }, this.frame.addEventListener("load", function() {
                  s.isMomentLoading = !1, s.$_onMomentLoad(), s.setFrameInterval()
                });
              case 7:
              case "end":
                return t.stop()
            }
          }, t, this)
        })), function() {
          return Qn.apply(this, arguments)
        }),
        close: function() {
          this.$_closeMoment()
        },
        destroy: function() {
          "function" === this.destroyMoment && this.destroyMoment()
        },
        setFrameInterval: function() {
          var t = this;
          if (this.iOSDevice) {
            var e = function() {
              t.frame.style.height = t.frame.offsetHeight + "px"
            };
            e(), this.clearFrameInterval(), this.frameIntervalRef = setInterval(e, 500)
          }
        },
        clearFrameInterval: function() {
          this.iOSDevice && clearInterval(this.frameIntervalRef)
        }
      },
      mounted: function() {
        this.initialization()
      },
      beforeDestroy: function() {
        this.clearFrameInterval()
      }
    }, Nn, [], !1, null, null, null);
  tr.options.__file = "src/chat/components/chat-window/window-moment/window-moment.vue";
  var er = tr.exports,
    nr = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return e("transition", {
        attrs: {
          name: "offline"
        }
      }, [this.$_online ? this._e() : e("div", {
        staticClass: "offline-wrapper"
      }, [e("div", {
        staticClass: "offline-information"
      }, [this._v("\n            " + this._s(this.translations.offline_information) + "\n        ")])])])
    };
  nr._withStripped = !0;
  var rr = bn({
    mixins: [nt],
    data: function() {
      return {
        translations: fe
      }
    },
    methods: {
      setStatus: function(t) {
        var e = t.type;
        this.$_setOnline("online" === e)
      }
    },
    created: function() {
      window.addEventListener("online", this.setStatus), window.addEventListener("offline", this.setStatus)
    },
    beforeDestroy: function() {
      window.removeEventListener("online", this.setStatus), window.removeEventListener("offline", this.setStatus)
    }
  }, nr, [], !1, null, null, null);
  rr.options.__file = "src/chat/components/chat-window/window-offline/window-offline.vue";
  var or = rr.exports,
    ir = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return e("div", {
        staticClass: "window-content-wrapper"
      }, [e("window-head"), this._v(" "), e("div", {
        staticClass: "window-content",
        style: this.style.content
      }, [e("window-conversation"), this._v(" "), e("transition", {
        attrs: {
          name: "fade",
          mode: "out-in"
        }
      }, [this.$_chatEnded ? e("window-chat-ended") : e("window-typing")], 1)], 1)], 1)
    },
    sr = function() {
      var e = this,
        t = e.$createElement,
        n = e._self._c || t;
      return n("div", {
        staticClass: "head",
        class: {
          "head-mobile": e.$_mobile, "avatar-offset": e.$_avatar.enabled, small: 0 === e.header.opacity
        },
        style: e.style.head
      }, [n("div", {
        staticClass: "company",
        style: {
          opacity: e.header.opacity
        },
        on: {
          click: function(t) {
            e.autoRoll("increase")
          }
        }
      }, [e.$_avatar.enabled ? n("div", {
        staticClass: "avatar-outer-wrapper"
      }, [n("div", {
        staticClass: "avatar-wrapper"
      }, [n("div", {
        staticClass: "avatar"
      }, [e.$_avatar.url.length ? n("lazy-img", {
        attrs: {
          src: e.$_avatar.url,
          backgroundSize: 40
        }
      }) : n("div", {
        staticClass: "avatar-default"
      })], 1), e._v(" "), n("div", {
        staticClass: "avatar-status",
        style: e.style.headAvatarStatus
      })])]) : e._e(), e._v(" "), n("div", {
        staticClass: "name"
      }, [e._v("\n            " + e._s(e.$_configuration.company.name) + "\n        ")]), e._v(" "), n("div", {
        staticClass: "status"
      }, [e._v("\n            Online\n        ")]), e._v(" "), n("div", {
        staticClass: "social"
      }, [e.$_configuration.company.social.linkedin.length ? n("a", {
        staticClass: "icon",
        attrs: {
          target: "_blank",
          href: e.$_configuration.company.social.linkedin
        }
      }, [n("svg", {
        staticStyle: {
          "enable-background": "new 0 0 90 90"
        },
        style: e.style.socialIcon,
        attrs: {
          width: "20px",
          height: "20px",
          viewBox: "0 0 430.117 430.117",
          "xml:space": "preserve",
          xmlns: "http://www.w3.org/2000/svg",
          "xmlns:xlink": "http://www.w3.org/1999/xlink"
        }
      }, [n("path", {
        attrs: {
          d: "M430.117,261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707   c-25.473,0-40.632,17.142-47.301,33.724c-2.432,5.928-3.058,14.179-3.058,22.477V420.56h-92.219c0,0,1.242-251.285,0-277.32h92.21   v39.309c-0.187,0.294-0.43,0.611-0.606,0.896h0.606v-0.896c12.251-18.869,34.13-45.824,83.102-45.824   C384.633,136.724,430.117,176.361,430.117,261.543z M52.183,9.558C20.635,9.558,0,30.251,0,57.463   c0,26.619,20.038,47.94,50.959,47.94h0.616c32.159,0,52.159-21.317,52.159-47.94C103.128,30.251,83.734,9.558,52.183,9.558z    M5.477,420.56h92.184v-277.32H5.477V420.56z"
        }
      })])]) : e._e(), e._v(" "), e.$_configuration.company.social.facebook.length ? n("a", {
        staticClass: "icon",
        attrs: {
          target: "_blank",
          href: e.$_configuration.company.social.facebook
        }
      }, [n("svg", {
        staticStyle: {
          "enable-background": "new 0 0 90 90"
        },
        style: e.style.socialIcon,
        attrs: {
          width: "20px",
          height: "20px",
          viewBox: "0 0 430.113 430.114",
          "xml:space": "preserve",
          xmlns: "http://www.w3.org/2000/svg",
          "xmlns:xlink": "http://www.w3.org/1999/xlink"
        }
      }, [n("path", {
        attrs: {
          d: "M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805   c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354   c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"
        }
      })])]) : e._e(), e._v(" "), e.$_configuration.company.social.twitter.length ? n("a", {
        staticClass: "icon",
        attrs: {
          target: "_blank",
          href: e.$_configuration.company.social.twitter
        }
      }, [n("svg", {
        staticStyle: {
          "enable-background": "new 0 0 90 90"
        },
        style: e.style.socialIcon,
        attrs: {
          width: "20px",
          height: "20px",
          viewBox: "0 0 430.117 430.117",
          "xml:space": "preserve",
          xmlns: "http://www.w3.org/2000/svg",
          "xmlns:xlink": "http://www.w3.org/1999/xlink"
        }
      }, [n("path", {
        attrs: {
          d: "M381.384,198.639c24.157-1.993,40.543-12.975,46.849-27.876   c-8.714,5.353-35.764,11.189-50.703,5.631c-0.732-3.51-1.55-6.844-2.353-9.854c-11.383-41.798-50.357-75.472-91.194-71.404   c3.304-1.334,6.655-2.576,9.996-3.691c4.495-1.61,30.868-5.901,26.715-15.21c-3.5-8.188-35.722,6.188-41.789,8.067   c8.009-3.012,21.254-8.193,22.673-17.396c-12.27,1.683-24.315,7.484-33.622,15.919c3.36-3.617,5.909-8.025,6.45-12.769   C241.68,90.963,222.563,133.113,207.092,174c-12.148-11.773-22.915-21.044-32.574-26.192   c-27.097-14.531-59.496-29.692-110.355-48.572c-1.561,16.827,8.322,39.201,36.8,54.08c-6.17-0.826-17.453,1.017-26.477,3.178   c3.675,19.277,15.677,35.159,48.169,42.839c-14.849,0.98-22.523,4.359-29.478,11.642c6.763,13.407,23.266,29.186,52.953,25.947   c-33.006,14.226-13.458,40.571,13.399,36.642C113.713,320.887,41.479,317.409,0,277.828   c108.299,147.572,343.716,87.274,378.799-54.866c26.285,0.224,41.737-9.105,51.318-19.39   C414.973,206.142,393.023,203.486,381.384,198.639z"
        }
      })])]) : e._e()])])])
    };
  sr._withStripped = ir._withStripped = !0;
  var ar, cr = bn({
    mixins: [G],
    data: function() {
      return {
        lastY: 0,
        animationRef: null,
        scheduledAnimationRef: null
      }
    },
    watch: {
      $_conversation: function(t) {
        t.length && this.autoRoll("decrease")
      }
    },
    computed: {
      style: function() {
        return {
          head: {
            background: this.$_theme.theme,
            color: this.$_theme.themeText,
            height: "".concat(this.$_headerHeight, "px")
          },
          headAvatarStatus: {
            "border-color": this.$_theme.theme
          },
          socialIcon: {
            fill: this.$_theme.themeText
          }
        }
      },
      parent: function() {
        return this.$el.parentNode
      },
      header: function() {
        var t = Object.values(this.$_configuration.company.social).some(function(t) {
            return t
          }),
          e = t ? 120 : 90,
          n = 1 - (parseInt(e - this.$_headerHeight) / (e - 60)).toFixed(2);
        return {
          small: !t,
          minHeight: 60,
          maxHeight: e,
          totalDistance: e - 60,
          offset: this.$_headerHeight - 60,
          opacity: n,
          height: this.$_headerHeight
        }
      }
    },
    methods: {
      autoRoll: function(t) {
        var p = this;
        cancelAnimationFrame(this.animationRef), clearTimeout(this.scheduledAnimationRef);
        var e, d, n = this.header.small ? 200 : 300,
          h = "increase" === t,
          v = +new Date,
          m = n * (e = this.header.offset / this.header.totalDistance, h ? 1 - e : e),
          g = function() {
            p.animationRef = requestAnimationFrame(r)
          },
          r = function(t) {
            var e = p.header,
              n = e.maxHeight,
              r = e.totalDistance,
              o = e.offset,
              i = e.minHeight,
              s = e.height;
            if (!(h && s === n || !h && s === i)) {
              if (!d) return d = t, g();
              var a, c, u = t - d,
                l = +new Date - v,
                f = (a = (m - l) / u) < 1 ? 1 : a;
              if (h) c = n < (c = s + (r - o) / f) ? n : c;
              else c = (c = s - o / f) < i ? i : c;
              d = t, p.$_setHeaderHeight(c), g()
            }
          };
        g()
      },
      setScheduledAutoRoll: function(t) {
        this.scheduledAnimationRef = setTimeout(t, 200)
      },
      calculateNewHeaderHeight: function(t) {
        var e = this.$_headerHeight + t;
        e > this.header.maxHeight ? e = this.header.maxHeight : e < this.header.minHeight && (e = this.header.minHeight), this.$_setHeaderHeight(e)
      },
      setLastY: function(t) {
        void 0 !== t && (this.lastY = t)
      },
      getDeltaY: function(t) {
        var e;
        return "wheel" === t.type ? e = t.deltaY : "touchstart" === t.type ? this.setLastY(t.touches[0].clientY) : "touchmove" === t.type && (e = this.lastY - t.touches[0].clientY, this.setLastY(t.touches[0].clientY)), e
      },
      onRoll: function(t) {
        var e = this,
          n = this.getDeltaY(t);
        if (void 0 === n) return !1;
        cancelAnimationFrame(this.animationRef), clearTimeout(this.scheduledAnimationRef), 0 <= n && this.$_headerHeight > this.header.minHeight ? (this.$root.$emit(Mn, 0 < this.$_scrollTop ? this.$_scrollTop : this.$_scrollTop - n), this.calculateNewHeaderHeight(-1 * n), this.setScheduledAutoRoll(function() {
          return e.autoRoll("decrease")
        })) : n < 0 && 0 === this.$_scrollTop && this.$_headerHeight < this.header.maxHeight && (this.calculateNewHeaderHeight(-1 * n), this.setScheduledAutoRoll(function() {
          return e.autoRoll("increase")
        }))
      }
    },
    created: function() {
      this.$root.$on(Ln, this.autoRoll)
    },
    mounted: (ar = w()(y.a.mark(function t() {
      return y.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            this.parent.addEventListener("wheel", this.onRoll, {
              passive: !0
            }), this.parent.addEventListener("touchstart", this.onRoll, {
              passive: !0
            }), this.parent.addEventListener("touchmove", this.onRoll, {
              passive: !0
            });
          case 3:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function() {
      return ar.apply(this, arguments)
    }),
    beforeDestroy: function() {
      this.$root.$off(Ln, this.autoRoll), this.$_setHeaderHeight(this.header.minHeight), this.parent.removeEventListener("wheel", this.onRoll, {
        passive: !0
      }), this.parent.removeEventListener("touchstart", this.onRoll, {
        passive: !0
      }), this.parent.removeEventListener("touchmove", this.onRoll, {
        passive: !0
      })
    }
  }, sr, [], !1, null, null, null);
  cr.options.__file = "src/chat/components/chat-window/window-content/window-head/window-head.vue";
  var ur = cr.exports,
    lr = function() {
      var e = this,
        t = e.$createElement,
        n = e._self._c || t;
      return n("div", {
        staticClass: "typing",
        class: {
          "typing-mobile": e.$_mobile
        },
        style: e.style.typing
      }, [n("input", {
        ref: "input",
        style: e.style.input,
        attrs: {
          type: "text",
          maxlength: "256",
          placeholder: e.translations.input_placeholder
        },
        domProps: {
          value: e.$_message
        },
        on: {
          keyup: function(t) {
            return "button" in t || !e._k(t.keyCode, "enter", 13, t.key, "Enter") ? e.$_chat(t) : null
          },
          input: function(t) {
            e.$_setMessage(t.target.value)
          },
          focus: function(t) {
            e.$_setInputFocused(!0)
          },
          focusout: function(t) {
            e.$_setInputFocused(!1)
          }
        }
      }), e._v(" "), n("div", {
        staticClass: "actions"
      }, [n("div", {
        staticClass: "send"
      }, [n("svg", {
        class: {
          active: e.$_message.length && !e.$_waiting && e.$_online
        },
        staticStyle: {
          "enable-background": "new 0 0 24 24"
        },
        style: e.style.send,
        attrs: {
          xmlns: "http://www.w3.org/2000/svg",
          "xmlns:xlink": "http://www.w3.org/1999/xlink",
          viewBox: "0 0 24 24",
          "xml:space": "preserve"
        },
        on: {
          click: e.$_chat
        }
      }, [n("path", {
        attrs: {
          d: "M22,11.7V12h-0.1c-0.1,1-17.7,9.5-18.8,9.1c-1.1-0.4,2.4-6.7,3-7.5C6.8,12.9,17.1,12,17.1,12H17c0,0,0-0.2,0-0.2c0,0,0,0,0,0c0-0.4-10.2-1-10.8-1.7c-0.6-0.7-4-7.1-3-7.5C4.3,2.1,22,10.5,22,11.7z"
        }
      })])])])])
    };
  lr._withStripped = !0;
  var fr = bn({
    mixins: [Y],
    data: function() {
      return {
        translations: fe
      }
    },
    computed: {
      style: function() {
        return {
          typing: {
            background: this.$_theme.background,
            opacity: this.$_message.length ? 1 : .6
          },
          input: {
            color: this.$_theme.text
          },
          send: {
            fill: this.$_theme.text
          }
        }
      }
    },
    mounted: function() {
      this.$_mobile || this.$refs.input.focus()
    }
  }, lr, [], !1, null, null, null);
  fr.options.__file = "src/chat/components/chat-window/window-content/window-typing/window-typing.vue";
  var pr = fr.exports,
    dr = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return e("div", {
        staticClass: "window-chat-ended-wrapper"
      }, [e("div", {
        staticClass: "window-chat-ended-button",
        style: this.style.windowExpired,
        on: {
          click: this.startChatAgain
        }
      }, [this._v("\n        " + this._s(this.translations.start_again) + "\n    ")])])
    };
  dr._withStripped = !0;
  var hr = bn({
    mixins: [ot],
    data: function() {
      return {
        translations: fe
      }
    },
    computed: {
      style: function() {
        return {
          windowExpired: {
            background: this.$_theme.theme,
            color: this.$_theme.themeText
          }
        }
      }
    },
    methods: {
      startChatAgain: function() {
        this.$_startChatAgain(), this.$_triggerChat()
      }
    }
  }, dr, [], !1, null, null, null);
  hr.options.__file = "src/chat/components/chat-window/window-content/window-chat-ended/window-chat-ended.vue";
  var vr = hr.exports,
    mr = function() {
      var n = this,
        t = n.$createElement,
        r = n._self._c || t;
      return r("div", {
        staticClass: "conversation",
        on: {
          "&scroll": function(t) {
            return n.onScroll(t)
          }
        }
      }, [r("div", {
        staticClass: "conversation-wrapper"
      }, [n._l(n.$_conversation, function(t, e) {
        return r("response", {
          key: e,
          attrs: {
            response: t,
            indicator: n.$_indicator && n.lastIndex === e
          }
        })
      }), n._v(" "), n.$_sending.message ? r("response", {
        key: n.lastIndex + 1,
        attrs: {
          response: {
            type: "sending",
            date: n.parseDate(new Date)
          }
        }
      }) : n._e(), n._v(" "), n.$_replies.length && !n.$_waiting ? r("quick-buttons") : n._e()], 2)])
    },
    gr = function() {
      var n = this,
        t = n.$createElement,
        r = n._self._c || t;
      return r("transition", {
        attrs: {
          name: "quick-buttons"
        }
      }, [r("div", {
        staticClass: "quick"
      }, n._l(n.$_replies, function(e) {
        return r("div", {
          staticClass: "item",
          style: n.style.reply,
          on: {
            click: function(t) {
              n.$_responseButton(e)
            }
          }
        }, [n._v("\n             " + n._s(e.title) + "\n        ")])
      }), 0)])
    };
  gr._withStripped = mr._withStripped = !0;
  var _r = bn({
    mixins: [X, it],
    computed: {
      style: function() {
        return {
          reply: {
            borderColor: this.$_theme.theme,
            color: this.$_theme.themeText,
            background: this.$_theme.theme
          }
        }
      }
    }
  }, gr, [], !1, null, null, null);
  _r.options.__file = "src/chat/components/chat-window/window-content/window-conversation/quick-buttons/quick-buttons.vue";
  var yr = _r.exports,
    wr = function() {
      var t = this,
        e = t.$createElement,
        n = t._self._c || e;
      return n("transition", {
        attrs: {
          name: "response"
        }
      }, [n("div", {
        staticClass: "response"
      }, [n("div", {
        staticClass: "response-date",
        style: t.style.date
      }, [t._v("\n            " + t._s(t.response.date) + "\n        ")]), t._v(" "), t.bot ? [n("div", {
        staticClass: "response-wrapper",
        class: {
          "avatar-offset": t.$_avatar.enabled
        },
        attrs: {
          bot: ""
        }
      }, [n("avatar"), t._v(" "), n(t.indicator ? "response-indicator" : t.types[t.response.type], {
        tag: "component",
        staticClass: "response-content",
        attrs: {
          response: t.response
        }
      })], 1)] : n("div", {
        staticClass: "response-wrapper",
        attrs: {
          user: ""
        }
      }, [n(t.types[t.response.type], {
        tag: "component",
        staticClass: "response-content",
        attrs: {
          response: t.response
        }
      })], 1)], 2)])
    },
    br = function() {
      var t = this.$createElement;
      return (this._self._c || t)("response-text", {
        attrs: {
          indicator: !0
        }
      })
    },
    $r = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return e("div", {
        staticClass: "text",
        class: {
          indicator: this.indicator
        }
      }, [this.indicator ? e("div", {
        staticClass: "message",
        style: this.style.message
      }, this._l(3, function(t) {
        return e("div")
      }), 0) : e("anchors", {
        staticClass: "message",
        style: this.style.message,
        attrs: {
          text: this.response.message
        }
      })], 1)
    };
  $r._withStripped = br._withStripped = wr._withStripped = !0;
  var xr = bn({
    mixins: [X],
    props: {
      response: {},
      indicator: {
        type: Boolean,
        default: !1
      }
    },
    computed: {
      style: function() {
        return {
          message: {
            background: this.$_theme.responseBackground,
            borderColor: this.$_theme.responseBackground,
            color: this.$_theme.responseText
          }
        }
      }
    }
  }, $r, [], !1, null, null, null);
  xr.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response/response-text/response-text.vue";
  var kr = xr.exports,
    Cr = bn({
      props: ["response"],
      components: {
        "response-text": kr
      }
    }, br, [], !1, null, null, null);
  Cr.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response/response-indicator/response-indicator.vue";
  var Sr = Cr.exports,
    Er = function() {
      var t = this,
        e = t.$createElement,
        n = t._self._c || e;
      return n("div", {
        staticClass: "user",
        class: t.type
      }, [n("anchors", {
        staticClass: "message",
        style: t.style.message,
        attrs: {
          text: t.response.message
        }
      }), t._v(" "), n("div", {
        staticClass: "info",
        style: t.style.info
      }, ["sending" === t.type ? [t._v(t._s(t.translations.sending))] : "sending-error" === t.type ? [t._v(t._s(t.translations.sending_error))] : t._e()], 2)], 1)
    };
  Er._withStripped = !0;
  var Or = bn({
    mixins: [X],
    props: {
      response: {},
      type: {
        type: String,
        default: "",
        validator: function(t) {
          return ["", "sending", "sending-error"].includes(t)
        }
      }
    },
    data: function() {
      return {
        translations: fe
      }
    },
    computed: {
      style: function() {
        return "sending-error" === this.type ? {} : {
          message: {
            color: this.$_theme.themeText,
            background: this.$_theme.theme,
            borderColor: this.$_theme.theme
          },
          info: {
            color: this.$_theme.responseText
          }
        }
      }
    }
  }, Er, [], !1, null, null, null);
  Or.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response/response-user/response-user.vue";
  var Tr = Or.exports,
    Ar = function() {
      var t = this.$createElement;
      return (this._self._c || t)("response-user", {
        attrs: {
          type: this.$_sending.error ? "sending-error" : "sending",
          response: {
            message: this.$_sending.message
          }
        }
      })
    };
  Ar._withStripped = !0;
  var jr = bn({
    mixins: [K],
    components: {
      "response-user": Tr
    }
  }, Ar, [], !1, null, null, null);
  jr.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response/response-sending/response-sending.vue";
  var Ir = jr.exports,
    Pr = function() {
      var t = this.$createElement;
      return (this._self._c || t)("response-text", {
        attrs: {
          response: this.data
        }
      })
    };
  Pr._withStripped = !0;
  var Lr = bn({
    props: ["response"],
    components: {
      "response-text": kr
    },
    computed: {
      data: function() {
        var t = this.response,
          e = t.title,
          n = yt()(t, ["title"]);
        return b()({}, n, {
          message: e
        })
      }
    }
  }, Pr, [], !1, null, null, null);
  Lr.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response/response-quick-replies/response-quick-replies.vue";
  var Mr = Lr.exports,
    Dr = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return e("div", {
        staticClass: "image"
      }, [e("lazy-img", {
        attrs: {
          src: this.response.imageUrl
        },
        on: {
          done: this.done
        }
      })], 1)
    };
  Dr._withStripped = !0;
  var Rr = bn({
    mixins: [X],
    props: ["response"],
    methods: {
      done: function() {
        var t = this;
        this.$nextTick(function() {
          return t.$root.$emit(Dn)
        })
      }
    }
  }, Dr, [], !1, null, null, null);
  Rr.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response/response-image/response-image.vue";
  var zr = Rr.exports,
    Nr = function() {
      var e = this,
        t = e.$createElement,
        n = e._self._c || t;
      return n("div", {
        staticClass: "card cards"
      }, [n("carousel", {
        attrs: {
          list: e.response.buttons
        }
      }, e._l(e.response.elements, function(t) {
        return n("div", {
          staticClass: "item",
          style: e.style.card
        }, [t.imageUrl ? n("div", {
          staticClass: "image-wrapper"
        }, [n("lazy-img", {
          attrs: {
            src: t.imageUrl,
            cover: !0
          }
        })], 1) : e._e(), e._v(" "), n("div", {
          staticClass: "description"
        }, [n("anchors", {
          staticClass: "title",
          style: e.style.title,
          attrs: {
            text: t.title
          }
        }), e._v(" "), n("anchors", {
          staticClass: "subtitle",
          style: e.style.subtitle,
          attrs: {
            text: t.subtitle
          }
        })], 1), e._v(" "), n("response-buttons", {
          attrs: {
            buttons: t.buttons
          }
        })], 1)
      }), 0)], 1)
    },
    Hr = function() {
      var n = this,
        t = n.$createElement,
        r = n._self._c || t;
      return r("div", {
        staticClass: "response-buttons",
        class: {
          "no-first-border": n.noFirstBorder
        },
        style: n.style.buttons
      }, n._l(n.buttons, function(e) {
        return r("div", {
          staticClass: "button",
          style: n.$_executedButtons[e.id] ? n.style.buttonExecuted : n.style.button,
          on: {
            click: function(t) {
              n.$_responseButton(e)
            }
          }
        }, [n._v("\n        " + n._s(e.title) + "\n    ")])
      }), 0)
    };
  Hr._withStripped = Nr._withStripped = !0;
  var Br = bn({
    mixins: [J],
    props: {
      buttons: {
        type: Array,
        required: !0
      },
      noFirstBorder: {
        type: Boolean,
        default: !1
      }
    },
    computed: {
      style: function() {
        return {
          buttons: {
            background: this.$_theme.responseBackground,
            borderColor: this.$_theme.responseBackground
          },
          button: {
            borderTopColor: jn(this.$_theme.responseText, .2),
            color: this.$_theme.theme
          },
          buttonExecuted: {
            borderTopColor: jn(this.$_theme.responseText, .2),
            color: this.$_theme.themeText,
            background: this.$_theme.theme
          }
        }
      }
    }
  }, Hr, [], !1, null, null, null);
  Br.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response-buttons/response-buttons.vue";
  var Fr = Br.exports,
    Ur = function() {
      var e = this,
        t = e.$createElement,
        n = e._self._c || t;
      return n("div", {
        ref: "parent",
        staticClass: "carousel"
      }, [n("div", {
        ref: "mask",
        staticClass: "carousel-mask"
      }, [n("div", {
        ref: "wrapper",
        staticClass: "carousel-wrapper",
        style: {
          marginLeft: e.offset + "px"
        },
        on: {
          click: e.showTheWholeElement
        }
      }, [e._t("default")], 2)]), e._v(" "), e.data.parentHasScroll ? n("div", {
        staticClass: "carousel-arrows"
      }, [0 !== e.offset ? n("div", {
        staticClass: "carousel-arrow carousel-arrow-left",
        on: {
          click: function(t) {
            e.scroll("left")
          }
        }
      }, [n("svg", {
        attrs: {
          viewBox: "0 0 24 24",
          xmlns: "http://www.w3.org/2000/svg"
        }
      }, [n("path", {
        attrs: {
          d: "M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"
        }
      }), e._v(" "), n("path", {
        attrs: {
          d: "M0-.5h24v24H0z",
          fill: "none"
        }
      })])]) : e._e(), e._v(" "), e.data.scrolledToMax ? e._e() : n("div", {
        staticClass: "carousel-arrow carousel-arrow-right",
        on: {
          click: function(t) {
            e.scroll("right")
          }
        }
      }, [n("svg", {
        attrs: {
          viewBox: "0 0 24 24",
          xmlns: "http://www.w3.org/2000/svg"
        }
      }, [n("path", {
        attrs: {
          d: "M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"
        }
      }), e._v(" "), n("path", {
        attrs: {
          d: "M0-.25h24v24H0z",
          fill: "none"
        }
      })])])]) : e._e()])
    },
    Vr = bn({
      props: {
        list: {
          required: Ur._withStripped = !0
        }
      },
      watch: {
        list: function() {
          var t = this;
          this.$nextTick(function() {
            return t.setData()
          })
        }
      },
      data: function() {
        return {
          offset: 0,
          destroyHorizontalSwipe: null,
          data: {}
        }
      },
      methods: {
        showTheWholeElement: function(t) {
          for (var e = t.target, n = !1; e && e !== this.$refs.wrapper; e = e.parentNode)
            if (e.matches(".item")) {
              n = e;
              break
            } if (n) {
            var r = this.$refs.mask.offsetWidth - n.offsetWidth - n.offsetLeft;
            if (r < 0) this.offset += r - parseInt(window.getComputedStyle(n, null).marginRight, 10);
            else {
              if (!(0 <= r && n.offsetLeft < 0)) return;
              this.offset = -1 * (n.getBoundingClientRect().left - n.parentNode.getBoundingClientRect().left)
            }
            this.setData()
          }
        },
        setData: function() {
          var t = this.$el.querySelector(".item") || this.$slots.default[0].elm;
          if (!t || 1 !== t.nodeType) return this.offset = 0, void(this.data = {
            parentHasScroll: !1
          });
          var e = parseInt(window.getComputedStyle(t, null).marginLeft, 10),
            n = parseInt(window.getComputedStyle(t, null).marginRight, 10),
            r = t.scrollWidth + e + n,
            o = -1 * (this.$refs.wrapper.offsetWidth - this.$refs.parent.offsetWidth),
            i = 0 < this.$refs.wrapper.offsetWidth - this.$refs.parent.offsetWidth,
            s = !(this.$refs.parent.offsetWidth + n < this.$refs.wrapper.scrollWidth + this.offset);
          i ? this.offset < o && (this.offset = o) : this.offset = 0, this.data = {
            max: o,
            scrollOffset: r,
            marginLeft: e,
            marginRight: n,
            parentHasScroll: i,
            scrolledToMax: s
          }
        },
        scroll: function(t) {
          var e = this.offset;
          "left" === t ? e += this.data.scrollOffset : e -= this.data.scrollOffset, e < this.data.max && (e = this.data.max + this.data.marginRight), 0 < e && (e = 0), this.offset = e, this.setData()
        }
      },
      mounted: function() {
        var t, n, r, o, i, e, s, a;
        window.addEventListener("resize", this.setData), this.setData(), this.destroyHorizontalSwipe = (t = this.$el, n = this.scroll, r = 0, o = !1, i = function(t) {
          var e = 0,
            n = null;
          return t < r ? (e = r - t, n = "right") : r < t && (e = t - r, n = "left"), 20 < e && n
        }, e = function(t) {
          r = t.changedTouches[0].screenX
        }, s = function(t) {
          (o || i(t.changedTouches[0].screenX)) && (o = !0, t.stopPropagation())
        }, a = function(t) {
          o = !1;
          var e = i(t.changedTouches[0].screenX);
          if (e) return n(e)
        }, t.addEventListener("touchmove", s, {
          capture: !0,
          passive: !0
        }), t.addEventListener("touchstart", e, {
          passive: !0
        }), t.addEventListener("touchend", a, {
          passive: !0
        }), function() {
          t.removeEventListener("touchmove", s, {
            capture: !0,
            passive: !0
          }), t.removeEventListener("touchstart", e, {
            passive: !0
          }), t.removeEventListener("touchend", a, {
            passive: !0
          })
        })
      },
      beforeDestroy: function() {
        window.removeEventListener("resize", this.setData), "function" == typeof this.destroyHorizontalSwipe && this.destroyHorizontalSwipe()
      }
    }, Ur, [], !1, null, null, null);
  Vr.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response/response-cards/carousel/carousel.vue";
  var qr = bn({
    components: {
      "response-buttons": Fr,
      carousel: Vr.exports
    },
    mixins: [X],
    props: ["response"],
    computed: {
      style: function() {
        return {
          card: {
            background: this.$_theme.responseBackground,
            borderColor: this.$_theme.responseBackground
          },
          title: {
            color: this.$_theme.responseText
          },
          subtitle: {
            color: jn(this.$_theme.responseText, .6)
          }
        }
      }
    }
  }, Nr, [], !1, null, null, null);
  qr.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response/response-cards/response-cards.vue";
  var Wr = qr.exports,
    Gr = function() {
      var t = this,
        e = t.$createElement,
        n = t._self._c || e;
      return n("div", {
        staticClass: "card"
      }, [n("div", {
        staticClass: "item",
        style: t.style.card
      }, [t.response.imageUrl ? n("div", {
        staticClass: "image-wrapper"
      }, [n("lazy-img", {
        attrs: {
          src: t.response.imageUrl,
          cover: !0
        }
      })], 1) : t._e(), t._v(" "), n("div", {
        staticClass: "description"
      }, [n("anchors", {
        staticClass: "title",
        style: t.style.title,
        attrs: {
          text: t.response.title
        }
      }), t._v(" "), n("anchors", {
        staticClass: "subtitle",
        style: t.style.subtitle,
        attrs: {
          text: t.response.subtitle
        }
      })], 1), t._v(" "), n("response-buttons", {
        attrs: {
          buttons: t.response.buttons
        }
      })], 1)])
    };
  Gr._withStripped = !0;
  var Yr = bn({
    components: {
      "response-buttons": Fr
    },
    mixins: [X],
    props: ["response"],
    computed: {
      style: function() {
        return {
          card: {
            background: this.$_theme.responseBackground,
            borderColor: this.$_theme.responseBackground
          },
          title: {
            color: this.$_theme.responseText
          },
          subtitle: {
            color: jn(this.$_theme.responseText, .6)
          }
        }
      }
    }
  }, Gr, [], !1, null, null, null);
  Yr.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response/response-card/response-card.vue";
  var Xr = Yr.exports,
    Jr = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return e("div", {
        staticClass: "button"
      }, [e("div", {
        staticClass: "item"
      }, [e("anchors", {
        staticClass: "message",
        style: this.style.message,
        attrs: {
          text: this.response.title
        }
      }), this._v(" "), e("div", {
        staticClass: "buttons-wrapper"
      }, [e("response-buttons", {
        attrs: {
          buttons: this.response.buttons,
          noFirstBorder: !0
        }
      })], 1)], 1)])
    };
  Jr._withStripped = !0;
  var Kr = bn({
    components: {
      "response-buttons": Fr
    },
    mixins: [X],
    props: ["response"],
    computed: {
      style: function() {
        return {
          message: {
            background: this.$_theme.responseBackground,
            borderColor: this.$_theme.responseBackground,
            color: this.$_theme.responseText
          },
          buttons: {
            background: this.$_theme.responseBackground,
            borderColor: this.$_theme.responseBackground
          },
          button: {
            borderTopColor: jn(this.$_theme.responseText, .2),
            color: this.$_theme.theme
          }
        }
      }
    }
  }, Jr, [], !1, null, null, null);
  Kr.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response/response-button/response-button.vue";
  var Qr = Kr.exports,
    Zr = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return this.$_avatar.enabled ? e("div", {
        staticClass: "avatar",
        style: this.style.avatar
      }) : this._e()
    };
  Zr._withStripped = !0;
  var to = bn({
    mixins: [et],
    computed: {
      style: function() {
        return {
          avatar: this.$_avatar.exists ? {
            "background-image": "url(".concat(this.$_avatar.url, ")")
          } : void 0
        }
      }
    }
  }, Zr, [], !1, null, null, null);
  to.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response/avatar/avatar.vue";
  var eo = bn({
    mixins: [rt],
    components: {
      "response-indicator": Sr,
      "response-sending": Ir,
      "response-user": Tr,
      "response-text": kr,
      "response-quick-replies": Mr,
      "response-image": zr,
      "response-cards": Wr,
      "response-card": Xr,
      "response-button": Qr,
      avatar: to.exports
    },
    props: {
      response: {
        type: Object,
        required: !0
      },
      indicator: {
        type: Boolean,
        default: !1
      }
    },
    data: function() {
      return {
        types: ye
      }
    },
    computed: {
      bot: function() {
        return !["user", "sending"].includes(this.response.type)
      },
      style: function() {
        return {
          date: {
            color: jn(this.$_theme.text, .7)
          }
        }
      }
    }
  }, wr, [], !1, null, null, null);
  eo.options.__file = "src/chat/components/chat-window/window-content/window-conversation/response/response.vue";
  var no = bn({
    mixins: [Q],
    components: {
      "quick-buttons": yr,
      response: eo.exports
    },
    data: function() {
      return {
        scrolledToBottom: !1,
        animationRef: null
      }
    },
    watch: {
      $_inputFocused: function() {
        this.setScrolledToBottom()
      },
      $_mobile: {
        immediate: !0,
        handler: function(t) {
          t ? window.addEventListener("resize", this.onResize) : window.removeEventListener("resize", this.onResize)
        }
      },
      $_headerHeight: function(t, e) {
        t - e <= 0 || !this.scrolledToBottom || this.scrollDown(!1)
      }
    },
    methods: {
      scrollDown: function() {
        var t = this,
          e = !(0 < arguments.length && void 0 !== arguments[0]) || arguments[0];
        cancelAnimationFrame(this.animationRef);
        var i = this.$el,
          s = i.scrollHeight - i.clientHeight;
        if (!e || 550 < s - i.scrollTop) return i.scrollTop = s;
        var a = i.scrollTop,
          c = s - a,
          u = +new Date,
          l = !0,
          f = null,
          p = function() {
            t.animationRef = requestAnimationFrame(n)
          },
          n = function() {
            if (l) {
              p();
              var t, e, n, r = +new Date,
                o = Math.floor((t = r - u, e = a, n = c, (t /= 400 / 2) < 1 ? n / 2 * t * t + e : -n / 2 * (--t * (t - 2) - 1) + e));
              f ? f === i.scrollTop ? (i.scrollTop = o, f = i.scrollTop) : l = !1 : (i.scrollTop = o, f = i.scrollTop), u + 400 < r && (i.scrollTop = s, l = !1)
            }
          };
        p()
      },
      setScroll: function(t) {
        this.$el.scrollTop = t
      },
      setScrolledToBottom: function() {
        this.scrolledToBottom = this.$el.scrollHeight - this.$el.scrollTop === this.$el.clientHeight
      },
      onScroll: function(t) {
        this.$_setScrollTop(t.target.scrollTop), this.setScrolledToBottom()
      },
      onResize: function() {
        this.$_inputFocused && this.scrolledToBottom && this.scrollDown(!1)
      },
      parseDate: he
    },
    computed: {
      lastIndex: function() {
        return this.$_conversation.length - 1
      }
    },
    created: function() {
      this.$root.$on(Mn, this.setScroll), this.$root.$on(Dn, this.scrollDown)
    },
    mounted: function() {
      this.scrollDown(!1)
    },
    updated: function() {
      this.scrollDown(!0)
    },
    beforeDestroy: function() {
      cancelAnimationFrame(this.animationRef), this.$root.$off(Mn, this.setScroll), this.$root.$off(Dn, this.scrollDown), window.removeEventListener("resize", this.onResize)
    }
  }, mr, [], !1, null, null, null);
  no.options.__file = "src/chat/components/chat-window/window-content/window-conversation/window-conversation.vue";
  var ro = bn({
    mixins: [V],
    components: {
      "window-head": ur,
      "window-typing": pr,
      "window-conversation": no.exports,
      "window-chat-ended": vr
    },
    computed: {
      style: function() {
        return {
          content: {
            height: "calc(100% - ".concat(this.$_headerHeight, "px)")
          }
        }
      }
    }
  }, ir, [], !1, null, null, null);
  ro.options.__file = "src/chat/components/chat-window/window-content/window-content.vue";
  var oo = ro.exports,
    io = function() {
      var t = this.$createElement;
      this._self._c;
      return this._m(0)
    };
  io._withStripped = !0;
  var so = bn({}, io, [function() {
    var t = this.$createElement,
      e = this._self._c || t;
    return e("a", {
      staticClass: "powered",
      attrs: {
        target: "_blank",
        href: 'http://researchfreelancer.loc?utm_source=chat_window'
      }
    }, [this._v("\n    Powered by "), e("span", [this._v("Research Freelancer")])])
  }], !1, null, null, null);
  so.options.__file = "src/chat/components/chat-window/window-powered/window-powered.vue";
  var ao = so.exports,
    co = function() {
      var e = this,
        t = e.$createElement,
        n = e._self._c || t;
      return n("div", {
        staticClass: "window-close",
        style: e.style.close
      }, [n("close-icon", {
        style: e.style.icon,
        attrs: {
          title: "close the chat"
        },
        nativeOn: {
          click: function(t) {
            return e.$_closeChat(t)
          }
        }
      })], 1)
    };
  co._withStripped = !0;
  var uo = bn({
    mixins: [q],
    computed: {
      style: function() {
        return {
          close: {
            background: this.$_theme.theme
          },
          icon: {
            fill: this.$_theme.themeText
          }
        }
      }
    }
  }, co, [], !1, null, null, null);
  uo.options.__file = "src/chat/components/chat-window/window-close/window-close.vue";
  var lo, fo = bn({
    mixins: [U],
    components: {
      "window-start": zn,
      "window-moment": er,
      "window-offline": or,
      "window-content": oo,
      "window-powered": ao,
      "window-close": uo.exports
    },
    computed: {
      style: function() {
        return {
          windowWrapper: {
            background: jn(this.$_theme.background)
          }
        }
      }
    },
    methods: {
      updateFrameStyle: function() {
        var t = {};
        this.$_mobile ? (t = {
          width: "100%",
          height: "100%"
        }, mt.call("setMetaViewport", !0)) : (t = {
          width: "410px",
          height: "700px"
        }, mt.call("setMetaViewport", !1)), mt.call("updateFrameStyle", t)
      }
    },
    watch: {
      $_mobile: function() {
        this.updateFrameStyle()
      }
    },
    created: function() {
      this.updateFrameStyle()
    },
    mounted: (lo = w()(y.a.mark(function t() {
      return y.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            this.$_configuration.welcomeScreen || this.$_conversationInitialized || this.$_triggerChat();
          case 1:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function() {
      return lo.apply(this, arguments)
    })
  }, An, [], !1, null, null, null);
  fo.options.__file = "src/chat/components/chat-window/chat-window.vue";
  var po, ho = bn({
    mixins: [R],
    components: {
      "chat-button": Tn,
      "chat-window": fo.exports
    },
    data: function() {
      return {
        initialized: !1
      }
    },
    methods: {
      afterAnimation: function() {
        this.$_opened && this.$_conversationInitialized && this.$root.$emit(Ln, "increase")
      }
    },
    created: (po = w()(y.a.mark(function t() {
      return y.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            return t.next = 2, this.$_initializeState();
          case 2:
            if (t.sent) return t.next = 5, this.$_initializeSessionState();
            t.next = 6;
            break;
          case 5:
            this.initialized = !0;
          case 6:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function() {
      return po.apply(this, arguments)
    })
  }, i, [], !1, null, null, null);
  ho.options.__file = "src/chat/components/chat.vue";
  var vo = {
      components: {
        chat: ho.exports
      }
    },
    mo = (n(37), bn(vo, o, [], !1, null, null, null));
  mo.options.__file = "src/chat/app.vue";
  var go = mo.exports;

  function _o(t) {
    this.state = 2, this.value = void 0, this.deferred = [];
    var e = this;
    try {
      t(function(t) {
        e.resolve(t)
      }, function(t) {
        e.reject(t)
      })
    } catch (t) {
      e.reject(t)
    }
  }
  _o.reject = function(n) {
    return new _o(function(t, e) {
      e(n)
    })
  }, _o.resolve = function(n) {
    return new _o(function(t, e) {
      t(n)
    })
  }, _o.all = function(s) {
    return new _o(function(n, t) {
      var r = 0,
        o = [];

      function e(e) {
        return function(t) {
          o[e] = t, (r += 1) === s.length && n(o)
        }
      }
      0 === s.length && n(o);
      for (var i = 0; i < s.length; i += 1) _o.resolve(s[i]).then(e(i), t)
    })
  }, _o.race = function(r) {
    return new _o(function(t, e) {
      for (var n = 0; n < r.length; n += 1) _o.resolve(r[n]).then(t, e)
    })
  };
  var yo = _o.prototype;

  function wo(t, e) {
    t instanceof Promise ? this.promise = t : this.promise = new Promise(t.bind(e)), this.context = e
  }
  yo.resolve = function(t) {
    var e = this;
    if (2 === e.state) {
      if (t === e) throw new TypeError("Promise settled with itself.");
      var n = !1;
      try {
        var r = t && t.then;
        if (null !== t && "object" == typeof t && "function" == typeof r) return void r.call(t, function(t) {
          n || e.resolve(t), n = !0
        }, function(t) {
          n || e.reject(t), n = !0
        })
      } catch (t) {
        return void(n || e.reject(t))
      }
      e.state = 0, e.value = t, e.notify()
    }
  }, yo.reject = function(t) {
    if (2 === this.state) {
      if (t === this) throw new TypeError("Promise settled with itself.");
      this.state = 1, this.value = t, this.notify()
    }
  }, yo.notify = function() {
    var t, i = this;
    $o(function() {
      if (2 !== i.state)
        for (; i.deferred.length;) {
          var t = i.deferred.shift(),
            e = t[0],
            n = t[1],
            r = t[2],
            o = t[3];
          try {
            0 === i.state ? r("function" == typeof e ? e.call(void 0, i.value) : i.value) : 1 === i.state && ("function" == typeof n ? r(n.call(void 0, i.value)) : o(i.value))
          } catch (t) {
            o(t)
          }
        }
    }, t)
  }, yo.then = function(n, r) {
    var o = this;
    return new _o(function(t, e) {
      o.deferred.push([n, r, t, e]), o.notify()
    })
  }, yo.catch = function(t) {
    return this.then(void 0, t)
  }, "undefined" == typeof Promise && (window.Promise = _o), wo.all = function(t, e) {
    return new wo(Promise.all(t), e)
  }, wo.resolve = function(t, e) {
    return new wo(Promise.resolve(t), e)
  }, wo.reject = function(t, e) {
    return new wo(Promise.reject(t), e)
  }, wo.race = function(t, e) {
    return new wo(Promise.race(t), e)
  };
  var bo = wo.prototype;
  bo.bind = function(t) {
    return this.context = t, this
  }, bo.then = function(t, e) {
    return t && t.bind && this.context && (t = t.bind(this.context)), e && e.bind && this.context && (e = e.bind(this.context)), new wo(this.promise.then(t, e), this.context)
  }, bo.catch = function(t) {
    return t && t.bind && this.context && (t = t.bind(this.context)), new wo(this.promise.catch(t), this.context)
  }, bo.finally = function(e) {
    return this.then(function(t) {
      return e.call(this), t
    }, function(t) {
      return e.call(this), Promise.reject(t)
    })
  };
  var $o, xo = {}.hasOwnProperty,
    ko = [].slice,
    Co = !1,
    So = "undefined" != typeof window;

  function Eo(t) {
    return t ? t.replace(/^\s*|\s*$/g, "") : ""
  }

  function Oo(t) {
    return t ? t.toLowerCase() : ""
  }
  var To = Array.isArray;

  function Ao(t) {
    return "string" == typeof t
  }

  function jo(t) {
    return "function" == typeof t
  }

  function Io(t) {
    return null !== t && "object" == typeof t
  }

  function Po(t) {
    return Io(t) && Object.getPrototypeOf(t) == Object.prototype
  }

  function Lo(t, e, n) {
    var r = wo.resolve(t);
    return arguments.length < 2 ? r : r.then(e, n)
  }

  function Mo(t, e, n) {
    return jo(n = n || {}) && (n = n.call(e)), zo(t.bind({
      $vm: e,
      $options: n
    }), t, {
      $options: n
    })
  }

  function Do(t, e) {
    var n, r;
    if (To(t))
      for (n = 0; n < t.length; n++) e.call(t[n], t[n], n);
    else if (Io(t))
      for (r in t) xo.call(t, r) && e.call(t[r], t[r], r);
    return t
  }
  var Ro = Object.assign || function(e) {
    return ko.call(arguments, 1).forEach(function(t) {
      No(e, t)
    }), e
  };

  function zo(e) {
    return ko.call(arguments, 1).forEach(function(t) {
      No(e, t, !0)
    }), e
  }

  function No(t, e, n) {
    for (var r in e) n && (Po(e[r]) || To(e[r])) ? (Po(e[r]) && !Po(t[r]) && (t[r] = {}), To(e[r]) && !To(t[r]) && (t[r] = []), No(t[r], e[r], n)) : void 0 !== e[r] && (t[r] = e[r])
  }

  function Ho(t, e, n) {
    var r, a, c, o = (r = t, a = ["+", "#", ".", "/", ";", "?", "&"], {
        vars: c = [],
        expand: function(s) {
          return r.replace(/\{([^{}]+)\}|([^{}]+)/g, function(t, e, n) {
            if (e) {
              var r = null,
                o = [];
              if (-1 !== a.indexOf(e.charAt(0)) && (r = e.charAt(0), e = e.substr(1)), e.split(/,/g).forEach(function(t) {
                  var e = /([^:*]*)(?::(\d+)|(\*))?/.exec(t);
                  o.push.apply(o, function(t, e, n, r) {
                    var o = t[n],
                      i = [];
                    if (Bo(o) && "" !== o)
                      if ("string" == typeof o || "number" == typeof o || "boolean" == typeof o) o = o.toString(), r && "*" !== r && (o = o.substring(0, parseInt(r, 10))), i.push(Uo(e, o, Fo(e) ? n : null));
                      else if ("*" === r) Array.isArray(o) ? o.filter(Bo).forEach(function(t) {
                      i.push(Uo(e, t, Fo(e) ? n : null))
                    }) : Object.keys(o).forEach(function(t) {
                      Bo(o[t]) && i.push(Uo(e, o[t], t))
                    });
                    else {
                      var s = [];
                      Array.isArray(o) ? o.filter(Bo).forEach(function(t) {
                        s.push(Uo(e, t))
                      }) : Object.keys(o).forEach(function(t) {
                        Bo(o[t]) && (s.push(encodeURIComponent(t)), s.push(Uo(e, o[t].toString())))
                      }), Fo(e) ? i.push(encodeURIComponent(n) + "=" + s.join(",")) : 0 !== s.length && i.push(s.join(","))
                    } else ";" === e ? i.push(encodeURIComponent(n)) : "" !== o || "&" !== e && "?" !== e ? "" === o && i.push("") : i.push(encodeURIComponent(n) + "=");
                    return i
                  }(s, r, e[1], e[2] || e[3])), c.push(e[1])
                }), r && "+" !== r) {
                var i = ",";
                return "?" === r ? i = "&" : "#" !== r && (i = r), (0 !== o.length ? r : "") + o.join(i)
              }
              return o.join(",")
            }
            return Vo(n)
          })
        }
      }),
      i = o.expand(e);
    return n && n.push.apply(n, o.vars), i
  }

  function Bo(t) {
    return null != t
  }

  function Fo(t) {
    return ";" === t || "&" === t || "?" === t
  }

  function Uo(t, e, n) {
    return e = "+" === t || "#" === t ? Vo(e) : encodeURIComponent(e), n ? encodeURIComponent(n) + "=" + e : e
  }

  function Vo(t) {
    return t.split(/(%[0-9A-Fa-f]{2})/g).map(function(t) {
      return /%[0-9A-Fa-f]/.test(t) || (t = encodeURI(t)), t
    }).join("")
  }

  function qo(t, e) {
    var o, i = this || {},
      n = t;
    return Ao(t) && (n = {
      url: t,
      params: e
    }), n = zo({}, qo.options, i.$options, n), qo.transforms.forEach(function(t) {
      var e, n, r;
      Ao(t) && (t = qo.transform[t]), jo(t) && (e = t, n = o, r = i.$vm, o = function(t) {
        return e.call(r, t, n)
      })
    }), o(n)
  }

  function Wo(i) {
    return new wo(function(r) {
      var o = new XDomainRequest,
        t = function(t) {
          var e = t.type,
            n = 0;
          "load" === e ? n = 200 : "error" === e && (n = 500), r(i.respondWith(o.responseText, {
            status: n
          }))
        };
      i.abort = function() {
        return o.abort()
      }, o.open(i.method, i.getUrl()), i.timeout && (o.timeout = i.timeout), o.onload = t, o.onabort = t, o.onerror = t, o.ontimeout = t, o.onprogress = function() {}, o.send(i.getBody())
    })
  }
  qo.options = {
    url: "",
    root: null,
    params: {}
  }, qo.transform = {
    template: function(e) {
      var t = [],
        n = Ho(e.url, e.params, t);
      return t.forEach(function(t) {
        delete e.params[t]
      }), n
    },
    query: function(t, e) {
      var n = Object.keys(qo.options.params),
        r = {},
        o = e(t);
      return Do(t.params, function(t, e) {
        -1 === n.indexOf(e) && (r[e] = t)
      }), (r = qo.params(r)) && (o += (-1 == o.indexOf("?") ? "?" : "&") + r), o
    },
    root: function(t, e) {
      var n, r, o = e(t);
      return Ao(t.root) && !/^(https?:)?\//.test(o) && (n = t.root, r = "/", o = (n && void 0 === r ? n.replace(/\s+$/, "") : n && r ? n.replace(new RegExp("[" + r + "]+$"), "") : n) + "/" + o), o
    }
  }, qo.transforms = ["template", "query", "root"], qo.params = function(t) {
    var e = [],
      n = encodeURIComponent;
    return e.add = function(t, e) {
        jo(e) && (e = e()), null === e && (e = ""), this.push(n(t) + "=" + n(e))
      },
      function n(r, t, o) {
        var i, s = To(t),
          a = Po(t);
        Do(t, function(t, e) {
          i = Io(t) || To(t), o && (e = o + "[" + (a || i ? e : "") + "]"), !o && s ? r.add(t.name, t.value) : i ? n(r, t, e) : r.add(e, t)
        })
      }(e, t), e.join("&").replace(/%20/g, "+")
  }, qo.parse = function(t) {
    var e = document.createElement("a");
    return document.documentMode && (e.href = t, t = e.href), e.href = t, {
      href: e.href,
      protocol: e.protocol ? e.protocol.replace(/:$/, "") : "",
      port: e.port,
      host: e.host,
      hostname: e.hostname,
      pathname: "/" === e.pathname.charAt(0) ? e.pathname : "/" + e.pathname,
      search: e.search ? e.search.replace(/^\?/, "") : "",
      hash: e.hash ? e.hash.replace(/^#/, "") : ""
    }
  };
  var Go = So && "withCredentials" in new XMLHttpRequest;

  function Yo(a) {
    return new wo(function(r) {
      var t, o, e = a.jsonp || "callback",
        i = a.jsonpCallback || "_jsonp" + Math.random().toString(36).substr(2),
        s = null;
      t = function(t) {
        var e = t.type,
          n = 0;
        "load" === e && null !== s ? n = 200 : "error" === e && (n = 500), n && window[i] && (delete window[i], document.body.removeChild(o)), r(a.respondWith(s, {
          status: n
        }))
      }, window[i] = function(t) {
        s = JSON.stringify(t)
      }, a.abort = function() {
        t({
          type: "abort"
        })
      }, a.params[e] = i, a.timeout && setTimeout(a.abort, a.timeout), (o = document.createElement("script")).src = a.getUrl(), o.type = "text/javascript", o.async = !0, o.onload = t, o.onerror = t, document.body.appendChild(o)
    })
  }

  function Xo(o) {
    return new wo(function(n) {
      var r = new XMLHttpRequest,
        t = function(t) {
          var e = o.respondWith("response" in r ? r.response : r.responseText, {
            status: 1223 === r.status ? 204 : r.status,
            statusText: 1223 === r.status ? "No Content" : Eo(r.statusText)
          });
          Do(Eo(r.getAllResponseHeaders()).split("\n"), function(t) {
            e.headers.append(t.slice(0, t.indexOf(":")), t.slice(t.indexOf(":") + 1))
          }), n(e)
        };
      o.abort = function() {
        return r.abort()
      }, r.open(o.method, o.getUrl(), !0), o.timeout && (r.timeout = o.timeout), o.responseType && "responseType" in r && (r.responseType = o.responseType), (o.withCredentials || o.credentials) && (r.withCredentials = !0), o.crossOrigin || o.headers.set("X-Requested-With", "XMLHttpRequest"), jo(o.progress) && "GET" === o.method && r.addEventListener("progress", o.progress), jo(o.downloadProgress) && r.addEventListener("progress", o.downloadProgress), jo(o.progress) && /^(POST|PUT)$/i.test(o.method) && r.upload.addEventListener("progress", o.progress), jo(o.uploadProgress) && r.upload && r.upload.addEventListener("progress", o.uploadProgress), o.headers.forEach(function(t, e) {
        r.setRequestHeader(e, t)
      }), r.onload = t, r.onabort = t, r.onerror = t, r.ontimeout = t, r.send(o.getBody())
    })
  }

  function Jo(s) {
    var a = n(38);
    return new wo(function(e) {
      var n, t = s.getUrl(),
        r = s.getBody(),
        o = s.method,
        i = {};
      s.headers.forEach(function(t, e) {
        i[e] = t
      }), a(t, {
        body: r,
        method: o,
        headers: i
      }).then(n = function(t) {
        var n = s.respondWith(t.body, {
          status: t.statusCode,
          statusText: Eo(t.statusMessage)
        });
        Do(t.headers, function(t, e) {
          n.headers.set(e, t)
        }), e(n)
      }, function(t) {
        return n(t.response)
      })
    })
  }

  function Ko(t) {
    return (t.client || (So ? Xo : Jo))(t)
  }
  var Qo = function(t) {
    var n = this;
    this.map = {}, Do(t, function(t, e) {
      return n.append(e, t)
    })
  };

  function Zo(t, n) {
    return Object.keys(t).reduce(function(t, e) {
      return Oo(n) === Oo(e) ? e : t
    }, null)
  }
  Qo.prototype.has = function(t) {
    return null !== Zo(this.map, t)
  }, Qo.prototype.get = function(t) {
    var e = this.map[Zo(this.map, t)];
    return e ? e.join() : null
  }, Qo.prototype.getAll = function(t) {
    return this.map[Zo(this.map, t)] || []
  }, Qo.prototype.set = function(t, e) {
    this.map[function(t) {
      if (/[^a-z0-9\-#$%&'*+.^_`|~]/i.test(t)) throw new TypeError("Invalid character in header field name");
      return Eo(t)
    }(Zo(this.map, t) || t)] = [Eo(e)]
  }, Qo.prototype.append = function(t, e) {
    var n = this.map[Zo(this.map, t)];
    n ? n.push(Eo(e)) : this.set(t, e)
  }, Qo.prototype.delete = function(t) {
    delete this.map[Zo(this.map, t)]
  }, Qo.prototype.deleteAll = function() {
    this.map = {}
  }, Qo.prototype.forEach = function(n, r) {
    var o = this;
    Do(this.map, function(t, e) {
      Do(t, function(t) {
        return n.call(r, t, e, o)
      })
    })
  };
  var ti = function(t, e) {
    var n, r, o, i = e.url,
      s = e.headers,
      a = e.status,
      c = e.statusText;
    this.url = i, this.ok = 200 <= a && a < 300, this.status = a || 0, this.statusText = c || "", this.headers = new Qo(s), Ao(this.body = t) ? this.bodyText = t : (o = t, "undefined" != typeof Blob && o instanceof Blob && (this.bodyBlob = t, (0 === (r = t).type.indexOf("text") || -1 !== r.type.indexOf("json")) && (this.bodyText = (n = t, new wo(function(t) {
      var e = new FileReader;
      e.readAsText(n), e.onload = function() {
        t(e.result)
      }
    })))))
  };
  ti.prototype.blob = function() {
    return Lo(this.bodyBlob)
  }, ti.prototype.text = function() {
    return Lo(this.bodyText)
  }, ti.prototype.json = function() {
    return Lo(this.text(), function(t) {
      return JSON.parse(t)
    })
  }, Object.defineProperty(ti.prototype, "data", {
    get: function() {
      return this.body
    },
    set: function(t) {
      this.body = t
    }
  });
  var ei = function(t) {
    var e;
    this.body = null, this.params = {}, Ro(this, t, {
      method: (e = t.method || "GET", e ? e.toUpperCase() : "")
    }), this.headers instanceof Qo || (this.headers = new Qo(this.headers))
  };
  ei.prototype.getUrl = function() {
    return qo(this)
  }, ei.prototype.getBody = function() {
    return this.body
  }, ei.prototype.respondWith = function(t, e) {
    return new ti(t, Ro(e || {}, {
      url: this.getUrl()
    }))
  };
  var ni = {
    "Content-Type": "application/json;charset=utf-8"
  };

  function ri(t) {
    var e = this || {},
      n = function(i) {
        var s = [Ko],
          a = [];

        function t(t) {
          for (; s.length;) {
            var e = s.pop();
            if (jo(e)) {
              var r = void 0,
                n = void 0;
              if (Io(r = e.call(i, t, function(t) {
                  return n = t
                }) || n)) return new wo(function(t, n) {
                a.forEach(function(e) {
                  r = Lo(r, function(t) {
                    return e.call(i, t) || t
                  }, n)
                }), Lo(r, t, n)
              }, i);
              jo(r) && a.unshift(r)
            } else o = "Invalid interceptor of type " + typeof e + ", must be a function", "undefined" != typeof console && Co && console.warn("[VueResource warn]: " + o)
          }
          var o
        }
        return Io(i) || (i = null), t.use = function(t) {
          s.push(t)
        }, t
      }(e.$vm);
    return function(n) {
      ko.call(arguments, 1).forEach(function(t) {
        for (var e in t) void 0 === n[e] && (n[e] = t[e])
      })
    }(t || {}, e.$options, ri.options), ri.interceptors.forEach(function(t) {
      Ao(t) && (t = ri.interceptor[t]), jo(t) && n.use(t)
    }), n(new ei(t)).then(function(t) {
      return t.ok ? t : wo.reject(t)
    }, function(t) {
      var e;
      return t instanceof Error && (e = t, "undefined" != typeof console && console.error(e)), wo.reject(t)
    })
  }

  function oi(n, r, t, o) {
    var i = this || {},
      s = {};
    return Do(t = Ro({}, oi.actions, t), function(t, e) {
      t = zo({
        url: n,
        params: Ro({}, r)
      }, o, t), s[e] = function() {
        return (i.$http || ri)(function(t, e) {
          var n, r = Ro({}, t),
            o = {};
          switch (e.length) {
            case 2:
              o = e[0], n = e[1];
              break;
            case 1:
              /^(POST|PUT|PATCH)$/i.test(r.method) ? n = e[0] : o = e[0];
              break;
            case 0:
              break;
            default:
              throw "Expected up to 2 arguments [params, body], got " + e.length + " arguments"
          }
          return r.body = n, r.params = Ro({}, r.params, o), r
        }(t, arguments))
      }
    }), s
  }

  function ii(n) {
    var t, e, r;
    ii.installed || (e = (t = n).config, r = t.nextTick, $o = r, Co = e.debug || !e.silent, n.url = qo, n.http = ri, n.resource = oi, n.Promise = wo, Object.defineProperties(n.prototype, {
      $url: {
        get: function() {
          return Mo(n.url, this, this.$options.url)
        }
      },
      $http: {
        get: function() {
          return Mo(n.http, this, this.$options.http)
        }
      },
      $resource: {
        get: function() {
          return n.resource.bind(this)
        }
      },
      $promise: {
        get: function() {
          var e = this;
          return function(t) {
            return new n.Promise(t, e)
          }
        }
      }
    }))
  }
  ri.options = {}, ri.headers = {
    put: ni,
    post: ni,
    patch: ni,
    delete: ni,
    common: {
      Accept: "application/json, text/plain, */*"
    },
    custom: {}
  }, ri.interceptor = {
    before: function(t) {
      jo(t.before) && t.before.call(this, t)
    },
    method: function(t) {
      t.emulateHTTP && /^(PUT|PATCH|DELETE)$/i.test(t.method) && (t.headers.set("X-HTTP-Method-Override", t.method), t.method = "POST")
    },
    jsonp: function(t) {
      "JSONP" == t.method && (t.client = Yo)
    },
    json: function(t) {
      var e = t.headers.get("Content-Type") || "";
      return Io(t.body) && 0 === e.indexOf("application/json") && (t.body = JSON.stringify(t.body)),
        function(r) {
          return r.bodyText ? Lo(r.text(), function(t) {
            var e, n;
            if (0 === (r.headers.get("Content-Type") || "").indexOf("application/json") || (n = (e = t).match(/^\s*(\[|\{)/)) && {
                "[": /]\s*$/,
                "{": /}\s*$/
              } [n[1]].test(e)) try {
              r.body = JSON.parse(t)
            } catch (t) {
              r.body = null
            } else r.body = t;
            return r
          }) : r
        }
    },
    form: function(t) {
      var e;
      e = t.body, "undefined" != typeof FormData && e instanceof FormData ? t.headers.delete("Content-Type") : Io(t.body) && t.emulateJSON && (t.body = qo.params(t.body), t.headers.set("Content-Type", "application/x-www-form-urlencoded"))
    },
    header: function(n) {
      Do(Ro({}, ri.headers.common, n.crossOrigin ? {} : ri.headers.custom, ri.headers[Oo(n.method)]), function(t, e) {
        n.headers.has(e) || n.headers.set(e, t)
      })
    },
    cors: function(t) {
      if (So) {
        var e = qo.parse(location.href),
          n = qo.parse(t.getUrl());
        n.protocol === e.protocol && n.host === e.host || (t.crossOrigin = !0, t.emulateHTTP = !1, Go || (t.client = Wo))
      }
    }
  }, ri.interceptors = ["before", "method", "jsonp", "json", "form", "header", "cors"], ["get", "delete", "head", "jsonp"].forEach(function(n) {
    ri[n] = function(t, e) {
      return this(Ro(e || {}, {
        url: t,
        method: n
      }))
    }
  }), ["post", "put", "patch"].forEach(function(r) {
    ri[r] = function(t, e, n) {
      return this(Ro(n || {}, {
        url: t,
        method: r,
        body: e
      }))
    }
  }), oi.actions = {
    get: {
      method: "GET"
    },
    save: {
      method: "POST"
    },
    query: {
      method: "GET"
    },
    update: {
      method: "PUT"
    },
    remove: {
      method: "DELETE"
    },
    delete: {
      method: "DELETE"
    }
  }, "undefined" != typeof window && window.Vue && window.Vue.use(ii);
  var si = ii,
    ai = function() {
      var t = this.$createElement;
      return (this._self._c || t)("div", {
        domProps: {
          innerHTML: this._s(this.addAnchorsToString(this.text))
        },
        on: {
          click: this.onClick
        }
      })
    };
  ai._withStripped = !0;
  var ci = bn({
    mixins: [Z],
    props: {
      text: {
        type: String,
        required: !0
      }
    },
    methods: {
      onClick: function(t) {
        var e = t.target,
          n = (e = void 0 === e ? {} : e).href,
          r = void 0 === n ? "" : n;
        r && (t.preventDefault(), t.stopPropagation(), this.$_openUrl(r))
      },
      escapeHTML: function(t) {
        var e = {
          "&": "&amp;",
          "<": "&lt;",
          ">": "&gt;"
        };
        return String(t).replace(/[&<>]/g, function(t) {
          return e[t]
        })
      },
      addAnchorsToString: function(t) {
        return this.escapeHTML(t).replace(/\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'".,<>?«»“”‘’]))/gi, function(t) {
          return '<a href="'.concat(t, '">').concat(t, "</a>")
        })
      }
    }
  }, ai, [], !1, null, null, null);
  ci.options.__file = "src/chat/elements/anchors/anchors.vue";
  var ui = ci.exports,
    li = function() {
      var t = this,
        e = t.$createElement,
        n = t._self._c || e;
      return n("div", {
        staticClass: "lazy-img-wrapper"
      }, ["loading" === t.status ? n("div", {
        staticClass: "lazy-img lazy-img-loading",
        style: t.style.loading
      }) : "error" === t.status ? n("div", {
        staticClass: "lazy-img lazy-img-error",
        style: t.style.error
      }) : t._e(), t._v(" "), n("img", {
        staticClass: "lazy-img lazy-img-loaded",
        class: {
          cover: t.cover
        },
        style: t.style.img,
        attrs: {
          alt: "",
          src: t.src
        },
        on: {
          load: t.onLoad,
          error: t.onError
        }
      })])
    };
  li._withStripped = !0;
  var fi = bn({
    mixins: [H],
    data: function() {
      return {
        status: "loading"
      }
    },
    props: {
      src: {
        type: String,
        required: !0
      },
      backgroundSize: {
        type: Number,
        default: 90
      },
      cover: {
        type: Boolean,
        default: !1
      }
    },
    watch: {
      src: function() {
        this.status = "loading"
      }
    },
    methods: {
      onLoad: function() {
        this.status = "loaded"
      },
      onError: function() {
        this.status = "error"
      }
    },
    computed: {
      style: function() {
        return {
          loading: {
            backgroundSize: .7 * this.backgroundSize + "px",
            backgroundColor: this.$_theme.responseBackground
          },
          error: {
            backgroundSize: this.backgroundSize + "px"
          },
          img: "loaded" !== this.status ? {
            visibility: "hidden",
            height: 0
          } : {
            visibility: "visible"
          }
        }
      }
    }
  }, li, [], !1, null, null, null);
  fi.options.__file = "src/chat/elements/lazy-img/lazy-img.vue";
  var pi = fi.exports,
    di = function() {
      var t = this.$createElement,
        e = this._self._c || t;
      return e("svg", {
        attrs: {
          viewBox: "0 0 24 24",
          xmlns: "http://www.w3.org/2000/svg"
        }
      }, [e("path", {
        attrs: {
          d: "M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
        }
      }), this._v(" "), e("path", {
        attrs: {
          d: "M0 0h24v24H0z",
          fill: "none"
        }
      })])
    };
  di._withStripped = !0;
  var hi = bn({}, di, [], !1, null, null, null);
  hi.options.__file = "src/chat/elements/close-icon/close-icon.vue";
  var vi = hi.exports;
  p.a.config.productionTip = !1, p.a.config.devtools = !1, p.a.use(si), p.a.http.options.root = Ut.apiUrl, p.a.use(zt), p.a.component("anchors", ui), p.a.component("lazy-img", pi), p.a.component("close-icon", vi), new p.a({
    el: "#app",
    store: Me,
    render: function(t) {
      return t(go)
    }
  })
}]);