<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Site</title>
    <link rel="stylesheet" href="../index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="./index.js"></script>
    <script src="../customer-service.js"></script>


<body onscroll="scrollFunction()">
    <div class="topnav" id="nav-bar">
        <div class="logo-left">
            <a target="_blank" href="index.php" class="site-logo">
                <span class="simplesite-logo">SimpleSite</span></a>
            <div class="nav-links" id="nav-underline">
                <a target="_blank" class="site-links" href="index.php">Try it for free</a>
                <a target="_blank" class="site-links" onclick="Underline(1)" href="customerservice.php">Customer
                    service</a>
                <a target="_blank" class="site-links" onclick="Underline(2)" href="features.php">Features</a>
                <a target="_blank" class="site-links" onclick="Underline(3)" href="themes.php">Themes</a>
            </div>
        </div>
        <div class="login-lang">
            <button type="button" class="login-button" id="log-in">LOG IN</button>

            <div class="choose-lang">
                <img src="../images/globe.png">
                <select name="lang" id="lang">
                    <option value="english">English</option>
                    <option value="spanish">Español</option>
                    <option value="french">Français</option>
                    <option value="dansk">Dansk</option>
                    <option value="norsk bokmål">Norsk Bokmål</option>
                    <option value="svenska">Svenska</option>
                    <option value="nederlands">Nederlands</option>
                    <option value="italiano">Italiano</option>
                    <option value="suomi">Suomi</option>
                    <option value="deutsch">Deutsch</option>
                    <option value="pусский">Русский</option>
                    <option value="indonesia">Indonesia</option>
                    <option value="türkçe">Türkçe</option>
                    <option value="polski">Polski</option>
                    <option value="Čeština">Čeština</option>
                    <option value="bahasa melayu">Bahasa Melayu</option>
                    <option value="eλληνικά"> Ελληνικά</option>
                    <option value="português">Português</option>
                    <option value="dutch">Dutch</option>
                </select>
            </div>
        </div>

        <div class=full-view-container>
            <div class="side-links" id="svg-burger-icon">
                <div class="side-links-display">
                    <h3 class="side-links-text">Try it for free</h3>
                    <h3 class="side-links-text">Customer Service</h3>
                    <h3 class="side-links-text">Features</h3>
                    <h3 class="side-links-text">Themes</h3>
                </div>
                <div class="side-links-button">
                    <button">LOG IN</button>
                </div>
            </div>
        </div>


        <div class="side-links-choose-lang">
                <img src="../images/globe.png">
                <select name="side-lang" id="lang">
                    <option value="english">English</option>
                    <option value="spanish">Español</option>
                    <option value="french">Français</option>
                    <option value="dansk">Dansk</option>
                    <option value="norsk bokmål">Norsk Bokmål</option>
                    <option value="svenska">Svenska</option>
                    <option value="nederlands">Nederlands</option>
                    <option value="italiano">Italiano</option>
                    <option value="suomi">Suomi</option>
                    <option value="deutsch">Deutsch</option>
                    <option value="pусский">Русский</option>
                    <option value="indonesia">Indonesia</option>
                    <option value="türkçe">Türkçe</option>
                    <option value="polski">Polski</option>
                    <option value="Čeština">Čeština</option>
                    <option value="bahasa melayu">Bahasa Melayu</option>
                    <option value="eλληνικά"> Ελληνικά</option>
                    <option value="português">Português</option>
                    <option value="dutch">Dutch</option>
                </select>
            </div>
        </div>

        <div class="mobile-nav-icon"><span class="burger-icon" onclick="navslider('svg-burger-icon')"><svg
                    xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 384 384"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g transform="matrix(1,0,0,1,0,45)">
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                            data-original="#000000" class=""></path>
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                            data-original="#000000" class=""></path>
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                            data-original="#000000" class=""></path>
                    </g>
                </svg></span><span class="globeimg"></div>
        <div class="mobile-langauge"><img class="side-globe" src="img/globe.png" alt=""></div>



    </div>