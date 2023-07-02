<?php
    $researchtitle = str_replace(chr(145), "'", $researchtitle);    // left single quote
    $researchtitle = str_replace(chr(146), "'", $researchtitle);    // right single quote
    $researchtitle = str_replace(chr(147), '"', $researchtitle);    // left double quote
    $researchtitle = str_replace(chr(148), '"', $researchtitle);    // right double quote
    $researchtitle = str_replace(chr(150), '–', $researchtitle);    // endash
    $researchtitle = str_replace(chr(151), '—', $researchtitle);   // emdash

    $researchpaper = str_replace(chr(145), "'", $researchpaper);    // left single quote
    $researchpaper = str_replace(chr(146), "'", $researchpaper);    // right single quote
    $researchpaper = str_replace(chr(147), '"', $researchpaper);    // left double quote
    $researchpaper = str_replace(chr(148), '"', $researchpaper);    // right double quote
    $researchpaper = str_replace(chr(150), '–', $researchpaper);    // endash
    $researchpaper = str_replace(chr(151), '—', $researchpaper);   // emdash
?>