<?php
namespace Drupal\movie_quote\Controller;
use Drupal\Core\Controller\ControllerBase;
// use Symfony\Component\DependencyInjection\ContainerInterface;
// use Drupal\movie_quote\Services\MovieQuoteService;

/**
 * Controller for the movie quote.
 */

class MovieQuoteController extends ControllerBase
{
//   protected $movie_quote;

// public function __construct(MovieQuoteService $movie_quote)
// {
//   $this->movie_quote = $movie_quote;
// }

// public static function create(ContainerInterface $container)
// {
//   return new static(
//     $container->get('movie_quote.quote')
//   );
// }

  public function movieQuote()
  {
    //$json = $this->movie_quote->getMovieQuote();
    
    return [
        '#theme' => 'movie-quote-template',
        // '#quote' => $json->Quote,
        // '#movie' => $json->Movie,
        // '#year' => $json->Year,
        '#attached' => [
          'library' => [
            'movie_quote/movie-quote-library'
          ]
        ]
    ];
  }
}
