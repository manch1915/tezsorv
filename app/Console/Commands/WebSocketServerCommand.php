<?php

namespace App\Console\Commands;

use App\Http\OnlineUsersWebSocketServer;
use Illuminate\Console\Command;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

class WebSocketServerCommand extends Command
{
    protected const PORT = 8080;
    protected $signature = 'websocket:start';
    protected $description = 'Start the WebSocket Users Server';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(): void
    {
        $this->startServer($this->createOnlineUsersServer());
    }

    private function createOnlineUsersServer(): IoServer
    {
        // Create an instance of your new "OnlineUsersWebSocketServer" class
        $onlineUsersWebSocketServer = new OnlineUsersWebSocketServer();

        // Set up a websocket server instance
        $wsServer = new WsServer($onlineUsersWebSocketServer);

        // Set up an HTTP server instance
        $httpServer = new HttpServer($wsServer);

        // Return a IoServer instance configured with your websocket server on port 8080
        return IoServer::factory($httpServer, self::PORT);
    }

    private function startServer(IoServer $server): void
    {
        $server->run();
    }
}
