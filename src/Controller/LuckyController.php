<?php
    namespace App\Controller;

    use Psr\Log\LoggerInterface;
    use Symfony\Component\HttpFoundation\Response;

    class LuckyController
    {
        public function number(int $max, LoggerInterface $logger): Response
        {
            $nummber = random_int(0, $max);
            $logger->info('We are logging');
            return new Response(
                '<html><body>Lucky number: '.$nummber.'</body><html>'
            );
        }
    }
?>