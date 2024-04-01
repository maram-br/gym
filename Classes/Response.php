<?php
if (str_replace('\\', '/', __FILE__) === str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'])) {
    die('Access denied');
}
class Response
{
    private bool $status;
    private string $message;
    private $data;

    public function __construct($status, $message, $data)
    {
        $this->status = $status;
        $this->message = $message;
        $this->data = $data;

    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getAll()
    {
        return [
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->data
        ];
    }
}