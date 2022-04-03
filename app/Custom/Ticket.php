<?php

namespace App\Custom;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Ticket
{
    private $id;
    private $name;
    private $mail;
    private $message;
    private $file;
    private $open;
    private $date;

    public function __construct($name, $mail, $message, $file)
    {
        $this->id = uniqid('', true);
        $this->name = $name;
        $this->mail = $mail;
        $this->message = $message;
        $this->file = $file;
        $this->open = true;
    }

    public function save()
    {
        DB::insert(
            'insert into tickets (name,email,message,file,isOpen,created_at) values (?,?,?,?,?,?)',
            [
                $this->name, $this->mail, $this->message, $this->file, $this->open, Carbon::now()->toDateTimeString()
            ]);
    }

    public function getAll(): array
    {
        return DB::select(
            'select * from tickets'
        );
    }

    public function getFile()
    {
        return $this->file;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function isOpen(): bool
    {
        return $this->open;
    }
}
