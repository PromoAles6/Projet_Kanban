<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\BoardModel;

class BoardController extends AbstractController
{

    public function index()
    {
        $boardModel = new BoardModel();

        $boards = $boardModel->findAll();

        $this->render('board.php', [
            'boards' => $boards,
        ]
    );
    }

        /**
         * Get the value of boardModel
         */ 
        public function getBoardModel()
        {
                return $this->boardModel;
        }

        /**
         * Set the value of boardModel
         *
         * @return  self
         */ 
        public function setBoardModel($boardModel)
        {
                $this->boardModel = $boardModel;

                return $this;
        }
}
