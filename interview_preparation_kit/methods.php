<?php


namespace HackerRank\Interview\Kit\Methods;


class Methods {

    /**
     * @param int $arrayLength
     * @param int $lowerLimit
     * @param int $upperLimit
     * @return array
     * @throws Exception
     */
    public static function getRandomArray(int $arrayLength = 10, int $lowerLimit = 10, int $upperLimit = 99): array {
        $array = [];
        for ($i = 0; $i < $arrayLength; $i++) {
            $array[] = random_int($lowerLimit, $upperLimit);
        }
        return $array;
    }

    /**
     * Fills the existing array with random numbers that comes between the limits, the $elementsToPush must be
     * greater than the original array. <br> For example the original array is [2, 4, 3], by calling this method
     * like <code>fillArrayWithRandomNumbers([2,4,3], 10)</code>, the current length of array is 3, and 2nd
     * parameter 10 (greater than original array length 3) will add 10 more random numbers into the array
     * between the upper and lower limits, you can give limits too explicitly. If 2nd parameter $elementsToPush
     * is negative, less than or equal to the length of actually array, return the actual array in this case.
     * 
     * Push random numbers to an existing array
     * @param array $array
     * @param int $lowerLimit
     * @param int $upperLimit
     * @param int $elementsToPush
     * @return array
     */
    public static function fillArrayWithRandomNumbers(array $array, int $elementsToPush, int $lowerLimit = 10, int $upperLimit = 90): array {
        if ($elementsToPush <= count($array))
            return $array;
        for ($i = 1; $i < $elementsToPush; $i++)    // method can be more better
            array_push($array, random_int($lowerLimit, $upperLimit));
        return $array;
    }

    public static function getTableArr(int $n = 5, int $limit = 10) : array {
        $tableArray = [];
        for ($i=0; $i < $limit; $i++) { 
            $tableArray[] = ($i + 1) * $n;
        }
        return $tableArray;
    }


}
