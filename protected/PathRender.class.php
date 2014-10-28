<?php
/*
    path    表示實際的位置      如 /var/www/project1/js
    url     表示網站完整位置    如 http://localhost/project1/js
    uri     表示網站資源位置    如 /project1/js
    link    表示路徑與檔案名稱  如 /project1/js/file.jpg
*/
class PathRender
{
    protected $appDir;
    protected $webUri;
    protected $groupKey;

    /**
     *  整理路徑, 不要出現 .. or . 符號
     */
    private function flatPath( $path )
    {
        $index = 0;
        $result = array();
        foreach ( explode('/',$path) as $tag ) {
            $tag = trim($tag);
            switch($tag)
            {
                case '.':
                    break;
                case '..':
                    if ( $index>0 ) {
                        unset($result[$index]);
                        $index--;
                    }
                    break;
                default:
                    $result[$index] = $tag;
                    $index++;
                    break;
            }
        }
        return join('/',$result);
    }

    public function __construct( $appDir, $webUri, $groupKey )
    {
        $this->appDir = $appDir;
        $this->webUri = $webUri;
        $this->groupKey = $groupKey;
    }

    public function fromPath( $name=null )
    {
        $path = realpath("{$this->appDir}/../media/{$this->groupKey}");
        if ( $name ) {
            return $path.'/'.$name;
        }
        return $path;
    }

    public function fromUri( $name=null )
    {
        $path = $this->flatPath("{$this->webUri}/../media/{$this->groupKey}");
        if ( $name ) {
            return $path.'/'.$name;
        }
        return $path;
    }

    public function toPath( $name=null )
    {
        $path = $this->flatPath("{$this->appDir}/../media/tmp/{$this->groupKey}");
        if ( $name ) {
            return $path.'/'.$name;
        }
        return $path;
    }

    public function toUri( $name=null )
    {
        $path = $this->flatPath("{$this->webUri}/../media/tmp/{$this->groupKey}");
        if ( $name ) {
            return $path.'/'.$name;
        }
        return $path;
    }

}

//