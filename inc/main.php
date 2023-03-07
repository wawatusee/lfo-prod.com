<main>
    <section id="portfolio">
        <h2>PORTFOLIO</h2>
            <video id="playervideo" controls width="640" height="480" poster="img/content/thumbs-videos/mariamateaser.jpg" autoplay muted>
                <source src="videos/MARIAMA-TEASER-FINAL-FINAL-1.2.mp4" type="video/mp4">
            </video>
            <?php require_once("../model/portfolio_model.php");
            $portfolioData=new PortfolioModel("../json/portfolio.json");
            $contentPortfolio=$portfolioData->getPortfolio();
            require_once("../view/portfolio_view.php");
            $portfolioView=new PortfolioView;
            echo $portfolioView->getView($contentPortfolio->showcase);
            ?>
    </section>
    <section id="services" class="services">
        <h2>OUR SERVICES</h2>
        <p>Commercial and corporate films, Musical video clips, documentaries, fiction, motion and sound design, Testimonial, photography, media consulting and more... Film production has no secret for us.If you have a wish, we have the solutions to make it true. From an idea to a film. Our team and partners directed all the films you'll find on this website.</p>
        <div class="cards">
            <article class="card">
                <header>
                    <h3>A short heading</h3>
                </header>    
                <img src="img/ampoule-nb.svg" alt="dessin ampoule">
                <div class="content">
                    <p> We are a film production company. We produce quality medias for profit and no profit organizations.</p>
                </div>   
            </article>
            <article class="card">
                <header>
                    <h3>A short heading</h3>
                </header>    
                <img src="img/apn.svg" alt="camera">
                <div class="content">
                    <p>we offer a wide range of services and formats with modular rates to come up with the customized solution you need.</p>
                </div>   
            </article>
            <article class="card">
                <header>
                    <h3>A short heading</h3>
                </header>    
                <img src="img/stylo.svg" alt="drawn pen">
                <div class="content">
                    <p>We lead you throughout the production process to meet your desires</p>
                </div>   
            </article>
        </div>
    </section>
    <section id="contacts">
        <h2>CONTACTS</h2>
        <div class="contacts">
            <div class="presentation">
                <a href="tel:+32473184680"><img src="/public/img/picto-phone.svg" alt="picto-téléphone"></a><span>+32 0473 18 46 80</span>
             </div>
            <div class="presentation">
                <a href="mailto:contact@lfo-prod.com"><img src="/public/img/picto-mail.svg" alt="picto-mail"></a><span>contact@lfo-prod.com</span>
            </div>
        </div>
    </section>
</main>
<script src="js/portfolio.js"></script>