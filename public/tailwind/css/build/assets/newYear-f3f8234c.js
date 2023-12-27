(()=>{var w={};w.r=t=>{typeof Symbol<"u"&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})};var m={};/*!********************************************************!*\
  !*** ./resources/js/festival-decor/newYear/newYear.js ***!
  \********************************************************/w.r(m),window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(t){window.setTimeout(t,1e3/60)}}();var l=document.getElementById("canvas"),i=l.getContext("2d"),r=window.innerWidth,d=window.innerHeight,a=[],o=[],c=120,v=75,u=0;l.width=r,l.height=d;function h(t,e){return Math.random()*(e-t)+t}function y(t,e,s,n){var T=t-s,x=e-n;return Math.sqrt(Math.pow(T,2)+Math.pow(x,2))}function p(t,e,s,n){for(this.x=t,this.y=e,this.sx=t,this.sy=e,this.tx=s,this.ty=n,this.distanceToTarget=y(t,e,s,n),this.distanceTraveled=0,this.coordinates=[],this.coordinateCount=2;this.coordinateCount--;)this.coordinates.push([this.x,this.y]);this.angle=Math.atan2(n-e,s-t),this.speed=5,this.acceleration=500,this.brightness=h(50,70),this.targetRadius=1}p.prototype.update=function(t){this.coordinates.pop(),this.coordinates.unshift([this.x,this.y]),this.targetRadius<8?this.targetRadius+=.3:this.targetRadius=1,this.speed*=this.acceleration;var e=Math.cos(this.angle)*this.speed,s=Math.sin(this.angle)*this.speed;this.distanceTraveled=y(this.sx,this.sy,this.x+e,this.y+s),this.distanceTraveled>=this.distanceToTarget?(b(this.tx,this.ty),a.splice(t,1)):(this.x+=e,this.y+=s)},p.prototype.draw=function(){i.beginPath(),i.moveTo(this.coordinates[this.coordinates.length-1][0],this.coordinates[this.coordinates.length-1][1]),i.lineTo(this.x,this.y),i.strokeStyle="hsl("+c+", 100%, "+this.brightness+"%)",i.stroke(),i.beginPath(),i.arc(this.tx,this.ty,this.targetRadius,0,Math.PI*2),i.stroke()};function g(t,e){for(this.x=t,this.y=e,this.coordinates=[],this.coordinateCount=5;this.coordinateCount--;)this.coordinates.push([this.x,this.y]);this.angle=h(0,Math.PI*2),this.speed=h(1,10),this.friction=.95,this.gravity=1,this.hue=h(c-20,c+20),this.brightness=h(50,80),this.alpha=1,this.decay=h(.015,.03)}g.prototype.update=function(t){this.coordinates.pop(),this.coordinates.unshift([this.x,this.y]),this.speed*=this.friction,this.x+=Math.cos(this.angle)*this.speed,this.y+=Math.sin(this.angle)*this.speed+this.gravity,this.alpha-=this.decay,this.alpha<=this.decay&&o.splice(t,1)},g.prototype.draw=function(){i.beginPath(),i.moveTo(this.coordinates[this.coordinates.length-1][0],this.coordinates[this.coordinates.length-1][1]),i.lineTo(this.x,this.y),i.strokeStyle="hsla("+this.hue+", 100%, "+this.brightness+"%, "+this.alpha+")",i.stroke()};function b(t,e){for(var s=125;s--;)o.push(new g(t,e))}function f(){requestAnimFrame(f),c+=.3,i.globalCompositeOperation="destination-out",i.fillStyle="rgba(0, 0, 0, 0.5)",i.fillRect(0,0,r,d),i.globalCompositeOperation="lighter";for(var t=a.length;t--;)a[t].draw(),a[t].update(t);for(var t=o.length;t--;)o[t].draw(),o[t].update(t);u>=v?(a.push(new p(r/2,d,h(0,r),h(0,d/2))),u=0):u++}window.onload=f})();
