# nplesa/bionic-eye

Multi-camera AI detection and HLS streaming package pentru Laravel 12.

## Instalare

composer require nplesa/bionic-eye
php artisan migrate

## Configurare

1. Creează instanțe dashboard și camere în tabelele dashboard_instances și cameras.
2. Asigură-te că scriptul Python are sursele corecte (RTSP sau fișiere video).

## Rulare

php artisan serve
python3 vendor/nplesa/bionic-eye/python/bionic_eye_hls.py

## Dashboard Livewire

<livewire:camera-dashboard :instance_id="$instance->id" />
