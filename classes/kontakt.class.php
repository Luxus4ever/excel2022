<?php

class Kontakt{
	
	public function kontaktForma()
	{
		?>
		<div class="container">
							
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Контакт</h2>
                        <p>Уколико имате нека додатна питања везано за овај курс контактирајте нас путем друштвених мрежа или слободно пошаљите е-маил са питањем</p>
                        
                    </div> <!-- kraj text-container -->
                </div> <!-- kraj col -->
                <div class="col-lg-6">

                    <!-- Kontakt forma -->
                    <form method="POST" action="php/kontakt.process.php" id="kontaktForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="name" id="name" required>
                            <label class="label-control" for="name">Име</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" name="email" id="email" required>
                            <label class="label-control" for="email">E-пошта</label>
                            <div class="help-block with-errors"></div>
                        </div>
						<div class="form-group">
                            <input type="text" class="form-control-input" name="subject" id="subject" required>
                            <label class="label-control" for="subject">Наслов</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="message" id="message" required></textarea>
                            <label class="label-control" for="message">Ваша порука</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Пошаљи</button>
                        </div>
                        <div class="form-message">
                            <div name="submit" id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
					
                    <!-- kraj kontakt forme -->

                </div> <!-- kraj col -->
            </div> <!-- kraj row -->
        </div> <!-- kraj container -->
		<?php
	}
	
	////Kraj metode kontaktForma
	////---------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	public function drustveneMreze()
	{
		?>
		<div class="icon-container">
			<span class="fa-stack">
				<a href="https://www.facebook.com/darko.excel" target="_blank">
					<i class="fas fa-circle fa-stack-2x"></i>
					<i class="fab fa-facebook-f fa-stack-1x"></i>
				</a>
			</span>
			<span class="fa-stack">
				<a href="https://www.instagram.com/darko.excel/" target="_blank">
					<i class="fas fa-circle fa-stack-2x"></i>
					<i class="fab fa-instagram fa-stack-1x"></i>
				</a>
			</span>
			<!--<span class="fa-stack">
				<a href="#your-link">
					<i class="fas fa-circle fa-stack-2x"></i>
					<i class="fab fa-linkedin-in fa-stack-1x"></i>
				</a>
			</span>-->
		</div> <!-- kraj icon-container -->
		<?php
	}
	
	////Kraj metode drustveneMreze
	////---------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	public function prikazForme()
	{
		?>
		<div id="kontakt" class="form-3 razmak-id">
			<?php 
			$kntkt= new Kontakt();
			$kntkt->kontaktForma();
			/* Društvene mreže */
			$kntkt->drustveneMreze();
			/* kraj Društvene mreže */
			?>
		</div> <!-- kraj form-3 -->
		<?php
	}
	
}