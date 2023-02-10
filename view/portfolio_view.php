<?php class PortfolioView{
 private $portfolioView='<div class="showcase">';
 private $pathPoster='img/content/thumbs-videos/';
 private $pathVideo='videos/';
    public function getView(array $catalogArray){
        
        foreach($catalogArray as $product){
            if($product->visible){
            $this->portfolioView.='<a href="#portfolio"class="video-link"onClick="play_this_video(\''.$this->pathVideo.$product->file.'\')">';
            $this->portfolioView.=$product->title;
            $this->portfolioView.='<div class="thumb-video" style="background-image:url(\''.$this->pathPoster.$product->poster.'\');">';
            $this->portfolioView.='<img class="thumb-video-arrow" src="img/arrow-play-video.svg" alt="Capture de la video">';
            $this->portfolioView.='</div>';
            $this->portfolioView.='</a>';
            }
        }
        $this->portfolioView.='</div>';
        return $this->portfolioView;
    }
}