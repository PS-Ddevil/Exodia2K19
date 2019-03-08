TweenMax.from("#device", 0.8, {y: 50, opacity: 0, ease:Back.easeOut, delay: 1});
TweenMax.from(".header", 0.8, {opacity: 0, x: 30, delay: 0.6});
TweenMax.from(".preheader", 1, {opacity: 0, x: -30, delay: 0.2});
TweenMax.from(".paragraph", 1, {opacity: 0, delay: 1, y: 20});
TweenMax.staggerFrom(".btn", 0.5, {y: 10, opacity: 0, delay: 1.6}, 0.4);  

var goalDay = '2018/04/06 00:00:00'

   var timerId = 0;
   timerId = setInterval(function() {
     var t = Date.parse(goalDay) - Date.parse(new Date());
     if (t < 0) {
       $(".days").text("0");
       $(".hours").text("0");
       $(".minutes").text("0");
       $(".seconds").text("0");
       clearInterval(timerId);
     } else {
       var seconds = Math.floor((t / 1000) % 60);
       var minutes = Math.floor((t / 1000 / 60) % 60);
       var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
       var days = Math.floor(t / (1000 * 60 * 60 * 24));
       $(".days").text(days);
       $(".hours").text(hours);
       $(".minutes").text(minutes);
       $(".seconds").text(seconds);
     }
   }, 2000);
