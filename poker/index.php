<?php //php 7.0.8
class Solution
{
    /**
     * @param {String[]} $hand1
     * @param {String[]} $hand2
     * @return {Integer} $winner
     */

    public function determine_winner($hand1, $hand2)
    {
        $winner = 0;
        // Put your code here to calculate the winner
        echo '<pre>';
        print_r($hand1);
        print_r($hand2);
        exit;
        // Return the result, do not change the structure. winner = 1 -> Player 1 wins, winner = 2 -> Player 2 wins
        return $winner;
    }
}

$components = explode(" ", readline());
$components = explode(" ", '2S 4D 2C TC KS AS QH TH 9S KH');
$hand1 = [];
$hand2 = [];
for ($i = 0; $i < 10; $i++) {
    $i < 5 ? array_push($hand1, $components[$i]) : array_push($hand2, $components[$i]);
}

$solution = new Solution();
$winner = $solution->determine_winner($hand1, $hand2);
print 'Players ' . $winner . ' wins';

/*
2, 3, 4, 5, 6, 7, 8, 9, 10
(T), Jack(J), Queen(Q), King(K), Ace(A).

 */
