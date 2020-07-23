<?php
/**
 * Random
 * php version 7.3.1
 *
 * @category Package
 * @package  UniqueRandomNumber
 * @author   BySwadi <muath.ye@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     Muathye https://www.github.com/muath-ye
 */
namespace Muathye\UniqueRandomNumber;

/**
 * Random
 * php version 7.3.1
 *
 * @category Package
 * @package  UniqueRandomNumber
 * @author   BySwadi <muath.ye@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     Muathye https://www.github.com/muath-ye
 */
class Random
{
    /**
     * Generate Random Number
     *
     * @param string $table_id    .
     * @param int    $init_length .
     * @param int    $max_length  .
     *
     * @return int|PHPError
     */
    public static function generate(
        $table_id,
        int $init_length = 6,
        int $max_length = 16
    ) {
        // Count number of table id digits
        $id_length = strlen($table_id);

        // Throw an error if $table_id grater than $max_length
        if ($id_length > $max_length) {
            $exception = '$table_id length is grater than $max_length';
            trigger_error("Fatal error: " . $exception, E_USER_ERROR);
        }

        // Throw an error if $init_length grater than $max_length
        if ($init_length > $max_length) {
            $exception = '$init_length length is grater than $max_length';
            trigger_error("Fatal error: " . $exception, E_USER_ERROR);
        }

        // Number of init digits
        $init = $init_length;

        // Get table id
        $id = $table_id;

        // If table id digits less than init digits,
        // subtract number of table id digits from init digits
        // to get needed number of left_digits
        if ($id_length < $init) {
            $left_digits = $init - $id_length;
            // One digit always subtracted from $left_digits
            $left_digits -= 1;
        }

        // If table id digits equal to init digits or table id digits
        // grater than init digits,
        // don't subtract it from init digits to get needed number of left_digits
        if ($id_length == $init || $id_length > $init) {
            $left_digits = 0;
        }

        // Create random number with the length from result of subtracting
        // to in the left of the $random_number
        // ex: digits = 4 => $rand = 3549
        $left_rand = $left_digits == 0
        ?'':
        str_pad(rand(0, pow(10, $left_digits)-1), $left_digits, '0', STR_PAD_LEFT);

        // Create random number to be in the right of the $random_number
        $right_rand = $id_length == $max_length
        ?'':
        rand(1, 9);

        return $left_rand . $id . $right_rand;
        // Concatenate table id with the random number
        $random_number = $left_rand . $id . $right_rand;

        // *.* // ./Generate random_number
        return $random_number;
    }
}
