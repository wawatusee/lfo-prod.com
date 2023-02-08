<?php class PortfolioView{
 private $portfolioView='<h2>PORTFOLIO</h2><div class="showcase">';
 private $pathPoster='img/content/thumbs-videos/';
    public function getView(array $catalogArray){
        foreach($catalogArray as $product){
            $this->portfolioView.='<a href="#portfolio" class="video-link">';
            $this->portfolioView.='<div class="thumb-video" style="background-image:url(\''.$this->pathPoster.$product->poster.'\');">';
            $this->portfolioView.='<img class="thumb-video-arrow" src="img/arrow-play-video.svg" alt="Capture de la video">';
            $this->portfolioView.='</div>';
            $this->portfolioView.='<span>'.$product->title.'</span>';
            $this->portfolioView.='</a>';
        }
        $this->portfolioView.='</div>';
        return $this->portfolioView;
    }
}