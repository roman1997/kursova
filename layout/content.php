<div class="col-sm-6">
	<div id="content">
		<div class="wall">
			<div class="ware">
				<ul>
					<li><img src="http://lorempixel.com/200/300/technics" alt=""></li>
				</ul>
			</div>
			<!--
			<div id="slider">
				<div id="main">
					<button class="left" onclick="slider.left();">
					</button>
					<div id="scr"></div>
					<button class="right" onclick="slider.right();">></button>
				</div>
				<br>
				<br>
				<div class="underphoto">
					<div class="row">
						<div class="col-sm-4">
							<img src="http://lorempixel.com/127/77/nightlife" alt="">
						</div>
						<div class="col-sm-4">
							<img src="http://lorempixel.com/127/77/nightlife" alt="">
						</div>
						<div class="col-sm-4">
							<img src="http://lorempixel.com/127/77/nightlife" alt="">
						</div>
					</div>
				</div>
				-end row
			</div>
-->

			<!-- <h2>Заголовок</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam expedita esse tenetur. Provident, error totam. Doloribus ut esse quibusdam maiores quaerat possimus inventore molestias repellat, velit aspernatur deleniti veniam. Odio.</p>
			<p>cd поміняти папку</p>
			<p>d /c/xampp/htdocs/site
			</p>
			<p>git status $ git init . git add .
			</p> -->
		</div>
	</div>

</div>
<!--end col-sm-9-->
<div class="col-sm-3">
	<!--	<img src="http://lorempixel.com/output/sports-h-c-211-575-7.jpg" alt="">-->
</div>
<!--end col-sm-3-->
</div>
<!--end row-->

</div>
<!--end container-->
<!--
<script>
	var slider = {
		slides: ['http://pipsum.com/540x380.jpg',
				'http://lorempixel.com/540/380/city',
				 'http://pipsum.com/540x380.jpg',
				 	'http://lorempixel.com/540/380/city'

				],
		frame: 0, // текущий кадр для отбражения - индекс картинки из массива
		set: function (image) { // установка нужного фона слайдеру
			document.getElementById("scr").style.backgroundImage = "url(" + image + ")";
		},
		init: function () { // запуск слайдера с картинкой с нулевым индексом
			this.set(this.slides[this.frame]);
		},
		left: function () { // крутим на один кадр влево
			this.frame--;
			if (this.frame < 0) this.frame = this.slides.length - 1;
			this.set(this.slides[this.frame]);
		},
		right: function () { // крутим на один кадр вправо
			this.frame++;
			if (this.frame == this.slides.length) this.frame = 0;
			this.set(this.slides[this.frame]);
		}
	};
	window.onload = function () { // запуск слайдера после загрузки документа
		slider.init();
		setInterval(function () { // ставим пятисекундный интервал для перелистывания картинок
			slider.right();
		}, 3000);
	};
</script>-->