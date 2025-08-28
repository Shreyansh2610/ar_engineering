<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage() {
        $imageDescription = $this->imageDescription();
        return view('pages.home',compact('imageDescription'));
    }

    public function imageDescription() {
        return [
            1 => 'V Type Groove Pulley',
            2 => 'V Type Groove Pulley',
            3 => 'Hose Barb',
            4 => 'Hose Barb',
            5 => 'Hose Barb',
            6 => 'Hose Barb',
            7 => 'Hose Barb',
            8 => 'Hub',
            9 => 'Hub',
            10 => 'Hub',
            11 => 'Steel Bushing With Oil Groove',
            12 => 'Steel Bushing With Oil Groove',
            13 => 'Auto Parts Products',
            14 => 'Auto Parts Products',
            15 => 'Auto Parts Products',
            16 => 'Flange',
            17 => 'Flange',
            18 => 'Bronze And Gun Metal Product',
            19 => 'Bronze And Gun Metal Product',
            20 => 'Spacer',
            21 => 'Spacer',
            22 => 'Shaft',
            23 => 'Shaft',
            24 => 'Shaft',
            25 => 'Hub With I.D. Thread Special Parts',
            26 => 'Hub With I.D. Thread Special Parts',
            27 => 'Special Parts',
            28 => 'Special Parts',
            29 => 'Internal Threading Parts',
            30 => 'Internal Threading Parts',
            31 => 'Housing & Pulley',
            32 => 'Housing & Pulley',
            33 => 'Hub And Spare Parts',
            34 => 'Hub And Spare Parts',
            35 => 'I.D. Grooving Type Flange',
            36 => 'Spare Parts',
            37 => 'Spare Parts',
            38 => 'Pin',
            39 => 'V Type Pulley Roller',
            40 => 'V Type Pulley Roller',
            41 => 'Adjusting Nut',
            42 => 'Shaft',
            43 => 'Shaft',
        ];
    }
}
