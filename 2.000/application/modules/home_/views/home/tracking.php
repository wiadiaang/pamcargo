
        <main class="slide">




    <div class="fw grey-gradient-bg" style="background:url(/express.rembon_components/images/tracking_bg.jpg);">
        <section style="margin-top:30px;">
            <div class="col-md-6" style="margin-top:-50px;">
                <h1 style="color:#FFFFFF;"><img src="/express.rembon_components/images/icon_track.png" />Lacak Barang Anda</h1>
                <p align="justify" style="color:#FFFFFF;">Kami memberikan kemudahan dan ingin membantu anda untuk melakukan pengiriman paket anda serta melacak lokasi terakhir paket anda berada.</p>
            </div>
            <div class="col-md-6">
                <div class="pb-contact" style="float:right; padding-right:20px;">
                <img src="/express.rembon_components/images/boy_tracking.png" alt="Parcelboy Contact Support">
                </div>
            </div>
        </section>
    </div>


        <div class="fw">
            <section class="title">
                <header>
                    <!--<h1><img src="express.rembon_components/Images/global/tracking-search.png" />Is it nearly there yet?</h1>-->
					
                    <p class="mobHide">
                      Menjamin keamanan pengiriman barang melalui express.rembon. Setelah pengajuan Anda disetujui, Anda akan mendapatkan nomor pelacakan semisal <strong>65-160716-7705175</strong>. Anda hanya perlu memasukkan nomor pelacakan ke dalam kotak di bawah ini dan Anda akan mendapatkan informasi keberadaan barang Anda.                    </p>
                </header>
				<div class="media-left">
                    
                    </div>
            </section>
        </div>
        <div class="fw green-bg">
            <section class="track-num">
                <h3>Masukkan nomor pelacakan</h3>
                <div class="search-bar">
				<form action="tracking-result.php" method="post" name="form" id="form" >
                    <div class="form-group mob-track">
                        <div class="input-group">
                            <!--<div class="input-group-addon">MPD</div>-->
                            <input type="text" class="form-control" name="Consignment" id="Consignment" placeholder="Contoh 65-160716-7705175">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="Submit" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue"><img src="express.rembon_components/images/tracking.png" alt="x" />Lacak</button>
                    <div class="wait-message" style="text-align:center; display:none;">
                        <img src="express.rembon_components/Images/global/loading-green.gif" />
                        Searching... Please wait.
                    </div>
                </div>
				</form>
            </section>
        </div>   

<div class="fw grey-bg">
    <section class="history">
        <div id="TrackingEventsContainer">
            
        </div>
    </section> 

        <section class="trackorder-boxes">
            <div class="col-sm-6">
                <div class="pod">
                    <div class="media-body">
                        <span class="track-icon-back3 mpdGreen"></span>
                        <h3>Jaminan Barang Anda?</h3>
                        <p>Jika Anda mengalami masalah mengenai pengiriman barang, jangan ragu untuk menghubungi kami.</p>
                        <a href="/page/contact-us.php" class="btn btn-primary">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="pod">
                    <div class="media-body">
                        <span class="track-icon-back3 mpdGreen"></span>
                        <h3>Butuh Jawaban Cepat?</h3>
                        <p>Jika ada yang ingin anda tanyakan, jangan ragu untuk menghubungi kami.</p>
                        <a href="/page/contact-us.php" class="btn btn-primary">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </section>
    
</div>
        </main>


