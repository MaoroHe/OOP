<?php
    class group {
        public array $names;
        public array $scores;

        public function __construct(array $names, array $scores) {
            $this->names = $names;
            $this->scores = $scores;
        }
    }

    $groupA = new group(array('John', 'Paul', 'George', 'Ringo', 'Pinard', 'Jack', 'Clorentine', 'Denis', 'Maoro', 'Otman'), array(42, 12, 34, 56, 78, 90, 23, 45, 67, 89));
    $groupB = new group(array('Dylan', 'Bob', 'Marley', 'Hendrix', 'Joplin', 'Janis', 'Morrison', 'Jim', 'Hendrix', 'Jimi'), array(22, 33, 44, 55, 66, 77, 88, 99, 100, 111));

    print_r($groupA->names);
    echo '<br>';
    print_r($groupB->names);