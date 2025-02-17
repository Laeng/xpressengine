<?php
/**
 * filesystems.php
 *
 * PHP version 7
 *
 * @category    Config
 * @license     https://opensource.org/licenses/MIT MIT
 * @link        https://laravel.com
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'url' => '/storage/app/',
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'media' => [
            'driver' => 'local',
            'root' => storage_path('app/public/media'),
            'url' => env('APP_URL').'/storage/app/public/media',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_KEY'),
            'secret' => env('AWS_SECRET'),
            'region' => env('AWS_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],

    ],

    'division' => [
        'enable' => false,
        'disks' => ['s3']
    ],

    /*
    |--------------------------------------------------------------------------
    | Mime-type Filters
    |--------------------------------------------------------------------------
    |
    | 확장자를 변경하여 업로드하는 것을 방지하기 위한 옵션.
    | "white" 설정시 'black' 항목과 'white' 항목에 정의된 모든 타입에 대해 조회하고,
    | 매칭되는게 없는 경우 exception 을 발생.
    | "black" 설정시 'black' 항목에 정의된 타입만 조회하고 정의 되지 않은 확장자인 경우 통과,
    | 정의되었지만 mime-type 이 다른경우 exception 을 발생.
    | "none" 설정시 비교 검사하지 않음. (권장하지 않음)
    |
    | Supported Drivers: "none", "white", "black"
    |
    */

    'filter' => 'black',

    'mimes' => [
        'black' => [
            'pdf'   => 'application/pdf',
            'mid'   => 'audio/midi',
            'midi'  => 'audio/midi',
            'mpga'  => 'audio/mpeg',
            'mp2'   => 'audio/mpeg',
            'mp3'   => 'audio/mpeg',
            'aif'   => 'audio/x-aiff',
            'aiff'  => 'audio/x-aiff',
            'aifc'  => 'audio/x-aiff',
            'ram'   => 'audio/x-pn-realaudio',
            'rm'    => 'audio/x-pn-realaudio',
            'rpm'   => 'audio/x-pn-realaudio-plugin',
            'ra'    => 'audio/x-realaudio',
            'rv'    => 'video/vnd.rn-realvideo',
            'wav'   => 'audio/x-wav',
            'jpg'   => 'image/jpeg',
            'jpeg'  => 'image/jpeg',
            'jpe'   => 'image/jpeg',
            'png'   => 'image/png',
            'gif'   => 'image/gif',
            'bmp'   => 'image/bmp',
            'tiff'  => 'image/tiff',
            'tif'   => 'image/tiff',
            'mpeg'  => 'video/mpeg',
            'mpg'   => 'video/mpeg',
            'mpe'   => 'video/mpeg',
            'qt'    => 'video/quicktime',
            'mov'   => 'video/quicktime',
            'avi'   => 'video/x-msvideo',
            'movie' => 'video/x-sgi-movie',
            '3g2'   => 'video/3gpp2',
            '3gp'   => 'video/3gp',
            'mp4'   => 'video/mp4',
            'm4a'   => 'audio/x-m4a',
            'f4v'   => 'video/mp4',
            'webm'  => 'video/webm',
            'aac'   => 'audio/x-acc',
            'm4u'   => 'application/vnd.mpegurl',
            'wmv'   => 'video/x-ms-wmv',
            'au'    => 'audio/x-au',
            'ac3'   => 'audio/ac3',
            'flac'  => 'audio/x-flac',
            'ogg'   => 'audio/ogg',
            'wma'   => 'audio/x-ms-wma',
            'ico'   => [
                'image/x-icon',
                'image/vnd.microsoft.icon',
            ],
            'php'   => 'application/x-httpd-php',
            'php4'  => 'application/x-httpd-php',
            'php3'  => 'application/x-httpd-php',
            'phtml' => 'application/x-httpd-php',
            'phar' => 'application/x-httpd-php',
            'phps'  => 'application/x-httpd-php-source',
            'js'    => 'application/javascript',
        ],
        'white' => [
            'svg'   => 'image/svg+xml',
            'hqx'   => 'application/mac-binhex40',
            'cpt'   => 'application/mac-compactpro',
            'csv'   => 'text/x-comma-separated-values',
            'bin'   => 'application/octet-stream',
            'dms'   => 'application/octet-stream',
            'lha'   => 'application/octet-stream',
            'lzh'   => 'application/octet-stream',
            'exe'   => 'application/octet-stream',
            'class' => 'application/octet-stream',
            'psd'   => 'application/x-photoshop',
            'so'    => 'application/octet-stream',
            'sea'   => 'application/octet-stream',
            'dll'   => 'application/octet-stream',
            'oda'   => 'application/oda',
            'ai'    => 'application/pdf',
            'eps'   => 'application/postscript',
            'ps'    => 'application/postscript',
            'smi'   => 'application/smil',
            'smil'  => 'application/smil',
            'mif'   => 'application/vnd.mif',
            'xls'   => 'application/vnd.ms-excel',
            'ppt'   => 'application/powerpoint',
            'pptx'  => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
            'wbxml' => 'application/wbxml',
            'wmlc'  => 'application/wmlc',
            'dcr'   => 'application/x-director',
            'dir'   => 'application/x-director',
            'dxr'   => 'application/x-director',
            'dvi'   => 'application/x-dvi',
            'gtar'  => 'application/x-gtar',
            'gz'    => 'application/x-gzip',
            'gzip'  => 'application/x-gzip',
            'swf'   => 'application/x-shockwave-flash',
            'sit'   => 'application/x-stuffit',
            'tar'   => 'application/x-tar',
            'tgz'   => 'application/x-tar',
            'z'     => 'application/x-compress',
            'xhtml' => 'application/xhtml+xml',
            'xht'   => 'application/xhtml+xml',
            'zip'   => [
                'application/x-zip',
                'application/zip',
            ],
            'rar'   => 'application/x-rar',
            'css'   => 'text/css',
            'html'  => 'text/html',
            'htm'   => 'text/html',
            'shtml' => 'text/html',
            'txt'   => 'text/plain',
            'text'  => 'text/plain',
            'log'   => 'text/plain',
            'rtx'   => 'text/richtext',
            'rtf'   => 'text/rtf',
            'xml'   => 'application/xml',
            'xsl'   => 'application/xml',
            'dmn'   => 'application/octet-stream',
            'bpmn'  => 'application/octet-stream',
            'doc'   => 'application/msword',
            'docx'  => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'docm'  => 'application/vnd.ms-word.template.macroEnabled.12',
            'dot'   => 'application/msword',
            'dotx'  => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'xlsx'  => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'word'  => 'application/msword',
            'xl'    => 'application/excel',
            'eml'   => 'message/rfc822',
            'json'  => [
                'application/json',
                'application/octet-stream',
                'text/plain',
            ],
            'pem'   => 'application/x-x509-user-cert',
            'p10'   => 'application/x-pkcs10',
            'p12'   => 'application/x-pkcs12',
            'p7a'   => 'application/x-pkcs7-signature',
            'p7c'   => 'application/pkcs7-mime',
            'p7m'   => 'application/pkcs7-mime',
            'p7r'   => 'application/x-pkcs7-certreqresp',
            'p7s'   => 'application/pkcs7-signature',
            'crt'   => 'application/x-x509-ca-cert',
            'crl'   => 'application/pkix-crl',
            'der'   => 'application/x-x509-ca-cert',
            'kdb'   => 'application/octet-stream',
            'pgp'   => 'application/pgp',
            'gpg'   => 'application/gpg-keys',
            'sst'   => 'application/octet-stream',
            'csr'   => 'application/octet-stream',
            'rsa'   => 'application/x-pkcs7',
            'cer'   => 'application/pkix-cert',
            'm3u'   => 'text/plain',
            'xspf'  => 'application/xspf+xml',
            'vlc'   => 'application/videolan',
            'kmz'   => 'application/vnd.google-earth.kmz',
            'kml'   => 'application/vnd.google-earth.kml+xml',
            'ics'   => 'text/calendar',
            'zsh'   => 'text/x-scriptzsh',
            '7zip'  => 'application/x-7z-compressed',
            'cdr'   => 'application/cdr',
            'jar'   => 'application/java-archive',
            'tex'   => 'application/x-tex',
            'latex' => 'application/x-latex',
            'odt'   => 'application/vnd.oasis.opendocument.text',
            'ods'   => 'application/vnd.oasis.opendocument.spreadsheet',
            'odp'   => 'application/vnd.oasis.opendocument.presentation',
            'odg'   => 'application/vnd.oasis.opendocument.graphics',
            'odc'   => 'application/vnd.oasis.opendocument.chart',
            'odf'   => 'application/vnd.oasis.opendocument.formula',
            'odi'   => 'application/vnd.oasis.opendocument.image',
            'odm'   => 'application/vnd.oasis.opendocument.text-master',
            'odb'   => 'application/vnd.oasis.opendocument.database',
            'ott'   => 'application/vnd.oasis.opendocument.text-template',
            'hwp'   => 'application/x-hwp',
        ],
    ],
];
