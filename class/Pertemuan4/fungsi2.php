<?php
function salam()
{
    echo 'Assalam\'ualaium bro';
}

salam();

function say($args)
{
    echo '<br>Hallo apa kabar ' . $args . ' ?';
}

say('Budi');

function tanya($args = 'Inaya')
{
    echo '<br>Sudah sarapan ' . $args . ' ?';
}

tanya();
