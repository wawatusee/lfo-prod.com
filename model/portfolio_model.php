<?php class PortfolioModel{
    private $srcJson;
    private $catalogue;
    public function __construct($srcJson){
        $this->srcJson=$srcJson;
        $this->portfolio=json_decode(file_get_contents($this->srcJson));
    }
    public function getPortfolio(){
        $portfolio_array=$this->portfolio;
        return $portfolio_array;
    }

}