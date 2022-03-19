<?php
namespace Drupal\movie_quote\Services;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use GuzzleHttp\Client;

class MovieQuoteService
{
  use StringTranslationTrait;

  /**
   * Returns the movie quote.
   */
  public function getMovieQuote()
  {
    $client = new Client(); //Guzzle client
    $res = $client->get('https://motioncode.biz:8090/movie_quote');
    $json_string = $res->getBody()->getContents();
    $json = json_decode($json_string);

    return $json;
  }
}
