<?php
namespace app\widgets;

class Slider extends \yii\bootstrap\Widget
{
    public $sliders;

    public function run()
    {
        return $this->render( 'slider', [ 'sliders' => $this->sliders, ] );
    }
}
