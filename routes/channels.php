<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| This file defines all of the event broadcasting channels that your
| application supports. The channels are defined using the Broadcast
| facade, which provides a simple and convenient way to register
| and manage your application's broadcast channels.
|
| Each channel is defined using a closure, which is passed the current
| user and the ID of the channel. The closure should return a boolean
| value indicating whether the current user is authorized to listen
| to the channel.
|
| In this example, we define a single channel called 'user.{id}',
| which is authorized based on the current user's ID. Specifically,
| the channel is authorized if the current user's ID matches the ID
| of the channel. This is a simple example, but you can define
| more complex authorization logic by modifying the closure.
|
*/

// Define the 'user.{id}' channel
Broadcast::channel('user.{id}', function ($currentUser, $id) {
    // Authorize the channel based on the current user's ID
    return (int) $currentUser->id === (int) $id;
});
