<?php

class Util
{
    public static function redirect($view)
    {
        header('Location: /' . $view);
    }
}