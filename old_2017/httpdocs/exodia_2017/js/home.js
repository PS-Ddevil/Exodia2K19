                            
                            
                            $(document).ready(function(){
                                    $('#loader').fadeOut(3000);
                                    
                                    $(".tool-body").slideUp(0);
                                    $(".tool").animate({width: "0px"}, 0);
                                    for(i=1;i<=8;++i) {
                                        var obj = $("#s"+i);
                                            id = "s"+i;
                                            var head = $("."+id+"_head").text();
                                            
                                            $(".tool-" + id +"-head").html(head);
                                            
                                            var pos = obj.offset();
                                            var x = (pos.left - 200) + "px";
                                            var y = (pos.top + 10) + "px";
                                            var tool = $(".tool-"+id);
                                            tool.css({left : x, top : y});
                                            tool.animate({width: "200px"}, 150);
                                            $(".tool-" + id +"-head").animate({padding: "5px"});        
                                    }
                                    $(".events").on("mouseover",function(){
                                var obj = $(this);
                                            id = obj.attr("id");
                                            var head = $("."+id+"_head").text();
                                            var body = $("."+id+"_body").text();
                                            $(".tool-" + id +"-head").html(head);
                                            $(".tool-"+id+"-body").html(body);
                                            var pos = obj.offset();
                                            var x = (pos.left - 200) + "px";
                                            var y = (pos.top + 10) + "px";
                                            var tool = $(".tool-"+id);
                                            tool.css({left : x, top : y});
                                            tool.animate({width: "200px"}, 150);
                                            $(".tool-" + id +"-head").animate({padding: "5px"}, 150, function() {
                                                    $(".tool-" + id +"-body").slideDown(150);
                                            });
                            });
                                    $(".events").on("mouseout",function(){
                                            var obj = $(this);
                                            id=obj.attr("id");
                                            $(".tool-" + id +"-body").html("");
                                            var pos = obj.offset();
                                            var x = pos.left + obj.width() + "px";
                                            var y = pos.top + "px";
                                            var tool = $(".tool-"+id);
                                            $(".tool-" + id +"-body").slideUp(150);
                            });
                                    var clock;
				                    var currentDate = new Date();
				        var futureDate  = new Date(2017, 3, 7);
				var diff = futureDate.getTime()/1000 - currentDate.getTime()/1000;
				clock = $('.clock').FlipClock(diff, {clockFace: 'DailyCounter', countdown: true});
                                
                            });
                                    
                            var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                            var height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
                            
                            var x = document.getElementsByClassName("msg");
                            
                            x[0].style.left = width * 0.3 + "px";
                            x[0].style.top = height * 0.25 + "px";
                            x[0].style.fontSize = width * 0.03 + "px";
                            
                            var x = document.getElementById("back");
                            if(width < 1600){
                                width = 1600;
                                height = 900;
                            }
                            else{
                                height = (width / 1600) * 900;
                            }

                            x.style.width = width + "px";
                            x.style.height = height + "px";
                            
                            var events = document.getElementsByClassName("events");

                            for(var i = 0; i < events.length - 1; i++){
                                events[i].style.height = (width * 0.03) + "px";
                                events[i].style.width = (width * 0.03) + "px";
                                events[i].src = "images/spinner.png";
                            }

                            events[7].style.height = (width * 0.05) + "px";
                            events[7].style.width = (width * 0.05) + "px";
                            events[7].src = "images/spinner.png";