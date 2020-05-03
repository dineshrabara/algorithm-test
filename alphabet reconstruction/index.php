<?php //php 7.0.8

class Solution
{
    /**
     * @param String[] $words
     * @return String[]
     */

    public function reconstruct_alphabet($words)
    {
        $result = [];
        // Put your code here
        $lengths = max(array_map('strlen', $words)) - 1;
        for ($i = 0; $i < $lengths; $i++) {

            foreach ($words as $key => $word) {
                if (empty($word[$i]) || in_array($word[$i], $result)) {
                    continue;
                }
                $result[] = $word[$i];
            }
        }

        // Return the result, don't change the structure
        return $result;
    }
}
//'ccda', 'ccb', 'cd', 'a', 'ab', 'd'
$words = [];

while (($line = readline()) !== "" && !empty($line)) {
    array_push($words, $line);
}

$solution = new Solution();
$result = $solution->reconstruct_alphabet($words);
print implode("", $result);
