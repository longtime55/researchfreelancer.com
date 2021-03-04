! function(e) {
  var r = {};

  function o(t) {
    if (r[t]) return r[t].exports;
    var n = r[t] = {
      i: t,
      l: !1,
      exports: {}
    };
    return e[t].call(n.exports, n, n.exports, o), n.l = !0, n.exports
  }
  o.m = e, o.c = r, o.d = function(t, n, e) {
    o.o(t, n) || Object.defineProperty(t, n, {
      enumerable: !0,
      get: e
    })
  }, o.r = function(t) {
    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
      value: "Module"
    }), Object.defineProperty(t, "__esModule", {
      value: !0
    })
  }, o.t = function(n, t) {
    if (1 & t && (n = o(n)), 8 & t) return n;
    if (4 & t && "object" == typeof n && n && n.__esModule) return n;
    var e = Object.create(null);
    if (o.r(e), Object.defineProperty(e, "default", {
        enumerable: !0,
        value: n
      }), 2 & t && "string" != typeof n)
      for (var r in n) o.d(e, r, function(t) {
        return n[t]
      }.bind(null, r));
    return e
  }, o.n = function(t) {
    var n = t && t.__esModule ? function() {
      return t.default
    } : function() {
      return t
    };
    return o.d(n, "a", n), n
  }, o.o = function(t, n) {
    return Object.prototype.hasOwnProperty.call(t, n)
  }, o.p = "", o(o.s = 40)
}([function(t, n, e) {
  t.exports = e(22)
}, function(t, n) {
  function u(t, n, e, r, o, i, a) {
    try {
      var c = t[i](a),
        u = c.value
    } catch (t) {
      return void e(t)
    }
    c.done ? n(u) : Promise.resolve(u).then(r, o)
  }
  t.exports = function(c) {
    return function() {
      var t = this,
        a = arguments;
      return new Promise(function(n, e) {
        var r = c.apply(t, a);

        function o(t) {
          u(r, n, e, o, i, "next", t)
        }

        function i(t) {
          u(r, n, e, o, i, "throw", t)
        }
        o(void 0)
      })
    }
  }
}, function(t, n, e) {
  var o = e(10);
  t.exports = function(n) {
    for (var t = 1; t < arguments.length; t++) {
      var e = null != arguments[t] ? arguments[t] : {},
        r = Object.keys(e);
      "function" == typeof Object.getOwnPropertySymbols && (r = r.concat(Object.getOwnPropertySymbols(e).filter(function(t) {
        return Object.getOwnPropertyDescriptor(e, t).enumerable
      }))), r.forEach(function(t) {
        o(n, t, e[t])
      })
    }
    return n
  }
}, function(t, n, e) {
  "use strict";
  e.d(n, "b", function() {
    return a
  }), e.d(n, "c", function() {
    return c
  }), e.d(n, "a", function() {
    return u
  });
  var r = e(6),
    o = "object" === ("undefined" == typeof console ? "undefined" : e.n(r)()(console)),
    i = function(t) {
      return "[researchfreelancer.loc] - %s ".replace("%s", t)
    },
    a = function(t) {
      var n = !(1 < arguments.length && void 0 !== arguments[1]) || arguments[1];
      return o && console.error(n ? i(t) : t), !1
    },
    c = function(t) {
      return o && console.warn(i(t)), !1
    },
    u = function(t) {
      throw i(t)
    }
}, function(t, n, e) {
  "use strict";

  function r(t, n) {
    return t + n
  }
  e.d(n, "a", function() {
    return a
  }), e.d(n, "b", function() {
    return c
  }), e.d(n, "c", function() {
    return u
  }), e.d(n, "d", function() {
    return i
  }), e.d(n, "e", function() {
    return f
  }), e.d(n, "f", function() {
    return s
  }), e.d(n, "g", function() {
    return l
  }), e.d(n, "h", function() {
    return d
  }), e.d(n, "i", function() {
    return h
  }), e.d(n, "j", function() {
    return p
  });
  var o = {}.hasOwnProperty;

  function i(t, n) {
    return o.call(n, t)
  }
  Array.isArray;

  function a(n, e) {
    return Object.keys(e).forEach(function(t) {
      n(e[t], t)
    })
  }

  function c(t) {
    return t.reduce(function(t, n) {
      var e = n[0],
        r = n[1];
      return t[e] = r, t
    }, {})
  }

  function u() {
    return Math.random().toString(36).substring(2)
  }

  function f() {}

  function s(t) {
    var n, e = !1;
    return function() {
      return e ? n : (e = !0, n = t.apply(void 0, arguments))
    }
  }

  function l(e, r) {
    return Object.keys(r).reduce(function(t, n) {
      return t[e(r[n]) ? 0 : 1][n] = r[n], t
    }, [{}, {}])
  }

  function d(t, e) {
    return t.reduce(function(t, n) {
      return t[n] = e[n], t
    }, {})
  }

  function h(t) {
    return t.reduce(r, 0)
  }
  var p = function(n) {
    return Object.keys(n).map(function(t) {
      return [t, n[t]]
    })
  }
}, , function(n, t) {
  function e(t) {
    return (e = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
      return typeof t
    } : function(t) {
      return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
    })(t)
  }

  function r(t) {
    return "function" == typeof Symbol && "symbol" === e(Symbol.iterator) ? n.exports = r = function(t) {
      return e(t)
    } : n.exports = r = function(t) {
      return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : e(t)
    }, r(t)
  }
  n.exports = r
}, function(t) {
  t.exports = {
    polyfillUrl: APP_URL + '/js/widget/polyfill.js',
    apiUrl: "https://api.chatbot.com",
    iframeUrl: APP_URL + '/js/widget/chat.html',
    cdnUrl: APP_URL + '/js/widget',
    storagePrefix: "__be"
  }
}, function(t, n, e) {
  "use strict";
  e.d(n, "a", function() {
    return r
  });
  var r = function() {}
}, function(t, n, e) {
  var a = e(24);
  t.exports = function(t, n) {
    if (null == t) return {};
    var e, r, o = a(t, n);
    if (Object.getOwnPropertySymbols) {
      var i = Object.getOwnPropertySymbols(t);
      for (r = 0; r < i.length; r++) e = i[r], 0 <= n.indexOf(e) || Object.prototype.propertyIsEnumerable.call(t, e) && (o[e] = t[e])
    }
    return o
  }
}, function(t, n) {
  t.exports = function(t, n, e) {
    return n in t ? Object.defineProperty(t, n, {
      value: e,
      enumerable: !0,
      configurable: !0,
      writable: !0
    }) : t[n] = e, t
  }
}, function(t, n, e) {
  "use strict";
  var u = e(4);

  function p() {
    return (p = Object.assign || function(t) {
      for (var n = 1; n < arguments.length; n++) {
        var e = arguments[n];
        for (var r in e) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r])
      }
      return t
    }).apply(this, arguments)
  }
  var f = function(n) {
    return new Promise(function(t) {
      t(n())
    })
  };

  function r() {
    return (r = Object.assign || function(t) {
      for (var n = 1; n < arguments.length; n++) {
        var e = arguments[n];
        for (var r in e) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r])
      }
      return t
    }).apply(this, arguments)
  }
  var o = function(r) {
      return r = r || Object.create(null), {
        on: function(t, n) {
          (r[t] || (r[t] = [])).push(n)
        },
        off: function(t, n) {
          r[t] && r[t].splice(r[t].indexOf(n) >>> 0, 1)
        },
        emit: function(n, e) {
          (r[n] || []).slice().map(function(t) {
            t(e)
          }), (r["*"] || []).slice().map(function(t) {
            t(n, e)
          })
        }
      }
    },
    O = function() {
      var e = Object.create(null),
        i = o(e);
      return r({}, i, {
        off: function(t, n) {
          t ? i.off(t, n) : Object.keys(e).forEach(function(t) {
            delete e[t]
          })
        },
        once: function(r, o) {
          i.on(r, function t(n, e) {
            i.off(r, t), o(n, e)
          })
        }
      })
    };

  function d(t, n) {
    if (null == t) return {};
    var e, r, o = {},
      i = Object.keys(t);
    for (r = 0; r < i.length; r++) e = i[r], 0 <= n.indexOf(e) || (o[e] = t[e]);
    return o
  }
  document.documentElement.currentStyle;

  function h(t) {
    var n = t.parentNode;
    n && n.removeChild(t)
  }
  e.d(n, "a", function() {
    return F
  }), e.d(n, "b", function() {
    return H
  }), e.d(n, "c", function() {
    return V
  });
  var m = function(r) {
    return function(n) {
      return function(t, e) {
        0 === t && n(0, function(t, n) {
          e(t, 1 === t ? r(n) : n)
        })
      }
    }
  };
  var i = function(a) {
    return void 0 === a && (a = {}),
      function(t) {
        "function" == typeof a && (a = {
          next: a
        });
        var e, n = a,
          r = n.next,
          o = n.error,
          i = n.complete;
        t(0, function(t, n) {
          0 === t && (e = n), 1 === t && r && r(n), 1 !== t && 0 !== t || e(1), 2 === t && !n && i && i(), 2 === t && n && o && o(n)
        });
        return function() {
          e && e(2)
        }
      }
  };

  function v(e) {
    return new Promise(function(t, n) {
      var c;
      i({
        next: t,
        error: n,
        complete: function() {
          var t = new Error("No elements in sequence.");
          t.code = "NO_ELEMENTS", n(t)
        }
      })((c = e, function(t, e) {
        if (0 === t) {
          var r, o, i = !1,
            a = !1;
          c(0, function(t, n) {
            return 0 === t ? (r = n, void e(0, function(t, n) {
              2 === t && (a = !0), r(t, n)
            })) : 1 === t ? (i = !0, o = n, void r(1)) : void(2 === t && !n && i && (e(1, o), a) || e(t, n))
          })
        }
      }))
    })
  }
  var x = function(o) {
      return function(n) {
        return function(t, e) {
          var r;
          0 === t && n(0, function(t, n) {
            0 === t ? e(t, r = n) : 1 === t ? o(n) ? e(t, n) : r(1) : e(t, n)
          })
        }
      }
    },
    j = function(r) {
      return function(t) {
        var e;
        t(0, function(t, n) {
          0 === t && (e = n), 1 === t && r(n), 1 !== t && 0 !== t || e(1)
        })
      }
    };

  function E(e) {
    return void 0 === e && (e = -1),
      function(n) {
        return function(t, r) {
          if (0 === t) {
            var o, i = !1,
              a = e,
              c = function(t, n) {
                o(t, n)
              };
            ! function e() {
              n(0, function(t, n) {
                return 0 === t ? (o = n, i ? void c(1) : (i = !0, void r(0, c))) : 2 === t && n && 0 !== a ? (a--, void e()) : void r(t, n)
              })
            }()
          }
        }
      }
  }
  var C = function(n) {
      var u, f = [];
      return function(t, a) {
        if (0 === t) {
          f.push(a);
          var c = function(t, n) {
            if (2 === t) {
              var e = f.indexOf(a); - 1 < e && f.splice(e, 1), f.length || u(2)
            } else u(t, n)
          };
          1 !== f.length ? a(0, c) : n(0, function(t, n) {
            if (0 === t) u = n, a(0, c);
            else {
              var e = f.slice(0),
                r = Array.isArray(e),
                o = 0;
              for (e = r ? e : e[Symbol.iterator]();;) {
                var i;
                if (r) {
                  if (o >= e.length) break;
                  i = e[o++]
                } else {
                  if ((o = e.next()).done) break;
                  i = o.value
                }
                i(t, n)
              }
            }
            2 === t && (f = [])
          })
        }
      }
    },
    S = function(a) {
      return function(n) {
        return function(t, e) {
          if (0 === t) {
            var r, o = 0;
            n(0, function(t, n) {
              0 === t ? (r = n, e(0, i)) : 1 === t ? o < a && (o++, e(t, n), o === a && (e(2), r(2))) : e(t, n)
            })
          }

          function i(t, n) {
            o < a && r(t, n)
          }
        }
      }
    },
    s = {},
    P = function(c) {
      return function(n) {
        return function(t, e) {
          if (0 === t) {
            var r, o, i = !1,
              a = s;
            n(0, function(t, n) {
              if (0 === t) return r = n, c(0, function(t, n) {
                if (0 !== t) return 1 === t ? (a = void 0, o(2), r(2), void(i && e(2))) : void(2 === t && (o = null, n && (a = n, r(2), i && e(t, n))));
                (o = n)(1)
              }), i = !0, e(0, function(t, n) {
                a === s && (2 === t && o && o(2), r(t, n))
              }), void(a !== s && e(2, a));
              2 === t && o(2), e(t, n)
            })
          }
        }
      }
    };

  function L(c) {
    return function(n) {
      return function(t, e) {
        if (0 === t) {
          var r, o, i = c instanceof Date;
          n(0, function(t, n) {
            if (0 === t) return r = n, a(i ? c - Date.now() : c), void e(0, function(t, n) {
              2 === t && clearTimeout(o), r(t, n)
            });
            2 === t ? clearTimeout(o) : 1 !== t || i || (clearTimeout(o), a(c)), e(t, n)
          })
        }

        function a(t) {
          o = setTimeout(function() {
            r(2);
            var t = new Error("Timeout.");
            t.code = "TIMEOUT", e(2, t)
          }, t)
        }
      }
    }
  }
  var a = "@@livechat/postmessenger",
    k = "handshake",
    y = "response",
    c = function(n) {
      return function(t, r) {
        if (0 === t) {
          var o, i, a = !1;
          n(0, function(t, n) {
            if (0 === t) o = n, r(0, c);
            else if (1 === t) {
              var e = n;
              i && i(2), e(0, function(t, n) {
                0 === t ? (i = n)(1) : 1 === t ? r(1, n) : 2 === t && n ? (o(2), r(2, n)) : 2 === t && (a ? r(2) : (i = void 0, o(1)))
              })
            } else 2 === t && n ? (i && i(2), r(2, n)) : 2 === t && (i ? a = !0 : r(2))
          })
        }

        function c(t, n) {
          1 === t && (i || o)(1, n), 2 === t && (i && i(2), o(2))
        }
      }
    };

  function l(r) {
    return function(t, n) {
      if (0 === t) {
        var e = !1;
        n(0, function(t) {
          2 === t && (e = !0)
        }), e || n(2, r || new Error)
      }
    }
  }
  var g = function(o, i, a) {
      return function(t, n) {
        if (0 === t) {
          var e = !1,
            r = function(t) {
              n(1, t)
            };
          n(0, function(t) {
            2 === t && (e = !0, o.removeEventListener(i, r, a))
          }), e || o.addEventListener(i, r, a)
        }
      }
    },
    b = function(t) {
      return !!t.data && t.data[a]
    },
    _ = Object(u.f)(function() {
      return C(m(function(t) {
        return t.data.origin = t.origin, t.data
      })(x(b)(g(window, "message"))))
    });

  function M(n) {
    return function(t) {
      return c(m(n)(t))
    }
  }
  var w = 0,
    T = function(t, e, r) {
      return c((o = function() {
        var n = w++;
        return r.request = n, e(r), S(1)(M(function(t) {
          if (!t.data.error) return r = function() {
              return t.data.result
            },
            function(t, n) {
              if (0 === t) {
                var e = !1;
                n(0, function(t) {
                  2 === t && (e = !0)
                }), n(1, r()), e || n(2)
              }
            };
          var r, n = t.data.result,
            e = n.real,
            o = n.error;
          if (!e) return l(o);
          var i = new Error(o.message);
          return Object(u.d)("code", o) && (i.code = o.code), l(i)
        })(x(function(t) {
          return t.type === y && t.request === n
        })(t)))
      }, function(t, n) {
        if (0 === t) {
          var e = !1;
          n(0, function(t) {
            2 === t && (e = !0)
          }), n(1, o()), e || n(2)
        }
      }));
      var o
    },
    A = function(t, o, i, a, n) {
      return void 0 === n && (n = null), p({}, t, {
        call: function(t) {
          for (var n = arguments.length, e = new Array(1 < n ? n - 1 : 0), r = 1; r < n; r++) e[r - 1] = arguments[r];
          return v(T(o, a, i("call", {
            method: t,
            args: e
          })))
        },
        emit: function(t, n) {
          a(i("emit", {
            event: t,
            arg: n
          }))
        },
        data: n
      })
    };
  var I = function() {
    var c = [];
    return function(t, n) {
      if (0 === t) {
        var e = n;
        c.push(e), e(0, function(t) {
          if (2 === t) {
            var n = c.indexOf(e); - 1 < n && c.splice(n, 1)
          }
        })
      } else
        for (var r, o = c.slice(0), i = 0, a = o.length; i < a; i++) r = o[i], -1 < c.indexOf(r) && r(t, n)
    }
  };

  function N() {
    var n = I();
    return [n, function() {
      var t = new Error("Destroyed.");
      t.code = "DESTROYED", n(2, t)
    }]
  }
  var R = function(t, n, e, r) {
      var o;
      return (o = {
        "@@livechat/postmessenger": !0
      }).owner = t, o.instance = n, o.type = e, o.data = r, o
    },
    U = function(o, i, a, c) {
      return function(r) {
        switch (r.type) {
          case "call":
            return void f(function() {
              var t = r.data,
                n = t.method,
                e = t.args;
              return c[n].apply(o, e)
            }).then(function(t) {
              r.type = y, r.data = {
                error: !1,
                result: t
              }, a(r)
            }, function(t) {
              var n;
              r.type = y, t instanceof Error ? (n = {
                real: !0,
                error: {
                  message: t.message
                }
              }, Object(u.d)("code", t) && (n.error.code = t.code)) : n = {
                real: !1,
                error: t
              }, r.data = {
                error: !0,
                result: n
              }, a(r)
            });
          case "emit":
            var t = r.data,
              n = t.event,
              e = t.arg;
            return void i(n, e);
          default:
            return
        }
      }
    },
    W = function(t) {
      return Object(u.g)(function(t) {
        return "function" == typeof t
      }, t)
    },
    D = Object(u.c)(),
    z = 0,
    G = function(t) {
      var n = document.createElement("a");
      return n.href = t, n.origin ? "null" === n.origin ? "*" : n.origin : (4 < n.protocol.length ? n.protocol : window.location.protocol) + "//" + (n.host.length ? "80" === n.port || "443" === n.port ? n.hostname : n.host : window.location.host)
    };

  function B(t, n) {
    var e = t.frame,
      r = t.strictOrigin,
      o = void 0 === r || r;
    void 0 === n && (n = {});
    var i = W(n),
      a = i[0],
      c = i[1],
      u = N(),
      f = u[0],
      s = u[1],
      l = z++,
      d = e.contentWindow,
      h = o ? G(e.src) : "*",
      p = O(),
      m = function(t, n) {
        return R(D, l, t, n)
      },
      v = function(t) {
        d.postMessage(t, h)
      },
      y = C(x(function(t) {
        return t.owner === D && t.instance === l
      })(P(f)(_()))),
      g = A(p, y, m, v),
      b = C(S(1)(E(5)(L(500)(P(f)(T(y, v, m(k, c))))))),
      w = U(g, p.emit, v, a);
    return j(w)(M(function() {
      return y
    })(b)), {
      api: g,
      destroy: s,
      handshake$: b
    }
  }

  function F(h) {
    void 0 === h && (h = {});
    var t = S(1)(L(3e3)(x(function(t) {
      return t.type === k
    })(_())));
    return {
      promise: v(m(function(t) {
        var e = t.instance,
          r = t.owner,
          n = t.origin,
          o = W(h),
          i = o[0],
          a = o[1],
          c = window.parent,
          u = O(),
          f = function(t) {
            c.postMessage(t, n)
          },
          s = x(function(t) {
            return t.owner === r
          })(_()),
          l = A(u, s, function(t, n) {
            return R(r, e, t, n)
          }, f, t.data),
          d = U(l, u.emit, f, i);
        return j(d)(s), f(p({}, t, {
          type: y,
          data: {
            error: !1,
            result: a
          }
        })), l
      })(t))
    }
  }
  var q = function(t, n) {
    var e = document.createElement("iframe");
    return t.appendChild(e), e.src = n, e
  };

  function H(t, n) {
    var e, r = t.container,
      o = t.url,
      i = d(t, ["container", "url"]),
      a = q(r, o),
      c = function() {
        h(a), e && e.destroy()
      };
    return {
      destroy: c,
      frame: a,
      promise: v(S(1)(m(function(t) {
        var n = e.api;
        return n.data = t, n.destroy = c, n.frame = a, n
      })(M(function() {
        return (e = B(p({}, i, {
          frame: a
        }), n)).handshake$
      })(g(a, "load")))))
    }
  }
  var Y = function(o) {
      return function(t, n) {
        if (0 === t) {
          if ("function" != typeof o) return n(0, function() {}), void n(2);
          var e, r = !1;
          n(0, function(t) {
            r || (r = 2 === t) && "function" == typeof e && e()
          }), r || (e = o(function(t) {
            r || n(1, t)
          }, function(t) {
            r || void 0 === t || (r = !0, n(2, t))
          }, function() {
            r || (r = !0, n(2))
          }))
        }
      }
    },
    $ = function(t) {
      if (t.frame) return t.frame;
      var n = t.container,
        e = t.url;
      return q(n, e)
    };

  function V(t, u) {
    var f, n = t.onConnected,
      s = d(t, ["onConnected"]),
      e = !s.frame,
      l = $(s),
      r = N(),
      o = r[0],
      i = r[1],
      a = function() {
        e && h(l), f ? f.destroy() : i()
      };
    return j(function(t) {
      t.destroy = a, t.frame = l, n(t)
    })(P(o)(E()(M(function() {
      return Y(function(t, n) {
        var e, r, o, i, a, c = (e = p({}, s, {
          frame: l
        }), r = B(e, u), o = r.api, i = r.destroy, a = r.handshake$, {
          destroy: i,
          promise: v(m(function(t) {
            return o.data = t, o.destroy = i, o
          })(a))
        });
        return c.promise.then(t, n), (f = c).destroy
      })
    })(g(l, "load"))))), {
      destroy: a,
      frame: l
    }
  }
}, , function(t, n, e) {
  "use strict";
  e.d(n, "a", function() {
    return r
  });
  var r = "EVENT_ERROR_PROPERTY"
}, function(t, n, e) {
  "use strict";
  e.d(n, "a", function() {
    return r
  });
  var r = "URL_CHANGED"
}, function(t, n, e) {
  "use strict";
  e.d(n, "a", function() {
    return r
  });
  var r = function(t) {
    var n, e;
    n = t, e = Object.assign(document.createElement("a"), {
      href: n
    }).hostname, Boolean(e && e === window.location.hostname) ? window.location.href = t : window.open(t, "_blank")
  }
}, function(t, n, e) {
  "use strict";
  e.d(n, "a", function() {
    return r
  });
  var r = function(t) {
    window.location.assign("tel:".concat(t))
  }
}, function(t, n, e) {
  var r = e(26),
    o = e(27),
    i = e(28);
  t.exports = function(t, n) {
    return r(t) || o(t, n) || i()
  }
}, , , , function(t) {
  t.exports = {
    root: {
      "background-color": "transparent",
      "pointer-events": "none",
      "z-index": 2147483639,
      "max-height": "100%",
      position: "fixed",
      right: 0,
      bottom: 0,
      border: 0,
      width: 0,
      height: 0,
      maxWidth: "100%",
      overflow: "hidden",
      opacity: 1
    },
    frame: {
      "pointer-events": "all",
      background: "none",
      border: 0,
      float: "none",
      position: "absolute",
      top: 0,
      right: 0,
      bottom: 0,
      left: 0,
      width: "100%",
      height: "100%",
      margin: 0,
      padding: 0
    }
  }
}, function(t, n, e) {
  var r = function() {
      return this || "object" == typeof self && self
    }() || Function("return this")(),
    o = r.regeneratorRuntime && 0 <= Object.getOwnPropertyNames(r).indexOf("regeneratorRuntime"),
    i = o && r.regeneratorRuntime;
  if (r.regeneratorRuntime = void 0, t.exports = e(23), o) r.regeneratorRuntime = i;
  else try {
    delete r.regeneratorRuntime
  } catch (t) {
    r.regeneratorRuntime = void 0
  }
}, function(T, t) {
  ! function(t) {
    "use strict";
    var u, n = Object.prototype,
      f = n.hasOwnProperty,
      e = "function" == typeof Symbol ? Symbol : {},
      o = e.iterator || "@@iterator",
      r = e.asyncIterator || "@@asyncIterator",
      i = e.toStringTag || "@@toStringTag",
      a = "object" == typeof T,
      c = t.regeneratorRuntime;
    if (c) a && (T.exports = c);
    else {
      (c = t.regeneratorRuntime = a ? T.exports : {}).wrap = b;
      var l = "suspendedStart",
        d = "suspendedYield",
        h = "executing",
        p = "completed",
        m = {},
        s = {};
      s[o] = function() {
        return this
      };
      var v = Object.getPrototypeOf,
        y = v && v(v(_([])));
      y && y !== n && f.call(y, o) && (s = y);
      var g = j.prototype = O.prototype = Object.create(s);
      x.prototype = g.constructor = j, j.constructor = x, j[i] = x.displayName = "GeneratorFunction", c.isGeneratorFunction = function(t) {
        var n = "function" == typeof t && t.constructor;
        return !!n && (n === x || "GeneratorFunction" === (n.displayName || n.name))
      }, c.mark = function(t) {
        return Object.setPrototypeOf ? Object.setPrototypeOf(t, j) : (t.__proto__ = j, i in t || (t[i] = "GeneratorFunction")), t.prototype = Object.create(g), t
      }, c.awrap = function(t) {
        return {
          __await: t
        }
      }, E(C.prototype), C.prototype[r] = function() {
        return this
      }, c.AsyncIterator = C, c.async = function(t, n, e, r) {
        var o = new C(b(t, n, e, r));
        return c.isGeneratorFunction(n) ? o : o.next().then(function(t) {
          return t.done ? t.value : o.next()
        })
      }, E(g), g[i] = "Generator", g[o] = function() {
        return this
      }, g.toString = function() {
        return "[object Generator]"
      }, c.keys = function(e) {
        var r = [];
        for (var t in e) r.push(t);
        return r.reverse(),
          function t() {
            for (; r.length;) {
              var n = r.pop();
              if (n in e) return t.value = n, t.done = !1, t
            }
            return t.done = !0, t
          }
      }, c.values = _, k.prototype = {
        constructor: k,
        reset: function(t) {
          if (this.prev = 0, this.next = 0, this.sent = this._sent = u, this.done = !1, this.delegate = null, this.method = "next", this.arg = u, this.tryEntries.forEach(L), !t)
            for (var n in this) "t" === n.charAt(0) && f.call(this, n) && !isNaN(+n.slice(1)) && (this[n] = u)
        },
        stop: function() {
          this.done = !0;
          var t = this.tryEntries[0].completion;
          if ("throw" === t.type) throw t.arg;
          return this.rval
        },
        dispatchException: function(e) {
          if (this.done) throw e;
          var r = this;

          function t(t, n) {
            return i.type = "throw", i.arg = e, r.next = t, n && (r.method = "next", r.arg = u), !!n
          }
          for (var n = this.tryEntries.length - 1; 0 <= n; --n) {
            var o = this.tryEntries[n],
              i = o.completion;
            if ("root" === o.tryLoc) return t("end");
            if (o.tryLoc <= this.prev) {
              var a = f.call(o, "catchLoc"),
                c = f.call(o, "finallyLoc");
              if (a && c) {
                if (this.prev < o.catchLoc) return t(o.catchLoc, !0);
                if (this.prev < o.finallyLoc) return t(o.finallyLoc)
              } else if (a) {
                if (this.prev < o.catchLoc) return t(o.catchLoc, !0)
              } else {
                if (!c) throw new Error("try statement without catch or finally");
                if (this.prev < o.finallyLoc) return t(o.finallyLoc)
              }
            }
          }
        },
        abrupt: function(t, n) {
          for (var e = this.tryEntries.length - 1; 0 <= e; --e) {
            var r = this.tryEntries[e];
            if (r.tryLoc <= this.prev && f.call(r, "finallyLoc") && this.prev < r.finallyLoc) {
              var o = r;
              break
            }
          }
          o && ("break" === t || "continue" === t) && o.tryLoc <= n && n <= o.finallyLoc && (o = null);
          var i = o ? o.completion : {};
          return i.type = t, i.arg = n, o ? (this.method = "next", this.next = o.finallyLoc, m) : this.complete(i)
        },
        complete: function(t, n) {
          if ("throw" === t.type) throw t.arg;
          return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && n && (this.next = n), m
        },
        finish: function(t) {
          for (var n = this.tryEntries.length - 1; 0 <= n; --n) {
            var e = this.tryEntries[n];
            if (e.finallyLoc === t) return this.complete(e.completion, e.afterLoc), L(e), m
          }
        },
        catch: function(t) {
          for (var n = this.tryEntries.length - 1; 0 <= n; --n) {
            var e = this.tryEntries[n];
            if (e.tryLoc === t) {
              var r = e.completion;
              if ("throw" === r.type) {
                var o = r.arg;
                L(e)
              }
              return o
            }
          }
          throw new Error("illegal catch attempt")
        },
        delegateYield: function(t, n, e) {
          return this.delegate = {
            iterator: _(t),
            resultName: n,
            nextLoc: e
          }, "next" === this.method && (this.arg = u), m
        }
      }
    }

    function b(t, n, e, r) {
      var i, a, c, u, o = n && n.prototype instanceof O ? n : O,
        f = Object.create(o.prototype),
        s = new k(r || []);
      return f._invoke = (i = t, a = e, c = s, u = l, function(t, n) {
        if (u === h) throw new Error("Generator is already running");
        if (u === p) {
          if ("throw" === t) throw n;
          return M()
        }
        for (c.method = t, c.arg = n;;) {
          var e = c.delegate;
          if (e) {
            var r = S(e, c);
            if (r) {
              if (r === m) continue;
              return r
            }
          }
          if ("next" === c.method) c.sent = c._sent = c.arg;
          else if ("throw" === c.method) {
            if (u === l) throw u = p, c.arg;
            c.dispatchException(c.arg)
          } else "return" === c.method && c.abrupt("return", c.arg);
          u = h;
          var o = w(i, a, c);
          if ("normal" === o.type) {
            if (u = c.done ? p : d, o.arg === m) continue;
            return {
              value: o.arg,
              done: c.done
            }
          }
          "throw" === o.type && (u = p, c.method = "throw", c.arg = o.arg)
        }
      }), f
    }

    function w(t, n, e) {
      try {
        return {
          type: "normal",
          arg: t.call(n, e)
        }
      } catch (t) {
        return {
          type: "throw",
          arg: t
        }
      }
    }

    function O() {}

    function x() {}

    function j() {}

    function E(t) {
      ["next", "throw", "return"].forEach(function(n) {
        t[n] = function(t) {
          return this._invoke(n, t)
        }
      })
    }

    function C(u) {
      var n;
      this._invoke = function(e, r) {
        function t() {
          return new Promise(function(t, n) {
            ! function n(t, e, r, o) {
              var i = w(u[t], u, e);
              if ("throw" !== i.type) {
                var a = i.arg,
                  c = a.value;
                return c && "object" == typeof c && f.call(c, "__await") ? Promise.resolve(c.__await).then(function(t) {
                  n("next", t, r, o)
                }, function(t) {
                  n("throw", t, r, o)
                }) : Promise.resolve(c).then(function(t) {
                  a.value = t, r(a)
                }, function(t) {
                  return n("throw", t, r, o)
                })
              }
              o(i.arg)
            }(e, r, t, n)
          })
        }
        return n = n ? n.then(t, t) : t()
      }
    }

    function S(t, n) {
      var e = t.iterator[n.method];
      if (e === u) {
        if (n.delegate = null, "throw" === n.method) {
          if (t.iterator.return && (n.method = "return", n.arg = u, S(t, n), "throw" === n.method)) return m;
          n.method = "throw", n.arg = new TypeError("The iterator does not provide a 'throw' method")
        }
        return m
      }
      var r = w(e, t.iterator, n.arg);
      if ("throw" === r.type) return n.method = "throw", n.arg = r.arg, n.delegate = null, m;
      var o = r.arg;
      return o ? o.done ? (n[t.resultName] = o.value, n.next = t.nextLoc, "return" !== n.method && (n.method = "next", n.arg = u), n.delegate = null, m) : o : (n.method = "throw", n.arg = new TypeError("iterator result is not an object"), n.delegate = null, m)
    }

    function P(t) {
      var n = {
        tryLoc: t[0]
      };
      1 in t && (n.catchLoc = t[1]), 2 in t && (n.finallyLoc = t[2], n.afterLoc = t[3]), this.tryEntries.push(n)
    }

    function L(t) {
      var n = t.completion || {};
      n.type = "normal", delete n.arg, t.completion = n
    }

    function k(t) {
      this.tryEntries = [{
        tryLoc: "root"
      }], t.forEach(P, this), this.reset(!0)
    }

    function _(n) {
      if (n) {
        var t = n[o];
        if (t) return t.call(n);
        if ("function" == typeof n.next) return n;
        if (!isNaN(n.length)) {
          var e = -1,
            r = function t() {
              for (; ++e < n.length;)
                if (f.call(n, e)) return t.value = n[e], t.done = !1, t;
              return t.value = u, t.done = !0, t
            };
          return r.next = r
        }
      }
      return {
        next: M
      }
    }

    function M() {
      return {
        value: u,
        done: !0
      }
    }
  }(function() {
    return this || "object" == typeof self && self
  }() || Function("return this")())
}, function(t, n) {
  t.exports = function(t, n) {
    if (null == t) return {};
    var e, r, o = {},
      i = Object.keys(t);
    for (r = 0; r < i.length; r++) e = i[r], 0 <= n.indexOf(e) || (o[e] = t[e]);
    return o
  }
}, , function(t, n) {
  t.exports = function(t) {
    if (Array.isArray(t)) return t
  }
}, function(t, n) {
  t.exports = function(t, n) {
    var e = [],
      r = !0,
      o = !1,
      i = void 0;
    try {
      for (var a, c = t[Symbol.iterator](); !(r = (a = c.next()).done) && (e.push(a.value), !n || e.length !== n); r = !0);
    } catch (t) {
      o = !0, i = t
    } finally {
      try {
        r || null == c.return || c.return()
      } finally {
        if (o) throw i
      }
    }
    return e
  }
}, function(t, n) {
  t.exports = function() {
    throw new TypeError("Invalid attempt to destructure non-iterable instance")
  }
}, , function(t, n) {
  t.exports = "html.chatbot-mobile-opened > body {\n    position: fixed;\n    width: 100%;\n    height: 100%;\n    top: 0;\n    right: 0;\n    bottom: 0;\n    left: 0;\n    overflow-y: hidden;\n}\n"
}, , , , , , , , , , function(t, n, e) {
  "use strict";
  e.r(n);
  var r = {};
  e.r(r), e.d(r, "create", function() {
    return jt
  }), e.d(r, "destroy", function() {
    return Et
  }), e.d(r, "openChatWindow", function() {
    return Ct
  }), e.d(r, "closeChatWindow", function() {
    return St
  }), e.d(r, "hideChatWindow", function() {
    return Pt
  }), e.d(r, "isChatWindowOpened", function() {
    return Lt
  }), e.d(r, "isChatWindowClosed", function() {
    return kt
  }), e.d(r, "isChatWindowHidden", function() {
    return _t
  }), e.d(r, "isInitialized", function() {
    return Mt
  }), e.d(r, "resetSession", function() {
    return Tt
  }), e.d(r, "sendMessage", function() {
    return At
  }), e.d(r, "sendTrigger", function() {
    return It
  }), e.d(r, "openMoment", function() {
    return Nt
  }), e.d(r, "closeMoment", function() {
    return Rt
  }), e.d(r, "setSessionAttributes", function() {
    return Ut
  }), e.d(r, "setUserAttributes", function() {
    return Wt
  }), e.d(r, "getUserData", function() {
    return Dt
  }), e.d(r, "endChat", function() {
    return zt
  }), e.d(r, "openChat", function() {
    return Gt
  }), e.d(r, "closeChat", function() {
    return Bt
  }), e.d(r, "setCustomParameters", function() {
    return Ft
  }), e.d(r, "setUserParameters", function() {
    return qt
  });
  var o, i, a, c, u, f, s, l, d, h, p, m, v, y, g, b, w, O, x = "#chatbot-chat",
    j = window.__be = window.__be || {},
    E = window.BE_API = window.BE_API || {},
    C = e(8),
    S = history,
    P = S.pushState,
    L = S.replaceState,
    k = function() {
      var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : C.a,
        r = function() {
          t(window.location.href)
        };
      return history.pushState = function() {
          for (var t = arguments.length, n = new Array(t), e = 0; e < t; e++) n[e] = arguments[e];
          P.apply(history, n), r()
        }, history.replaceState = function() {
          for (var t = arguments.length, n = new Array(t), e = 0; e < t; e++) n[e] = arguments[e];
          L.apply(history, n), r()
        }, window.addEventListener("hashchange", r), r(),
        function() {
          history.pushState = P, history.replaceState = L, window.removeEventListener("hashchange", r)
        }
    },
    _ = e(0),
    M = e.n(_),
    T = e(1),
    A = e.n(T),
    I = e(7),
    N = e(11),
    R = e(3),
    U = e(2),
    W = e.n(U),
    D = e(21),
    z = e(30),
    G = e.n(z),
    B = e(9),
    F = e.n(B),
    q = function(n, t) {
      var e, r = t.id,
        o = t.classes,
        i = t.style,
        a = F()(t, ["id", "classes", "style"]);
      return r && (n.id = "#" === (e = r).charAt(0) ? e.substring(1) : e), name && (n.name = name), o && o.forEach(function(t) {
        return n.classList.add(t)
      }), i && $(n, i), Object.assign(n, a)
    },
    H = function(t) {
      var n = t.tag,
        e = void 0 === n ? "div" : n,
        r = t.parent,
        o = void 0 === r ? document.body : r,
        i = F()(t, ["tag", "parent"]);
      return o.appendChild(q(document.createElement(e), i))
    },
    Y = function(t) {
      return !!t && (t.remove(), !0)
    },
    $ = function(t, n) {
      if (!t) return t;
      for (var e in n) n.hasOwnProperty(e) && (t.style[e] = n[e]);
      return t
    },
    V = new RegExp("Android|webOs|iPhone|iPod|BlackBerry|Windows Phone", "i"),
    J = !!(window.innerWidth <= 450 || window.innerHeight <= 450 || navigator.userAgent.match(V)),
    K = (c = A()(M.a.mark(function t() {
      var n;
      return M.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            return t.next = 2, it(Q());
          case 2:
            if (n = t.sent) {
              t.next = 5;
              break
            }
            return t.abrupt("return", !1);
          case 5:
            return q(n, {
              id: "#chatbot-chat-frame",
              style: D.frame
            }), t.abrupt("return", !0);
          case 7:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function() {
      return c.apply(this, arguments)
    }),
    Q = function() {
      return document.querySelector(x)
    },
    X = function(t) {
      var n = W()({}, D.root, t);
      lt.hidden && (n.width = 0, n.height = 0, n.opacity = 0), $(Q(), n)
    },
    Z = (u = A()(M.a.mark(function t() {
      return M.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            return (i = H({
              tag: "style",
              type: "text/css",
              id: "#chatbot-stylesheet",
              parent: document.head
            })).appendChild(document.createTextNode(G.a)), H({
              id: x,
              style: D.root
            }), !document.querySelector("meta[name=viewport]") && (o = H({
              parent: document.head,
              tag: "meta",
              name: "viewport"
            })), t.abrupt("return", K());
          case 4:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function() {
      return u.apply(this, arguments)
    }),
    tt = function(t) {
      var n, e, r = document.body,
        o = document.documentElement,
        i = "chatbot-mobile-opened";
      t && !J && (t = !1), t ? (a = window.pageYOffset, e = i, o.classList.add(e)) : (n = i, o.classList.remove(n), "number" == typeof a && (r.scrollTop = o.scrollTop = a, a = void 0))
    },
    nt = e(16),
    et = e(15),
    rt = {
      documentReferrer: document.referrer,
      mobile: J,
      frameInitialized: function() {
        lt.initialize(), Yt("onLoad")
      },
      getUserId: function() {
        return lt.userId
      },
      updateFrameStyle: function(t) {
        X(t)
      },
      openUrl: function(t) {
        Object(et.a)(t)
      },
      callNumber: function(t) {
        Object(nt.a)(t)
      },
      setMetaViewport: function(t) {
        var n;
        n = t, o && (o.content = n ? "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" : "")
      },
      onStartConversation: function() {
        Yt("onStartConversation")
      },
      onChatOpen: function() {
        lt.opened = !0, Yt("onChatWindowOpen"), tt(!0)
      },
      onChatClose: function() {
        lt.opened = !1, Yt("onChatWindowClose"), tt(!1)
      },
      onMessage: function(t) {
        Yt("onMessage", t)
      },
      onMomentOpen: function() {
        lt.moment = !0, Yt("onMomentOpen")
      },
      onMomentClose: function() {
        lt.moment = !1, Yt("onMomentClose")
      },
      onMomentLoad: function() {
        Yt("onMomentLoad")
      }
    },
    ot = {},
    it = (f = A()(M.a.mark(function t(n) {
      var e, r, o, i;
      return M.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            return e = "".concat(I.iframeUrl, "?id=").concat(lt.widgetId, "&branding=").concat(lt.branding, "&v=").concat(504), r = Object(N.b)({
              container: n,
              url: e
            }, rt), o = r.frame, i = r.promise, t.prev = 2, t.t0 = Object, t.t1 = ot, t.next = 7, i;
          case 7:
            t.t2 = t.sent, t.t0.assign.call(t.t0, t.t1, t.t2), t.next = 14;
            break;
          case 11:
            return t.prev = 11, t.t3 = t.catch(2), t.abrupt("return", Object(R.b)("Something went wrong"));
          case 14:
            return t.abrupt("return", o);
          case 15:
          case "end":
            return t.stop()
        }
      }, t, this, [
        [2, 11]
      ])
    })), function(t) {
      return f.apply(this, arguments)
    }),
    at = e(14),
    ct = !1,
    ut = !1,
    ft = !1,
    st = !1,
    lt = {
      get initialized() {
        return ct
      },
      get api() {
        return E
      },
      get widgetId() {
        return j.id
      },
      get userId() {
        return j.userId
      },
      get branding() {
        return void 0 === j.branding || !1 !== j.branding
      },
      get defined() {
        return !!j.definied
      },
      set defined(t) {
        j.definied = t
      },
      get moment() {
        return ut
      },
      set moment(t) {
        t && (this.hidden = !1), ut = t
      },
      get opened() {
        return ft
      },
      set opened(t) {
        t && (this.hidden = !1), ft = t
      },
      get hidden() {
        return st
      },
      set hidden(t) {
        st = t
      },
      initialize: function() {
        s = new k(function(t) {
          ot.emit(at.a, t)
        }), ct = !0
      },
      destroy: function() {
        s(), st = ft = ut = ct = !1
      }
    },
    dt = ["onBeforeLoad", "onLoad", "onChatWindowOpen", "onChatWindowClose", "onChatWindowHide", "onCreate", "onDestroy", "onMessage", "onStartConversation", "onMomentOpen", "onMomentClose", "onMomentLoad"],
    ht = e(17),
    pt = e.n(ht),
    mt = e(6),
    vt = e.n(mt),
    yt = function(t) {
      return "string" == typeof t
    },
    gt = function(t) {
      return "number" == typeof t ? "".concat(t) : t
    },
    bt = function() {
      lt.initialized || Object(R.a)("The widget is not initialized.")
    },
    wt = function(t) {
      var n;
      n = t, "object" !== vt()(n) && Object(R.a)('Parameters must be an object that matches the schema: \n { parameter_name: "parameter value" }');
      var e = Object.entries(t);
      e.length || Object(R.a)("At least one parameter is required.");
      var o = {};
      return 99 < e.length && Object(R.a)("The maximum number of custom parameters is 99."), e.forEach(function(t) {
        var n = pt()(t, 2),
          e = n[0],
          r = n[1];
        e = gt(e), r = gt(r), /^[\w-]{1,128}$/g.test(e) ? yt(r) ? (!r.length || 1024 < r.length) && Object(R.a)('Custom parameter "'.concat(e, '" is incorrect. Value can not be empty and can be up to 1024 characters long.')) : Object(R.a)('Custom parameter "'.concat(e, '" is incorrect. Value must be string or number.')) : Object(R.a)('Custom parameter "'.concat(e, '" is incorrect. Name must be between 1-128 characters long and can only contain alpha-numeric, underscore and dash characters.')), o[e] = r
      }), o
    },
    Ot = e(13),
    xt = function(t) {
      return !("object" !== vt()(t) || !t[Ot.a]) && t[Ot.a]
    },
    jt = (l = A()(M.a.mark(function t() {
      return M.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            return lt.widgetId || Object(R.a)("Invalid id parameter."), !lt.userId || "string" == typeof lt.userId && /^[\w.-]{1,256}$/.test(lt.userId) || Object(R.a)('Property "userId" must be string between 1-256 characters long and can only contain alpha-numeric, underscore, dash and dot characters.'), Q() && Object(R.a)("Chat container already exists."), t.next = 5, Z();
          case 5:
            if (t.sent) {
              t.next = 7;
              break
            }
            Object(R.a)("Something went wrong");
          case 7:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function() {
      return l.apply(this, arguments)
    }),
    Et = function() {
      bt(), ot.destroy(), lt.destroy(), Y(o), Y(i), Y(Q()), tt(!1), Yt("onDestroy")
    },
    Ct = function() {
      bt(), lt.opened && Object(R.a)("Chat is already opened"), ot.call("toggleChat", !0)
    },
    St = function() {
      bt(), lt.opened || Object(R.a)("Chat is already closed"), ot.call("toggleChat", !1)
    },
    Pt = function() {
      bt(), lt.hidden && Object(R.a)("Chat is already hidden"), lt.hidden = !0, Yt("onChatWindowHide"), lt.opened ? ot.call("toggleChat", !1) : X()
    },
    Lt = function() {
      return bt(), lt.opened
    },
    kt = function() {
      return bt(), !lt.opened
    },
    _t = function() {
      return bt(), lt.hidden
    },
    Mt = function() {
      return lt.initialized
    },
    Tt = (d = A()(M.a.mark(function t() {
      return M.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            return bt(), t.next = 3, ot.call("resetSession");
          case 3:
            Yt("destroy"), Yt("create");
          case 5:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function() {
      return d.apply(this, arguments)
    }),
    At = function() {
      var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {},
        n = t.message,
        e = t.postback;
      bt();
      n = gt(n), yt(n) ? (!n.length || 256 < n.length) && Object(R.a)("Message can not be empty and can be up to ".concat(256, " characters long.")) : Object(R.a)("Message must be string or number."), void 0 !== e && (yt(e) ? (!e.length || 256 < e.length) && Object(R.a)("Postback can not be empty and can be up to ".concat(256, " characters long.")) : Object(R.a)("Postback must be string or number.")), lt.opened || ot.call("toggleChat", !0), ot.call("sendMessage", {
        message: n,
        postback: e
      })
    },
    It = function(t) {
      bt(), lt.opened || ot.call("toggleChat", !0);
      t = gt(t), yt(t) ? (!t.length || 50 < t.length) && Object(R.a)("Trigger can not be empty and can be up to ".concat(50, " characters long.")) : Object(R.a)("Trigger must be string or number."), ot.call("triggerChat", t)
    },
    Nt = function() {
      var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {},
        n = t.url,
        e = t.height;
      bt(), lt.moment && Object(R.a)("Moment is already opened"), yt(n) && n || Object(R.a)("Url must be string and can not be empty"), ["full", "tall", "compact"].includes(e) || Object(R.a)('The value of the field "height" must be one of the following: "full", "tall or "compact"'), lt.opened || ot.call("toggleChat", !0), ot.call("openMoment", n, e)
    },
    Rt = function() {
      bt(), lt.moment || Object(R.a)("Moment is already closed"), ot.call("closeMoment")
    },
    Ut = (h = A()(M.a.mark(function t(n) {
      var e, r;
      return M.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            return bt(), t.next = 3, ot.call("setSessionAttributes", wt(n));
          case 3:
            if (e = t.sent, r = xt(e)) throw new Error(r);
            t.next = 7;
            break;
          case 7:
            return t.abrupt("return", e);
          case 8:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function(t) {
      return h.apply(this, arguments)
    }),
    Wt = (p = A()(M.a.mark(function t(n) {
      var e, r;
      return M.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            return bt(), t.next = 3, ot.call("updateUser", {
              attributes: n
            });
          case 3:
            if (e = t.sent, r = xt(e)) throw new Error(r);
            t.next = 7;
            break;
          case 7:
            return t.abrupt("return", e);
          case 8:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function(t) {
      return p.apply(this, arguments)
    }),
    Dt = (m = A()(M.a.mark(function t() {
      var n, e;
      return M.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            return bt(), t.next = 3, ot.call("getUserData");
          case 3:
            if (n = t.sent, e = xt(n)) throw new Error(e);
            t.next = 7;
            break;
          case 7:
            return t.abrupt("return", n);
          case 8:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function() {
      return m.apply(this, arguments)
    }),
    zt = (v = A()(M.a.mark(function t() {
      return M.a.wrap(function(t) {
        for (;;) switch (t.prev = t.next) {
          case 0:
            bt(), ot.call("endChat");
          case 2:
          case "end":
            return t.stop()
        }
      }, t, this)
    })), function() {
      return v.apply(this, arguments)
    }),
    Gt = function() {
      return Object(R.c)('The "openChat" method will be deprecated on Dec 31, 2019. Please use the "openChatWindow" method.'), Ct()
    },
    Bt = function() {
      return Object(R.c)('The "closeChat" method will be deprecated on Dec 31, 2019. Please use the "closeChatWindow" method.'), St()
    },
    Ft = function() {
      return Object(R.c)('The "setCustomParameters" method will be deprecated on Dec 31, 2019. Please use the "setSessionAttributes" method.'), Ut.apply(void 0, arguments)
    },
    qt = function() {
      return Object(R.c)('The "setUserParameters" method will be deprecated on Dec 31, 2019. Please use the "setUserAttributes" method.'), Wt.apply(void 0, arguments)
    },
    Ht = function() {
      (lt.defined ? Object(R.c)("The widget code has been loaded more than once.") : (lt.defined = !0, window.postMessage && document.querySelector || Object(R.b)("Not supported browser type."))) && (! function() {
        var t = !0,
          n = !1,
          e = void 0;
        try {
          for (var r, o = dt[Symbol.iterator](); !(t = (r = o.next()).done); t = !0) {
            var i = r.value;
            lt.api[i] = "function" == typeof lt.api[i] ? lt.api[i] : null
          }
        } catch (t) {
          n = !0, e = t
        } finally {
          try {
            t || null == o.return || o.return()
          } finally {
            if (n) throw e
          }
        }
      }(), Object.keys(r).forEach(function(t) {
        return Object.defineProperty(lt.api, t, {
          writable: !1,
          enumerable: !0,
          value: r[t]
        })
      }), Yt("onBeforeLoad") && $t("create").catch(function(t) {
        return Object(R.b)(t, !1)
      }))
    },
    Yt = function(t) {
      var n = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : void 0;
      return "onBeforeLoad" === t ? null === lt.api[t] || !1 !== lt.api[t].call(lt.api) : "function" == typeof lt.api[t] && lt.api[t].call(lt.api, n)
    },
    $t = function(t, n) {
      if (lt.api.hasOwnProperty(t)) return lt.api[t](n)
    };
  O = function() {
    return document.body ? Ht() : window.addEventListener("DOMContentLoaded", Ht)
  }, y = I.polyfillUrl, b = g = O, (w = document.createElement("script")).type = "text/javascript", w.src = y, w.onload = g, w.onerror = b, document.head.appendChild(w)
}]);
