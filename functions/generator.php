<?php
function row() {
    yield "Anthony";
    yield "Djalma";
    yield "João";
    yield "Ronaldo";
}

$row = row();

var_dump($row->current());
var_dump($row->next());
var_dump($row->current());