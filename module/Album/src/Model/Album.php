<?php
/**
 * Created by PhpStorm.
 * User: novemiel.l
 * Date: 3/23/2019
 * Time: 11:17 AM
 */

namespace Album\Model;

class Album
{
    public $id;
    public $artist;
    public $title;

    public function exchangeArray(array $data)
    {
        $this->id = !empty($data['id']) ? $data['id'] : null;
        $this->artist = !empty($data['artist']) ? $data['artist'] : null;
        $this->title = !empty($data['title']) ? $data['title'] : null;
    }
}