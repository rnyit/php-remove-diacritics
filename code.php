<?php
$string = "Fóø Bår test 123";
$transliterator = Transliterator::createFromRules(':: Any-Latin; :: Latin-ASCII; :: NFD; :: [:Nonspacing Mark:] Remove; :: NFC;', Transliterator::FORWARD);
echo $normalized = $transliterator->transliterate($string);
