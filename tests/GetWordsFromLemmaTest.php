<?php

namespace writecrow\Lemmatizer;

use PHPUnit\Framework\TestCase;

/**
 * Test basic strings are converted correctly.
 */
class GetWordsFromLemmaTest extends TestCase {

  /**
   * Provides data.
   */
  public function basicDataProvider() {
    return [
      '1' => ['input' => 'leaf', 'expected'  => 'leaves,leafing,leafed,leafs'],
      '2' => ['input' => 'happy', 'expected'  => 'happier,happiest'],
      '3' => ['input' => 'highlight', 'expected'  => 'highlighted,highlights,highlighting'],
    ];
  }

  /**
   * Test assertions.
   *
   * @dataProvider basicDataProvider
   */
  public function testBasic($input, $expected) {
    $this->assertEquals($expected, Lemmatizer::getWordsFromLemma($input));
  }

}
