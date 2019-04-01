<?php namespace Andreyco\Instagram\Support\Laravel\Facade;

use Andreyco\Instagram\Client;
use Illuminate\Support\Facades\Facade;

/**
 * @method static string getLoginUrl($scope = array(), $state = null)
 * @method static object searchUser($name, $limit = 20)
 * @method static object getUser($id = 'self')
 * @method static object getUserMedia($id = 'self', $limit = 20)
 * @method static object getUserLikes($limit = 20)
 * @method static object getSelfFollows()
 * @method static object getSelfFollowedBy()
 * @method static object getOAuthToken($code, $token = false)
 * @method static Client setAccessToken($data)
 * @method static string getAccessToken()
 *
 * Class Instagram
 * @package Andreyco\Instagram\Support\Laravel\Facade
 */
class Instagram extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'andreyco.instagram';
    }

}
