<?php
class Task{
    protected $id;
    protected $title;
    protected $description;
    protected $complete;

    /**
     * @param $id
     * @param $title
     * @param $description
     * @param $complete
     */
    public function __construct($id, $title, $description, $complete)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->complete = $complete;
    }


}