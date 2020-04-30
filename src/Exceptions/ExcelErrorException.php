<?php
/**
 * laravel-helpers - ExcelErrorException.php
 * User: Joshua
 * Date: 5/21/19
 * Time: 10:38
 */

namespace Joshua\Helpers\Exceptions;

use Exception;
use Illuminate\Support\MessageBag;

class ExcelErrorException extends Exception
{
    /**
     * @var MessageBag
     */
    public $messageBag;

    /**
     * ExcelErrorException constructor.
     * @param MessageBag $messageBag
     */
    public function __construct(MessageBag $messageBag)
    {
        $this->messageBag = $messageBag;
    }

    public function render()
    {
        return back()->withErrors($this->messageBag, 'excel')->withInput();
    }
}