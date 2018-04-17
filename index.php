<?php
/**
 * @file
 * Demonstration file of using the Lemmatizer library.
 */

require './vendor/autoload.php';

use writecrow\Lemmatizer\Lemmatizer;

$text = 'leaves';
if (isset($_POST['text'])) {
    $text = $_POST['text'];
}
$lemma = 'leaf';
if (isset($_POST['lemma'])) {
    $lemma = $_POST['lemma'];
}

echo '<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>';

echo '
<div class="container">
  <form action="//' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . '" method="POST">
    <div class="row">
      <div class="six columns">
        <label for="text">Word to be lemmatized</label>
        <input name="text" value="' . $text . '">
        <input type="submit" value="Lemmatize" />';

        $text = Lemmatizer::getLemma($text);
        echo '<div><pre><code>';
        echo $text;
        echo '</code></pre></div>';  

      echo '</div>

      <div class="six columns">
      <label for="lemma">Get words from Lemma</label>
      <input name="lemma" value="' . $lemma . '">
      <input type="submit" value="Get words from Lemma" />';

    $words = Lemmatizer::getWordsFromLemma($lemma);
    echo '<div><pre><code>';
    echo $words;
    echo '</code></pre></div>';

echo '
      </div>
    </div>
  </form>
</div>
</body>
</html>';