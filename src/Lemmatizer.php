<?php

namespace writecrow\Lemmatizer;

/**
 * Class Lemmatizer.
 *
 * A non-part-of-speech lemmatizer tool.
 *
 * @author markfullmer <mfullmer@gmail.com>
 *
 * @link https://github.com/writecrow/lemmatizer/
 *
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
class Lemmatizer {

  /**
   * Given a word, return its lemma form.
   *
   * @param string $input
   *    A string (word).
   *
   * @return string
   *    The lemmatized word.
   */
  public static function getLemma($input = '') {
    $alpha = $input[0];
    $path = __DIR__ . '/data/lemmas_' . $alpha . '.php';
    if (file_exists($path)) {
      require $path;
    }
    if (isset($lemma_map[$input])) {
      return $lemma_map[$input];
    }
    else {
      return $input;
    }
  }

  /**
   * Given a lemma root, return all words that would map to that lemma.
   *
   * @param string $input
   *    A string (word).
   *
   * @return string
   *    Comma-separated list of words.
   */
  public static function getWordsFromLemma($input = '') {
    $alpha = $input[0];
    $path = __DIR__ . '/data/roots_' . $alpha . '.php';
    if (file_exists($path)) {
      require $path;
    }
    if (isset($root_map[$input])) {
      return $root_map[$input];
    }
    else {
      return $input;
    }
  }

}
