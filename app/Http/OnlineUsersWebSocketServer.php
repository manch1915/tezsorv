<?php

namespace App\Http;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use SplObjectStorage;

class OnlineUsersWebSocketServer implements MessageComponentInterface
{
    protected SplObjectStorage $clients;
    protected array $users = [];

    public function __construct()
    {
        $this->clients = new SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn): void
    {
        $this->clients->attach($conn);
        echo "New connection! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg): void
    {
        $data = json_decode($msg, true);

        switch ($data['type'] ?? null) {
            case 'init':
                $this->initUser($data['user_id'] ?? null, $from);
                break;
            default:
                echo "Invalid message type: {$data['type']}\n";
                break;
        }
    }

    public function onClose(ConnectionInterface $conn): void
    {
        $userId = array_search($conn, $this->users);
        if ($userId !== false) {
            unset($this->users[$userId]);
            $this->broadcast([
                'type' => 'user_disconnect',
                'user_id' => $userId,
            ]);
        }

        $this->clients->detach($conn);
        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e): void
    {
        echo "An error has occurred: {$e->getMessage()}\n";
        $conn->close();
    }

    protected function initUser($userId, ConnectionInterface $conn): void
    {
        if ($userId === null) {
            return;
        }

        $this->users[$userId] = $conn;
        echo "User (ID: {$userId}) connected!\n";

        $this->broadcast([
            'type' => 'user_connect',
            'user_id' => $userId,
        ]);
    }

    protected function broadcast(array $message): void
    {
        $payload = json_encode($message);

        foreach ($this->clients as $client) {
            $client->send($payload);
        }
    }
}
