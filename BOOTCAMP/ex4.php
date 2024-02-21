<?php
    class group {
        public array $groupA;
        public array $groupB;
        public array $scoreA;
        public array $scoreB;

        public function __construct(array $groupA, array $groupB, array $scoreA, array $scoreB) {
            $this->groupA = $groupA;
            $this->groupB = $groupB;
            $this->scoreA = $scoreA;
            $this->scoreB = $scoreB;
        }

        public function average($arrays) {
            $sum = 0;
            foreach($arrays as $score) {
                $sum += $score;
            }
            return $sum / count($arrays);
        }

        public function moveGroup($student, $group) {
            if (in_array($student, $this->groupA)) {
                // renvoie true si notre student est dans le grp A
                $key = array_search($student, $this->groupA);
                // renvoie lindex de notre student dans le grp A
                unset($this->groupA[$key]);
                //supprime notre student du grp A
                array_push($this->groupB, $student);
                // ajoute notre student dans le grp B
            } else {
                $key = array_search($student, $this->groupB);
                unset($this->groupB[$key]);
                array_push($this->groupA, $student);
            }
        }

        public function bothAvg() {
            return round(($this->average($this->scoreA) + $this->average($this->scoreB))/2, 2);
        }

        public function moveTopAndBot() {
            $total = array_merge($this->scoreA, $this->scoreB);
            $max = max($total);
            $min = min($total);

            // pour le max

            if(in_array($max, $this->scoreA)) {
                $index = array_search($max, $this->scoreA);
                unset($this->scoreA[$index]);
                array_push($this->scoreB, $max);
            } else {
                $index = array_search($max, $this->scoreB);
                unset($this->scoreB[$index]);
                array_push($this->scoreA, $max);
            }

            // pour le min

            if(in_array($min, $this->scoreA)) {
                $index = array_search($min, $this->scoreA);
                unset($this->scoreA[$index]);
                array_push($this->scoreB, $min);
            } else {
                $index = array_search($min, $this->scoreB);
                unset($this->scoreB[$index]);
                array_push($this->scoreA, $min);
            }
        }
    }

    $students = new group(array('Maoro', 'Denis', 'Otman', 'Robin', 'Jean-Claude', 'Moussa'), array('Pierre', 'Paul', 'Jacques', 'Jean', 'Jean-Pierre', 'Jean-Jacques'), array(12, 15, 18, 9, 14, 16), array(10, 11, 13, 8, 12, 14));

    echo '<br>' . $students->average($students->scoreA) . '<br>';
    $students->moveGroup('Otman', 'B');
    print_r($students->groupB);
    echo '<br>';

    echo 'both avg : ' . $students->bothAvg();

    $students->moveTopAndBot();

    print_r($students->scoreA);