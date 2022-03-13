<?php

class UpoznavanjeSaKursom{
	
	public function izaberiKurs()
	{
		?>
		<div id="osnovno" class="osnove1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-container">
							<h2 class="sredina">Изаберите курс</h2>
							<p>Зашто ово говорим? Па зато што можете изабрати између два слична курса. Разлика је у томе што имате курс са српским ћириличним интерфејсом и курс са енглеским интерфејсом.</p>
							
							<ul class="list-unstyled li-space-lg">
								<li class="media">
									<h3>Ћирилична верзија (интерфејс)</h3>
								</li>
									<a href="images/excel-cirilica.png" data-lightbox="slika-1"><img class="slika-tabela" src="images/excel-cirilica.png" alt="Excel ćirilica" title="Ексел ћирилица"></a><br><br>
									<p>Уколико сте до сада користили верзију на енглеском језику и питали се да ли је могуће превести на српски језик и ћирилицу, као што видите могуће је. Веома је једноставно, скинете језичко паковање са званичног Мајкрософтовог (Microsoft) сајта и инсталирате га. Све је објашњено у видео лекцији. Након тога настављамо са радом на нашем језику. Веома лако се мења назад на енглески или неки други језик.</p>
									<a class="btn-solid-reg" href="https://www.udemy.com/course/naucite-ms-excel-od-pocetnika-do-eksperta-sr/?referralCode=7D0B920217D1BC78BE31">ЋИРИЛИЦА</a>
							
								<br><hr>
							
								<li class="media">
									<h3>Енглеска верзија (интерфејс)</h3>
								</li>
							
								<a href="images/excel-engleski.png" data-lightbox="slika-2"><img class="slika-tabela" src="images/excel-engleski.png" alt="Excel engleski" title="Ексел енглеска верзија"></a><br><br>
								<p>Ова верзија је најчешће и у употреби, колико сам до сада видео из праксе зато што већина није знала како да скине превод на српски језик. Уколико сте ипак навикли на енглески језик односно на ову верзију, ништа не брините, постоји и овај курс у истој дужини трајања, такође подељено у 27 модула и више од 20 часова трајања. </p>
								<a class="btn-solid-reg" href="https://www.udemy.com/course/naucite-ms-excel-od-pocetnika-do-eksperta-en/?referralCode=667BEB579C7FFA098F89">ЕНГЛЕСКИ</a>
							
								<br><hr>
								<p><i class="fas fa-square"></i> <strong>НАПОМЕНА:</strong> Куповином једног курса не добијате оба, јер су то два посебна курса, што значи, уколико купите ћириличну верзију, не добијате и верзију на енглеском и обрнуто.</p>
							</ul>
						</div> <!-- kraj text-container -->
					</div> <!-- kraj col -->
                <div class="col-lg-6">

					</div> <!-- kraj col -->
				</div> <!-- kraj row -->
			</div> <!-- kraj container -->
		</div> <!-- kraj osnove1 / Izaberi kurs -->
	<?php
	}
	
	////Kraj metode izaberiKurs
	////---------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	public function opis()
	{
		?>
		<div id="detalji" class="osnove2 razmak-id">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Шта ће те научити у овом курсу?</h2>
						<p class="sredina">Курс је подељен у три главне области, почетни, средњи и напредни односно експертски ниво.</p>
					</div> <!-- kraj col -->
				</div> <!-- kraj row -->
				<div class="row">
					<div class="col-lg-6">
						<ul class="list-unstyled li-space-lg first">
							<li class="media">
								<i class="bullet">1</i>
								<div class="media-body">
									<h4>Основе Ексела</h4>
									<p>Израда табела и врсте података, припрема и подашавање за штампање.</p><br>
								</div>
							</li>
							<li class="media">
								<i class="bullet">2</i>
								<div class="media-body">
									<h4>Валидација података</h4>
									<p>Начин да унесете само одговарајући тип података у табелу.  </p>
								</div>
							</li>
							<li class="media">
								<i class="bullet">3</i>
								<div class="media-body">
									<h4>Графикони</h4>
									<p>Рада са разним врстама и типовима графикона, промена типа графикона.</p>
								</div>
							</li>
						</ul>
					</div> <!-- kraj col -->
					<div class="col-lg-6">
						<ul class="list-unstyled li-space-lg second">
							<li class="media">
								<i class="bullet">4</i>
								<div class="media-body">
									<h4>Изведене (Пивот) табеле</h4>
									<p>Нешто за што сте вероватно чули, а нисте знали како. Најпознатији облик табела за креирање интерактивног садржаја.</p>
								</div>
							</li>
							<li class="media">
								<i class="bullet">5</i>
								<div class="media-body">
									<h4>ВБА језик и Макрое</h4>
									<p>ВБА је скраћеница за Visual Basic of Aplications (VBA) који представља програмски језик у самом Екселу.</p>
								</div>
							</li>
							<li class="media">
								<i class="bullet">6</i>
								<div class="media-body">
									<h4>Напредне табеле и напредне графиконе</h4>
									<p>3Д ексел графикони, захтевне табеле и многе друге ствари.</p>
								</div>
							</li>
						</ul>
					</div> <!-- kraj col -->
				</div> <!-- kraj row -->
			</div> <!-- kraj container -->
		</div> <!-- kraj osnove2 / opis -->
		<?php
	}
	////kraj metode opis
	////---------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	public function zaKogaJe()
	{
		?>
		<div class="osnove3">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-container">
							<h2>За кога је овај курс?</h2>
							<p>Овај курс је за све који желе да науче Ексел и све његове могућности. Није битно да ли сте почетник или сте неко са средњим нивоом знања у овом програму или сте ипак особа која жели да надогради своје знање у Екселу.</p>
							<a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">ПРЕДНОСТИ ОВОГ КУРСА</a>
						</div> <!-- kraj text-container -->
					</div> <!-- kraj col -->
					<div class="col-lg-6">
						<img class="img-fluid" src="images/excel-learning.jpg" alt="alternative">
					</div> <!-- kraj col -->
				</div> <!-- kraj row -->
			</div> <!-- kraj container -->
		</div> <!-- kraj osnove3 / za koga je -->
		<?php
	}
	
	////kraj metode zaKogaJe
	////---------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	public function detaljiLightbox()
	{
		?>
		<div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
			<div class="container">
				<div class="row">
					<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
					<div class="col-lg-8">
						<div class="image-container">
							<img class="img-fluid" src="images/detalji2-excel.jpg" alt="alternative">
						</div> <!-- kraj image-container -->
					</div> <!-- kraj col -->
					<div class="col-lg-4">
						<h3>Које су предности баш овог курса?</h3>
						<hr>
						<p>Циљ ми је да Вас научим да користите пуне капацитете Ексела, а не само да теоретски схватите како то ради.</p>
						<!--<h5>Које су предности баш овог курса?</h5>-->
						<ul class="list-unstyled li-space-lg">
							<li class="media">
								<i class="fas fa-square"></i><div class="media-body">Садржи преко 20 часова видео материјала</div>
							</li>
							<li class="media">
								<i class="fas fa-square"></i><div class="media-body">Видео лекције остају трајно код вас</div>
							</li>
							<li class="media">
								<i class="fas fa-square"></i><div class="media-body">Добијате табеле за практичне примере и вежбе</div>
							</li>
							<li class="media">
								<i class="fas fa-square"></i><div class="media-body">Сигурно плаћање</div>
							</li>
							<li class="media">
								<i class="fas fa-square"></i><div class="media-body">Рок од 30 дана за поврат новца уколико нисте задовољни</div>
							</li>
							<li class="media">
								<i class="fas fa-square"></i><div class="media-body">Добијате Е-сертификат по завршетку курса</div>
							</li>
						</ul>
					</div> <!-- kraj col -->
				</div> <!-- kraj row -->
			</div> <!-- kraj container -->
		</div> <!-- kraj lightbox-basic -->
		<?php
	}
	
	////kraj metode detaljiLightbox
	////---------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	public function kartice()
	{
		?>
		<div class="cards">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Где купујем курс?</h2>
						<p class="p-heading">Курс ће те купити преко светске познате платформе за учење <strong><a href="https://www.udemy.com/course/naucite-ms-excel-od-pocetnika-do-eksperta-en/?referralCode=667BEB579C7FFA098F89" target="_blank"><img class="udemylogo" src="images/udemylogo2.png"></a></strong>. За оне који нису упознати, на том сајту постоји на десетине хиљада курсева из разних области и то је најсигурнији начин обостране сарадње. Када се региструјете на тај сајт, курс остаје <strong>ТРАЈНО</strong> у вашем власништву. Сигурни сте приликом куповине и ова платформа за учење вам гарантује поврат новца у року од 30 дана уколико нисте задовољни курсом. </p>
						<p class="p-heading">Цена курса на том сајту је изражена у Америчким Доларима $ (можда код некога у Еврима €) и зависно од курса она углавном износи: <br> око <strong>11300 динара</strong> за Србију, <br> око <strong>190КМ</strong> за БиХ и <br> око <strong>97€</strong> за Црну Гору.</p>
						</ul>
					</div> <!-- kraj col -->
				</div> <!-- kraj row -->
				<div class="row">
					<div class="col-lg-12">

						<!-- Card -->
						<div class="card">
							<div class="card-image">
								<i class="fas fa-puzzle-piece"></i><!-- class="fas fa-atom"-->
							</div>
							<div class="card-body">
								<h4 class="card-title">27 модула</h4>
								<p>Курс је подељен у 27 модула, и садржи више од 20 часова видео материјала</p>
							</div>
						</div>
						<!-- kraj card -->

						<!-- Card -->
						<div class="card">
							<div class="card-image">
								<i class="fas fa-lock"></i><!-- class="fas fa-key"-->
							</div>
							<div class="card-body">
								<h4 class="card-title">Сигурност куповине</h4>
								<p>Гаранција сигурне куповине и могућност поврата новца у року од 30 дана</p>
							</div>
						</div>
						<!-- kraj card -->


						<!-- Card -->
						<div class="card">
							<div class="card-image">
								<i class="fas fa-stamp"></i><!-- class="fas fa-newspaper"-->
							</div>
							<div class="card-body">
								<h4 class="card-title">Е-сертификат</h4>
								<p>Добијате Е-сертификат по завршетку курса</p><br>
							</div>
						</div>
						<!-- kraj card -->

						<!-- Card -->
						<div class="card">
							<div class="card-image">
								<i class="fas fa-file-excel"></i><!-- class="fas fa-link"-->
							</div>
							<div class="card-body">
								<h4 class="card-title">Материјал за вежбе</h4>
								<p>Добијате материјал за практичне примере и вежбе</p><br>
							</div>
						</div>
						<!-- kraj card -->

						<!-- Card -->
						<div class="card">
							<div class="card-image">
							   <i class="fas fa-arrows-alt-h"></i><!-- class="fas fa-handshake"-->
							</div>
							<div class="card-body">
								<h4 class="card-title">2 верзије курса</h4>
								<p>Можете да изаберете са српским ћириличним или са енглеским интерфејсом</p>
							</div>
						</div>
						<!-- kraj card -->


						<!-- Card -->
						<div class="card">
							<div class="card-image">
								<i class="fas fa-infinity"></i><!-- class="fas fa-chart-bar"-->
							</div>
							<div class="card-body">
								<h4 class="card-title">Трајни приступ</h4>
								<p>Што значи да можете поново гледати лекције ако сте нешто заборавили</p>
							</div>
						</div>
						<!-- kraj card -->
                    
					</div> <!-- kraj col -->
				</div> <!-- kraj row -->
			</div> <!-- kraj container -->
		</div> <!-- kraj kartice -->
		<?php
	}
	
	////kraj metode kartice
	////---------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	public function videoUvod()
	{
		?>
		<div class="osnove4">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Видео увод у курс</h2>

						<!-- Video Preview -->
						<div class="image-container">
							<div class="video-wrapper">
								<a class="popup-youtube" href="https://www.youtube.com/watch?v=IM6uWAOtqdg" data-effect="fadeIn">
									<img class="img-fluid slika-sredina" src="images/matilda-wormwood.jpg" alt="alternative">
									<!--https://www.pexels.com/photo/photo-of-woman-sitting-on-a-couch-4100959/-->
									<span class="video-play-button">
										<span></span>
									</span>
								</a>
							</div> <!-- kraj video-wrapper -->
						</div> <!-- kraj image-container -->
						<!-- kraj video preview -->

					</div> <!-- kraj col -->
				</div> <!-- kraj row -->
			</div> <!-- kraj container -->
		</div> <!-- kraj osnove4 / video -->
		<?php
	}
	
	////kraj metode videoUvod
	////---------------------------------------------------------------------------------------------------------------------------------------------------------------------
	

	
}