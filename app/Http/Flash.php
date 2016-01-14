<?php

namespace App\Http;

/**
* Class to manage information messages.
*/
class Flash
{

    private function create($title, $message, $type) {
        session()->flash('flash_message', [
            'title'   => $title,
            'message' => $message,
            'type'    => $type
        ]);
    }

    public function info($title, $message) {
        return $this->create($title, $message, 'info');
    }

    public function success($title, $message) {
        return $this->create($title, $message, 'success');
    }

    public function error($title, $message) {
        return $this->create($title, $message, 'error');
    }

    public function overlay($title, $message, $type = 'success') {
        session()->flash('flash_message_overlay', [
            'title'   => $title,
            'message' => $message,
            'type'    => $type
        ]);
    }

}