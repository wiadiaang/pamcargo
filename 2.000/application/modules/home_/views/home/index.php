<div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider">
				<img src="static/slide2.jpg" data-thumb="static/slide3.jpg" alt="" title="#caption2" />
				<img src="static/slide3.jpg" data-thumb="static/slide2.jpg" alt="" title="#caption3" />
		</div>
    </div>

<main class="slide">

    <div class="fw dark-grey-bg" style="background-color: #0e1b2b; background-image: url(../express.rembon_components/images/compare_bg.jpg); border: 1px solid #fff; border-width: 4px 0">

        <section class="h-form">

            <div class="block b1">

                <h1>Tariff Check</h1>

                <form action="search-result.php" method="POST">

                    <div class="obj">

                        <label>Form:</label>
                        <select name="from" required>

                            <option value="" selected disabled>Select Province</option>
                           
                        </select>

                    </div>

                    <div class="obj">

                        <label>To:</label>
                        <select name="to" required>

                            
                        </select>

                    </div>

                    <div class="obj">

                        <label>Weight:</label>
                        <input type="number" name="weight" value="1" required/>
                        Kg

                    </div>

                    <div class="obj">

                        <label>Dimension:</label>
                        <input type="number" name="dimensionL" placeholder="L" required/> cm x
                        <input style="margin-left: 10px" type="number" name="dimensionW" placeholder="W" required/> cm x
                        <input style="margin-left: 10px" type="number" name="dimensionH" placeholder="H" required/> cm

                    </div>

                    <button type="submit">Check</button>

                </form>

            </div>

            <div class="separator"></div>

            <div class="block b2">

                <h1>Trace & Track</h1>

                <form action="" method="POST">

                    <textarea name="Consignment" placeholder="Contoh 65-160716-7705175" required></textarea>
                    <span>Enter your waybill number (separated by comma). Available up to 10 waybills.</span>
                    <button type="submit" style="margin: 0; width: 100%">Track</button>

                </form>

            </div>

        </section>

    </div>


<div class="fw" style="background-image: url(../express.rembon_components/images/choose_bg.jpg);">
    <section class="why-choose">
        <header>
            <h2 style="color:#FFFFFF;">Mengapa Memilih Kami?</h2></header>
        <p class="welcome-text mob-me" style="color:#FFFFFF;">Layanan kami menyesuaikan kebutuhan pelanggan kami. Apa yang kami lakukan, adalah menjemput barang mereka dan mengirimkannya sampai di depan pintu sesuai alamat tujuan.</p>

        <div class="box col-xs-12 col-sm-4 col-md-4 col-lg-4 mobHide">
            <div>
                <a href="/page/services.php" class="icon-link"><span class="icon-delivery23 mpdGreen"></span></a>
                <h3>Cepat dan Mudah</h3>
		<br />
                <p>Sistem <i>Online Booking</i>  memudahkan Anda untuk mengirimkan barang sampai depan pintu di alamat tujuan</p>
                <!--<a href="/page/services.php" class="primaryButtonLarge ga-trackevent" data-gacat="HomePage" data-galab="Couriers">Tell me more</a>-->
            </div>
        </div>

        <div class="box col-xs-12 col-sm-4 col-md-4 col-lg-4 mobHide">
            <div>
                <a href="/page/surplus.php" class="icon-link"><span class="icon-royalty4 mpdGreen"></span></a>
                <h3>Pelacakan Sangat Detail</h3>
		<br />
                <p>Kami memberikan laporan secara detail setiap tahap mengenai keberadaan barang Anda</p>
                <!--<a href="/page/surplus.php" class="primaryButtonLarge ga-trackevent" data-gacat="HomePage" data-galab="CheaperThanRoyalMail">Tell me more</a>-->
            </div>
        </div>

        <div class="box col-xs-12 col-sm-4 col-md-4 col-lg-4 mobHide">
            <div>
                <a href="/page/surplus.php" class="icon-link"><span class="icon-delivery23 mpdGreen"></span></a>
                <h3>Pelacakan Sangat Detail</h3>
        <br />
                <p>Kami memberikan laporan secara detail setiap tahap mengenai keberadaan barang Anda</p>
                <!--<a href="/page/surplus.php" class="primaryButtonLarge ga-trackevent" data-gacat="HomePage" data-galab="CheaperThanRoyalMail">Tell me more</a>-->
            </div>
        </div>

    </section>
    <!--why-choose-->
</div>


  <section class="mpd-couriers">
  <header>
        <h2>Mitra Kami</h2>
    </header>
    <ul class="col-sm-12">
    </ul>
  </section>


        </main>