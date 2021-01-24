<?php

namespace App\Services;

class BaseService
{
    /**
     * @var array
     */
    private $error = array();

    /**
     * @return array
     * @author Saurav
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param $error
     *
     * @author Saurav
     */
    public function setError($error)
    {
        $this->error[] = $error;
    }

    /**
     * @return bool
     * @author Saurav
     */
    public function hasError()
    {
        if (!empty($this->error)) {
            return true;
        }

        return false;
    }

}