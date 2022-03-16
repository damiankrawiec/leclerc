<?php

class Config
{
    private $config = array(
        'translate' => array(
            'current-basket' => 'Obecnie w koszyku'
        ),
        'slider' => array('2.jpg', '1.jpg')
    );
    public function __construct() {

    }

    /**
     * @return array
     */
    protected function getConfig(string $index = ''): array {

        $return = $this->config;
        if($index !== '')
            $return = $this->config[$index];

        return $return;
    }

}