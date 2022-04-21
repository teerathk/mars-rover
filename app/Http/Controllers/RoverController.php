<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoverController extends Controller {

    //
    public function index() {
        //dd("1");
        return view('rover.welcome');
    }

    public function selLang() {
        //dd("1");
        return view('rover.sellang');
    }

    public function howToPlay() {
        //dd("1");
        return view('rover.howtoplay');
    }

    public function chooseMission() {
        //dd("1");
        return view('rover.choosemission');
    }

    public function selMission1() {
        //dd("1");
        $d['task1'] = "Task 1: Search for channels formed by water.";
        $d['task2'] = "Task 2: Find a “hot spot” where a hydrothermal pool once existed.";
        $d['task3'] = "Task 3: Travel to the polar region in search of layers in the land.";
        $d['task4'] = "Task 4: Seek out rocks that were formed in water.";
        return view('rover.mission1', compact('d'));
    }

    public function selMission2() {
        //dd("1");
        $d['task1'] = "Task 1: Investigate the craters in Arabia Terra.";
        $d['task2'] = "Task 2: Find a dust storm.";
        $d['task3'] = "Task 3: Explore the polar ice caps.";
        $d['task4'] = "Task 4: Search for magnetic objects.";
        return view('rover.mission2', compact('d'));
    }

    public function selMission3() {
        //dd("1");
        $d['task1'] = "Task 1: Look for Olympus Mons.";
        $d['task2'] = "Task 2: Search for Jezero Crater.";
        $d['task3'] = "Task 3: Drive over the Valles Marineris canyon.";
        $d['task4'] = "Task 4: Find the Gale Crater.";
        return view('rover.mission3', compact('d'));
    }

    public function congrats() {
        //dd("1");
        return view('rover.congrats');
    }

    public function returnBack() {
        //dd("1");
        return view('rover.returning');
    }

    public function startPerform($mission) {
        //dd("1");
        if ($mission == 1) {
            $d['task1'] = "Task 1: Search for channels formed by water.";
            $d['task2'] = "Task 2: Find a “hot spot” where a hydrothermal pool once existed.";
            $d['task3'] = "Task 3: Travel to the polar region in search of layers in the land.";
            $d['task4'] = "Task 4: Seek out rocks that were formed in water.";
        } else if ($mission == 2) {
            $d['task1'] = "Task 1: Investigate the craters in Arabia Terra.";
            $d['task2'] = "Task 2: Find a dust storm.";
            $d['task3'] = "Task 3: Explore the polar ice caps.";
            $d['task4'] = "Task 4: Search for magnetic objects.";
        } else {
            $d['task1'] = "Task 1: Look for Olympus Mons.";
            $d['task2'] = "Task 2: Search for Jezero Crater.";
            $d['task3'] = "Task 3: Drive over the Valles Marineris canyon.";
            $d['task4'] = "Task 4: Find the Gale Crater.";
        }
        return view('rover.taskperform', $d);
    }

}
