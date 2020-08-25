<?php

use App\Request;
use App\Response;
use App\TasksQueue;

$id = Request::getIntFromGet('id');

TasksQueue::runById($id);

Response::redirect('/queue/list');