<?php

namespace Fatkulnurk\PHPQbittorrentApi\Authentication;

use FatkulNurK\PHPQbittorrentApi\CollectionInterface;

interface AuthenticationInterface
{
    /**
     * @param  string $username
     * @param  string $password
     * @return CollectionInterface
     */
    public function login(string $username, string $password): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function logout(): CollectionInterface;
}
