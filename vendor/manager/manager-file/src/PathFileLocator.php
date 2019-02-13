<?php

namespace Manager\File;

class PathFileLocator
{
    
    public static function __verifyPathLocator($path)
    {
        if(! file_exists($path)){
            throw new Exception\NotFoundException('Path not found:' . $path);
        }
        
        return true;
    }
    
}
