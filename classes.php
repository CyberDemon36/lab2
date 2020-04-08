<?php
class user {
    public $name;
    public $surname;
    public $role;
    public $login;
    public $password;
    function __construct($name,$surname,$role,$login,$password)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
        $this->login = $login;
        $this->password = $password;
    }
};
class admin extends user {
    
    public function introduce_en (){
        echo "Hello, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", you are allmight at this web-site";
    }
    public function introduce_it (){
        echo "Ciao, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", ti è permesso tutto su questo sito";
    }
    public function introduce_ru (){
        echo "Привет, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", вам разрешено все на данном сайте";
    }
    public function introduce_ua (){
        echo "Привіт, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", вам дозволено усе на даному сайті";
    } 
};
class manager extends user {

    public function introduce_en () {
        echo "Hello, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", you can interract with client accounts";
    }
    public function introduce_it () {
        echo "Ciao, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", puoi interagire con gli account dei clienti.";
    }
    public function introduce_ru (){
        echo "Привет, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", вам разрешено взаимодействовать с аккаунтами клиентов";
    }
    public function introduce_ua (){
        echo "Привіт, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", вам дозволено взаїмодіяти з аккаунтами клієнтів";
    } 
};
class client extends user {

    public function introduce_en (){
        echo "Hello, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", welcome to the web-site!";;
    }
    public function introduce_it (){
        echo "Ciao, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", benvenuto nel sito!";;
    }
    public function introduce_ru (){
        echo "Привет, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", добро пожаловать на сайт!";
    }
    public function introduce_ua (){
        echo "Привіт, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", ласкаво просимо на сайт!";
    } 
};
?>