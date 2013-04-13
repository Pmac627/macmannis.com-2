// GoSquared - @version 4.0.601
(function(j,o,k,A,I,B,J,r,t,ma,Q,C,u,K,aa,v,w,x,y,na,R,S,D,ba,L,T,ca,U,n){var M,N,V;function E(b,c,d,e){var g;(g=b.addEventListener)?g.call(b,c,d,u):b.attachEvent(e||"on"+c,d)}function q(b,c){return function(){b(c)}}function da(b){function c(b){return"expires="+(new J(b)).toGMTString()+";"}var d="path=/;",e=p("cookieDomain");e&&(d+="domain="+e+";");return{C:function(e,h){M&&(k[S]=e+"="+h+";"+c(+new J+(b?6E10:6E4))+d)},t:function(b){if(M)return(k[S].match("(^|;)\\s*"+b+"=(.*?)(;|$)")||[])[2]||K},$:function(b){k[S]=
b+"=;"+c(0)+d}}}function F(b){function c(){var b=g[D];b&&(g[D]=b[w](d)[0])}var d=":_GS_:",e;if(F.F)return F.F;var g=o.top;F.F=e={r:function(){c();g[D]=(g[D]||"")+d+[b,e.l,e.h]}};try{var h=g[D]||"";if(-1!=h[U](d)){var m=h[w](d)[1][w](",");m[0]==b&&(e.l=m[1]||"",e.h=m[2]||"")}c()}catch(l){e.r=function(){}}return e}function p(b,c){b=j[b];return b!==n?b:c}function oa(b,c){var d,e=o._gstc_lt,g=O(O(b).N),h=g.ua+(p("trackParams",C)?g.P:"")[x](/[?&]utm_[^=]*=[^&]*/g,"")+(p("trackHash")?g.ta:""),m=c!==n?c:
k.title,l=g.M,f=g.O,pa=g.va;d=(d=o._gstc_s)&&e?e-d:n;var G;e&&(G=new J-e-p("TrackDelay"));return{ha:h,ra:m,aa:l,ka:f,ma:pa,ia:d,sa:G,da:"file:"==g.O,ca:/fb_xd_(bust|fragment)/.test(g.N)}}function qa(){var b=p("referrer",k.referrer),c=k.domain,d=u;!b||/^(chrome|about|file):$/.test(b)?b="-":(c=O(b).M[U](c),d=0<=c&&8>=c,b=/^\[.*\]$/.test(b)?"-":b);return{v:+d,oa:b}}function ra(b){var b=O(b).P,c,d,e,g;c=/[?&]([^=]+)=([^&]*)/g;d={};for(g=ma;e=c.exec(b[x](/\+/g," "));d[g(e[1])]=g(e[2]));var h;if(b&&(h=
d.utm_campaign))return{V:h,W:d.utm_source,U:d.utm_medium,X:d.utm_term,T:d.utm_content}}function sa(b,c,d){var e=da(1),g=F(b.c),h=e.t("gs_u")||g.l,m=1,l=1,f=(h||"")[w](":"),k,G=C,j=0,W;!h||!h.match(/^[0-9\:]*$/)?(G=u,h=0|B.random()*aa):(h=f[0],2>f[y]&&(f[1]=2019,f[2]=4621),4>f[y]&&(f[3]=0),m=(f[1]-2019)/548+ +!!c,l=(f[2]-4621)/379+1,j=f[3]/1E3);e.C("gs_u",g.l=[h,2019+548*m,4621+379*l,+new J].join(":"));c=e.t(N+b.c)||g.h;c!==K&&c!==n&&(W=c,e.$(N+b.c));d&&(W=b.id);if((b=p("Visitor"))&&"object"==typeof b){k=
[];for(var o in b)b[ba](o)&&k.push(o+"="+("gravatar"==o?ta(b[o][x](/^\s+|\s+$/g,"")[R]()):b[o]));k=k.join("|")}return{id:+h,wa:m,na:l,ga:~~j,qa:G,ja:W,Z:k}}function X(b){b.L===n&&(b.L=5);if(--b.L){var c=["data.gosquared.com/"],d=k[ca]("head")[0],e=k[v]("script"),g=u,h=r(function(){if(e)d[L](e);e=K;Y=(Y+1)%c[y];X(b)},1E4),m=b.B+"?"+function(b){var d=[],c;for(c in b)b[ba](c)&&b[c]!==n&&d.push((Q||escape)(c)+"="+(Q||escape)(b[c]));return d.join("&")}(b.A);e.src="//"+c[Y]+m;e.onload=e.onreadystatechange=
function(c){c=this.readyState;if(!g&&(!c||c=="loaded"||c=="complete")){g=C;b.k&&b.k();if(e)d[L](e);e=K;t(h)}};d[T](e)}}function ua(){function b(b){for(var b=[b[x](/^./,function(b){return b[R]()}),"Webkit"+b,"Moz"+b,"O"+b,"ms"+b],d=0,c=b[y];c--;)e[b[c]]!==n&&(d=1);return d}var c="a"+(0|B.random()*aa),d=k[v]("div"),e=d.style,g=k[v]("canvas"),h,m=0;try{localStorage.set(c,c),localStorage.remove(c),m=1}catch(l){}var f=b("Perspective");if(f&&"webkitPerspective"in e){var j=k[v]("style");j.textContent="@media (-webkit-transform-3d){#"+
c+"{height:3px}}";k[ca]("head")[0][T](j);d.id=c;k.body[T](d);f=3==d.offsetHeight;j.parentNode[L](j);d.parentNode[L](d)}return[+!(!g.getContext||!g.getContext("2d")),+!!o.WebGLRenderingContext,+("geolocation"in A),+!(!(h=o.history)||!h.pushState),+("WebSocket"in o||"MozWebSocket"in o),+!!k[v]("video").canPlayType,+!!k[v]("audio").canPlayType,+("placeholder"in k[v]("input")),+m,b("Transform"),+f,b("Transition"),+function(b,d){var c=d+b+"-";e.cssText=b+c+["webkit","moz","ms","o-"].join("-"+c)+d;return/grad/.test(e.background)}("background:",
"linear-gradient(top,red,red);"),b("AnimationName"),+!!o.Worker].join("")}function ea(){function b(b){return o["inner"+b]||e&&e[g="client"+b]||d&&d[g]}function c(b){return B.max(d[g="scroll"+b],e[g],d[g="offset"+b],e[g],d[g="client"+b],e[g])}var d=k.body,e=k.documentElement,g;return{S:b("Width"),Q:b("Height"),s:c("Width"),p:c("Height"),G:o.pageXOffset||d&&d.scrollLeft||e&&e.scrollLeft||0,H:o.pageYOffset||d&&d.scrollTop||e&&e.scrollTop||0}}function va(){var b={b:{f:0,d:0},n:"-",fa:(A.language||A.browserLanguage||
"-")[R](),ea:+A.javaEnabled(),Y:k.characterSet||k.ya||"-",ba:function(b,c){var g,h,m,l,f;if(A&&(g=A.plugins)&&0<(h=g[y]))for(f=0;f<h;f++){if(-1<(l=g[f])[D][U](m=b+" "+c))return l.description[w](m+" "),l.description[w](m+" ")[1]}else if(g=o.ActiveXObject){try{if(l=(new g((m=b+c+".")+b+c)).GetVariable("$version"))return l=l[w](" ")[1][w](","),l[0]+"."+l[1]+" r"+l[2]}catch(k){}for(f=13;--f;)try{if(l=new g(m+m+f),self.Aa=l&&l.xa,l)return f+".0"}catch(j){}}return"-"}("Shockwave","Flash")};if(I)b.b={f:I.width,
d:I.height},b.n=I.colorDepth;else if(o.java)try{a=java.awt.Toolkit.getDefaultToolkit(),i=a.getScreenSize(),b.b={f:i.width,d:i.height}}catch(c){}return b}function wa(b){var c=da();M?c.C(N+b.c,b.id):(c=F(b.c),c.h=b.id,c.r())}function fa(b){b.g=C;t(b.I)}function Z(b){b.g=u;b.I=r(q(xa,b),36E6)}function xa(b){b.J=C;t(b.I)}function ga(b){b.g||(fa(b),t(b.m),b.m=r(q(Z,b),6E4))}function ha(b,c){b[c.shift()].apply(b,c)}function P(b,c,d){if(!b.J)if(b.id!==n){c!==n||(c=b.g?"focus":"blur");if(d===n)var e=ea(),
d={vw:e.S,vh:e.Q,dw:e.s,dh:e.p,st:e.H,sl:e.G};d=d||{};d.a=b.c;d.u=b.uid;d.i=b.id;d.e=c;d._=B.random();$&&b.w&&s&&(b.w=u,d.o_si=s.D,d.o_vi=s.R,d.o_ci=s.o);X({B:"ping",k:function(){if(j.ps){t(b.j);if(!b.J)b.j=r(q(P,b),2E4);delete j.ps}},A:d})}else{var g=arguments;r(function(){P.apply(this,g)},5E3)}}function ia(b,c){var d=oa(b,c),e=qa(),g=sa(this,!e.v,b!==n),h=va(),m=ra(b),l=ea();if(!(d.da||d.ca||h.b.f&&h.b.d&&10>h.b.f&&10>h.b.d)){var f=this,d={a:f.c,cs:h.Y,cd:h.n,fl:h.ba,je:h.ea,la:h.fa,sw:h.b.f,sh:h.b.d,
dm:d.aa,pa:d.ha,pt:d.ra,pr:d.ka,po:d.ma,pl:~~d.ia,tl:~~d.sa,ri:e.v,ru:e.oa,ui:g.id,re:g.qa,vi:g.wa,pv:g.na,lv:g.ga,vw:l.S,vh:l.Q,dw:l.s,dh:l.p,st:l.H,sl:l.G,tv:ya,un:p("UserName")||p("VisitorName"),pp:g.ja,cp:g.Z,ec:p("errorCode"),bs:ua()};f.uid=g.id;b===n&&(d.id=f.id);e.z&&(d.oe=e.z.za,d.ok=e.z.Ba);m&&(d.c_n=m.V,d.c_s=m.W,d.c_m=m.U,d.c_c=m.T,d.c_t=m.X);$&&(s?(d.o_si=s.D,d.o_vi=s.R,d.o_ci=s.o):f.w=C);e={B:"pv",A:d,k:function(){if(j.id!==n){f.id=j.id;delete j.id;f.j=r(q(P,f),15E3);E(o,"beforeunload",
q(wa,f))}}};t(f.j);X(e);f.id!==n?b!==n&&(f.id=n):r(function(){E(k,"focus",q(fa,f),"focusin");E(k,"blur",q(Z,f),"focusout");E(k,"mousemove",q(ga,f));f.m=r(q(Z,f),6E4);E(k,"keydown",q(ga,f))},500)}}function ja(b){this.c=b;this.g=u}function ka(b,c){c||(c=V);return j[c]?(la(c),j[c]):j[c]=new ja(b)}function la(b){b||(b=V);j[b]&&t(j[b].K)}var ya="4.0",O=function(b){return function(c,d){c===n&&(c=location.href);b.href=c;return d={ua:b[na][x](/^([^\/]|$)/,"/$1"),ta:b.hash[x](/^#$/,""),O:b.protocol[x](/^:$/,
"")||location.protocol,M:b.hostname||location.hostname,N:b.href,P:b.search,va:b.port}}}(k[v]("a"));N="gs_p_";M=!p("noCookies");V="DefaultTracker";var ta=function(b){function c(b,c){return((b>>1)+(c>>1)<<1)+(b&1)+(c&1)}for(var d=[],e=0;64>e;)d[e]=0|4294967296*B.abs(B.sin(++e));return function(e){for(var h,m,l,f,k=[],e=unescape(Q(e)),j=e[y],o=[h=1732584193,m=-271733879,~h,~m],n=0;n<=j;)k[n>>2]|=(e.charCodeAt(n)||128)<<8*(n++%4);k[e=(j+8>>6)*b+14]=8*j;for(n=0;n<e;n+=b){j=o;for(f=0;64>f;)j=[l=j[3],c(h=
j[1],(l=c(c(j[0],[h&(m=j[2])|~h&l,l&h|~l&m,h^m^l,m^(h|~l)][j=f>>4]),c(d[f],k[[f,5*f+1,3*f+5,7*f][j]%b+n])))<<(j=[7,12,17,22,5,9,14,20,4,11,b,23,6,10,15,21][4*j+f++%4])|l>>>32-j),h,m];for(f=4;f;)o[--f]=c(o[f],j[f])}for(e="";32>f;)e+=(o[f>>3]>>4*(1^f++&7)&15).toString(b);return e}}(16),Y=0,$=u,s,z=ja.prototype;z.TrackView=ia;z.TrackEvent=function(b,c){if("string"==typeof c||"number"==typeof c)c={caption:c};c||(c={});c.gs_evt_name=b;P(this,"event",c)};z.Cancel=function(){t(this.K)};j.Tracker=ka;j.Cancel=
la;var H=ka(p("acct")),z=j.TrackDelay=p("TrackDelay",50);H.K=r(function(){ia.call(H)},z);(function(){var b=o.olark;b&&b("api.boot.onIdentityReady",function(b,d,e){s={D:b,R:d,o:e}});$=!!b})();(z=p("load"))&&z(H);(function(){var b=p("q");if(b)for(var c=0;c<b[y];c+=1)ha(H,b[c]);j.q={push:function(b){ha(H,b)}}})()})(window.GoSquared||(GoSquared={}),window,document,navigator||{},screen,Math,Date,setTimeout,clearTimeout,decodeURIComponent,encodeURIComponent,1,0,null,2147483647,"createElement","split","replace",
"length","pathname","toLowerCase","cookie","name","hasOwnProperty","removeChild","appendChild","getElementsByTagName","indexOf");