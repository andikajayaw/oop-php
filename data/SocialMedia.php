<?php 

class SocialMedia 
{
    public string $name;
}

class Facebook extends SocialMedia 
{
    final public function login(string $name, string $password): boolean
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{
    public function login(string $name, string $password): boolean
    {
        return fale;
    }
}