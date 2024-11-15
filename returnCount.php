<!-- Return the number (count) of vowels in the given string.

We will consider a, e, i, o, u as vowels for this Kata (but not y).

The input string will only consist of lower case letters and/or spaces. -->

<?php


function getCount(string $str): int
{
  $vowels = ['a', 'e', 'i', 'o', 'u'];
  $count = 0;
  foreach (str_split($str) as $char) {
    if (in_array($char, $vowels)) {
      $count++;
    }
  }

  return $count;
}
