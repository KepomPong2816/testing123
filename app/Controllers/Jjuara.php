<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Juara;

class Jjuara extends BaseController
{
    public function saveData()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $model = new Juara();
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi1' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData1()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi2' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData2()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi3' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData3()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi4' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData4()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-final1' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData5()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-final2' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData6()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['j2' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData7()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['j1' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData8()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['j3' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
}
