<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use Psr\Http\Message\ResponseInterface as Response;

class AuthenticateAction extends UserAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $users = $this->userRepository->findAll();
        $input = $this->getFormData();
        $username = $input->username;

        $this->logger->info("Authenticate action called for username: $username.");
        $result = 0;

        foreach ($users as $user) {
          if ($user->getUsername() == $username) {
            $result = 1;
            break;
          }
        }

        return $this->respondWithData($result);
    }
}
