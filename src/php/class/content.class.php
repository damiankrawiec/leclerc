<?php

class Content extends Config
{
    public function __construct() {

    }

    private function basket() {

        $return = '<div class="basket">'.$this->getConfig('translate')['current-basket'].'</div>';

        $return .= '<div class="basket-detail row"><i class="fa-solid fa-spinner fa-spin fa-3x"></i></div>';

        return $return;

    }

    public function slider(): string {

        $return = '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">';

        $return .= '<div class="carousel-inner">';
        foreach ($this->getConfig('slider') as $i => $slide) {

            $return .= '<div class="carousel-item'.($i > 0 ? '' : ' active').'">';
            $return .= '<img src="slider/'.$slide.'" class="d-block w-100" alt="'.$slide.'">';
            $return .= '</div>';


        }
        $return .= '</div>';

        $return .= '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">';
            $return .= '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
        $return .= '<span class="visually-hidden"><i class="fa-solid fa-angle-left"></i></span>';
        $return .= '</button>';
        $return .= '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">';
            $return .= '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
            $return .= '<span class="visually-hidden"><i class="fa-solid fa-angle-right"></i></span>';
        $return .= '</button>';
        $return .= '</div>';

        return $return;

    }

    public function top(string $element): string {

        $return = '<div class="col-12 top">';

        if($element === 'basket')
            $return .= $this->basket();

        $return .= '</div>';

        return $return;

    }

}