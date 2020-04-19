<?php
namespace quew;
class Queue
{
    public $queue;
    public $limit;
    public function __construct($limit=10)
    {
        $this->limit=$limit;
        $this->queue=[];
    }
    public function isEmpty(){
        return empty($this->queue);
    }
    public function isFull(){
        return count($this->queue)==$this->limit;
    }
    public function enqueue($value){
        if (!$this->isFull()){
            array_push($this->queue,$value);
        }else{
            echo "Queue is Full";
        }
    }
    public function dequeue(){
        if (!$this->isEmpty()){
            array_shift($this->queue);
        }else{
            echo "Queue is Empty";
        }
    }
    public function getQueue(){
        return $this->queue;
    }
}