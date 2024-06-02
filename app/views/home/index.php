<article>
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h2 class="h3">
                    Sistem Informasi Bukti Pelanggaran
                </h2>
                <h1 class="h1 hero-title">Politeknik Statistika STIS</h1>
                <button class="btn btn-primary">Get started</button>
            </div>
            <div class="hero-banner"></div>
        </div>
        <img src="<?= ASSETS ?>/images/bg.png" alt="shape" class="shape-content">
    </section>

    <section class="about" id="about">
        <div class="container">
            <div class="about-top">
                <h2 class="h2 section-title">Pengumuman</h2>
                <p class="section-text">
                    Data pengumuman yang ditujukan untuk seluruh mahasiswa Politeknik Statistika STIS
                </p>
                <ul class="about-list">
                    <li>
                        <a href="">
                            <div class="about-card">
                                <div class="card-icon">
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </div>
                                <h3 class="h3 card-title">Perdir 001 Tahun 2020</h3>
                                <p class="card-text">
                                    Peraturan Direktur Polstat STIS No. 001 Tahun 2020
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="about-card">
                                <div class="card-icon">
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </div>
                                <h3 class="h3 card-title">Perdir 002 Tahun 2020</h3>
                                <p class="card-text">
                                    Peraturan Direktur Polstat STIS No. 002 Tahun 2020
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="about-card">
                                <div class="card-icon">
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </div>
                                <h3 class="h3 card-title">Perdir 003 Tahun 2020</h3>
                                <p class="card-text">
                                    Peraturan Direktur Polstat STIS No. 003 Tahun 2020
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="about-bottom">
                <figure class="about-bottom-banner">
                    <img src="<?= ASSETS ?>/images/about-banner.png" alt="about banner" class="about-banner">
                </figure>
                <div class="about-bottom-content">
                    <h2 class="h2 section-title">We’re obsessed with growth</h2>
                    <p class="section-text">
                        Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees
                        back into the
                        development of
                        the asset through its charitable foundation.
                    </p>
                    <button class="btn btn-secondary">Sign Up For Free</button>
                </div>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <h2 class="h2 section-title">Our team is made up of all different backgrounds from all over the
                world.</h2>
            <p class="section-text">
                Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back
                into the
                development of
                the asset through its charitable foundation.
            </p>
            <ul class="features-list">
                <li class="features-item">
                    <figure class="features-item-banner">
                        <img src="<?= ASSETS ?>/images/feature-1.png" alt="feature banner">
                    </figure>
                    <div class="feature-item-content">
                        <h3 class="h2 item-title">Cover your everyday expenses</h3>
                        <p class="item-text">
                            Inspiration comes in many ways and you like to save everything from. sed do eiusmod
                            tempor incididunt
                            ut labore et
                            dolore magna aliqua.
                        </p>
                    </div>
                </li>
                <li class="features-item">
                    <figure class="features-item-banner">
                        <img src="<?= ASSETS ?>/images/feature-2.png" alt="feature banner">
                    </figure>
                    <div class="feature-item-content">
                        <h3 class="h2 item-title">We offer low fees that are transparent</h3>
                        <p class="item-text">
                            Each time a digital asset is purchased or sold, Sequoir donates a percentage of the
                            fees back into the
                            development of
                            the asset through its charitable foundation.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="cta-card">
                <h3 class="cta-title">Try for 7 days free</h3>
                <p class="cta-text">
                    Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees
                    back.
                </p>
                <form action="" class="cta-form">
                    <input type="email" name="email" placeholder="Your email address">
                    <button type="submit" class="btn btn-secondary">Try It Now</button>
                </form>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="contact-content">
                <h2 class="h2 contact-title">Let’s scale your brand, together</h2>
                <figure class="contact-banner">
                    <img src="<?= ASSETS ?>/images/contact.png" alt="contact banner">
                </figure>
            </div>
            <form action="" class="contact-form">

                <div class="input-wrapper">
                    <label for="name" class="input-label">Name *</label>

                    <input type="text" name="name" id="name" required placeholder="Type Name" class="input-field">
                </div>

                <div class="input-wrapper">
                    <label for="phone" class="input-label">Phone</label>

                    <input type="tel" name="phone" id="phone" placeholder="Type Phone Number" class="input-field">
                </div>

                <div class="input-wrapper">
                    <label for="email" class="input-label">Email Address *</label>

                    <input type="email" name="email" id="email" required placeholder="Type Email Address"
                        class="input-field">
                </div>

                <div class="input-wrapper">
                    <label for="message" class="input-label">How can we help? *</label>

                    <textarea name="message" id="message" placeholder="Type Description" required
                        class="input-field"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send Message</button>

            </form>
        </div>
    </section>

</article>