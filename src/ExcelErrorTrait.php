<?php
/**
 * laravel-helpers - ExcelErrorTrait.php
 * User: Joshua
 * Date: 5/21/19
 * Time: 10:36
 */

namespace Joshua\Helpers;


trait ExcelErrorTrait
{
    public $messageBag = null;

    /**
     * @return MessageBag
     */
    public function messageBag()
    {
        if($this->messageBag instanceof MessageBag){
            return $this->messageBag;
        }

        return $this->messageBag = new MessageBag();
    }

    /**
     * @param $row
     * @param $message
     * @return ExcelErrorTrait
     */
    public function add_error($row, $message)
    {
        $this->messageBag()->add("$row", $message);
        return $this;
    }

    /**
     * @param $condition
     * @throws ExcelErrorException
     */
    public function throw_excel_error_if($condition)
    {
        if($condition){
            throw new ExcelErrorException($this->messageBag());
        }
    }

    /**
     * @throws ExcelErrorException
     */
    public function throw_excel_error_messageBag()
    {
        $this->throw_excel_error_if($this->messageBag()->count());
    }
}