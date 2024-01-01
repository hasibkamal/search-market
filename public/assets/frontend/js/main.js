
// ============================= Filter page slider js start hear =============================
var swiper = new Swiper(".filter-product-slider", {
	spaceBetween: 30,
	spaceBetween: 30,
	centeredSlides: true,
	autoplay: {
	  delay: 1200,
	  disableOnInteraction: false,
	},
	effect: "fade",
  });
// ============================= Filter page slider js end hear =============================
// ===================================Product detail color and size select js code start ========================================================
	$('.size').click(function(ev) {
		$('.size.active').removeClass('active');
		$(this).addClass('active')
	})
	$('.colors').click(function(iv) {
		$('.colors.active').removeClass('active');
		$(this).addClass('active')
	})
	$('.color').click(function(ve) {
			$('.color.active').removeClass('active');
			$(this).addClass('active')
	})
// ===================================Product detail color and size select js code end ========================================================
// product detail page Product zoom in JS start hear 
			  $(document).ready(function(){
				$('#product1').zoom();
				$('#product2').zoom();
				$('#product3').zoom();
			});
		// product detail page Product zoom in JS End hear 
		// ===========================  language select end hear ===================================
		var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
          selElmnt = x[i].getElementsByTagName("select")[0];
          ll = selElmnt.length;
          /*for each element, create a new DIV that will act as the selected item:*/
          a = document.createElement("DIV");
          a.setAttribute("class", "select-selected");
          a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
          x[i].appendChild(a);
          /*for each element, create a new DIV that will contain the option list:*/
          b = document.createElement("DIV");
          b.setAttribute("class", "select-items select-hide");
          for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                  if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                      y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                  }
                }
                h.click();
            });
            b.appendChild(c);
          }
          x[i].appendChild(b);
          a.addEventListener("click", function(e) {
              /*when the select box is clicked, close any other select boxes,
              and open/close the current select box:*/
              e.stopPropagation();
              closeAllSelect(this);
              this.nextSibling.classList.toggle("select-hide");
              this.classList.toggle("select-arrow-active");
            });
        }
        function closeAllSelect(elmnt) {
          /*a function that will close all select boxes in the document,
          except the current select box:*/
          var x, y, i, xl, yl, arrNo = [];
          x = document.getElementsByClassName("select-items");
          y = document.getElementsByClassName("select-selected");
          xl = x.length;
          yl = y.length;
          for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
              arrNo.push(i)
            } else {
              y[i].classList.remove("select-arrow-active");
            }
          }
          for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
              x[i].classList.add("select-hide");
            }
          }
        }
        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
		// =========================== language select end hear ===================================
		
		// =========================== Magnific popup end hear ===================================
		// $('.image-popup-fit-width').magnificPopup({
		// 	type: 'image',
		// 	closeOnContentClick: true,
		// 	image: {
		// 		verticalFit: false
		// 	}
		// });
		$(document).ready(function() {

			$('.image-popup-vertical-fit').magnificPopup({
				type: 'image',
				closeOnContentClick: true,
				mainClass: 'mfp-img-mobile',
				image: {
					verticalFit: true
				}
				
			});
		
		});
	
		
		// =========================== Magnific popup end hear ===================================
		
		// =========================== Lending-b2b js start hear ===================================
			var swiper = new Swiper(".b2b", {
					autoplay: {
						delay: 2500,
						disableOnInteraction: false,
					},
				cssMode: true,
				loop: true,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				pagination: {
					el: ".swiper-pagination",
				},
				mousewheel: true,
				keyboard: true,
				});
		// =========================== Lending-b2b js start hear ===================================

		// ============================= Slider-part = TopProduct  start =================================
		var swiper = new Swiper(".topProduct", {
				spaceBetween: 30,
				cssMode: true,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				breakpoints: {
					300: {
						slidesPerView: 1,
					},
					912: {
						slidesPerView: 2,
					},
					1025: {
						slidesPerView: 3,
					},
					1200: {
						slidesPerView: 3,
					}
					},
				mousewheel: true,
				keyboard: true,
				});
		// ============================= Slider-part = TopProduct  end =================================

		// ============================= New Arrivals = flash-saleSwiper  start =================================
		 var swiper = new Swiper(".flash-saleSwiper", {
			breakpoints: {
				300: {
					slidesPerView: 2,
				},
				912: {
					slidesPerView: 3,
				},
				1025: {
					slidesPerView: 4,
				},
				1200: {
					slidesPerView: 5,
				}
				},
			slidesPerView: 5,
			spaceBetween: 10,
			cssMode: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			mousewheel: true,
			keyboard: true,
			});
		// ============================= New Arrivals = flash-saleSwiper  end =================================

		// ============================ index page tab js start hear ==================================
		var swiper = new Swiper(".main-sellSwiper", {
			breakpoints: {
				300: {
					slidesPerView: 2,
				},
				912: {
					slidesPerView: 3,
				},
				1025: {
					slidesPerView: 4,
				},
				1200: {
					slidesPerView: 5,
				}
				},
				autoplay: {
			delay: 1500,
				disableOnInteraction: false,
			},
			slidesPerView: 5,
			spaceBetween: 10,
			cssMode: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			mousewheel: true,
			keyboard: true,
					});
		// ============================ index page tab js end hear ==================================
	
		// ============================== JavaScript Countdown Timer staet ================================
		var countDownDate = new Date("Nov 5, 2023 15:37:25").getTime();
			var x = setInterval(function() {
			var now = new Date().getTime();
			var distance = countDownDate - now;
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			document.getElementById("clock").innerHTML = days + "d " + hours + "h "
			+ minutes + "m " + seconds + "s ";
			if (distance < 0) {
			clearInterval(x);
			document.getElementById("clock").innerHTML = "EXPIRED";
			}
		}, 1000);
		// ============================== JavaScript Countdown Timer end ================================

		// ==============================================================
		var dropdown = document.getElementsByClassName("dropdown-btn");
			var i;
			for (i = 0; i < dropdown.length; i++) {
			dropdown[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var dropdownContent = this.nextElementSibling;
				if (dropdownContent.style.display === "block") {
				dropdownContent.style.display = "none";
				} else {
				dropdownContent.style.display = "block";
				}
			});
		}
		// ==============================================================

		// ========================== Load more js start hear ====================================
		$(function () {
			$(".just-it").slice(0, 5).show();
			$("body").on('click touchstart', '.load-more', function (e) {
				e.preventDefault();
				$(".just-it:hidden").slice(0, 25).slideDown();
				if ($(".just-it:hidden").length == 0) {
					$(".load-more").css('visibility', 'hidden');
				}
				// $('html,body').animate({
				// 	scrollTop: $(this).offset().top
				// }, 1000);
			});
			});
		// ========================== Load more js end hear ====================================
		//====================== Price filter javascript start hear ===========================
		!function(a){"use strict";"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){"use strict";function b(){var a=document.createElement("input");return a.setAttribute("type","range"),"text"!==a.type}function c(a,b){var c=Array.prototype.slice.call(arguments,2);return setTimeout(function(){return a.apply(null,c)},b)}function d(a,b){return b=b||100,function(){if(!a.debouncing){var c=Array.prototype.slice.apply(arguments);a.lastReturnVal=a.apply(window,c),a.debouncing=!0}return clearTimeout(a.debounceTimeout),a.debounceTimeout=setTimeout(function(){a.debouncing=!1},b),a.lastReturnVal}}function e(a){return a&&(0===a.offsetWidth||0===a.offsetHeight||a.open===!1)}function f(a){for(var b=[],c=a.parentNode;e(c);)b.push(c),c=c.parentNode;return b}function g(a,b){function c(a){"undefined"!=typeof a.open&&(a.open=a.open?!1:!0)}var d=f(a),e=d.length,g=[],h=a[b];if(e){for(var i=0;e>i;i++)g[i]=d[i].style.cssText,d[i].style.setProperty?d[i].style.setProperty("display","block","important"):d[i].style.cssText+=";display: block !important",d[i].style.height="0",d[i].style.overflow="hidden",d[i].style.visibility="hidden",c(d[i]);h=a[b];for(var j=0;e>j;j++)d[j].style.cssText=g[j],c(d[j])}return h}function h(a,b){var c=parseFloat(a);return Number.isNaN(c)?b:c}function i(a){return a.charAt(0).toUpperCase()+a.substr(1)}function j(b,e){if(this.$window=a(window),this.$document=a(document),this.$element=a(b),this.options=a.extend({},n,e),this.polyfill=this.options.polyfill,this.orientation=this.$element[0].getAttribute("data-orientation")||this.options.orientation,this.onInit=this.options.onInit,this.onSlide=this.options.onSlide,this.onSlideEnd=this.options.onSlideEnd,this.DIMENSION=o.orientation[this.orientation].dimension,this.DIRECTION=o.orientation[this.orientation].direction,this.DIRECTION_STYLE=o.orientation[this.orientation].directionStyle,this.COORDINATE=o.orientation[this.orientation].coordinate,this.polyfill&&m)return!1;this.identifier="js-"+k+"-"+l++,this.startEvent=this.options.startEvent.join("."+this.identifier+" ")+"."+this.identifier,this.moveEvent=this.options.moveEvent.join("."+this.identifier+" ")+"."+this.identifier,this.endEvent=this.options.endEvent.join("."+this.identifier+" ")+"."+this.identifier,this.toFixed=(this.step+"").replace(".","").length-1,this.$fill=a('<div class="'+this.options.fillClass+'" />'),this.$handle=a('<div class="'+this.options.handleClass+'" />'),this.$range=a('<div class="'+this.options.rangeClass+" "+this.options[this.orientation+"Class"]+'" id="'+this.identifier+'" />').insertAfter(this.$element).prepend(this.$fill,this.$handle),this.$element.css({position:"absolute",width:"1px",height:"1px",overflow:"hidden",opacity:"0"}),this.handleDown=a.proxy(this.handleDown,this),this.handleMove=a.proxy(this.handleMove,this),this.handleEnd=a.proxy(this.handleEnd,this),this.init();var f=this;this.$window.on("resize."+this.identifier,d(function(){c(function(){f.update(!1,!1)},300)},20)),this.$document.on(this.startEvent,"#"+this.identifier+":not(."+this.options.disabledClass+")",this.handleDown),this.$element.on("change."+this.identifier,function(a,b){if(!b||b.origin!==f.identifier){var c=a.target.value,d=f.getPositionFromValue(c);f.setPosition(d)}})}Number.isNaN=Number.isNaN||function(a){return"number"==typeof a&&a!==a};var k="rangeslider",l=0,m=b(),n={polyfill:!0,orientation:"horizontal",rangeClass:"rangeslider",disabledClass:"rangeslider--disabled",horizontalClass:"rangeslider--horizontal",verticalClass:"rangeslider--vertical",fillClass:"rangeslider__fill",handleClass:"rangeslider__handle",startEvent:["mousedown","touchstart","pointerdown"],moveEvent:["mousemove","touchmove","pointermove"],endEvent:["mouseup","touchend","pointerup"]},o={orientation:{horizontal:{dimension:"width",direction:"left",directionStyle:"left",coordinate:"x"},vertical:{dimension:"height",direction:"top",directionStyle:"bottom",coordinate:"y"}}};return j.prototype.init=function(){this.update(!0,!1),this.onInit&&"function"==typeof this.onInit&&this.onInit()},j.prototype.update=function(a,b){a=a||!1,a&&(this.min=h(this.$element[0].getAttribute("min"),0),this.max=h(this.$element[0].getAttribute("max"),100),this.value=h(this.$element[0].value,Math.round(this.min+(this.max-this.min)/2)),this.step=h(this.$element[0].getAttribute("step"),1)),this.handleDimension=g(this.$handle[0],"offset"+i(this.DIMENSION)),this.rangeDimension=g(this.$range[0],"offset"+i(this.DIMENSION)),this.maxHandlePos=this.rangeDimension-this.handleDimension,this.grabPos=this.handleDimension/2,this.position=this.getPositionFromValue(this.value),this.$element[0].disabled?this.$range.addClass(this.options.disabledClass):this.$range.removeClass(this.options.disabledClass),this.setPosition(this.position,b)},j.prototype.handleDown=function(a){if(this.$document.on(this.moveEvent,this.handleMove),this.$document.on(this.endEvent,this.handleEnd),!((" "+a.target.className+" ").replace(/[\n\t]/g," ").indexOf(this.options.handleClass)>-1)){var b=this.getRelativePosition(a),c=this.$range[0].getBoundingClientRect()[this.DIRECTION],d=this.getPositionFromNode(this.$handle[0])-c,e="vertical"===this.orientation?this.maxHandlePos-(b-this.grabPos):b-this.grabPos;this.setPosition(e),b>=d&&b<d+this.handleDimension&&(this.grabPos=b-d)}},j.prototype.handleMove=function(a){a.preventDefault();var b=this.getRelativePosition(a),c="vertical"===this.orientation?this.maxHandlePos-(b-this.grabPos):b-this.grabPos;this.setPosition(c)},j.prototype.handleEnd=function(a){a.preventDefault(),this.$document.off(this.moveEvent,this.handleMove),this.$document.off(this.endEvent,this.handleEnd),this.$element.trigger("change",{origin:this.identifier}),this.onSlideEnd&&"function"==typeof this.onSlideEnd&&this.onSlideEnd(this.position,this.value)},j.prototype.cap=function(a,b,c){return b>a?b:a>c?c:a},j.prototype.setPosition=function(a,b){var c,d;void 0===b&&(b=!0),c=this.getValueFromPosition(this.cap(a,0,this.maxHandlePos)),d=this.getPositionFromValue(c),this.$fill[0].style[this.DIMENSION]=d+this.grabPos+"px",this.$handle[0].style[this.DIRECTION_STYLE]=d+"px",this.setValue(c),this.position=d,this.value=c,b&&this.onSlide&&"function"==typeof this.onSlide&&this.onSlide(d,c)},j.prototype.getPositionFromNode=function(a){for(var b=0;null!==a;)b+=a.offsetLeft,a=a.offsetParent;return b},j.prototype.getRelativePosition=function(a){var b=i(this.COORDINATE),c=this.$range[0].getBoundingClientRect()[this.DIRECTION],d=0;return"undefined"!=typeof a["page"+b]?d=a["client"+b]:"undefined"!=typeof a.originalEvent["client"+b]?d=a.originalEvent["client"+b]:a.originalEvent.touches&&a.originalEvent.touches[0]&&"undefined"!=typeof a.originalEvent.touches[0]["client"+b]?d=a.originalEvent.touches[0]["client"+b]:a.currentPoint&&"undefined"!=typeof a.currentPoint[this.COORDINATE]&&(d=a.currentPoint[this.COORDINATE]),d-c},j.prototype.getPositionFromValue=function(a){var b,c;return b=(a-this.min)/(this.max-this.min),c=Number.isNaN(b)?0:b*this.maxHandlePos},j.prototype.getValueFromPosition=function(a){var b,c;return b=a/(this.maxHandlePos||1),c=this.step*Math.round(b*(this.max-this.min)/this.step)+this.min,Number(c.toFixed(this.toFixed))},j.prototype.setValue=function(a){(a!==this.value||""===this.$element[0].value)&&this.$element.val(a).trigger("input",{origin:this.identifier})},j.prototype.destroy=function(){this.$document.off("."+this.identifier),this.$window.off("."+this.identifier),this.$element.off("."+this.identifier).removeAttr("style").removeData("plugin_"+k),this.$range&&this.$range.length&&this.$range[0].parentNode.removeChild(this.$range[0])},a.fn[k]=function(b){var c=Array.prototype.slice.call(arguments,1);return this.each(function(){var d=a(this),e=d.data("plugin_"+k);e||d.data("plugin_"+k,e=new j(this,b)),"string"==typeof b&&e[b].apply(e,c)})},"rangeslider.js is available in jQuery context e.g $(selector).rangeslider(options);"});
		$(function(){
			$('input[type="range"]').rangeslider({
				polyfill:false,
				onInit:function(){
					$('.header .pull-right').text($('input[type="range"]').val()+' TK');
				},
				onSlide:function(position, value){
					$('.header .pull-right').text(value+' TK');
				},
				onSlideEnd:function(position, value){
				}
			});
		});
		//====================== Price filter javascript end hear ===========================
        // ======================== detail page product view javascript  start hear=======================
        var swiper = new Swiper(".mySwiper", {
			spaceBetween: 10,
			slidesPerView: 4,
			freeMode: true,
			watchSlidesProgress: true,
		  });
		  var swiper2 = new Swiper(".mySwiper2",{
			spaceBetween: 10,
			navigation: {
			  nextEl: ".swiper-button-next",
			  prevEl: ".swiper-button-prev",
			},
			thumbs: {
			  swiper: swiper,
			},
		  });
		// ======================== detail page product view javascript  end hear=======================
// ==================================== product quantity start hear ===================================================
(function () {
	const quantityContainer = document.querySelector(".quantity");
	const minusBtn = quantityContainer.querySelector(".minus");
	const plusBtn = quantityContainer.querySelector(".plus");
	const inputBox = quantityContainer.querySelector(".input-box");
  
	updateButtonStates();
  
	quantityContainer.addEventListener("click", handleButtonClick);
	inputBox.addEventListener("input", handleQuantityChange);
  
	function updateButtonStates() {
	  const value = parseInt(inputBox.value);
	  minusBtn.disabled = value <= 1;
	  plusBtn.disabled = value >= parseInt(inputBox.max);
	}
  
	function handleButtonClick(event) {
	  if (event.target.classList.contains("minus")) {
		decreaseValue();
	  } else if (event.target.classList.contains("plus")) {
		increaseValue();
	  }
	}
  
	function decreaseValue() {
	  let value = parseInt(inputBox.value);
	  value = isNaN(value) ? 1 : Math.max(value - 1, 1);
	  inputBox.value = value;
	  updateButtonStates();
	  handleQuantityChange();
	}
  
	function increaseValue() {
	  let value = parseInt(inputBox.value);
	  value = isNaN(value) ? 1 : Math.min(value + 1, parseInt(inputBox.max));
	  inputBox.value = value;
	  updateButtonStates();
	  handleQuantityChange();
	}
  
	function handleQuantityChange() {
	  let value = parseInt(inputBox.value);
	  value = isNaN(value) ? 1 : value;
  
	  // Execute your code here based on the updated quantity value
	  console.log("Quantity changed:", value);
	}
  })();
// ==================================== product quantity start hear ===================================================
// ==========================================Market location page map page js start hear==============================================
	 // Initialize and add the map
    function initMap() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };
                        
        // Display a map on the web page
        map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
        map.setTilt(50);
           
        // Multiple markers location, latitude, and longitude
        var markers = [
            ['Brooklyn Museum, NY', 23.716368707844342, 90.41157673572066],
            ['Central Library, Brooklyn, NY', 23.77981400634106, 90.41532228614527],
            ['Central Library, Brooklyn, NY', 23.73088180631736, 90.37999763486889],
            ['Central Library, Brooklyn, NY', 23.733419170486492, 90.38452474864393],
            ['Central Library, Brooklyn, NY', 23.813122472262712, 90.4241266883335],
            ['Central Library, Brooklyn, NY', 23.751207362143123, 90.39040799863062],
            ['Central Library, Brooklyn, NY', 23.778442653407307, 90.37953180885123],
            ['Central Library, Brooklyn, NY', 23.73564998430231, 90.38902157800939],
            ['Central Library, Brooklyn, NY', 23.7296652382489, 90.41254190232982],
            ['Central Library, Brooklyn, NY', 23.71588672617803, 90.3950597567788],
            ['Central Library, Brooklyn, NY', 23.74555887588189, 90.41194481000153],
            ['Central Library, Brooklyn, NY', 23.79228196383367, 90.41559860630291],
            ['Central Library, Brooklyn, NY', 23.74619332096206, 90.39469245885674],

        ];          
        // Info window content
        var infoWindowContent = [
            ['<div class="info_content">' +
            '<h2>Nawabpur Tools Market</h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
            '<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
            '<a href="shop.html"><img src="assets/img/mapImg/Nawabpur-Tools-Market.jpg"></a>'+
            '</div>'],
           ['<div class="info_content">' +
            '<h2>Gulshan DNCC Market </h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
			'<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
            '<a href="shop.html"><img src="assets/img/mapImg/Gulshan-Dcc-Market-Off-Day.jpg" alt="photo"></a>'+
            '</div>'],
             ['<div class="info_content">' +
            '<h2>New Market</h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
            '<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
            '<a href="shop.html"><img src="assets/img/mapImg/newMarket.jpg"></a>'+
            '</div>'],
             ['<div class="info_content">' +
            '<h2>Gawsia market dhaka</h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
			'<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
			'<a href="shop.html"><img src="assets/img/mapImg/gawsia.jpg" alt="photo"></a>'+
            '</div>'],
            ['<div class="info_content">' +
            '<h2>Jamuna Future park</h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
            '<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
            '<a href="jamuna.html"><img src="assets/img/mapImg/Jamuna-Future-Park.jpg" alt="Paris"></a>'+
            '</div>'],
            ['<div class="info_content">' +
            '<h2>Boshondhra shop compliax</h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
			'<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
			'<a href="shop.html"><img src="assets/img/mapImg/Bashundhara.jpg" alt="photo"></a>'+
            '</div>'],
            ['<div class="info_content">' +
            '<h2>IDB Dhaka</h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
			'<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
            '<a href="shop.html"><img src="assets/img/mapImg/idb.jpeg" alt="Paris"></a>'+
            '</div>'],
            ['<div class="info_content">' +
            '<h2>Katabon Pet Market</h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
            '<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
			'<a href="shop.html"><img src="assets/img/mapImg/katabon.jpg" alt="photo"></a>'+
            '</div>'],
            ['<div class="info_content">' +
            '<h2>Baitul Mukarram Market</h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
            '<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
			'<a href="shop.html"><img src="assets/img/mapImg/baitul-mokarram.jpg" alt="photo"></a>'+
            '</div>'],
             ['<div class="info_content">' +
            '<h2>Chowk Bazar Market</h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
			'<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
			'<a href="shop.html"><img src="assets/img/mapImg/chawkbazar.jpg" alt="photo"></a>'+
            '</div>'],
            ['<div class="info_content">' +
            '<h2>Mouchak Market</h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
			'<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
            '<a href="shop.html"><img src="assets/img/mapImg/mouchak.jpg" alt="photo"></a>'+
            '</div>'],
			['<div class="info_content">' +
            '<h2>Pink City Shopping Complex</h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
			'<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
            '<a href="shop.html"><img src="assets/img/mapImg/gulshan-pink-city-shopping-complex_1.jpg" alt="photo"></a>'+
            '</div>'],
            ['<div class="info_content">' +
            '<h2>Bangla Motor</h2>' +
            '<h3>Famous Market in Dhaka</h3>' +
            '<p><b>Open :</b> 9am <b>Closes :</b> 8pm</p>' +
			'<a href="shop.html"><img src="assets/img/mapImg" alt="photo"></a>'+
            '</div>'],
        ];
        // Add multiple markers to map
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        // Place each marker on the map  
        for( i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]
            });
            // Add info window to marker    
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));
            // Center the map to fit all markers on the screen
            map.fitBounds(bounds);
        }
        // Set zoom level
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(12);
            google.maps.event.removeListener(boundsListener);
        });
    }
    window.initMap = initMap;
// ==========================================Market location page map page js end hear==============================================

// Checkout.html page button on click active start hear
	function changeColor(buttonId) {
		document.getElementById('home').classList.remove('active');
		document.getElementById('office').classList.remove('active');
		document.getElementById(buttonId).classList.add('active');
	}
// Checkout.html page button on click active end hear
// filter.html page sort by button on click active start hear
function changeColor(buttonnnId) {
	document.getElementById('lowto').classList.remove('active');
	document.getElementById('highto').classList.remove('active');
	document.getElementById(buttonnnId).classList.add('active');
}
// filter.html page sort by button on click active end hear
// filter.html page Promotion & Service sort click active start hear
function changeColor(buttonnnId) {
	document.getElementById('delivery').classList.remove('active');
	document.getElementById('verified').classList.remove('active');
	document.getElementById('cashOn').classList.remove('active');
	document.getElementById(buttonnnId).classList.add('active');
}
// filter.html page Promotion & Service sort click active start hear
function myFunction() {
	alert("Service not available !");
	}

// translate start
   function googleTranslateElementInit(){
	new google.translate.TranslateElement("google_element");
}
// translate start
function openForm() {
	document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
	document.getElementById("myForm").style.display = "none";
  }