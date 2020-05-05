/*!
 DMXzone Browser
 Version: 2.1.0
 (c) 2020 DMXzone.com
 @build 2020-03-12 13:49:49
 */
dmx.Component("browser",{initialData:{online:navigator.onLine,doNotTrack:!1,userAgent:navigator.userAgent,language:navigator.language,cookieEnabled:navigator.cookieEnabled,referrer:document.referrer,location:{hash:window.location.hash,host:window.location.host,hostname:window.location.hostname,href:window.location.href,origin:window.location.origin,pathname:window.location.pathname,port:window.location.port,protocol:window.location.protocol,search:window.location.search,pathparts:window.location.pathname.substr(1).split("/")},scrollX:{offset:0,direction:0,position:0},scrollY:{offset:0,direction:0,position:0},viewport:{width:0,height:0},device:{width:0,height:0,pixelRatio:1,orientation:"landscape"},document:{width:0,height:0,hidden:document.hidden,visibility:document.visibilityState}},methods:{goto:function(t){if("."==t[0]&&"/"==t[1]){var o=document.querySelector('meta[name="ac:base"]'),i=document.querySelector('meta[name="ac:route"]');if(i&&i.content){var e=i.content;o&&o.content&&(e=o.content.replace(/\/$/,"")+e);var n=dmx.pathToRegexp(e,[],{end:!1}).exec(location.pathname);if(n){window.history.pushState(null,"",t.replace("./",n[0])),dmx.requestUpdate();var a=document.createEvent("Event");return a.initEvent("pushstate",!1,!1),void window.dispatchEvent(a)}}}window.location=t},scrollTo:function(t,o){window.scrollTo(t,o)},scrollXTo:function(t){window.scrollTo({left:t})},scrollYTo:function(t){window.scrollTo({top:t})},scrollBy:function(t,o){window.scrollBy(t,o)},scrollXBy:function(t){window.scrollBy({left:t})},scrollYBy:function(t){window.scrollBy({top:t})},alert:function(t){window.alert(t)}},events:{scroll:Event,resize:Event,online:Event,offline:Event,popstate:Event,visibilitychange:Event,orientationchange:Event},render:function(t){window.addEventListener("scroll",this.update.bind(this)),window.addEventListener("resize",this.update.bind(this)),window.addEventListener("online",this.update.bind(this)),window.addEventListener("offline",this.update.bind(this)),window.addEventListener("popstate",this.update.bind(this)),window.addEventListener("visibilitychange",this.update.bind(this)),window.orientation&&window.addEventListener("orientationchange",this.update.bind(this)),this.update()},update:function(t){var o=Math.max(document.body.scrollWidth,document.documentElement.scrollWidth),i=Math.max(document.body.scrollHeight,document.documentElement.scrollHeight),e=this.data.scrollX.direction,n=this.data.scrollY.direction;t&&"scroll"==t.type&&(this.data.scrollX.offset<window.pageXOffset?e=1:this.data.scrollX.offset>window.pageXOffset&&(e=-1),this.data.scrollY.offset<window.pageYOffset?n=1:this.data.scrollY.offset>window.pageYOffset&&(n=-1)),this.set("online",navigator.onLine),this.set("doNotTrack","1"==navigator.doNotTrack||"1"==window.doNotTrack||"1"==navigator.msDoNotTrack),this.set("userAgent",navigator.userAgent),this.set("language",navigator.language),this.set("cookieEnabled",navigator.cookieEnabled),this.set("referrer",document.referrer),this.set("location",{hash:window.location.hash,host:window.location.host,hostname:window.location.hostname,href:window.location.href,origin:window.location.origin,pathname:window.location.pathname,port:window.location.port,protocol:window.location.protocol,search:window.location.search,pathparts:window.location.pathname.substr(1).split("/")}),this.set("scrollX",{offset:window.pageXOffset,length:Math.max(0,o-window.innerWidth),direction:e,position:0<window.pageXOffset?window.pageXOffset/(o-window.innerWidth):0}),this.set("scrollY",{offset:window.pageYOffset,length:Math.max(0,i-window.innerHeight),direction:n,position:0<window.pageYOffset?window.pageYOffset/(i-window.innerHeight):0}),this.set("viewport",{width:window.innerWidth,height:window.innerHeight,scrollX:window.pageXOffset,scrollY:window.pageYOffset}),this.set("device",{width:window.screen.width,height:window.screen.height,pixelRatio:window.devicePixelRatio||window.screen.deviceXDPI/window.screen.logicalXDPI,orientation:this.getOrientation()}),this.set("document",{width:o,height:i,hidden:document.hidden,visibility:document.visibilityState}),t&&t.type&&this.dispatchEvent(t)},getOrientation:function(){return window.matchMedia("(orientation: portrait)").matches?"portrait":"landscape"}});
//# sourceMappingURL=../maps/dmxBrowser.js.map
