<?php
# Load the correct page css
echo '<link rel="stylesheet" href="./css/pages/' . $page . '.css">'

# Load the correct banner image
?>
<div class="banner" style=<?php echo '"' . "background-image: url('./images/banner_" . $page . ".jpg');" . '"'?>>
    <div class="centered-container">
        <div id="banner-text"><h1 class="nonbold" style="width: 430px;">Högskolan i Skövde</h1></div>
    </div>
</div>

<div class="centered-container">
    <div id="main-page-content">
        <div id="row1" class="row">
            <h2 class="row-title">Utforska</h2>
            <div class="row-cards-big">
                <a href="?page=utb"><div class="row-card row-card-size-big" id="row1card1">
                    <div class="card-thumbnail"></div>
                    <p class="card-paragraph"><img class="decal-text2" src="./images/decals/arrow_right.png" alt="Arrow Right">Hitta din utbildning – sök till vårterminen 2024 senast 16 oktober</p>
                </div></a>
                <a href="?page=mot"><div class="row-card row-card-size-big" id="row1card2">
                    <div class="card-thumbnail"></div>
                    <p class="card-paragraph"><img class="decal-text2" src="./images/decals/arrow_right.png" alt="Arrow Right">Lediga jobb</p>
                </div></a>
                <a href="?page=mot"><div class="row-card row-card-size-big" id="row1card3">
                    <div class="card-thumbnail"></div>
                    <p class="card-paragraph"><img class="decal-text2" src="./images/decals/arrow_right.png" alt="Arrow Right">Kvalitet och relevans stärks med HR-strategi för forskare</p>
                </div></a>
            </div>
        </div>
        <div id="row2" class="row">
            <h2 class="row-title"><img class="decal-h2" src="./images/decals/news.png" alt="News Decal">Nyheter</h2>
            <div class="row-cards">
                <a href="https://www.his.se/nyheter/2023/oktober/Malin-snorklade-i-Norge-som-sommarkurs/"><div class="row-card row-card-size" id="row2card1">
                    <div class="card-thumbnail"></div>
                    <p class="card-paragraph"><img class="decal-text2" src="./images/decals/arrow_right.png" alt="Arrow Right">Malin snorklade i Norge som sommarkurs</p>
                    <p class="card-date">5 oktober 2023</p>
                </div></a>
                <a href="https://www.his.se/nyheter/2023/oktober/kursen-som-ger-inblick-i-samarbetsrobotarnas-varld/"><div class="row-card row-card-size" id="row2card2">
                    <div class="card-thumbnail"></div>
                    <p class="card-paragraph"><img class="decal-text2" src="./images/decals/arrow_right.png" alt="Arrow Right">Kursen som ger inblick i samarbetsrobotarnas värld</p>
                    <p class="card-date">4 oktober 2023</p>
                </div></a>
                <a href="https://www.his.se/nyheter/2023/oktober/skovdeforskare-hjalper-centralbanker-satta-ranta/"><div class="row-card row-card-size" id="row2card3">
                    <div class="card-thumbnail"></div>
                    <p class="card-paragraph"><img class="decal-text2" src="./images/decals/arrow_right.png" alt="Arrow Right">Kursen som ger inblick i samarbetsrobotarnas värld</p>
                    <p class="card-date">3 oktober 2023</p>
                </div></a>
                <a href="https://www.his.se/nyheter/2023/september/fler-an-1000-elever-moter-forskare-fran-hogskolan-i-skovde/"><div class="row-card row-card-size" id="row2card4">
                    <div class="card-thumbnail"></div>
                    <p class="card-paragraph"><img class="decal-text2" src="./images/decals/arrow_right.png" alt="Arrow Right">Fler än 1000 elever möter forskare från Högskolan i Skövde</p>
                    <p class="card-date">26 september 2023</p>
                </div></a>
            </div>
        </div>
        <div class="show-more-link">
            <a href="https://www.his.se/nyheter/">Visa alla nyheter</a>
        </div>
        <div id="row3" class="row">
            <h2 class="row-title"><img class="decal-h3" src="./images/decals/calender.png" alt="Calender Decal">Evenemang</h2>
            <div class="evnt-rows">
                <a href=""><div class="evnt-container">
                    <div class="evnt-date-box">
                        <div class="evnt-date">
                            <p class="evnt-date-nr">23</p>
                            <div class="evnt-date-mn">
                                <p class="evnt-date-mn-m">OKT</p>
                                <p class="evnt-date-mn-y">2023</p>
                            </div>
                        </div>
                        <div class="evnt-time">
                            <p class="evnt-time-t">13:15 - 16:00</p>
                        </div>
                    </div>
                    <div class="evnt-text-box">
                        <p><img class="decal-text2" src="./images/decals/arrow_right.png" alt="Arrow Right">Öppen vetenskap genom öppna format och öppen programvara</p>
                    </div>
                </div></a>
                <a href=""><div class="evnt-container">
                    <div class="evnt-date-box">
                        <div class="evnt-date">
                            <p class="evnt-date-nr">24</p>
                            <div class="evnt-date-mn">
                                <p class="evnt-date-mn-m">OKT</p>
                                <p class="evnt-date-mn-y">2023</p>
                            </div>
                        </div>
                        <div class="evnt-time">
                            <p class="evnt-time-t">09:30 - 16:00</p>
                        </div>
                    </div>
                    <div class="evnt-text-box">
                        <p><img class="decal-text2" src="./images/decals/arrow_right.png" alt="Arrow Right">Informationssäkerhetsdagen 2023</p>
                    </div>
                </div></a>
                <a href=""><div class="evnt-container">
                    <div class="evnt-date-box">
                        <div class="evnt-date">
                            <p class="evnt-date-nr">24</p>
                            <div class="evnt-date-mn">
                                <p class="evnt-date-mn-m">OKT</p>
                                <p class="evnt-date-mn-y">2023</p>
                            </div>
                        </div>
                        <div class="evnt-time">
                            <p class="evnt-time-t">18:30 - 20:30</p>
                        </div>
                    </div>
                    <div class="evnt-text-box">
                        <p><img class="decal-text2" src="./images/decals/arrow_right.png" alt="Arrow Right">Populärvetenskapligt café: krisernas Europasamarbete och Ukrainakriget</p>
                    </div>
                </div></a>
                <a href=""><div class="evnt-container">
                    <div class="evnt-date-box">
                        <div class="evnt-date">
                            <p class="evnt-date-nr">25</p>
                            <div class="evnt-date-mn">
                                <p class="evnt-date-mn-m">OKT</p>
                                <p class="evnt-date-mn-y">2023</p>
                            </div>
                            <img class="envt-date-div" src="./images/decals/right.png" alt="Right arrow decal (simple)"></img>
                            <p class="evnt-date-nr">26</p>
                            <div class="evnt-date-mn">
                                <p class="evnt-date-mn-m">OKT</p>
                                <p class="evnt-date-mn-y">2023</p>
                            </div>
                        </div>
                        <div class="evnt-time">
                            <p class="evnt-time-t">10:00 - 16:00</p>
                        </div>
                    </div>
                    <div class="evnt-text-box">
                        <p><img class="decal-text2" src="./images/decals/arrow_right.png" alt="Arrow Right">Sweden Game Conference</p>
                    </div>
                </div></a>
            </div>
        </div>
        <div class="show-more-link">
            <a href="https://www.his.se/mot-hogskolan/aktiviteter/kalender/">Visa alla evenemang</a>
        </div>
    </div>
</div>