<?php
namespace Lottobits\Application\Helper\Profile;

use Lottobits\Application\Model\Profile\ProfileModel;

class ProfileManagerHelper
{

    public function __construct()
    {}
    
    public function generateProfile()
    {
        $profile = ProfileModel::generateProfile('teste', '1T3sTando', hash('sha512', time()));
        //$profile = file_put_contents(hash('sha256', $profile), $profile);
        
        //return header("Content-Disposition: attachment; filename=".basename($profile));
        return $profile;
    }
}

