<?php

public interface HeynvanXususiyyetleri()
{
    public function canFly();
    
}

class Qartal implements HeynvanXususiyyetleri
{
    public function canFly()
    {
        return "Ucur";
    }
}

interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        // Fayla yazmaq əməliyyatları
    }
}

class DatabaseLogger implements Logger {
    public function log($message) {
        // Verilənlər bazasına yazmaq əməliyyatları
    }
}
