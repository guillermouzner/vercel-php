<?php 

class Response {
    
    private $header = ""; 

    private function _header($code) 
    {
        switch ($code) {
            case 200:
                $this->header = "HTTP/1.1 200 OK";
                break;
            case 400:
                $this->header = "HTTP/1.1 400 Bad Request";
                break;
            case 401:
                $this->header = "HTTP/1.1 401 Unauthorized";
                break;
            case 500:
                $this->header = "HTTP/1.1 500 Server Error";
                break;
        }            
        return($this->header);
    }

    public function send($code, array $data) 
    {
        header($this->_header($code));
        echo json_encode($data);
        die; 
    }
}
