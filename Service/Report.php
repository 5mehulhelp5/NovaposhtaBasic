<?php

namespace Dragonfly\NovaposhtaBasic\Service;

class Report
{
    private array $error = [];
    private array $notice = [];
    private array $success = [];

    /**
     * @param $value
     */
    public function addError($value)
    {
        if (is_string($value)) {
            $this->error[] = $value;
        } elseif (is_array($value)) {
            foreach ($value as $k => $v) {
                if (is_string($v)) {
                    $this->error[] = $v;
                }
            }
        }
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param $value
     */
    public function addNotice($value)
    {
        $this->notice[] = $value;
    }

    /**
     * @return mixed
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * @param $value
     */
    public function addSuccess($value)
    {
        $this->success[] = $value;
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getSuccess($value)
    {
        return $this->success;
    }
}
