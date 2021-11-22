<?php
class CloudOnexInstaller
{
    protected static $default_theme_path = '../ui/theme/default';

    public static function getReleaseDate()
    {
        $file_app_path = '../system/app.php';
        if (file_exists($file_app_path)) {
            return date('F d Y', filemtime($file_app_path));
        }

        exit('The file-' . $file_app_path . ' not found!');
    }

    public static function header($title)
    {
        return '<!DOCTYPE html>
<html lang="en">
<head>
    <title>' .
            $title .
            '</title>
    <link type=\'text/css\' href=\'' .
            self::$default_theme_path .
            '/css/app.min.css?v=5\' rel=\'stylesheet\'/>
</head>';
    }

    public static function footer($extras = '')
    {
        return '<script src="' .
            self::$default_theme_path .
            '/js/app.min.js?v=3"></script>
' .
            $extras .
            '
</body>
</html>';
    }
}
