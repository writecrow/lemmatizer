<?php

namespace writecrow\Lemmatizer;

use PHPUnit\Framework\TestCase;

/**
 * Test basic strings are converted correctly.
 */
class GetLemmaTest extends TestCase {

  /**
   * Provides data.
   */
  public function basicDataProvider() {
    return [
      '1' => ['input' => 'leaves', 'expected'  => 'leaf'],
      '2' => ['input' => 'happiest', 'expected'  => 'happy'],
      '3' => ['input' => 'highlighting', 'expected'  => 'highlight'],
    ];
  }

  /**
   * Test assertions.
   *
   * @dataProvider basicDataProvider
   */
  public function testBasic($input, $expected) {
    $this->assertEquals($expected, Lemmatizer::getLemma($input));
  }

}
