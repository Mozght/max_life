<?php

namespace humans\male;

use humans\female\Nastya;

/**
 * AdsPartnerController implements the CRUD actions for AdsPartner model.
 */
class Max extends TipichnyHui
{
    public $country_of_origin = 'Belarus';
    public $country_destination = 'Poland';

    function __construct() {
        $this->drochit;
    }

    public function actions()
    {
        return [
            'drochit' => [
                'class' => 'humans\male\abilities',
            ],
            'srat' => [
                'class' => 'humans\male\abilities',
            ],
            'sex' => [
                'class' => 'humans\abilities',
            ],
            'uvozheniepacanov' => [
                'class' => 'humans\abilities',
            ],
        ];
    }

    public function actionMaxNormalLife()
    {
        $this->drochit;
        $this->srat;
        return false;
    }


    public function actionGetVNZH()
    {
        if ($this->actionMoveFamily && $this->country_destination == 'Poland') {
            if ($this->said() == 'nihuja, hochu v' . Country::getRandomCountryName()) {
                $this->actionMaxNormalLife();
            } else if ($this->said() == 'ladno, go v' . $this->country_destination) {
                $this->sex;
                $this->uvozheniepacanov;
                return true;
            }

        } else {
            $this->drochit;
            $this->srat;
            return false;
        }
    }

    public function actionMoveFamily()
    {
        if (Nastya::said() == 'go') {
            return true;
        } else {
            $this->drochit;
            $this->srat;
            return false;
        }

    }

    public function said() {
        return Sentences::getRandomPhrase($this);
    }
}