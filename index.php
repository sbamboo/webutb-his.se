<?php
# Define a title in php that can be concated with subpage-titles.
$MainTitle = "Högskolan i Skövde";

# Create a named array with short-page-name > page-name
$pages_rw = [
    "sta" => "Start",
    "utb" => "Utbildning",
    "for" => "Forskning",
    "mot" => "Möt Högskolan",
    "bib" => "Bibliotek",
    "kon" => "Kontakta oss"
];

# Get a list of al short-page-names
$pages = array_keys($pages_rw);

# Remove landing page
unset($pages[0]);

# Setup some things
$landing = "sta";
$page = NULL;
$params = $_GET;

# Check for index in page url-param, also set to null if invalid
if (!empty($params["page"])) {
    $page = $params["page"];
    if (!in_array($page,$pages)) {
        if (is_numeric($page)) {
            if ($page >= 0 && $page < count($pages)) {
                $page = $pages[$page];
            }
        } else {
            $page = NULL;
        }
    }
}

# Set to landing if invalid
if ($page == NULL) {
    $page = $landing;
}

?>

<!-- HTML BELLOW THIS -->
<!DOCTYPE html>
<html lang="sv">
    <head>
        <title><?php
        $title = $pages_rw[$page];
        echo "$title - $MainTitle";
        ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/page.css">
    </head>
    <body>
        <header class="centered-container" id="size-changable">
            <div id="head-container">
                <div id="nav-image">
                    <?php
                    # If your on the landing page wrap the image in an <a> element. If not make it fake-pressable, to fake the element.
                    if ($page == $landing) {
                        echo '<p><img id="nav-image-img" src="./images/logo_nav_big.png" alt="Navigator Logo, big" class="fake-pressable"></p>';
                    } else {
                        echo '<a href="?page=sta"><img id="nav-image-img" src="./images/logo_nav_big.png" alt="Navigator Logo, big"></a>';
                    }
                    ?>
                </div>
                <div id="nav-container">
                    <div class="nav-button-list" id="topper-nav">
                        <ul>
                            <div class="nav-extlink">
                                <a class="nav-button nonbold flexfield" href="https://www.his.se/en/"><img class="decal-text" src="./images/decals/share.png" alt="Share Decal"><p>International website</p><img class="decal-text" src="./images/decals/globe.png" alt="Globe Decal"></a>
                            </div>
                            <div class="nav-extlink">
                                <a class="nav-button nonbold flexfield" href="https://student.his.se/"><img class="decal-text" src="./images/decals/share.png" alt="Share Decal"><p>Studentportalen</p></a>
                            </div>
                            <div class="nav-extlink noborder">
                                <a class="nav-button nonbold flexfield" href="https://map.his.se/intranat/mypage"><img class="decal-text" src="./images/decals/share.png" alt="Share Decal"><p>Medarbetarportalen</p></a>
                            </div>
                        </ul>
                </div>
                    <nav class="nav-button-list" id="main-nav">
                        <ul>
                            <?php
                            if ($page == $landing) {
                                echo '<div id="nav-height-define"></div>';
                            }
                            foreach ($pages as $pg) {
                                if ($page == $pg) {
                                    echo '<div class="selected-page-wrapper"><p class="nav-button nav-button-selected">' . $pages_rw[$pg] . '</p><img class="decal-selector" src="./images/decals/subpage_indicator.png" alt="Selected page decal"></div>';
                                } else {
                                    echo '<a class="nav-button" href="?page=' . $pg . '">' . $pages_rw[$pg] . '</a>';
                                }
                            }
                            ?>
                        </ul>
                        <div id="nav-searchbt">
                            <img class="decal-btn" src="./images/decals/search.png" alt="Search Decal">Sök<img class="decal-btn" src="./images/decals/expand.png" alt="Expand Decal">
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <main>
            <div id="page-content"><?php
                include "pages/$page.php"
            ?></div>
        </main>
        <footer class="centered-container" id="footer-socials-container">
            <div class="nav-button-list" id="footer-socials">
                <h2>Sociala medier</h2>
                <ul>
                    <a class="nav-button flexfield" href="https://www.facebook.com/hogskolaniskovde"><img class="decal-btn" src="./images/decals/facebook.png" alt="Facebook Decal">Facebook</a>
                    <a class="nav-button flexfield" href="https://www.twitter.com/hogskolanskovde"><img class="decal-btn" src="./images/decals/twitter.png" alt="Twitter Decal">Twitter</a>
                    <a class="nav-button flexfield" href="https://www.youtube.com/hogskolaniskovde"><img class="decal-btn" src="./images/decals/youtube.png" alt="Youtube Decal">Youtube</a>
                    <a class="nav-button flexfield" href="https://www.instagram.com/hogskolaniskovde/"><img class="decal-btn" src="./images/decals/instagram.png" alt="Instagram Decal">Instagram</a>
                    <a class="nav-button flexfield" href="https://www.linkedin.com/school/h%C3%B6gskolan-i-sk%C3%B6vde/"><img class="decal-btn" src="./images/decals/linkedin.png" alt="LinkedIn Decal">LinkedIn</a>
                </ul>
            </div>
        </footer>
        <footer class="centered-container" id="footer-main-container">
            <div id="footer-main">
                <div id="footer-info">
                    <img src="./images/logo_full.png" alt="Footer logo">
                    <div id="adress">
                    Högskolan i Skövde
                    Högskolevägen, Box 408
                    541 28 Skövde
                    <br><br>
                    Telefon: 0500-44 80 00
                    </div>
                </div>
                <div id="footer-links">
                    <div class="footer-links-section">
                        <h2>Genvägar</h2>
                        <ul>
                            <a class="nav-button" href="https://map.his.se/intranat/mypage"><img class="decal-text" src="./images/decals/arrow_right.png" alt="Right Arrow Decal">Medarbetarportalen</a>
                            <a class="nav-button" href="https://student.his.se/"><img class="decal-text" src="./images/decals/arrow_right.png" alt="Right Arrow Decal">Studentportalen</a>
                        </ul>
                    </div>
                    <div class="footer-links-section">
                        <h2>Om webbplatsen</h2>
                        <ul>
                            <a class="nav-button" href="https://www.his.se/om-webbplatsen/"><img class="decal-text" src="./images/decals/arrow_right.png" alt="Right Arrow Decal">Om webbplatsen</a>
                            <a class="nav-button" href="https://www.his.se/mot-hogskolan/sa-har-fungerar-hogskolan/behandling-av-personuppgifter/"><img class="decal-text" src="./images/decals/arrow_right.png" alt="Right Arrow Decal">Behandling av personuppgifter</a>
                            <a class="nav-button" href="https://www.his.se/om-webbplatsen/tillganglighetsredogorelse/"><img class="decal-text" src="./images/decals/arrow_right.png" alt="Right Arrow Decal">Tillgänglighetsredogörelse</a>
                        </ul>
                    </div>
                    <div class="footer-links-section">
                        <h2>Om Högskolan</h2>
                        <ul>
                            <a class="nav-button" href="https://www.his.se/mot-hogskolan/jobba-hos-oss/"><img class="decal-text" src="./images/decals/arrow_right.png" alt="Right Arrow Decal">Jobba hos oss</a>
                            <a class="nav-button" href="https://www.his.se/mot-hogskolan/sa-har-fungerar-hogskolan/organisation/"><img class="decal-text" src="./images/decals/arrow_right.png" alt="Right Arrow Decal">Organisation</a>
                            <a class="nav-button" href="https://www.his.se/mot-hogskolan/samarbeta-med-oss/"><img class="decal-text" src="./images/decals/arrow_right.png" alt="Right Arrow Decal">Samarbeta med oss</a>
                            <a class="nav-button" href="https://his.mediaflowportal.com/press/"><img class="decal-text" src="./images/decals/arrow_right.png" alt="Right Arrow Decal">Pressportalen</a>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            // get elements
            const topperNav = document.getElementById("topper-nav");
            const header = document.getElementById("size-changable");
            const navImg = document.getElementById("nav-image-img");
            // setup some variables
            let scrollThreshold = 100;
            const elementHeight = 40;
            let isHidden = false;
            // scroll listener
            window.addEventListener("scroll", () => {
                const scrollY = window.scrollY; // get pos.Y
                // Hide
                if (scrollY > scrollThreshold && !isHidden) {
                    // hide topper-nav
                    topperNav.style.display = "none";
                    // scale nav-image
                    navImg.style.setProperty("width","calc(var(--nav-image-with) - 40px)")
                    // set CSS variables
                    document.documentElement.style.setProperty("--header-height", "var(--header-height-smal)");
                    // resize header to trigger CSS animation
                    header.style.setProperty("height","var(--header-height-smal)")
                    // offset threshold
                    scrollThreshold -= elementHeight;
                    // set toggle
                    isHidden = true;
                // Show
                } else if (scrollY <= scrollThreshold && isHidden) {
                    // show topper-nav
                    topperNav.style.display = "block";
                    // scale nav-image
                    navImg.style.setProperty("width","var(--nav-image-with)")
                    // set CSS variables
                    document.documentElement.style.setProperty("--header-height", "var(--header-height-big)");
                    // resize header to trigger CSS animation
                    header.style.setProperty("height","var(--header-height-big)")
                    // offset threshold
                    scrollThreshold += elementHeight;
                    // set toggle
                    isHidden = false;
                }
            });
        </script>
    </body>
</html>
