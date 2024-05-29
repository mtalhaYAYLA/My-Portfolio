<?php require 'header.php'; ?>

<section class="mh-home" id="mh-home">
    <div class="home-ovimg">
        <div class="container">
            <div class="row xs-column-reverse section-separator vertical-middle-content home-padding">
                <div class="col-sm-6">
                    <div class="mh-header-info">
                        <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                            <span>Hello I'm</span>
                        </div>

                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><?= $users['name'] ?></h2>
                        <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><?= $users['title'] ?>
                        </h4>

                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:"><?= $users['mail'] ?></a></li>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:"><?= $about['phone'] ?></a></li>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i>
                                <address><?= $about['location'] ?></address>
                            </li>
                        </ul>

                        <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                            <li><a href="https://www.instagram.com/yaylabey41/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://github.com/mtalhaYAYLA"><i class="fa fa-github"></i></a></li>
                            <li><a href="https://www.linkedin.com/search/results/all/?heroEntityKey=urn%3Ali%3Afsd_profile%3AACoAADCBRCoBUHtV9aEFUYYZm0eQUpODhhxUz6c&keywords=Muhammed%20Talha%20Yayla&origin=ENTITY_SEARCH_HOME_HISTORY&sid=3ab"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                        <div class="img-border">
                            <img src="assets/images/talha2.jpg" style="height: 100%;" width="100%" ; alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mh-about" id="mh-about">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-12 col-md-6">
                <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <img src="assets/images/ab-img.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mh-about-inner">
                    <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"><?= $about['title'] ?></h2>
                    <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><?= $about['description'] ?></p>
                    <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <ul>
                            <li><span>C</span></li>
                            <li><span>C++</span></li>
                            <li><span>C#</span></li>
                        </ul>
                    </div>
                    <a href="https://drive.google.com/file/d/1ahXzYnLXniqQaE1hpesypdqazB3vU5R-/view?usp=sharing" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Downlaod CV <i class="fa fa-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mh-service">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h3>What I do</h3>
            </div>
            <div class="col-sm-4">
                <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <i class="fa fa-bullseye purple-color"></i>
                    <h3>Donanım ile Yazılım Entegrasyonu </h3>
                    <p>
                        <?= $about['Donanım ile Yazılım Entegrasyonu'] ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                    <i class="fa fa-code iron-color"></i>
                    <h3>Yazılım Geliştirme</h3>
                    <p>
                        <?= $about['Yazılım Geliştirme'] ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                    <i class="fa fa-object-ungroup sky-color"></i>
                    <h3>Dokümantasyon</h3>
                    <p>
                        <?= $about['Dokümantasyon'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mh-skills" id="mh-skills">
    <div class="container">
        <div class="row section-separator">
            <div class="section-title text-center col-sm-12">
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mh-skills-inner">
                    <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <h3>Technical Skills</h3>
                        <div class="each-skills">
                            <div class="candidatos">
                                <div class="parcial">
                                    <div class="info">
                                        <div class="nome"><?= $skills['name'] ?></div>
                                        <div class="percentagem-num"><?= $skills['value'] ?></div>
                                    </div>
                                    <div class="progressBar">
                                        <div class="percentagem" style="width: 86%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="candidatos">
                                <div class="parcial">
                                    <div class="info">
                                        <div class="nome"><?= $skills['name'] ?></div>
                                        <div class="percentagem-num"><?= $skills['value'] ?></div>
                                    </div>
                                    <div class="progressBar">
                                        <div class="percentagem" style="width: 46%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="candidatos">
                                <div class="parcial">
                                    <div class="info">
                                        <div class="nome">Python</div>
                                        <div class="percentagem-num">38%</div>
                                    </div>
                                    <div class="progressBar">
                                        <div class="percentagem" style="width: 38%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="candidatos">
                                <div class="parcial">
                                    <div class="info">
                                        <div class="nome">PHP</div>
                                        <div class="percentagem-num">17%</div>
                                    </div>
                                    <div class="progressBar">
                                        <div class="percentagem" style="width: 17%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="candidatos">
                                <div class="parcial">
                                    <div class="info">
                                        <div class="nome">PHP</div>
                                        <div class="percentagem-num">17%</div>
                                    </div>
                                    <div class="progressBar">
                                        <div class="percentagem" style="width: 17%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                    <h3>Professional Skills</h3>
                    <ul class="mh-professional-progress">
                        <li>
                            <div class="mh-progress mh-progress-circle" data-progress="95"></div>
                            <div class="pr-skill-name">Communication</div>
                        </li>
                        <li>
                            <div class="mh-progress mh-progress-circle" data-progress="55"></div>
                            <div class="pr-skill-name">Team Work</div>
                        </li>
                        <li>
                            <div class="mh-progress mh-progress-circle" data-progress="86"></div>
                            <div class="pr-skill-name">Project Management</div>
                        </li>
                        <li>
                            <div class="mh-progress mh-progress-circle" data-progress="60"></div>
                            <div class="pr-skill-name">Creativity</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mh-experince" id="mh-experience">
    <div class="bolor-overlay">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 col-md-6">
                    <div class="mh-education">
                        <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Education</h3>
                        <div class="mh-education-deatils">
                            <!-- Education Institutes-->
                            <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <h4>İzmit Anadolu İmam-hatip Lisesi</h4>
                                <div class="mh-eduyear">2015 - 2019</div>
                            </div>
                            <!-- Education Institutes-->
                            <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <h4>Anadolu Üniversitesi - İlahiyat</h4>
                                <div class="mh-eduyear">2019 - 2021</div>
                            </div>
                            <!-- Education Institutes-->
                            <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                <h4>İstanbul Üniversitesi - Bilgisayar Programcılığı</h4>
                                <div class="mh-eduyear">2022 - Halen</div>
                            </div>
                            <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                <h4>42 Yazılım Okulları - Yazılım Mühendisliği</h4>
                                <div class="mh-eduyear">2022 - Halen</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-work">
                        <h3>Work Experience</h3>
                        <div class="mh-experience-deatils">
                            <!-- Education Institutes-->
                            <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                <h4>İl Başkan Yardımcısı, İnovasyon ve Girişimcilik Koordinatörü
                                    Türkiye Gençlik Vakfı (TÜGVA) Kocaeli</h4>
                                <div class="mh-eduyear">2014 - Günümüz</div>
                                <span>Responsibility :</span>
                                <ul class="work-responsibility">
                                    <li><i class="fa fa-circle"></i>İzmit ilçesine kurucu ekip olarak geçiş yaparak 8 lisede teşkilatlanma çalışmaları
                                        yürüttüm.</li>
                                    <li><i class="fa fa-circle"></i>Proje sorumluluğu ve teşkilat sorumluluğu gibi görevleri üstlendim.</li>
                                </ul>
                            </div>
                            <!-- Education Institutes-->
                            <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                <h4>Yazılım Geliştirici ve IoT Uzmanı</a></h4>
                                <div class="mh-eduyear">2018 - Günümüz</div>
                                <span>Responsibility :</span>
                                <ul class="work-responsibility">
                                    <li><i class="fa fa-circle"></i>IoT ve Gömülü Sistemler alanında çeşitli projeler geliştirdim.</li>
                                    <li><i class="fa fa-circle"></i>TEKNOFEST Değerlendirmen öğretmen yardımcısı olarak Elektirikli araçlar
                                        katogorisinde görev aldım.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php require 'footer.php'; ?>