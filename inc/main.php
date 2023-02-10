<main>
<section id="services" class="services">
    <h2>OUR SERVICES</h2>
        <p>Commercial and corporate films, Musical video clips, documentaries, fiction, motion and sound design, Testimonial, photography, media consulting and more... Film production has no secret for us.If you have a wish, we have the solutions to make it true. From an idea to a film. Our team and partners directed all the films you'll find on this website.</p>
        <div class="cards">
            <article class="card">
                <header>
                    <h3>A short heading</h3>
                </header>    
                <img src="img/ampoule.png" alt="dessin ampoule">
                <div class="content">
                    <p> We are a film production company. We produce quality medias for profit and no profit organizations.</p>
                </div>   
            </article>
            <article class="card">
                <header>
                    <h3>A short heading</h3>
                </header>    
                <img src="img/apn.png" alt="camera">
                <div class="content">
                    <p>we offer a wide range of services and formats with modular rates to come up with the customized solution you need.</p>
                </div>   
            </article>
            <article class="card">
                <header>
                    <h3>A short heading</h3>
                </header>    
                <img src="img/pen.png" alt="drawn pen">
                <div class="content">
                    <p>We lead you throughout the production process to meet your desires</p>
                </div>   
            </article>
        </div>
    </section>
    <section id="portfolio">
    <h2>PORTFOLIO</h2>
        <video id="playervideo" controls width="640" height="480" poster="img/content/thumbs-videos/mariamateaser.jpg" autoplay muted>
            <source src="videos/MARIAMA TEASER FINAL FINAL 1.2.mp4" type="video/mp4">
        </video>
        <?php require_once("../model/portfolio_model.php");
        $portfolioData=new PortfolioModel("../json/portfolio.json");
        $contentPortfolio=$portfolioData->getPortfolio();
        require_once("../view/portfolio_view.php");
        $portfolioView=new PortfolioView;
        echo $portfolioView->getView($contentPortfolio->showcase);
        ?>
        <script src="js/portfolio.js"></script>
    </section>
    <section id="contacts">
        <h2>CONTACTS</h2>
        <div class="presentation">
            <div class="presentation">
                <a href="+32055661905"><img src="/public/img/picto-phone.png" alt="picto-téléphone"></a><span>+32 04 56 61 98 05</span>
             </div>
            <div class="presentation">
                <a href="mailto:contact@lfoprod.com"><img src="/public/img/picto-mail" alt="picto-mail"></a><span>contact@lfoprod.com</span>
            </div>
    </section>
</main>