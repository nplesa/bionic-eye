# nplesa/bionic-eye

Multi-camera AI Laravel 12 package.

## Instalation
```
composer require nplesa/bionic-eye
php artisan migrate
```
## Configuration
```
1. Create bionic-eye instances on dashboard that tracking and try to identify objects.
2. Please ensure that Python sources are last version. (RTSP or video sources).
3. All records can be stored.
```
## Running
```
php artisan serve
python3 vendor/nplesa/bionic-eye/python/bionic_eye_hls.py
```
## Sample of Livewire instance on dashboard
```
<livewire:camera-dashboard :instance_id="$instance->id" />
```
