<!DOCTYPE html>
<!-- Html -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
    <!-- Common Head Components -->
    <?php require APPROOT . '/views/common/head.php'; ?>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/globals.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/home.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/header.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/footer.css" />
</head>
<!-- Body -->

<body>
    <!-- Header -->
    <?php require APPROOT . '/views/modules/header.php'; ?>
    <!-- Main Wrapper -->
    <div class="main_wrapper">
        <div class="mainTitle">
            <div class="logo">
                <img src="<?php echo URLROOT ?>/img/home/logo.svg" alt="logo" class="logo_img">
                <span class="logo_title">STAMP.LK</span>
            </div>
            <div class="titles">
                <div class="title1">SL Stamps Store !</div>
                <div class="title2">Best Place to buy stamps</div>
            </div>
        </div>
        <div class="swiper-cover">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide1">
                        <img class="swiper-image" src="<?php echo URLROOT ?>/img/home/carousel/carousel1.jpg" alt="carousel">
                        <div class="nameTile">
                            <div class="name">Souvenir Sheets</div>
                            <div class="direction" onclick="navFunction('<?php echo URLROOT ?>/sovenir',true)">more...</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide2">
                        <img class="swiper-image" src="<?php echo URLROOT ?>/img/home/carousel/carousel2.jpg" alt="carousel">
                        <div class="nameTile">
                            <div class="name">Post Cards</div>
                            <div class="direction" onclick="navFunction('<?php echo URLROOT ?>/postcard',true)">more...</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide1">
                        <img class="swiper-image" src="<?php echo URLROOT ?>/img/home/carousel/carousel1.jpg" alt="carousel">
                        <div class="nameTile">
                            <div class="name">First Day Covers</div>
                            <div class="direction" onclick="navFunction('<?php echo URLROOT ?>/firstdaycover',true)">more...</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide2">
                        <img class="swiper-image" src="<?php echo URLROOT ?>/img/home/carousel/carousel2.jpg" alt="carousel">
                        <div class="nameTile">
                            <div class="name">Stamps</div>
                            <div class="direction" onclick="navFunction('<?php echo URLROOT ?>/stamp',true)">more...</div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="commonTopic">
            <div class="leftBorder"></div>
            <div class="middle">Find Your Stamp!</div>
            <div class="rightBorder"></div>
        </div>
        <form class="form">
            <input type="text" class="input_text" />
            <input type="submit" value="Search" class="input_submit">
        </form>
        <div class="starBoxCover">
            <?php foreach ($data['stampData'] as $stampData) : ?>
                
                <div class="starBox">
                <div class="starBoxInnerBottom">
                    <div class="starBoxInnerTop">
                        <div class="stampCover"><img src="<?php echo URLROOT ?>/img/home/stamp1.jpg" alt="stamp" class="stamp" /></div>
                        <span class="stampTitle">
                            <?php echo $stampData->stamp_desc; ?>
                        </span>
                    </div>
                    <div class="starCover">
                        <img src="<?php echo URLROOT ?>/img/home/star.svg" alt="star" class="star" />
                        <img src="<?php echo URLROOT ?>/img/home/star.svg" alt="star" class="star" />
                        <img src="<?php echo URLROOT ?>/img/home/starOff.svg" alt="star" class="star" />
                        <img src="<?php echo URLROOT ?>/img/home/starOff.svg" alt="star" class="star" />
                        <img src="<?php echo URLROOT ?>/img/home/starOff.svg" alt="star" class="star" />
                    </div>
                    <div class="moneyCover">
                        <span class="money previous">$10.00</span>
                        <span class="money next">$15.00</span>
                    </div>
                    <div class="starBoxInnerBottomBtn">
                        Buy Now<img src="<?php echo URLROOT ?>/img/home/dollar.svg" alt="dollar" class="dollar" />
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="pagination">
            <div class="page arrow"><img src="<?php echo URLROOT ?>/img/home/right-arrow.svg" alt="arrow" class="arrow filpX" /></div>
            <div class="page">1</div>
            <div class="page">2</div>
            <div class="page selected">3</div>
            <div class="page">4</div>
            <div class="page">5</div>
            <div class="page arrow"><img src="<?php echo URLROOT ?>/img/home/right-arrow.svg" alt="arrow" class="arrow" /></div>
        </div>
        <div class="commonTopic">
            <div class="leftBorder"></div>
            <div class="middle">More Categories!</div>
            <div class="rightBorder"></div>
        </div>
        <div class="moreCategory">
            <div class="categoryCardOuter">
                <div class="categoryCard">
                    <img src="<?php echo URLROOT ?>/img/home/stamp2.svg" alt="arrow" class="stampCategory" />
                    <span class="stampCategoryTitle">Stamps</span>
                    <span class="stampCategoryBtn" onclick="navFunction('<?php echo URLROOT ?>/stamp',true)">Readmore</span>
                </div>
            </div>
            <div class="categoryCardOuter">
                <div class="categoryCard">
                    <img src="<?php echo URLROOT ?>/img/home/email.svg" alt="arrow" class="souvenirCategory" />
                    <span class="stampCategoryTitle">Souvenir Sheet</span>
                    <span class="stampCategoryBtn" onclick="navFunction('<?php echo URLROOT ?>/sovenir',true)">Readmore</span>
                </div>
            </div>
            <div class="categoryCardOuter">
                <div class="categoryCard">
                    <img src="<?php echo URLROOT ?>/img/home/paper.svg" alt="arrow" class="firstDayCategory" />
                    <span class="stampCategoryTitle">First day Cover</span>
                    <span class="stampCategoryBtn" onclick="navFunction('<?php echo URLROOT ?>/firstdaycover',true)">Readmore</span>
                </div>
            </div>
        </div>
        <div class="commonTopic">
            <div class="leftBorder"></div>
            <div class="middle">More About Us!</div>
            <div class="rightBorder"></div>
        </div>
        <div class="aboutUsContainer">
            <div class="aboutUs">
                <div class="about">
                    <div class="aboutInner">
                        <div class="accordion" id="firstAccordion"><span class="accTitle">What is our speciality?</span></div>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi commodi, adipisci animi minus alias sequi ullam eveniet quis?</p>
                        </div>

                        <div class="accordion"><span class="accTitle">What is our goal?</span></div>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi commodi, adipisci animi minus alias sequi ullam eveniet quis?</p>
                        </div>

                        <div class="accordion"><span class="accTitle">What is our customers think?</span></div>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi commodi, adipisci animi minus alias sequi ullam eveniet quis?</p>
                        </div>
                    </div>
                </div>
                <div class="advert">
                    <div class="advertInner">Advertisement</div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
                <path fill="#000" fill-opacity="1" d="M0,192L60,170.7C120,149,240,107,360,122.7C480,139,600,213,720,234.7C840,256,960,224,1080,181.3C1200,139,1320,85,1380,58.7L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#007acc;"></path>
            </svg>
        </div>
        <div class="footerArea"></div>
    </div>
    <!-- Footer -->
    <?php require APPROOT . '/views/modules/footer.php'; ?>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo URLROOT ?>/js/common.js" type="text/javascript"></script>
    <script src="<?php echo URLROOT ?>/js/home.js" type="text/javascript"></script>
</body>

</html>