<?php
class ShareModel extends Model
{
    public function Index()
    {
        $this->query('SELECT * FROM shares');

        return $rows = $this->resultSet();
    }
}